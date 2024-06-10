<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forgot_password extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model 'Forgot_password_model'
        $this->load->model('User_password');
    }

    public function index() {
        // Load view 'forgot_password'
        $this->load->view('user/forgot_password');
    }

    public function reset() {
        // Ambil data dari form
        $no_telp = $this->input->post('no_telp');
        $password = $this->input->post('password');
    
        // Panggil fungsi reset_password pada model
        if ($this->User_password->reset_password($no_telp, $password)) {
            $response = array('status' => 'success', 'message' => 'Password berhasil direset.');
        } else {
            $response = array('status' => 'error', 'message' => 'Gagal mereset password.');
        }
    
        // Mengubah array ke format JSON
        echo json_encode($response);
    }    
}
?>
