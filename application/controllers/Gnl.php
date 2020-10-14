<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gnl extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Gnl Management';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Gnl_model', 'gnl');

        $data['gnlMenu'] = $this->gnl->getGnlMenu();
        $data['menu'] = $this->db->get('user_menu')->result_array();

        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('link', 'Link', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() ==  false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('gnl/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'judul' => $this->input->post('judul'),
                'link' => $this->input->post('link'),
                'deskripsi' => $this->input->post('deskripsi'),
            ];
            $this->db->insert('gnl_menu', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">New video added!</div>');
            redirect('gnl');
        }
    }
}
