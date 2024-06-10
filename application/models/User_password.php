<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_password extends CI_Model {

    public function reset_password($no_telp, $password) {
        // Perbarui password dalam database berdasarkan nomor telepon
        $data = array('password' => $password);
        $this->db->where('no_telp', $no_telp);
        return $this->db->update('user', $data);
    }
}
?>
