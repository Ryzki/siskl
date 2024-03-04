<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home_model extends CI_Model
{
    function get_identitas()
    {
        $query = $this->db->get('identitas');
        return $query;
    }

    function get_setting()
    {
        $query = $this->db->get('setting');
        return $query;
    }

    function get_jadwal()
    {
        $query = $this->db->get('jadwal');
        return $query;
    }
}
