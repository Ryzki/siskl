<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_model extends CI_Model
{
    function deletesiswa($where, $table)
    {
        $this->db->delete($table, $where);
    }
}
