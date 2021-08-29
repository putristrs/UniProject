<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendaftar_Model extends CI_Model {

	public function tampil_data()
	{
		return $this->db->get('tb_pendaftar');
	}

	public function input_data_pendaftar($data)
	{
		$query = $this->db->insert("tb_pendaftar", $data);

        if($query){
            return true;
        }else{
            return false;
        }
	}

	public function edit_data_pendaftar($data,$id){
		$id = $this->input->post("id");
		$data = array( 
            'nim'         => $this->input->post("nim"),
            'nama_siswa'  => $this->input->post("nama_siswa"),
        );
     	$this->db->where('id',$id);
        $this->db->update('tb_pendaftar', $data);

        // print_r($this->db->last_query());
        // die();
    }

    public function delete_pendaftar($id)
	{
		$query = "DELETE from tb_pendaftar where ID = ".$id."";
		$rs			= $this->db->query($query);
	}
}