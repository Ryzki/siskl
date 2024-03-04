<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Jadwal Pengumuman';
        $data['jadwal'] = $this->db->get('jadwal')->row_array();
        $data['identitas'] = $this->db->get('identitas')->row_array();

        $this->form_validation->set_rules('waktu', 'Waktu', 'required');
        $this->form_validation->set_rules('tahun_ajaran', 'Tahun Aajaran', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/top_bar', $data);
            $this->load->view('admin/jadwal', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'waktu' => $this->input->post('waktu'),
                'tahun_ajaran' => $this->input->post('tahun_ajaran')
            ];

            $this->db->update('jadwal', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success intro-x" role="alert">Jadwal berhasil disimpan!</div>');
            redirect('admin/jadwal');
        }
    }
}
