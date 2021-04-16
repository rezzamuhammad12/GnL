<?php

class Admin_model extends CI_Model
{
    public function getAllUser()
    {
        $this->db->select('user.name', 'user.email', 'user_role.role');
        $this->db->from('user');
        $this->db->join('user_role', 'role_id = user.role_id');
        return $this->db->get()->result_array();
    }

    public function getUser($limit, $start, $keyword = null)
    {
        if ($keyword) {
            $this->db->like('name', $keyword);
            $this->db->or_like('email', $keyword);
        }

        $this->db->select('*');
        $this->db->join('user_role', 'role_id = user.role_id');
        return $this->db->get('user', $limit, $start)->result_array();
    }
}
