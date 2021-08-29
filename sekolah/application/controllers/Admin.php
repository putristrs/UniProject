<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('Pendaftar_Model');
		$this->load->model('Siswa_Model');
		$this->load->model('Ekstrakulikuler_Model');
		$this->load->model('Excel_Model');
    $this->load->model('Login_Model');
		$this->load->helper('download');
    $this->load->library('Word');
		// $this->load->library('Excel_generator');
	}

	
	public function view_siswa($id=NULL)
	{
		$data['pilihan_eks'] = $this->Ekstrakulikuler_Model->get_list_eks($id);
    $data['list_kelas'] = $this->Ekstrakulikuler_Model->get_list_kelas();
		$data['tb_siswa'] = $this->Siswa_Model->tampil_data();
    // $data['kelas'] = $this->Siswa_Model->get_kelas();
    $data['kelas_id'] = $this->Siswa_Model->get_kelas_by_id($id);
    $data['kelas']= $this->Siswa_Model->get_kelas();
		$this->load->view('data_siswa/view_siswa', $data);
	}

  public function ubahprofile()
  {
    $data['tb_admin'] = $this->Login_Model->tampil_data();
    // echo "<pre>";
    // var_dump($data);die();
    $this->load->view('ubahprofile', $data);
  }

  public function ubahpass()
  {
    $data1['tb_admin'] = $this->Login_Model->tampil_data();
      $id = $this->input->post("id");
      $data = array( 
       'username' => $this->input->post("username"),
       'password' => $this->input->post("password"),
          );

        $this->Login_Model->ubahprofile($data, $id);
        $this->load->view('ubahprofile', $data1);
  }

	public function insert_siswa()
	{
		$data = array(

         'id'          => $this->input->post("id"),
         'nim'         => $this->input->post("nim"),
          'nama_siswa'  => $this->input->post("nama_siswa"),
       		'agama'       => $this->input->post("agama"),
       		'id_kelas'       => $this->input->post("id_kelas"),
       		'jenis_kelamin'  => $this->input->post("jenis_kelamin"),
       		'eks_wajib'  => $this->input->post("eks_wajib"),
     		  'id_ekstrakulikuler'  => $this->input->post('id_ekstrakulikuler')
        );
      // var_dump($data);die();

        $this->Siswa_Model->input_data_siswa($data);

        redirect('admin/view_siswa', $data);
	}

	public function update_siswa(){
			$data = array(

            'id'          => $this->input->post("id"),
            'nim'         => $this->input->post("nim"),
            'nama_siswa'  => $this->input->post("nama_siswa"),
       		'agama'       => $this->input->post("agama"),
       		'id_kelas'       => $this->input->post("kelas"),
       		'jenis_kelamin'  => $this->input->post("jenis_kelamin"),
       		'eks_wajib'  => $this->input->post("eks_wajib"),
     		'id_ekstrakulikuler'  => $this->input->post("pilihan_eks"),
        );

		// print_r($data);die();

        $this->Siswa_Model->edit_data_siswa($data,$this->input->post("id"));

        // $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
        //                                         </div>');

        //redirect
        redirect('admin/view_siswa');
    }

	public function delete_siswa($id)
	{
		$data = $this->Siswa_Model->delete_siswa($id);
		redirect('admin/view_siswa');
	}

  public function delete_siswa_all()
  {
    $data = $this->Siswa_Model->delete_siswa_all();
    redirect('admin/view_siswa');
  }

	public function view_ekstrakurikuler()
	{
		$data['tb_ekstrakulikuler'] = $this->Ekstrakulikuler_Model->tampil_data_eks()->result();
		$this->load->view('data_ekstrakurikuler/view_ekstrakurikuler', $data);
	}

	public function insert_ekstrakulikuler()
	{
		$data = array(

            'id'          => $this->input->post("id"),
            'kode'  => $this->input->post("kode"),
            'nama_ekstrakulikuler' => $this->input->post("nama_ekstrakulikuler"),
        );
        $this->Ekstrakulikuler_Model->input_data_ekstrakulikuler($data);
        redirect('admin/view_ekstrakurikuler');
    }

    public function update_ekstrakulikuler(){
		$data = array( 
		    'id'          => $this->input->post("id"),
		    'kode'          => $this->input->post("kode"),
            'nama_ekstrakulikuler' => $this->input->post("nama_ekstrakulikuler"),
        );
        $this->Ekstrakulikuler_Model->edit_data_ekstrakulikuler($data,$this->input->post("id"));
        redirect('admin/view_ekstrakurikuler');
    }

    public function delete_ekstrakulikuler($id)
	{
		$data = $this->Ekstrakulikuler_Model->delete_ekstrakulikuler($id);
		redirect('admin/view_ekstrakurikuler');
	}

	public function view_rekapitulasi()
	{
    $data['total_eks'] = $this->Ekstrakulikuler_Model->jumlah_total();
	  $data['tb_ekstrakulikuler'] = $this->Ekstrakulikuler_Model->tampil_data()->result();
	  // $data['total_eks'] = $this->Ekstrakulikuler_Model->hitung_total_eks();
	  // var_dump($data['tb_ekstrakulikuler'][0]->nama_ekstrakulikuler);die();
	  $this->load->view('data_rekapitulasi/view_rekapitulasi', $data);
	}

	// public function rekap_chart(){

	// }

	public function view_help()
	{
		$this->load->view('help/view_help');
	}

	public function lakukan_help()
	{				
		force_download('asset\admin\help\Panduan Penggunaan Perangkat Lunak Pendaftaran Ekstrakurikuler SMP Negeri 1 Banyubiru.pdf',NULL);
		redirect('admin/view_help');
	}

	// public function laporan_pendaftar() 
	// {
 //        $query = $this->db->get('tb_pendaftar');
 //        $this->excel_generator->set_query($query);
 //        $this->excel_generator->set_header(array('Nim', 'Nama Siswa', 'Tanggal'));
 //        $this->excel_generator->set_column(array('nim', 'nama_siswa', 'tanggal'));
 //        $this->excel_generator->set_width(array(25, 15, 30, 15));
 //        $this->excel_generator->exportTo2013('Laporan Pendaftar');
 //        redirect('admin/view_pendaftar');
 //    }

  public function status_siswa()
  {
  		$id = $this->input->post("id");
		$data = array( 
		 'status' => $this->input->post("status"),
        );
		// print_r($data);die();

        $this->Siswa_Model->status_data_siswa($data, $id);

        // $this->session->set_flashdata('notif', '<div class="alert alert-success alert-dismissible"> Success! data berhasil disimpan didatabase.
        //                                         </div>');

        //redirect
        redirect('admin/view_siswa');
    }

    public function export_view() {
        $data['pilihan_eks'] = $this->Ekstrakulikuler_Model->get_list_eks();
		$data['tb_siswa'] = $this->Siswa_Model->tampil_data();
		$this->load->view('data_siswa/view_export_excel_siswa', $data);
    }
  // create xlsx
  public function createXLS() {
          $this->load->model("Excel_Model");
          $this->load->library("excel");
          $object = new PHPExcel();

          $object->setActiveSheetIndex(0);

          $table_columns = array("Nis", "Nama Siswa", "Agama", "Kelas", "Jenis Kelamin", "Ekstrakulikuler Wajib", "Ekstrakulikuler Pilihan", "Status");

          $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_Model->get_excel_siswa();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->nim);
           $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nama_siswa);
           $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $row->agama);
           $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $row->nama_kelas);
           $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $row->jenis_kelamin);
           $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, $row->eks_wajib);
           $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, $row->nama_ekstrakulikuler);
           $object->getActiveSheet()->setCellValueByColumnAndRow(7, $excel_row, $row->status == 0 ? 'tidak di setujui' : 'disetujui');
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Data_siswa.xls"');
          $object_writer->save('php://output');
    }	

     public function createEks() {
          $this->load->model("Excel_Model");
          $this->load->library("excel");
          $object = new PHPExcel();

          $object->setActiveSheetIndex(0);

          $table_columns = array("Kode", "Nama Ekstrakulikuler");

          $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_Model->get_excel_eks();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->kode);
           $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->nama_ekstrakulikuler);
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Data_Ekstrakurikuler.xls"');
          $object_writer->save('php://output');
    }

     public function createrekap() {
          $this->load->model("Excel_Model");
          $this->load->library("excel");
          $object = new PHPExcel();

          $object->setActiveSheetIndex(0);

          $table_columns = array("Nama Ekstrakulikuler", "Jumlah Siswa");

          $column = 0;

          foreach($table_columns as $field)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);
           $column++;
          }

          $employee_data = $this->Excel_Model->get_excel_rekap();

          $excel_row = 2;

          foreach($employee_data as $row)
          {
           $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $row->nama_ekstrakulikuler);
           $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $row->jumlah);
           $excel_row++;
          }

          $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
          header('Content-Type: application/vnd.ms-excel');
          header('Content-Disposition: attachment;filename="Data_Rekapitulasi.xls"');
          $object_writer->save('php://output');
    }  

    public function cetakformulir() {
        $id =  $this->session->flashdata('lastid');
        $PHPWord = $this->word; // New Word Document
        $section = $PHPWord->createSection(); // New portrait section
        

        $employee_data = $this->Excel_Model->get_excel_siswa_id($id);
        $section->addTextBreak(1);
        $section->addText('Formulir Pendaftaran Ekstrakurikuler','rStyle', 'pStyle');
        $section->addText('SMP Negeri 1 Banyubiru','rStyle', 'pStyle');
        $section->addText('Tahun Ajaran 2020/2021','rStyle', 'pStyle');
        foreach ($employee_data as $row) {
        $PHPWord->addFontStyle('textsyle', array('name'=>'Times New Roman', 'size'=>13));
        $section->addTextBreak(2);
        $section->addText('NIS:  '  .$row->nim, 'textsyle');
        $section->addTextBreak(0,5);
        $section->addText('Nama Siswa:  ' .$row->nama_siswa,  'textsyle');
        $section->addTextBreak(0,5);
        $section->addText('Agama:  ' .$row->agama, 'textsyle');
        $section->addTextBreak(0,5);
        $section->addText('Jenis Kelamin:  ' .$row->jenis_kelamin, 'textsyle');
        $section->addTextBreak(0,5);
        $section->addText('Ekstrakulikuler Wajib:  ' .$row->eks_wajib, 'textsyle');
        $section->addTextBreak(0,5);
        $section->addText('Ekstrakulikuler Pilihan:  ' .$row->nama_ekstrakulikuler, 'textsyle');
        $section->addTextBreak(0,5);
        $PHPWord->addFontStyle('rStyle', array('bold'=>true, 'italic'=>true, 'size'=>16));
        $PHPWord->addParagraphStyle('pStyle', array('align'=>'center', 'spaceAfter'=>100));
      }
        // Save File / Download (Download dialog, prompt user to save or simply open it)
        $PHPWord->addFontStyle('rfStyle', array('name'=>'Times New Roman','size'=>13));
        $PHPWord->addParagraphStyle('fStyle', array('align'=>'right', 'spaceAfter'=>100));
        $section->addTextBreak(2);
        $section->addText('Tanda tangan,', 'fStyle', 'fStyle');
        $section->addText('Pembina OSIS,', 'fStyle', 'fStyle');
        $section->addTextBreak(2);
        $section->addText('__________________,', 'fStyle', 'fStyle');
        
        $section->addTextBreak(2);
        $PHPWord->addFontStyle('ftStyle', array('name'=>'Times New Roman', 'bold'=>true, 'size'=>11));
        $PHPWord->addParagraphStyle('ftStyle', array('align'=>'left', 'spaceAfter'=>100));
        $section->addText('*Setelah dicetak dan disetujui oleh Pembina OSIS diserahkan kepada operator untuk melakukan update persetujuan,', 'ftStyle', 'ftStyle');
        $filename='DataPendaftar.docx'; //save our document as this file name
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document'); //mime type
        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name
        header('Cache-Control: max-age=0'); //no cache
        $objWriter = PHPWord_IOFactory::createWriter($PHPWord, 'Word2007');
        $objWriter->save('php://output');         
    } 
}
