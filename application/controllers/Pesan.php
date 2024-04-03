<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesan extends CI_Controller
{
    public function index()
    {
        $response = array();

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('whatsapp', 'WhatsApp', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Message', 'required');

        if ($this->form_validation->run() === false) {
            $response['status'] = 400;
            $response['message'] = validation_errors();
        } else {
            $data = array(
                'name' => $this->input->post('name'),
                'whatsapp' => $this->input->post('whatsapp'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message')
            );

            $this->db->insert('pesan', $data);

            if ($this->db->affected_rows() > 0) {
                $response['status'] = 200;
                $response['message'] = 'Form submission successful!';
            } else {
                $response['status'] = 401;
                $response['message'] = 'Error sending message!';
            }
        }

        echo json_encode($response);
        exit;
    }
}
