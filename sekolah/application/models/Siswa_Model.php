<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Siswa_Model extends CI_Model {

	function __construct(){parent::__construct();}

	public function tampil_data()
	{
		$query = $this->db->select('tb_siswa.*, tb_kelas.nama_kelas, kode, nama_ekstrakulikuler')
		->from('tb_siswa')
		->join('tb_ekstrakulikuler', 'tb_siswa.id_ekstrakulikuler = tb_ekstrakulikuler.id', 'inner')
		->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id', 'inner')
		// ->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id')
		->get()
		->result();
		return $query;
		// echo "<pre>";
		// var_dump($query); die();

		// $this->db->select('*');
		// $this->db->from('tb_ekstrakulikuler');
		// $this->db->join('tb_siswa', 'tb_ekstrakulikuler.id = tb_siswa.id_ekstrakulikuler','right');
		// return $query = $this->db->get();

		// return $this->db->get('tb_siswa');
	}

	public function get_kelas_by_id($kelas)
	{
		    $this->db->select('*');
		    $this->db->from('tb_kelas');
		    $this->db->where('id', $kelas);
		    $query = $this->db->get();
		    return $query->result();
	}

	public function get_kelas()
	{
		$result = $this->db->select('id, nama_kelas')
		->from('tb_kelas')
		->get()
		->result_array();
		return $result;
	}

	public function tampil_data_status()
	{
		return $this->db->get('tb_status');
	}

	public function input_data_siswa($data)
	{

		$query = $this->db->insert("tb_siswa", $data);

        if($query){
            return true;
        }else{
            return false;
        }
	}

	public function edit_data_siswa($data,$id){
		$id = $this->input->post("id");
		$data = array( 
            'nim'         => $this->input->post("nim"),
            'nama_siswa'  => $this->input->post("nama_siswa"),
       		'agama'       => $this->input->post("agama"),
       		'id_kelas'       => $this->input->post("kelas"),
       		'jenis_kelamin'  => $this->input->post("jenis_kelamin"),
       		'eks_wajib'  => $this->input->post("eks_wajib"),
     		'id_ekstrakulikuler'  => $this->input->post("pilihan_eks"),
        );
     	$this->db->where('id',$id);
        $this->db->update('tb_siswa', $data);

        // print_r($this->db->last_query());
        // die();
    }

	public function delete_siswa($id)
	{
		$query = "DELETE from tb_siswa where ID = ".$id."";
		$rs			= $this->db->query($query);
	}

	public function delete_siswa_all()
	{
		$this->db->empty_table('tb_siswa');
	}

	public function status_data_siswa($data, $id)
	{
		$this->db->where('id',$id);
		$query = $this->db->update("tb_siswa", $data);
		// var_dump($id); die();
        if($query){
            return true;
        }else{
            return false;
        }
	}

	public function get_status()
	{
		return $this->db->get('tb_status');
	}

	public function get_data_siswa($id)
	{
		return $query = $this->db->select('tb_siswa.*, tb_kelas.nama_kelas, kode, nama_ekstrakulikuler')
		->from('tb_siswa')
		->join('tb_ekstrakulikuler', 'tb_siswa.id_ekstrakulikuler = tb_ekstrakulikuler.id', 'inner')
		->join('tb_kelas', 'tb_siswa.id_kelas = tb_kelas.id', 'inner')
		->where('tb_siswa.id', $id)
		->get()
		->row();
	}

	public function importData($data) {
  
            $res = $this->db->insert_batch('tb_siswa',$data);
            if($res){
                return TRUE;
            }else{
                return FALSE;
            }
      
        }
}