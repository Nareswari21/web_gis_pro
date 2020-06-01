<?php 

class m_data extends CI_Model{
	// function tampil_data($tabel){
	// 	return $this->db->get($tabel);
	// }
	function login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query =  $this->db->get('user');
        return $query->num_rows();
    }

    function data_login($username,$password) {
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        return $this->db->get('user')->row();
    }

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}

	function showData(){
		$query = $this->db->query("select * from bangunan");
		return $query->result();
	}
	
	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}
	public function update_data($updated_data, $id){
		$this->db->where('bangunan_id', $id); 
		$this->db->update('bangunan', $updated_data);
	}
//BIDANG

	public function showDataBidang(){
		$query = $this->db->query("select * from bidang");
		return $query->result();
	}
	function hapus_data_bidang($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function input_data_bidang($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data_bidang($where,$table){	
		return $this->db->get_where($table,$where);
	}
	function detail_data($id = null){
		$query = $this->db->get_where('bidang', array('kode_bidang' => $id))->row();
		return $query;
	}
	public function update_data_bidang($updated_data, $id){
		$this->db->where('bidang_kode', $id); 
		$this->db->update('bidang', $updated_data);
	}
	//DOKUMENTASI
	public function showDataDokumentasi(){
		$query = $this->db->query("select * from dokumentasi");
		return $query->result();
	}
	function hapus_data_dokumentasi($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function input_data_dokumentasi($data,$table){
		$this->db->insert($table,$data);
	}
	//REGISTER
	public function input_data_register($data,$table){
		$this->db->insert($table,$data);
	}
	//MANAJEMEN
	public function showDataManajemen(){
		$query = $this->db->query("select * from user");
		return $query->result();
	}
	function input_data_manajemen($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_data_manajemen($where,$table){	
		return $this->db->get_where($table,$where);
	}
	public function update_data_manajemen($updated_data, $id){
		$this->db->where('id', $id); 
		$this->db->update('user', $updated_data);
	}
	function hapus_data_manajemen($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}