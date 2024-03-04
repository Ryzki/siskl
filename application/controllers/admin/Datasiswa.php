<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datasiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Data_model', 'data');
    }

    public function index()
    {
        $data['title'] = 'Data Siswa';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->username])->row_array();
        $data['siswa'] = $this->db->get('siswa')->result_array();
        $data['identitas'] = $this->db->get('identitas')->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/top_bar', $data);
        $this->load->view('admin/data_siswa', $data);
        $this->load->view('template/footer');
    }

    public function deletesiswa($id)
    {
        $where = array('id' => $id);
        $this->db->delete('siswa', $where);
        $this->session->set_flashdata('message', '<div class="alert alert-success intro-x" role="alert">Data siswa berhasil dihapus!</div>');
        redirect('admin/datasiswa');
    }

    public function hapussiswa()
    {
        $hapus = $this->db->empty_table('siswa');
        if ($hapus) {
            $this->session->set_flashdata('message', '<div class="alert alert-success intro-x" role="alert">Data Telah Terhapus Semua!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger intro-x" role="alert">Data Gagal Terhapus!</div>');
        }
        redirect('admin/datasiswa');
    }
}
