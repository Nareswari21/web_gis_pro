<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

public function __construct()
{
   	parent::__construct();
   	if ($this->session->userdata('logged')<>1) {
                redirect(site_url('auth'));
	}
	$this->load->model('m_data');
}

	public function index()
	{
		check_not_login();
		$this->load->view('v_home');
	}
		public function tabel()
	{
		$this->load->view('v_tabel');
	}
	public function bangunan_json()
	{
		$data=$this->db->get('bangunan')->result();
		echo json_encode($data);
	}
	public function foto($kode=null)
	{
		$data=$this->db->limit(1)->get_where('bidang',array('bidang_kode'=>$kode))->row()->bidang_gambar;
		echo json_encode($data);
	}

	public function detail ($kode=null)
	{
		$data['kode']=$kode;
		$data['bidang']=$this->db->get_where('bidang',array('bidang_kode'=>$kode))->result();
		$data['dok']=$this->db->get_where('dokumentasi', array('bidang_kode'=>$kode))->result();
		$this->load->view('v_detail',$data);
	}
	function register(){
		$this->load->view('v_register');
	}
	public function tambah_aksi(){
		//$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$level = $this->input->post('level');
 
		$data = array(
			//'id' => $id,
			'username' => $username,
			'password' => md5($password),
			'level' => $level
			);
		$this->m_data->input_data_register($data,'user');
		redirect('index.php/home');
	}

}