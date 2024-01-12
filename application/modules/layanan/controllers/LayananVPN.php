<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LayananVPN extends CI_Controller {


	public function __construct() {
        parent::__construct();
        $this->load->config('mikrotik_config');
        $this->load->model('dashboard/user_model'); 
    }


	public function index()
	{
		if (!$this->session->userdata('user_id')) {
            redirect('login');
        }
        	$user_id=$this->session->userdata('user_id');
        	$data['page_title'] = 'Layanan_VPN';
			$data['user_name'] = $this->user_model->get_user_name($user_id);
		    $this->load->view('dashboard/template/header.php', $data);
            $this->load->view('vpn', $data);
            $this->load->view('dashboard/template/footer.php');;
	}
}
