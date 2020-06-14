<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home2 extends CI_Controller {

public function __construct()
{
   	parent::__construct();
   	if ($this->session->userdata('logged')<>1) {
                redirect(site_url('auth'));
	}
	$this->load->model('m_data');
	$this->load->model('MapPolygonModel');
}

	public function index()
	{
		check_not_login();
		$this->load->view('v_home2');
	}
		public function tabel()
	{
		$this->load->view('v_tabel');
	}
	

	function register(){
		$this->load->view('v_register');
	}

	public function getPolygon(){
		$data=$this->db->get('bangunan_polygon')->result();
		echo json_encode($data);
	}

    //<-Function which used in Map -> 
	public function addPolygon(){
        $foto = $_FILES['l_foto'];
		if($foto == ''){

		}else{
			$config['upload_path']          = './assets/uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('l_foto')) {
				$foto = $this->upload->data("file_name");
			}else{
				echo "upload gagal";
			}
		}

		$data['name_polygon'] = $this->input->post('l_name');
		$data["coordinates"] = $this->input->post('coordinates');
		$data['information'] = $this->input->post('l_info');
		$data['photo'] = $foto;

		$result = $this->MapPolygonModel->addPolygon($data);
		if($result){
            echo '<script>alert("Region already added");</script>';
		    redirect('home2');
		}else{
            echo '<script>alert("Region already added");</script>';
		    redirect('home2');
		}
	}

	public function deletePolygon($polygon_id){
        $result = $this->MapPolygonModel->deletePolygon($polygon_id);
		if($result){
            echo '<script>alert("Region already added");</script>';
		    redirect('home2');
		}else{
            echo '<script>alert("Region already added");</script>';
		    redirect('home2');
		}
	}

	public function updatePolygon(){
        $foto = $_FILES['l_foto'];
		if($foto['name'] == ''){
			$data['id_polygon'] = $this->input->post('l_id');
			$data['name_polygon'] = $this->input->post('l_name');
			$data["coordinates"] = $this->input->post('coordinates');
			$data['information'] = $this->input->post('l_info');
			   
			$result = $this->MapPolygonModel->updatePolygon($data);
			if($result){
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect('home2');
			}else{
				echo '<script>alert("Region already added");</script>';
				redirect('home2'); 
			}

		}else{
			$config['upload_path']          = './assets/uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('l_foto')) {
				$foto = $this->upload->data("file_name");
			}else{
				echo "upload gagal";
			}

			$data['id_polygon'] = $this->input->post('l_id');
			$data['name_polygon'] = $this->input->post('l_name');
			$data["coordinates"] = $this->input->post('coordinates');
			$data['information'] = $this->input->post('l_info');
			$data['photo'] = $foto;
			   
			$result = $this->MapPolygonModel->updatePolygon($data);
			if($result){
				$this->session->set_flashdata('success', 'Berhasil disimpan');
				redirect('home2');
			}else{
				echo '<script>alert("Region already added");</script>';
				redirect('home2'); 
			}
		}
	}
	//<-Function which used in Map ->
	
	//<-Function which used in Polygon Page ->
	public function addPolygon1(){
		$foto = $_FILES['l_foto'];
		if($foto == ''){

		}else{
			$config['upload_path']          = './assets/uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('l_foto')) {
				$foto = $this->upload->data("file_name");
			}else{
				echo "upload gagal";
			}
		}

		$data['name_polygon'] = $this->input->post('l_name');
		$data["coordinates"] = $this->input->post('coordinates');
		$data['information'] = $this->input->post('l_info');
		$data['photo'] = $foto;

		$result = $this->MapPolygonModel->addPolygon($data);
		if($result){
		    redirect('page/data_landmark_polygon');
		}else{
            echo '<script>alert("Region already added");</script>';
		    redirect('page/data_landmark_polygon');
		}
	}
	
	public function deleteByID(){
		$polygon_id = $this->input->post('l_id');

        $result = $this->MapPolygonModel->deletePolygon($polygon_id);
		if($result){
            echo '<script>alert("Region already added");</script>';
		    redirect('page/data_landmark_polygon');
		}else{
            echo '<script>alert("Region already added");</script>';
		    redirect('page/data_landmark_polygon');
		}
	}

	public function deleteAll(){
        $result = $this->MapPolygonModel->deleteAll();
		if($result){
            echo '<script>alert("Region already added");</script>';
		    redirect('page/data_landmark_polygon');
		}else{
            echo '<script>alert("Region already added");</script>';
		    redirect('page/data_landmark_polygon_polygon');
		}
	}

	
}