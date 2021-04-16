<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model', 'admin');
        $this->load->library('pagination');
        // load config file
        $this->config->load('pagination', TRUE);

        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        // count user
        $data['jumlah_user'] = $this->db->count_all_results('user');
        $this->db->like('role_id', '2');
        $this->db->from('user');
        $data['jumlah_member'] = $this->db->count_all_results();

        $this->db->like('role_id', '3');
        $this->db->from('user');
        $data['jumlah_premium'] = $this->db->count_all_results();

        // count video
        $data['jumlah_video'] = $this->db->count_all_results('video');
        $this->db->like('type', 'ilustrator');
        $this->db->from('video');
        $data['jumlah_ilustrator'] = $this->db->count_all_results();

        $this->db->like('type', 'photoshop');
        $this->db->from('video');
        $data['jumlah_photoshop'] = $this->db->count_all_results();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }


    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('admin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New Role added!</div>');
            redirect('admin/role');
        }
    }


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/role-access', $data);
        $this->load->view('templates/footer');
    }


    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Access Changed!</div>');
    }

    public function deleteRole($id)
    {
        if ($this->db->delete('user_role', array('id' => $id))) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">role Deleted!!</div>');
            redirect('admin/role');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed delete role!!</div>');
            redirect('admin/role');
        }
    }

    public function listUser()
    {
        $data['title'] = 'List User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $query = "SELECT `user`.`id`, `user`.`name`, `user`.`email`, `user`.`role_id`, `user_role`.`role`
                  FROM `user` JOIN `user_role`
                  ON `user`.`role_id` = `user_role`.`id`
                ";
        $data['listUser'] = $this->db->query($query)->result_array();

        $data['role'] = $this->db->get('user_role')->result_array();


        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config
        $this->db->like('name', $data['keyword']);
        $this->db->or_like('email', $data['keyword']);
        $this->db->from('user');
        $config['base_url'] = 'http://localhost/gnl-design/admin/listUser';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_pages'] = 5;

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['userPage'] = $this->admin->getUser($config['per_pages'], $data['start'], $data['keyword']);


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/listUser', $data);
        $this->load->view('templates/footer');
    }

    public function editAccesUser()
    {
        $id = $this->input->post('id');
        $role = $this->input->post('role');

        $data = [
            'role_id' => $role
        ];

        $this->db->set($data);
        $this->db->where('id', $this->input->post('id'));
        $this->db->update('user');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">User Acces Edited!! </div>');
        redirect('admin/listUser');
    }

    public function deleteUser($id)
    {
        if ($this->db->delete('user', array('id' => $id))) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">user Deleted!!</div>');
            redirect('admin/listUser');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed delete user!!</div>');
            redirect('admin/listUser');
        }
    }
}
