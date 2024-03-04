<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    function get_user()
    {
        $query = $this->db->get('user');
        return $query->result_array();
    }

    public function update_user($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
