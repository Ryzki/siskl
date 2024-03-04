<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function index()
    {
        if ($this->session->userdata('username')) {
            redirect('admin/home');
        }
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $data['identitas'] = $this->db->get('identitas')->row_array();
            $this->load->view('auth/login', $data);
        } else {
            // validasi sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $username = htmlspecialchars($this->input->post('username', true));
        $password = htmlspecialchars($this->input->post('password', true));

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        $ip_address = $this->input->ip_address();

        // jika usernya ada
        if ($user) {
            // cek password
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'ip_address' => $ip_address
                ];
                $this->session->set_userdata($data);
                redirect('admin/home');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger intro-x" role="alert">Wrong password!</div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger intro-x" role="alert">Username is not registered!</div>');
            redirect('admin/auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success intro-x" role="alert">Berhasil Logout</div>');
        redirect('admin/auth');
    }
}
