<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Map extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MapModel');
		$this->load->library('form_validation');
	}

	public function bangunan_json()
	{
		$data=$this->db->get('bangunan')->result();
		echo json_encode($data);
	}

	public function getGeojson(){
		$data=$this->db->get('geojson')->result();
		echo json_encode($data);
	}

	public function addGeojson(){
		$data["array"] = $this->input->post('coordinates');

		$result = $this->MapModel->addgeojson($data);
		if($result){
            echo '<script>alert("Region already added");</script>';
		    redirect('page/v_home');
		}else{
            echo '<script>alert("Region already added");</script>';
		    redirect('page/v_home');
		}
	}

	//<-Function which used in Map -> 
	public function addMarker(){
		$data['bangunan_nama'] = $this->input->post('l_name');
		$data['bangunan_lat'] = $this->input->post('l_lat'); 
		$data['bangunan_long'] = $this->input->post('l_long');

		$result = $this->MapModel->addMarkers($data);
		if($result){
            echo '<script>alert("Region already added");</script>';
		    redirect('home2');
		}else{
            echo '<script>alert("Region already added");</script>';
		    redirect('home2');
		}
	}

	public function deleteMarker($bangunan_id){
        $result = $this->MapModel->deleteMarkers($bangunan_id);
		if($result){
            echo '<script>alert("Region already added");</script>';
		    redirect('page/v_home');
		}else{
            echo '<script>alert("Region already added");</script>';
		    redirect('page/v_home');
		}
	}

}