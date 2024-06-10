<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Otp extends CI_Controller
{
   

    public function index()
    {
        // Get flashdata
        $data['title']  = 'Aktivasi Pegawai';
        $data['session'] = $this->session->userdata('no_telp');


        $alert = $this->session->flashdata('alert');

        // Log the flashdata
        log_message('debug', 'Alert Flashdata: ' . print_r($alert, true));

        // Check if flashdata exists
        if ($alert) {
            // Display flashdata message
            echo '<div class="alert alert-' . $alert['type'] . '">' . $alert['message'] . '</div>';
        }

        $this->load->view('pegawai/otp', $data);
    }

    public function generateAndSendOtp()
    {
        $nomor = $this->session->userdata('no_telp');
    
        if ($nomor && !$this->isOtpVerified()) {
            $otp = rand(1000, 9999);
            $waktu = time();
    
            $data = array(
                'nomor' => $nomor,
                'otp' => $otp,
                'waktu' => $waktu
            );
            $this->db->insert('otp', $data);
    
            $this->sendOtpViaWhatsApp($nomor, $otp,);
    
            $this->session->set_flashdata('alert', array('type' => 'success', 'message' => ''));
            redirect('pegawai/otp');
        } else {
            $this->session->set_flashdata('alert', array('type' => 'danger', 'message' => 'Nomor telepon tidak valid atau OTP sudah diverifikasi.'));
            redirect('pegawai/page_aktivasi');
        }
    }
    
    private function isOtpVerified()
    {
        // Cek apakah OTP sudah diverifikasi sebelumnya
        // Sesuaikan dengan kebutuhan dan logika validasi Anda
        return false;
    }
    
    private function sendOtpViaWhatsApp($nomor, $otp)           
    {
        // Data untuk dikirim melalui cURL
        $this->load->library('session');
        $userName = $this->session->userdata('nama');

        $data = array(
            
            'target' => $nomor,
            'message' => "Halo " . $userName . ", Berikut kode aktivasi akun anda, Silahkan masukkan kode 4 Digit sebelum Expired dalam 30 Menit\n\nKode Aktivasi: " . $otp
        );

        // Inisialisasi cURL
        $curl = curl_init();

        // Pengaturan cURL
        curl_setopt(
            $curl,
            CURLOPT_HTTPHEADER,
            array(
                "Authorization: e5i-wP+Z8YG-gDerrFAY",
            )
        );        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_URL, "https://api.fonnte.com/send");
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

        // Eksekusi cURL
        $result = curl_exec($curl);

        // Tutup koneksi cURL
        curl_close($curl);

        // Handle hasil sesuai kebutuhan
        // ...
    }
    public function verifyOtp()
    {
        $digit1 = $this->input->post('digit1');
        $digit2 = $this->input->post('digit2');
        $digit3 = $this->input->post('digit3');
        $digit4 = $this->input->post('digit4');
    
        $otp = $digit1 . $digit2 . $digit3 . $digit4;
    
        // Lakukan validasi atau kirimkan OTP ke server untuk divalidasi
        if ($this->validateOtp($otp)) {
            // Update status menjadi Aktif pada tabel user
            $this->updateUserStatus();
    
            // Redirect atau tampilkan pesan sukses
            $this->session->set_flashdata('alert', array('type' => 'success', 'message' => ''));
            redirect('pegawai/dashboard');
        } else {
            // Redirect atau tampilkan pesan kesalahan
            $this->session->set_flashdata('alert', array('type' => 'danger', 'message' => 'Invalid OTP. Please enter a valid 4-digit OTP.'));
            redirect('pegawai/otp');
        }
    }
    
    private function validateOtp($otp)
    {
        // Lakukan validasi OTP, contohnya dengan membandingkan dengan data di database
        $nomor = $this->session->userdata('no_telp');
        $query = $this->db->get_where('otp', array('nomor' => $nomor, 'otp' => $otp));
        return $query->num_rows() > 0;
    }
    
    private function updateUserStatus()
    {
        // Perbarui status menjadi Aktif pada tabel user
        $nomor = $this->session->userdata('no_telp');
        $this->db->where('no_telp', $nomor);
        $this->db->update('user', array('status' => 'Aktif'));
    }
    

}