<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Catalog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Katalog';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('user/catalog');
    }

    public function course($type, $kelas)
    {
        $data['title'] = 'Kelas';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('type', $type);
        $this->db->where('kelas', $kelas);
        $data['video'] =  $this->db->get('video')->result_array();

        $this->load->view('user/course', $data);
    }

    public function template($kelas)
    {
        $data['title'] = 'Template';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kelas'] = $kelas;

        $this->load->view('user/template', $data);
    }
}
