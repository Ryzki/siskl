<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('User_model', 'user');
    }

    public function index()
    {
        $data['title'] = 'User Management';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['users'] = $this->user->get_user();
        $data['identitas'] = $this->db->get('identitas')->row_array();

        $this->form_validation->set_rules('name', 'Nama', 'trim|required|is_unique[user.name]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|is_unique[user.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/top_bar', $data);
            $this->load->view('admin/user', $data);
            $this->load->view('template/footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'name' => htmlspecialchars($this->input->post('name', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => 2,
                'image' => 'default.jpg'
            ];

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success intro-x" role="alert">New user added!</div>');
            redirect('admin/user');
        }
    }

    public function deleteuser($id)
    {
        $this->db->delete('user', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-success intro-x" role="alert">User deleted!</div>');
        redirect('admin/user');
    }

    public function resetpassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['identitas'] = $this->db->get('identitas')->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[4]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[4]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/top_bar', $data);
            $this->load->view('admin/profile', $data);
            $this->load->view('template/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger intro-x" role="alert">Wrong current password!</div>');
                redirect('admin/user/profile');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">New password cannot be the same as current password!</div>');
                    redirect('admin/user/profile');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('user');

                    $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">Success change password!</div>');
                    redirect('admin/user/profile');
                }
            }
        }
    }

    public function profile()
    {
        $data['title'] = 'My Profile';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['identitas'] = $this->db->get('identitas')->row_array();

        $this->form_validation->set_rules('name', 'Nama', 'trim|required');
        $this->form_validation->set_rules('nohp', 'Nomor HP', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('template/top_bar', $data);
            $this->load->view('admin/profile', $data);
            $this->load->view('template/footer');
        } else {
            $username = $this->input->post('username');

            $data_update = [
                'name' => $this->input->post('name', true),
                'nohp' => $this->input->post('nohp', true),
                'email' => $this->input->post('email', true)
            ];

            //cek jika ada gambar di upload
            $upload_image = $_FILES['image']['name'];
            if ($upload_image) {
                $config['upload_path'] = FCPATH . 'assets/img/profile';
                $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
                $config['max_size']      = 2048;
                $config['encrypt_name'] = TRUE;

                $this->upload->initialize($config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('message', '<div class="alert alert-danger text-center intro-x" role="alert">' . $error . '</div>');
                }
            }

            $this->db->where('username', $username);
            $this->db->update('user', $data_update);

            $this->session->set_flashdata('message', '<div class="alert alert-success text-center intro-x" role="alert">Your profile has been updated!</div>');
            redirect('admin/user/profile');
        }
    }

    public function deleteimage()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

        $username = $this->input->post('username');
        $image = 'default.jpg';

        $data = array(
            'image' => $image,
        );

        $this->db->set($data);
        $this->db->where('username', $username);
        $this->db->update('user');

        $this->session->set_flashdata('message', '<div class="alert alert-success text-center intro-x" role="alert">Your image has been delete!</div>');
        redirect('admin/user/profile');
    }
}
