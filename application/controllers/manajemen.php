<?php 
class manajemen extends CI_Controller{
 
    function __construct(){
        parent::__construct();      
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->database();
        }
        public function index(){
            $this->data['user']=$this->m_data->showDataManajemen();
            $this->load->view('v_manajemen',$this->data);
        }
        function tambah_aksi(){
            $id = $this->input->post('id');
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $level = $this->input->post('level');
     
            $data = array(
                'id' => $id,
                'username' => $username,
                'password' => md5($password),
                'level' => $level
                );
            $this->m_data->input_data_register($data,'user');
            redirect('auth');
        }
        function hapus($id){
            $where = array('id' => $id);
            $this->m_data->hapus_data_manajemen($where,'user');
            redirect('index.php/manajemen/index');
        }
        public function edit($id){
            $where = array('id' => $id);
            $data['user']= $this->m_data->edit_data_manajemen($where,'user')->result();
            //print_r($id	);
            $this->load->view('v_edit_manajemen', $data);
        } 
        public function update(){
            $id = $this->input->post('id');
            $username = $this->input->post('username');
            $level = $this->input->post('level');
            
            
            $updated_data = array(
                'id' => $bidang_kode,
                'username' => $username,
                'level' => $level
                );
            $this->m_data->update_data_manajemen($updated_data, $this->input->post('id'));
            redirect('index.php/manajemen/index');
        }

    }
