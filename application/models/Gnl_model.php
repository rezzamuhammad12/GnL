<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gnl_model extends CI_Model
{
    public function getGnlMenu()
    {
        $query = "SELECT * FROM gnl_menu";
        return $this->db->query($query)->result_array();
    }
}
