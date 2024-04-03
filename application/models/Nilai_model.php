<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Nilai_model extends CI_Model
{
    function get_nilai()
    {
        $this->db->query("SET sql_mode=(SELECT REPLACE(@@sql_mode,'ONLY_FULL_GROUP_BY',''))");
        $query = "SELECT *
                FROM nilai 
                JOIN siswa ON nilai.noujian = siswa.noujian 
                GROUP BY nilai.noujian";

        return $this->db->query($query)->result_array();
    }

    function get_nilai_by_noujian($noujian)
    {
        $query = "SELECT *
                    FROM `siswa` JOIN `nilai`
                    ON `siswa`.`noujian` = `nilai`.`noujian`
                    WHERE `nilai`.`noujian` = '$noujian'
        ";

        return $this->db->query($query)->result_array();
    }

    function get_siswa_by_noujian($noujian)
    {
        $query = "SELECT *
                    FROM `siswa`
                    WHERE `noujian` = '$noujian'
        ";
        return $this->db->query($query)->row_array();
    }

    function get_siswa_by_nisn($nisn)
    {
        $query = "SELECT *
                    FROM `siswa`
                    WHERE `nisn` = '$nisn'
        ";
        return $this->db->query($query)->row_array();
    }
}
