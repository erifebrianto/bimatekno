<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function login($email, $password) {
        $query = $this->db->get_where('users', array('email' => $email, 'password' => md5($password)));

        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function get_role($user_id) {
        $query = $this->db->select('role')->get_where('users', array('id' => $user_id));

        if ($query->num_rows() == 1) {
            return $query->row()->role;
        } else {
            return 'client'; // Default role jika tidak ditemukan
        }
    }
    public function register_user($data) {
    $this->db->insert('users', $data);
}

}
