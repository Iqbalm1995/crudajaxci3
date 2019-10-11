<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Mo_user_admin', 'user_admin');
		if($this->session->userdata('status') != "logindcaadministrator"){
			redirect(base_url());
		}
	}

	public function index()
	{
		$data['user_admin'] = $this->user_admin->tampil_data()->result();

		$this->load->view('header_view');
		$this->load->view('user_admin_view', $data);
		$this->load->view('footer_view');
	}

	public function tambah_data()
	{
		$this->load->view('header_view');
		$this->load->view('user_admin_form');
		$this->load->view('footer_view');
	}

	function proses_tambah(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$keterangan = $this->input->post('keterangan');
 
		$data = array(
			'username' => $username,
			'password' => md5($password),
			'keterangan' => $keterangan
			);
		$this->user_admin->input_data($data,'user_admin');
		$this->session->set_flashdata('message1', '
			<div class="alert alert-info alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Berhasil <i class="glyphicon glyphicon-ok"></i></strong> Data telah di tambahkan
            </div>
			');
		redirect (base_url().'user_admin');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user_admin'] = $this->user_admin->edit_data($where,'user_admin')->result();
		$this->load->view('header_view');
		$this->load->view('user_admin_edit', $data);
		$this->load->view('footer_view');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->user_admin->hapus_data($where,'user_admin');
		$this->session->set_flashdata('message1', '
			<div class="alert alert-info alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Berhasil <i class="glyphicon glyphicon-ok"></i></strong> Data telah di hapus
            </div>
			');
		redirect (base_url().'user_admin');
	}

	function proses_ubah(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$keterangan = $this->input->post('keterangan');
 
		$data = array(
			'username' => $username,
			'password' => md5($password),
			'keterangan' => $keterangan
		);

		$where = array('id' => $id);

		$this->user_admin->update_data($where,$data,'user_admin');
		$this->session->set_flashdata('message1', '
			<div class="alert alert-info alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Berhasil <i class="glyphicon glyphicon-ok"></i></strong> Data telah di ubah
            </div>
			');
		redirect (base_url().'user_admin');
	}

}

/* End of file Libs.php */
/* Location: ./application/controllers/Libs.php */