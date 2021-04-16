<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Video_model');
        $this->load->library('form_validation');
        $this->load->library('pagination');
        // load config file
        $this->config->load('pagination', TRUE);

        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Photoshop Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['photoshop'] = $this->Video_model->getVideo('photoshop');
        $data['menu'] = $this->db->get('user_menu')->result_array();



        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config
        $this->db->where('type', 'photoshop');
        $this->db->like('judul', $data['keyword']);
        $this->db->like('link', $data['keyword']);
        $this->db->from('video');
        $config['base_url'] = 'http://localhost/gnl-design/video/index';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_pages'] = 5;


        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['page'] = $this->Video_model->getPsPagination('photoshop', $config['per_pages'], $data['start'], $data['keyword']);


        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('video/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'judul' => htmlspecialchars($this->input->post('judul', true)),
                'link' => htmlspecialchars($this->input->post('link', true)),
                'type' => htmlspecialchars($this->input->post('type', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            ];
            $this->db->insert('video', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New video added!</div>');
            redirect('video');
        }
    }

    public function editVideo()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            echo validation_errors();
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed edit Video!!</div>');
        } else {
            $data = [
                'judul' => htmlspecialchars($this->input->post('judul', true)),
                'link' => htmlspecialchars($this->input->post('link', true)),
                'type' => htmlspecialchars($this->input->post('type', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            ];
            $this->db->set($data);
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('video');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Video Edited!! </div>');
            redirect('video');
        }
    }

    public function deleteVideo($id)
    {
        if ($this->db->delete('video', array('id' => $id))) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Video Deleted!!</div>');
            redirect('video');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed delete Video!!</div>');
            redirect('video');
        }
    }

    public function ilustrator()
    {
        $data['title'] = 'Ilustrator Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['ilustrator'] = $this->Video_model->getVideo('ilustrator');
        $data['menu'] = $this->db->get('user_menu')->result_array();

        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }

        // config
        $this->db->where('type', 'ilustrator');
        $this->db->like('judul', $data['keyword']);
        $this->db->like('link', $data['keyword']);
        $this->db->from('video');
        $config['base_url'] = 'http://localhost/gnl-design/video/ilustrator';
        $config['total_rows'] = $this->db->count_all_results();
        $data['total_rows'] = $config['total_rows'];
        $config['per_pages'] = 5;


        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['page'] = $this->Video_model->getPsPagination('ilustrator', $config['per_pages'], $data['start'], $data['keyword']);



        // $this->db->like('judul', $data['keyword']);
        // $this->db->or_like('link', $data['keyword']);
        // $this->db->or_like('type', "photoshop");
        // $this->db->from('video');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('video/ilustrator', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'judul' => htmlspecialchars($this->input->post('judul', true)),
                'link' => htmlspecialchars($this->input->post('link', true)),
                'type' => htmlspecialchars($this->input->post('type', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            ];
            $this->db->insert('video', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New video added!</div>');
            redirect('video/ilustrator');
        }
    }

    public function editIlustrator()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        $this->form_validation->set_rules('type', 'Type', 'required');
        $this->form_validation->set_rules('kelas', 'Kelas', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() == false) {
            echo validation_errors();
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed edit Video!!</div>');
        } else {
            $data = [
                'judul' => htmlspecialchars($this->input->post('judul', true)),
                'link' => htmlspecialchars($this->input->post('link', true)),
                'type' => htmlspecialchars($this->input->post('type', true)),
                'kelas' => htmlspecialchars($this->input->post('kelas', true)),
                'deskripsi' => htmlspecialchars($this->input->post('deskripsi', true)),
            ];
            $this->db->set($data);
            $this->db->where('id', $this->input->post('id'));
            $this->db->update('video');
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Video Edited!! </div>');
            redirect('video/ilustrator');
        }
    }

    public function deleteIlustrator($id)
    {
        if ($this->db->delete('video', array('id' => $id))) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Video Deleted!!</div>');
            redirect('video/ilustrator');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Failed delete Video!!</div>');
            redirect('video/ilustrator');
        }
    }
}
