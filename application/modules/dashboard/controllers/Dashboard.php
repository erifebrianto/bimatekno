<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->config('mikrotik_config');
        $this->load->model('user_model'); 
    }

    public function index() {

        if (!$this->session->userdata('user_id')) {
            redirect('login');
        }

        $user_id = $this->session->userdata('user_id');
        $this->load->library('routerosapi');

        $hostname = $this->config->item('hostname_mikrotik');
        $username = $this->config->item('username_mikrotik');
        $password = $this->config->item('password_mikrotik');
        $port = $this->config->item('port_mikrotik');

        if (!class_exists('Routerosapi')) {
            require_once APPPATH . 'libraries/routerosapi.php';
        }

        $API = new RouterosAPI();
        $API->debug = false;

        if ($API->connect($hostname, $username, $password, $port)) {
            // Count active PPPoE connections
            $activePPP = $API->comm('/ppp/active/print');
            $activePPPCount = count($activePPP);

            // Count active PPPoE secrets
            $secrets = $API->comm('/ppp/secret/print');
            $activeSecretsCount = 0;
            foreach ($secrets as $secret) {
                if ($secret['service'] == 'pppoe' && $secret['disabled'] !== 'true') {
                    $activeSecretsCount++;
                }
            }

            // Mencari pengguna yang tidak aktif
            $inactiveUsers = [];
            foreach ($secrets as $secret) {
                if ($secret['service'] == 'pppoe' && $secret['disabled'] !== 'true') {
                    $username = $secret['name'];
                    // Cek apakah pengguna ada di "active" atau tidak
                    $userExistsInActive = false;
                    foreach ($activePPP as $active) {
                        if ($active['name'] == $username) {
                            $userExistsInActive = true;
                            break;
                        }
                    }
                    if (!$userExistsInActive) {
                        $inactiveUsers[] = $username;
                    }
                }
            }

            // Mengirim data ke tampilan
            $data['page_title'] = 'Dashboard'; // Ganti dengan judul yang sesuai
            $data['activePPPCount'] = $activePPPCount;
            $data['activeSecretsCount'] = $activeSecretsCount;
            $data['inactiveUsers'] = $inactiveUsers; // Menambahkan daftar pengguna yang tidak aktif
            $data['user_name'] = $this->user_model->get_user_name($user_id);


            $this->load->view('dashboard/template/header.php', $data);
            $this->load->view('dashboard', $data);
            $this->load->view('dashboard/template/footer.php');

            $API->disconnect();
        } else {
            echo '<script> alert("Koneksi ke MikroTik gagal.")</script>';
            $this->load->view('dashboard');
        }
    }
}
