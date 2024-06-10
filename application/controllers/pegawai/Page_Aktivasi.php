<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Page_Aktivasi extends CI_Controller
{
    public function index()
    {
        // Get flashdata
        $data['title']  = 'Aktivasi Pegawai';
        $data['session'] = $this->session->userdata('nama');

        $alert = $this->session->flashdata('alert');
    
        // Log the flashdata
        log_message('debug', 'Alert Flashdata: ' . print_r($alert, true));
    
        // Check if flashdata exists
        if ($alert) {
            // Display flashdata message
            echo '<div class="alert alert-' . $alert['type'] . '">' . $alert['message'] . '</div>';
        }

        $this->load->view('theme_pegawai/header_null', $data);
        $this->load->view('pegawai/page_aktivasi', $data);
        $this->load->view('theme_pegawai/footer', $data);
    }
    
}
