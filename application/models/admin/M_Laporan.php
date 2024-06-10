<?php
defined('BASEPATH') or exit('No direct script access allowed');


class M_Laporan extends CI_Model
{

	public function dataCutiSakit()
	{
		$query = "SELECT u.bagian, p.* 
              FROM permohonan_cuti p, user u 
              WHERE u.kode_pegawai = p.kode_pegawai 
              AND p.keterangan = 'Cuti Sakit < 14' 
              AND p.verifikasi IN ('1', '2')";
		return $this->db->query($query)->result();
	}

	public function dataCutiSakit14()
	{
		$query = "SELECT u.bagian,p.* from permohonan_cuti p , user u where  u.kode_pegawai = p.kode_pegawai and p.keterangan = 'Cuti Sakit > 14' and p.verifikasi = '1'";
		return $this->db->query($query)->result();
	}

	public function dataCutiMelahirkan()
	{
		$query = "SELECT u.bagian,p.* from permohonan_cuti p , user u where  u.kode_pegawai = p.kode_pegawai and p.keterangan = 'Cuti Melahirkan' and p.verifikasi = '1'";
		return $this->db->query($query)->result();
	}

	public function dataCutiAlasanPenting()
	{
		$query = "SELECT u.bagian,p.* from permohonan_cuti p , user u where  u.kode_pegawai = p.kode_pegawai and p.keterangan = 'Cuti Alasan Penting' and p.verifikasi = '1'";
		return $this->db->query($query)->result();
	}

	// public function dataCutiBesar()
	// {
	// 	$query = "SELECT u.bagian,p.* from permohonan_cuti p , user u where  u.kode_pegawai = p.kode_pegawai and p.keterangan = 'Cuti Besar' and p.verifikasi = '1'";
	// 	return $this->db->query($query)->result();
	// }

	// public function dataCutiTahunan()
	// {
	// 	$query = "SELECT u.bagian,p.* from permohonan_cuti p , user u where  u.kode_pegawai = p.kode_pegawai and p.keterangan = 'Cuti Tahunan' and p.verifikasi = '1'";
	// 	return $this->db->query($query)->result();
	// }

	// public function dataCutiDiluarTN()
	// {
	// 	$query = "SELECT u.bagian,p.* from permohonan_cuti p , user u where  u.kode_pegawai = p.kode_pegawai and p.keterangan = 'Cuti Diluar Tanggungan' and p.verifikasi = '1'";
	// 	return $this->db->query($query)->result();
	// }
}
