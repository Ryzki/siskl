<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
    }

    public function index()
    {
        $data['identitas'] = $this->Home_model->get_identitas()->row_array();
        $data['jadwal'] = $this->Home_model->get_jadwal()->row_array();
        $this->load->view('template_home/header', $data);
        $this->load->view('home', $data);
        $this->load->view('template_home/footer', $data);
    }
}
