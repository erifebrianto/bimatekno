<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['title'] = 'Formulir Pendaftaran';
        $this->load->view('registration', $data);
    }

    public function process() {
        $this->form_validation->set_rules('full_name', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[users.username]');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registration');
        } else {
            // Simpan data pendaftaran ke dalam database
            $data = array(
                'full_name' => $this->input->post('full_name'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'role' => 'client' // Atur peran sebagai "client"
            );

            $this->user_model->register_user($data);

            // Redirect ke halaman login atau halaman lainnya
            redirect('login');
        }
    }
}
