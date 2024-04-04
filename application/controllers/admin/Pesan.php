<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Pesan';
        $data['identitas'] = $this->db->get('identitas')->row_array();
        $data['pesan'] = $this->db->get('pesan')->result_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/top_bar', $data);
        $this->load->view('admin/pesan', $data);
        $this->load->view('template/footer');
    }

    public function delete()
    {
        $hapus = $this->db->empty_table('pesan');
        if ($hapus) {
            $this->session->set_flashdata('message', '<div class="alert alert-success intro-x" role="alert">Data Telah Terhapus Semua!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger intro-x" role="alert">Data Gagal Terhapus!</div>');
        }
        redirect('admin/pesan');
    }
}
