<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('Mo_kategori', 'kategori');
		if($this->session->userdata('status') != "logindcaadministrator"){
			redirect(base_url());
		}
	}

	public function index()
	{
		$data['kategori'] = $this->kategori->tampil_data()->result();

		$this->load->view('header_view');
		$this->load->view('kategori_view', $data);
		$this->load->view('footer_view');
	}

	public function tambah_data()
	{
		$this->load->view('header_view');
		$this->load->view('kategori_form');
		$this->load->view('footer_view');
	}

	function proses_tambah(){
		$nama_kategori = $this->input->post('nama_kategori');
		$keterangan = $this->input->post('keterangan');
 
		$data = array(
			'nama_kategori' => $nama_kategori,
			'keterangan' => $keterangan
			);
		$this->kategori->input_data($data,'t_kategori');
		$this->session->set_flashdata('message1', '
			<div class="alert alert-info alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Berhasil <i class="glyphicon glyphicon-ok"></i></strong> Data telah di tambahkan
            </div>
			');
		redirect (base_url().'kategori');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['kategori'] = $this->kategori->edit_data($where,'t_kategori')->result();
		$this->load->view('header_view');
		$this->load->view('kategori_edit', $data);
		$this->load->view('footer_view');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->kategori->hapus_data($where,'t_kategori');
		$this->session->set_flashdata('message1', '
			<div class="alert alert-info alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Berhasil <i class="glyphicon glyphicon-ok"></i></strong> Data telah di hapus
            </div>
			');
		redirect (base_url().'kategori');
	}

	function proses_ubah(){
		$id = $this->input->post('id');
		$nama_kategori = $this->input->post('nama_kategori');
		$keterangan = $this->input->post('keterangan');
 
		$data = array(
			'nama_kategori' => $nama_kategori,
			'keterangan' => $keterangan
			);

		$where = array('id' => $id);

		$this->kategori->update_data($where,$data,'t_kategori');
		$this->session->set_flashdata('message1', '
			<div class="alert alert-info alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <strong>Berhasil <i class="glyphicon glyphicon-ok"></i></strong> Data telah di ubah
            </div>
			');
		redirect (base_url().'kategori');
	}

}

/* End of file Kategori.php */
/* Location: ./application/controllers/Kategori.php */