<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('DRUPAL_ROOT', getcwd());
require_once DRUPAL_ROOT . '/vendor/autoload.php';
class Importsiswa extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Import siswa';
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
                    $nisn = $spreadsheet->getActiveSheet()->getCell('B' . $row->getRowIndex());
                    $name = $spreadsheet->getActiveSheet()->getCell('C' . $row->getRowIndex());
                    $jk = $spreadsheet->getActiveSheet()->getCell('D' . $row->getRowIndex());
                    $tgllhr = $spreadsheet->getActiveSheet()->getCell('E' . $row->getRowIndex());
                    $tmptlhr = $spreadsheet->getActiveSheet()->getCell('F' . $row->getRowIndex());
                    $sekolah = $spreadsheet->getActiveSheet()->getCell('G' . $row->getRowIndex());
                    $jurusan = $spreadsheet->getActiveSheet()->getCell('H' . $row->getRowIndex());
                    $ket = $spreadsheet->getActiveSheet()->getCell('I' . $row->getRowIndex());
                    $data = array(
                        'noujian' => $noujian,
                        'nisn' => $nisn,
                        'name' => $name,
                        'jk' => $jk,
                        'tgllhr' => $tgllhr,
                        'tmptlhr' => $tmptlhr,
                        'sekolah' => $sekolah,
                        'jurusan' => $jurusan,
                        'ket' => $ket,
                    );

                    $this->db->insert('siswa', $data);
                    $count_Rows++;
                }
                $this->session->set_flashdata('message', '<div class="alert alert-success intro-x" role="alert">Successfulyy Data Imported!</div>');
                redirect('admin/importsiswa');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger intro-x" role="alert">File is not uploaded!</div>');
                redirect('admin/importsiswa');
            }
        } else {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/top_bar', $data);
            $this->load->view('admin/import_siswa.php', $data);
            $this->load->view('template/footer');
        }
    }

    public function uploadDoc()
    {
        $uploadPath = 'assets/uploads/imports/';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, TRUE); // FOR CREATING DIRECTORY IF ITS NOT EXIST
        }
        $config['upload_path'] = $uploadPath;
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = 10000;
        $config['file_name'] = $_FILES['siswa']['name'];

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('siswa')) {
            $this->upload->display_errors();
            return false;
        } else {
            $data = $this->upload->data();
            return $data['file_name'];
        }
    }

    public function add()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $data = [
            'noujian' => $this->input->post('noujian', true),
            'nisn' => $this->input->post('nisn', true),
            'name' => $this->input->post('name', true),
            'jk' => $this->input->post('jk'),
            'tgllhr' => $this->input->post('tgllhr', true),
            'tmptlhr' => $this->input->post('tmptlhr', true),
            'sekolah' => $this->input->post('sekolah', true),
            'jurusan' => $this->input->post('jurusan', true),
            'ket' => $this->input->post('ket'),
        ];

        $this->db->insert('siswa', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success intro-x" role="alert">Siswa ditambahkan!</div>');
        redirect('admin/datasiswa');
    }
}
