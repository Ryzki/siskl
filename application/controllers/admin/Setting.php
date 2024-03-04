<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Setting Surat Keterangan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['setting'] = $this->db->get('setting')->row_array();
        $data['identitas'] = $this->db->get('identitas')->row_array();

        $this->form_validation->set_rules('kop1', 'Kop Baris 1', 'required|trim');
        $this->form_validation->set_rules('kop2', 'Kop Baris 2', 'required|trim');
        $this->form_validation->set_rules('kop3', 'Kop Baris 3', 'required|trim');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
        $this->form_validation->set_rules('nomor_sk', 'Nomor SK', 'required|trim');
        $this->form_validation->set_rules('tanggal_sk', 'Tanggal SK', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/top_bar', $data);
            $this->load->view('admin/setting', $data);
            $this->load->view('template/footer');
        } else {

            $data = [
                'kop1' => $this->input->post('kop1'),
                'kop2' => $this->input->post('kop2'),
                'kop3' => $this->input->post('kop3'),
                'alamat' => $this->input->post('alamat'),
                'nomor_sk' => $this->input->post('nomor_sk'),
                'nomor_sk2' => $this->input->post('nomor_sk2'),
                'nomor_sk3' => $this->input->post('nomor_sk3'),
                'tanggal_sk' => $this->input->post('tanggal_sk'),
            ];

            $this->db->update('setting', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success intro-x" role="alert">Setting berhasil diubah!</div>');
            redirect('admin/setting');
        }
    }
}
