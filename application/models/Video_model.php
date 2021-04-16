<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Video_model extends CI_Model
{
    public function getVideo($type)
    {
        $query = "SELECT * FROM video WHERE type = '$type'";
        return $this->db->query($query)->result_array();
    }

    public function getPsPagination($type, $limit, $start, $keyword = null)
    {
        $this->db->where('type', $type);
        if ($keyword) {
            $keyword = $this->input->post('keyword', true);

            $this->db->like('judul', $keyword);
            $this->db->or_like('link', $keyword);
        }

        return $this->db->get('video', $limit, $start)->result_array();
    }


    public function countAllPhotoshop()
    {
        return $this->db->get('video')->num_rows();
    }

    // public function cariDataVideo()
    // {
    //     $cari = $this->input->post('cari', true);
    //     $this->db->where('type', 'photoshop');
    //     $this->db->like('judul', $cari);
    //     $this->db->or_like('link', $cari);
    //     return $this->db->get('video')->result_array();
    // }

    // public function cariDataIlustrator()
    // {
    //     $cari = $this->input->post('cari', true);
    //     $this->db->where('type', 'ilustrator');
    //     $this->db->like('judul', $cari);
    //     $this->db->or_like('link', $cari);
    //     return $this->db->get('video')->result_array();
    // }
}
