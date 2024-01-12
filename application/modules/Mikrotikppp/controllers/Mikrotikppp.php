<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mikrotikppp extends CI_Controller {

    public function __construct() {
        parent::__construct();

        // Load routerosapi library
        $this->load->library('routerosapi');

        // Load configuration from config file
        $this->load->config('mikrotik_config');
    }

    public function index() {
        $hostname = $this->config->item('hostname_mikrotik');
        $username = $this->config->item('username_mikrotik');
        $password = $this->config->item('password_mikrotik');
        $port = $this->config->item('port_mikrotik');

        // Load routerosapi library if not already loaded
        if (!class_exists('Routerosapi')) {
            require_once APPPATH . 'libraries/routerosapi.php';
        }

        $API = new RouterosAPI();
        $API->debug = false; // Set to true for debugging

        if ($API->connect($hostname, $username, $password, $port)) {
            $secrets = $API->comm('/ppp/secret/print');

            $data['secrets'] = $secrets;

            $this->load->view('dataakun', $data);

            $API->disconnect();
        } else {
            echo '<script> alert("Koneksi ke MikroTik gagal.")</script>';
        }
    }

}