<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('DRUPAL_ROOT', getcwd());
require_once DRUPAL_ROOT . '/vendor/autoload.php';
class Importnilai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Import nilai';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['identitas'] = $this->db->get('identitas')->row_array();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $upload_status =  $this->uploadDoc();
            if ($upload_status != false) {
                $inputFileName = 'assets/uploads/imports/' . $upload_status;
                $inputTileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($inputFileName);
                $reader = \PhpOffice\PhpSpreadsheet\IOFactory::createReader($inputTileType);
                $spreadsheet = $reader->load($inputFileName);
                $sheet = $spreadsheet->getSheet(0);
                $count_Rows = 0;
                foreach ($sheet->getRowIterator() as $row) {
                    $noujian = $spreadsheet->getActiveSheet()->getCell('A' . $row->getRowIndex());
                    $nama_mapel = $spreadsheet->getActiveSheet()->getCell('B' . $row->getRowIndex());
                    $nilai_sekolah = $spreadsheet->getActiveSheet()->getCell('C' . $row->getRowIndex());
                    $nilai_un = $spreadsheet->getActiveSheet()->getCell('D' . $row->getRowIndex());
                    $nilai_akhir = $spreadsheet->getActiveSheet()->getCell('E' . $row->getRowIndex());
                    $data = array(
                        'noujian' => $noujian,
                        'nama_mapel' => $nama_mapel,
                        'nilai_sekolah' => $nilai_sekolah,
                        'nilai_un' => $nilai_un,
                        'nilai_akhir' => $nilai_akhir,
                    );

                    $this->db->insert('nilai', $data);
                    $count_Rows++;
                }
                $this->session->set_flashdata('message', '<div class="alert alert-success intro-x" role="alert">Successfulyy Data Imported!</div>');
                redirect('admin/importnilai');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger intro-x" role="alert">File is not uploaded!</div>');
                redirect('admin/importnilai');
            }
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/top_bar', $data);
            $this->load->view('admin/import_nilai', $data);
            $this->load->view('template/footer');
        }
    }

    private function uploadDoc()
    {
        $uploadPath = 'assets/uploads/imports/';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, TRUE); // FOR CREATING DIRECTORY IF ITS NOT EXIST
        }
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = 10000;
        $config['file_name'] = $_FILES['nilai']['name'];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('nilai')) {
            $this->upload->display_errors();
            return false;
        } else {
            $data = $this->upload->data();
            return $data['file_name'];
        }
    }
}
