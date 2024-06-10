<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_pimpinan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Register_model');
    }

    public function index() {
        // Load your registration form view here
        $this->load->view('user/register_pimpinan');
    }

    public function submit_registration() {
        // Form validation
        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        // Add more validation rules for other fields

        if ($this->form_validation->run() == FALSE) {
            // If validation fails, load the registration form again
            $this->load->view('user/register');
        } else {
            // If validation passes, insert data into database
            $data = array(
                'nama_lengkap' => $this->input->post('nama_lengkap'),
                'nik' => $this->input->post('nik'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'jenis_kelamin' => $this->input->post('jenis_kelamin'),
                'alamat' => $this->input->post('alamat'),
                'status_pekerjaan' => $this->input->post('status_pekerjaan'),
                'bagian' => $this->input->post('bagian'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT) // Hash password
            );

            // Insert data into database
            $karyawan_id = $this->Register_model->insert_register_data($data);

            if ($karyawan_id) {
                // Registration successful
                redirect('user/login');
            } else {
                // Registration failed
                // Handle error accordingly
            }
        }
    }
}
