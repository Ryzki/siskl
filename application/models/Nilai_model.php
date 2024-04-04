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

    public function jml_sekolah($noujian)
    {
        $this->db->select('SUM(CAST(nilai_sekolah AS UNSIGNED)) AS jml_sekolah');
        $this->db->from('nilai');
        $this->db->where('noujian', $noujian);
        $query = $this->db->get();
        return $query->row()->jml_sekolah;
    }

    public function jml_un($noujian)
    {
        $this->db->select('SUM(CAST(nilai_un AS UNSIGNED)) AS jml_un');
        $this->db->from('nilai');
        $this->db->where('noujian', $noujian);
        $query = $this->db->get();
        return $query->row()->jml_un;
    }

    public function jml_ua($noujian)
    {
        $this->db->select('SUM(CAST(nilai_akhir AS UNSIGNED)) AS jml_ua');
        $this->db->from('nilai');
        $this->db->where('noujian', $noujian);
        $query = $this->db->get();
        return $query->row()->jml_ua;
    }

    public function rata_sekolah($noujian)
    {
        $this->db->select('FORMAT(AVG(CAST(nilai_sekolah AS UNSIGNED)), 2) AS rata_sekolah');
        $this->db->from('nilai');
        $this->db->where('noujian', $noujian);
        $query = $this->db->get();
        return $query->row()->rata_sekolah;
    }

    public function rata_un($noujian)
    {
        $this->db->select('FORMAT(AVG(CAST(nilai_un AS UNSIGNED)), 2) AS rata_un');
        $this->db->from('nilai');
        $this->db->where('noujian', $noujian);
        $query = $this->db->get();
        return $query->row()->rata_un;
    }

    public function rata_ua($noujian)
    {
        $this->db->select('FORMAT(AVG(CAST(nilai_akhir AS UNSIGNED)), 2) AS rata_ua');
        $this->db->from('nilai');
        $this->db->where('noujian', $noujian);
        $query = $this->db->get();
        return $query->row()->rata_ua;
    }
}
