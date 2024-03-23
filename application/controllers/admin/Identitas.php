<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Identitas extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Identitas Sekolah';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['identitas'] = $this->db->get('identitas')->row_array();

        $this->form_validation->set_rules('nama_aplikasi', 'Nama Aplikasi', 'required|trim');
        $this->form_validation->set_rules('nama_sekolah', 'Nama Sekolah', 'required|trim');
        $this->form_validation->set_rules('kepsek', 'Kepala Sekolah', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim');
        $this->form_validation->set_rules('npsn', 'NPSN', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/top_bar', $data);
            $this->load->view('admin/identitas', $data);
            $this->load->view('template/footer');
        } else {

            $data = [
                'nama_aplikasi' => $this->input->post('nama_aplikasi'),
                'nama_sekolah' => $this->input->post('nama_sekolah'),
                'nip' => $this->input->post('nip'),
                'kepsek' => $this->input->post('kepsek'),
                'npsn' => $this->input->post('npsn'),
                'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email'),
                'website' => $this->input->post('website'),
                'telpon' => $this->input->post('telpon'),
            ];

            $new_logo = $this->upload_image('logo');
            if ($new_logo) {
                $data['logo'] = $new_logo;
            }

            $new_prov = $this->upload_image('prov');
            if ($new_prov) {
                $data['prov'] = $new_prov;
            }

            $this->db->update('identitas', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success intro-x" role="alert">Data berhasil diubah!</div>');
            redirect('admin/identitas');
        }
    }

    private function upload_image($field_name)
    {
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2048;
        $config['upload_path'] = FCPATH . 'assets/img/logo';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload');
        $res = $this->upload->initialize($config);
        $this->upload->do_upload($field_name);

        if (!$this->upload->do_upload($field_name)) {
            return FALSE;
        }

        $new_file_name = $this->upload->data('file_name');
        return $new_file_name;
    }

    public function backup()
    {
        $this->load->dbutil();

        $db_name = 'backup-db-' . $this->db->database . '-' . date('d-m-Y') . '.sql';

        $prefs = array(
            'format' => 'sql',
            'filename' => $db_name,
            'add_insert' => TRUE,
            'foreign_key_checks' => FALSE,
        );

        $backup = $this->dbutil->backup($prefs);
        $backup_directory_path = $this->config->item('backup_directory_path');
        $save = $backup_directory_path . '/' . $db_name;

        write_file($save, $backup);
        force_download($db_name, $backup);
    }
}
