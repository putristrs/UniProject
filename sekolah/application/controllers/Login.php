<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();		
		$this->load->model('Login_Model');
        $this->load->library('form_validation');
	}
 
	public function index()
	{
		$this->load->view('login');
	}

    public function view_admin()
    {
        $data['tb_admin'] = $this->Login_Model->tampil_data()->result();
    }

    public function aksi_login()
    {
                //set form validation
                $this->form_validation->set_rules('username', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                //set message form validation
                $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                    <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
                if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = $this->input->post('password', TRUE);

                //checking data via model
                $checking = $this->Login_Model->login('tb_admin', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $row) {

                        $session_data = array(
                            'id'   => $row->id,
                            'nama' => $row->nama,
                            'username' => $row->username,
                            'password' => $row->password,
                            'level'    => $row->level
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("level") == 1){
                             $this->load->view('admin');
                        }else{
                             $this->load->view('siswa/dashboard/home');
                        }

                    }
                }else{

                    $data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
                        <div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> username atau password salah!</div></div>';
                    $this->load->view('login', $data);
                }

            }else{

                $this->load->view('login');
            }

    }

	public function logout(){
		$this->session->sess_destroy();
		 $this->load->view('siswa/dashboard/home');
	}
}
