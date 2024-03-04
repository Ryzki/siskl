<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{
    public function index()
    {
        // Mengatur aturan validasi
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');

        // Memastikan request datang melalui Ajax
        if ($this->input->is_ajax_request()) {
            // Cek validasi form
            if ($this->form_validation->run() === false) {
                // Jika validasi gagal, kirim response dengan pesan error
                $response = array(
                    'success' => false,
                    'message' => validation_errors()
                );
            } else {
                // Ambil data yang dikirim melalui Ajax
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $message = $this->input->post('message');

                // Simpan pesan ke dalam tabel pesan
                $data = array(
                    'name' => $name,
                    'email' => $email,
                    'message' => $message
                );

                $this->db->insert('pesan', $data);

                // Cek apakah data berhasil disimpan
                if ($this->db->affected_rows() > 0) {
                    // Jika penyimpanan berhasil
                    $response = array(
                        'success' => true,
                        'message' => 'Form submission successful!'
                    );
                } else {
                    // Jika terjadi kesalahan dalam penyimpanan
                    $response = array(
                        'success' => false,
                        'message' => 'Error sending message!'
                    );
                }
            }

            // Kirim response dalam format JSON
            echo json_encode($response);
            exit;
        } else {
            // Request bukan melalui Ajax, tangani sesuai kebutuhan Anda
            if ($this->form_validation->run() === false) {
                // Validasi form gagal, tampilkan pesan error
                $data['error'] = validation_errors();
            } else {
                // Ambil data yang dikirim melalui form
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $message = $this->input->post('message');

                // Simpan pesan ke dalam tabel pesan
                $data = array(
                    'name' => $name,
                    'email' => $email,
                    'message' => $message
                );

                $this->db->insert('pesan', $data);

                // Cek apakah data berhasil disimpan
                if ($this->db->affected_rows() > 0) {
                    // Jika penyimpanan berhasil
                    $data['success'] = 'Form submission successful!';
                } else {
                    // Jika terjadi kesalahan dalam penyimpanan
                    $data['error'] = 'Error sending message!';
                }
            }

            // Tampilkan view dengan pesan-pesan yang sesuai
            $this->load->view('home', $data);
        }
    }
}
