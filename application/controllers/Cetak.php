<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cetak extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        $this->load->model('Nilai_model');
    }

    public function index()
    {
        $nisn = $this->input->get('nisn');
        $data['judul'] = "Cetak Surat Keterangan Kelulusan";
        $data['siswa'] = $this->Nilai_model->get_siswa_by_nisn($nisn);
        $data['identitas'] = $this->Home_model->get_identitas()->row_array();
        $data['setting'] = $this->Home_model->get_setting()->row_array();

        $data['title'] = "Cetak SK Kelulusan";

        $file_pdf = 'SK Kelulusan';
        $paper = 'A4';
        $orientation = "potrait";
        $html = $this->load->view('cetak', $data, TRUE);
        // run dompdf
        $this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
    }
}
