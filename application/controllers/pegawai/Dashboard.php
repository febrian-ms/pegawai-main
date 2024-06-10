<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// check_login();
		$this->load->model('pegawai/M_Cuti');
		$this->load->model('pegawai/M_Pegawai');
	}

	public function index()
{
    $data['title']  = 'Dashboard';
    $data['session'] = $this->session->userdata('nama');
    $id = $this->session->userdata('userid');
    
    // Check user status before proceeding
    $userStatus = $this->db->query('SELECT status FROM user WHERE nama = "' . $_SESSION['nama'] . '"')->row();

    if ($userStatus->status == 'Belum') {
        // Set flash message and redirect to activation page if status is 'Belum'
        $this->session->set_flashdata('alert', ['message' => 'Akun belum diaktivasi. Silakan aktivasi akun Anda.', 'type' => 'danger']);
       
		redirect('pegawai/page_aktivasi');
    }

    // Continue with loading data for the dashboard if user status is 'Aktif'
    $data['total_pegawai'] = $this->db->get("user")->num_rows();
    $data['cuti_sakit'] = $this->M_Cuti->dataCutiSakit($id);
    $data['cuti_sakit14'] = $this->M_Cuti->dataCutiSakit14($id);
    $data['cuti_melahirkan'] = $this->M_Cuti->dataCutiMelahirkan($id);
    $data['cuti_alasanpenting'] = $this->M_Cuti->dataCutiAlasanPenting($id);

    // get data nama user (untuk tampil di sidebar dan navbar)
    $data['user']   = $this->db->query('SELECT * FROM user WHERE nama = "' . $_SESSION['nama'] . '"')->row();

    $this->load->view('theme_pegawai/header', $data);
    $this->load->view('pegawai/dashboard', $data);
    $this->load->view('theme_pegawai/footer', $data);
}

	
	
}
