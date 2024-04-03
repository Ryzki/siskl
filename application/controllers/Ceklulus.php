<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ceklulus extends CI_Controller
{
    public function index()
    {
        $this->load->model('Home_model');
        $data['identitas'] = $this->Home_model->get_identitas()->row_array();
        $data['jadwal'] = $this->Home_model->get_jadwal()->row_array();
        $id = $this->input->get('nisn');
        $this->db->where("siswa.nisn", $id);
        $res = $this->db->get("siswa");

        if ($res->num_rows() == 1) {
            $data['hasil'] = $res->result()[0];
            $this->load->view('template_home/header', $data);
            $this->load->view('hasil_ujian', $data);
            $this->load->view('template_home/footer', $data);
        } else {
            $this->load->view('errors/404');
        }
    }
}
