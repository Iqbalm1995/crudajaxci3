<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mo_admin_auth','admin_auth');
	}

	public function index()
	{
		$this->load->view('login_view');
	}

	public function login()
	{
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$where = array(
			'username' => $user,
			'password' => md5($pass)
			);

		$this->form_validation->set_rules('user','Username','required|trim');
		$this->form_validation->set_rules('pass','Password','required|trim');

		$cek = $this->admin_auth->cek_login("user_admin",$where)->num_rows();

		$datas = $this->admin_auth->cek_login("user_admin",$where)->result();

		if($this->form_validation->run()==FALSE)
		{
			$this->session->set_flashdata('pesan1', 'Username dan Password masih kosong!');
			redirect(base_url());
		}else{

			if($cek > 0){

				foreach ($datas as $row) {
					# code...
				}
				$id 	  = $row->id;
				$data_session = array(
					'id' 				=> $id,
					'username' 			=> $user,

					'status' 			=> "logindcaadministrator"
					);

				$this->session->set_userdata($data_session);
				redirect(base_url().'dashboard');

			}else{
				$this->session->set_flashdata('pesan2', 'Username atau Password salah!');
				redirect(base_url());
			}
		}

	}

	public function logout(){
		$data_session = array(
					'id'					=> '',
					'username' 				=> '',
					'status' 				=> ''
					);

		$this->session->unset_userdata($data_session);
		$this->session->sess_destroy();
		redirect(base_url());
	}
	
}
