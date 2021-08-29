<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ekstrakulikuler_Model extends CI_Model {


	public function tampil_data()
	{

		// return $this->db->get('tb_ekstrakulikuler');
		$this->db->select('*');
		$this->db->select('ifnull(count(nama_ekstrakulikuler),0) as jumlah');
		$this->db->from('tb_siswa');
		$this->db->join('tb_ekstrakulikuler', 'tb_siswa.id_ekstrakulikuler = tb_ekstrakulikuler.id','left');
		$this->db->where('tb_siswa.status',1);
		$this->db->group_by('nama_ekstrakulikuler');
		// echo "<pre>";
		// var_dump($this->db->get()->result());
		// die();
		return $query = $this->db->get();
	}

	public function jumlah_total()
	{
		$query = $this->db->select('*')
		->from('tb_siswa')
		->where('status', 1)
		->get();
		    if($query->num_rows()>0)
		    {
		      return $query->num_rows();
		    }
		    else
		    {
		      return 0;
		    }

	}

	public function tampil_data_eks()
	{
	    return $this->db->get('tb_ekstrakulikuler');
	}

	public function get_list_eks($id)
	{
		$result = $this->db->select('id, nama_ekstrakulikuler')
		->from('tb_ekstrakulikuler')
		->where('id', 2)
		->get()
		->result_array();
		return $result;
	}

	public function get_list_kelas()
	{
		$result = $this->db->select('id, nama_kelas')
		->from('tb_kelas')
		->get()
		->result_array();
		return $result;
	}

	public function input_data_ekstrakulikuler($data)
	{
		$query = $this->db->insert("tb_ekstrakulikuler", $data);

        if($query){
            return true;
        }else{
            return false;
        }
	}

	public function edit_data_ekstrakulikuler($data,$id){
		$id = $this->input->post("id");
		$data = array( 
            'kode'         => $this->input->post("kode"),
            'nama_ekstrakulikuler'  => $this->input->post("nama_ekstrakulikuler"),
        );
     	$this->db->where('id',$id);
        $this->db->update('tb_ekstrakulikuler', $data);

        // print_r($this->db->last_query());
        // die();
    }

	public function delete_ekstrakulikuler($id)
	{
		$query = "DELETE from tb_ekstrakulikuler where ID = ".$id."";
		$rs			= $this->db->query($query);
	}

}