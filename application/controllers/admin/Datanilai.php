<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datanilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Nilai_model', 'nilai');
    }

    public function index()
    {
        $data['title'] = 'Data nilai';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['nilai'] = $this->nilai->get_nilai();
        $data['identitas'] = $this->db->get('identitas')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/top_bar', $data);
        $this->load->view('admin/data_nilai', $data);
        $this->load->view('template/footer');
    }

    public function lihat_nilai($noujian)
    {
        $data['title'] = 'Lihat nilai';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['lihat_nilai'] = $this->nilai->get_nilai_by_noujian($noujian);
        $data['siswa'] = $this->nilai->get_siswa_by_noujian($noujian);
        $data['identitas'] = $this->db->get('identitas')->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/top_bar', $data);
        $this->load->view('admin/lihat_nilai', $data);
        $this->load->view('template/footer');
    }

    public function hapusnilai()
    {
        $hapus = $this->db->empty_table('nilai');
        if ($hapus) {
            $this->session->set_flashdata('message', '<div class="alert alert-success intro-x" role="alert">Data Telah Terhapus Semua!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger intro-x" role="alert">Data Gagal Terhapus!</div>');
        }
        redirect('admin/datanilai');
    }
}
