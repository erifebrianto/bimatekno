<?php
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Mendapatkan nama pengguna berdasarkan ID
    public function get_user_name($user_id) {
        $query = $this->db->select('full_name')->get_where('users', array('id' => $user_id));

        if ($query->num_rows() == 1) {
            return $query->row()->full_name;
        } else {
            return 'Tidak Diketahui';
        }
    }
}
