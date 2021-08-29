<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "/third_party/PHPExcel.php";
class Siswa extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('Pendaftar_Model');
		$this->load->model('Siswa_Model');
		$this->load->model('Ekstrakulikuler_Model');
		$this->load->helper('download');
		// $this->load->library('Excel_generator');
		$this->load->helper(array('url','html','form'));
    $this->load->library('session');
	}
	
	public function index()
	{
		$this->load->view('siswa/dashboard/home');
	}

	public function importFile(){
  
      if ($this->input->post('submit')) {
                 
                $path = 'uploads/';
                require_once APPPATH . "/third_party/PHPExcel.php";
                $config['upload_path'] = $path;
                $config['allowed_types'] = 'xlsx|xls|csv';
                $config['remove_spaces'] = TRUE;
                $this->load->library('upload', $config);
                $this->upload->initialize($config);            
                if (!$this->upload->do_upload('uploadFile')) {
                    $error = array('error' => $this->upload->display_errors());
                } else {
                    $data = array('upload_data' => $this->upload->data());
                }
                if(empty($error)){
                  if (!empty($data['upload_data']['file_name'])) {
                    $import_xls_file = $data['upload_data']['file_name'];
                } else {
                    $import_xls_file = 0;
                }
                $inputFileName = $path . $import_xls_file;
                 
                try {
                    $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
                    $objReader = PHPExcel_IOFactory::createReader($inputFileType);
                    $objPHPExcel = $objReader->load($inputFileName);
                    $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null, true, true, true);
                    $flag = true;
                    $i=0;
                    foreach ($allDataInSheet as $value) {
                      if($flag){
                        $flag =false;
                        continue;
                      }
                      $inserdata[$i]['nim'] = $value['A'];
                      $inserdata[$i]['nama_siswa'] = $value['B'];
                      $inserdata[$i]['agama'] = $value['C'];
                      $inserdata[$i]['id_kelas'] = $value['D'];
                      $inserdata[$i]['jenis_kelamin'] = $value['E'];
                      $inserdata[$i]['eks_wajib'] = $value['F'];
                      $inserdata[$i]['id_ekstrakulikuler'] = $value['G'];
                      $inserdata[$i]['status'] = $value['H'] == 'disetujui' ? '1' : '0';
                      $i++;
                    }               
                    $result = $this->Siswa_Model->importData($inserdata);   
                    if($result){
                      echo "Imported successfully";
                    }else{
                      echo "ERROR !";
                    }             
      
              } catch (Exception $e) {
                   die('Error loading file "' . pathinfo($inputFileName, PATHINFO_BASENAME)
                            . '": ' .$e->getMessage());
                }
              }else{
                  echo $error['error'];
                }
                 
                 
        }
        $data['tb_siswa'] = $this->Siswa_Model->tampil_data();
		$this->load->view('data_siswa/view_siswa', $data);
    }

    public function view_formulir()
	{
    $data['list_kelas'] = $this->Siswa_Model->get_kelas();
		$this->load->view('formulir/formulir_pendaftaran', $data);
	}
	
	public function view_lihat_daftar_siswa()
	{
		$data['tb_siswa'] = $this->Siswa_Model->tampil_data();
		$this->load->view('daftar_siswa/data_siswa', $data);
	}

	public function Getdatasiswa($id)
	{
		$query['pilihan_eks'] = $this->Siswa_Model->get_data_siswa($id);
		echo json_encode($query);
	}

	public function insert_formulir()
	{
    $this->session->set_flashdata('lastid', $this->input->post("id"));
		$data = array(

            'id'          => $this->input->post("id"),
            'nim'         => $this->input->post("nim"),
            'nama_siswa'  => $this->input->post("nama_siswa"),
       		'agama'       => $this->input->post("agama"),
       		'id_kelas'       => $this->input->post("id_kelas"),
       		'jenis_kelamin'  => $this->input->post("jenis_kelamin"),
       		'eks_wajib'  => $this->input->post("eks_wajib"),
       		'eks_pilihan' => $this->input->post("pilihan_eks"),
     		'id_ekstrakulikuler'  => $this->input->post("eks_pilihan"),
        );

		// var_dump($this->input->post("id"));die();
		// print_r($data);die();

        $this->Siswa_Model->edit_data_siswa($data,$this->input->post("id"));

        // $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
        //                                         </div>');

        //redirect
        $this->load->view('formulir/formulir_pendaftaran', $data);
	}
}
