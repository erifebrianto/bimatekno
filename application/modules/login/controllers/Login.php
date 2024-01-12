<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $data['title'] = 'Login Page';
        $this->load->view('login', $data);
    }

    public function process() {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->user_model->login($email, $password);

            if ($user) {
                $this->session->set_userdata('user_id', $user->id);
                $role = $this->user_model->get_role($user->id);

                if ($role === 'admin') {
                    redirect('dashboard'); // Ganti dengan URL admin Anda
                } elseif ($role === 'client') {
                    redirect('dashboard'); // Ganti dengan URL client Anda
                }
            } else {
                $data['error'] = 'Email atau password salah.';
                $this->load->view('login', $data);
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('user_id');
        redirect('login');
    }
}
