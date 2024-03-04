<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->username])->row_array();
        $data['identitas'] = $this->db->get('identitas')->row_array();

        $data['total_user'] = $this->db->get('user')->num_rows();
        $data['total_siswa'] = $this->db->get('siswa')->num_rows();
        $data['total_lulus'] = $this->db->get_where('siswa', ['ket' => 'lulus'])->num_rows();
        $data['total_tidak'] = $this->db->get_where('siswa', ['ket' => 'tidak lulus'])->num_rows();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('template/top_bar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('template/footer');
    }
}
