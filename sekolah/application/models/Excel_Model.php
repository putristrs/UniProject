<?php defined('BASEPATH') OR die('No direct script access allowed');

class Excel_Model extends CI_Model {

	public function get_excel_siswa()
	{
		$query = $this->db->select('tb_siswa.*, tb_kelas.nama_kelas, kode, nama_ekstrakulikuler')
		->from('tb_siswa')
		->join('tb_ekstrakulikuler', 'tb_siswa.id_ekstrakulikuler = tb_ekstrakulikuler.id', 'inner')
		->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id', 'inner')
		// ->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id')
		->get()
		->result();
		return $query;
	}

	public function get_excel_siswa_id($id)
	{
		$query = $this->db->select('tb_siswa.*, kode, nama_ekstrakulikuler')
		->from('tb_siswa')
		->join('tb_ekstrakulikuler', 'tb_siswa.id_ekstrakulikuler = tb_ekstrakulikuler.id', 'inner')
		->where('tb_siswa.id', $id)
		->get()
		->result();
		return $query;
	}

	public function get_excel_eks()
	{
		$query = $this->db->select('*')
		->from('tb_ekstrakulikuler')
		->get()
		->result();
		return $query;
	}

	public function get_excel_rekap()
	{
		$this->db->select('*');
		$this->db->select('ifnull(count(nama_ekstrakulikuler),0) as jumlah');
		$this->db->from('tb_siswa');
		$this->db->join('tb_ekstrakulikuler', 'tb_siswa.id_ekstrakulikuler = tb_ekstrakulikuler.id','left');
		$this->db->where('tb_siswa.status',1);
		$this->db->group_by('nama_ekstrakulikuler');
		// echo "<pre>";
		// var_dump($this->db->get()->result());
		// die();
		return $query = $this->db->get()->result();
	}
}