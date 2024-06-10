<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Register_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('user/register_karyawan');
    }

    public function submit()
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('nik', 'Nomer Induk Karyawan', 'required');
        $this->form_validation->set_rules('no_telp', 'No Telp', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('jenis_kel', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('status_pekerjaan', 'Status Pekerjaan', 'required');
        $this->form_validation->set_rules('bagian', 'Bagian', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('user/register_karyawan');
        } else {
            
            $data = array(
                'nama' => $this->input->post('nama'),
                'nik' => $this->input->post('nik'),
                'no_telp' => $this->input->post('no_telp'),
                'email' => $this->input->post('email'),
                'jenis_kel' => $this->input->post('jenis_kel'),
                'alamat' => $this->input->post('alamat'),
                'status_pekerjaan' => $this->input->post('status_pekerjaan'),
                'bagian' => $this->input->post('bagian'),
                'password' => $this->input->post('password'),
                'role' => 3 // Set the role to 3
            );

            if ($this->Register_model->register($data)) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" style="color:green;" role="alert">Daftar Berhasil, Silahkan Login Untuk Aktivasi!</div>');
                redirect('user/login');
                
            } else {
                log_message('error', 'Database insert failed.');
                $this->session->set_flashdata('message', 'Registration failed. Please try again.');
                $this->load->view('user/register_karyawan');
            }
        }
    }
}
?>
