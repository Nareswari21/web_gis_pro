<?php 
class bidang2 extends CI_Controller{
 
    function __construct(){
        parent::__construct();      
        $this->load->model('m_data');
        $this->load->helper('url');
        $this->load->database();
        }

        public function index(){
            $this->data['datass']=$this->m_data->showDataBidang2();
            $this->load->view('v_bidang2',$this->data);
                   
    }

    public function hapus($id){
        $where = array('id_polygon' => $id);
        $this->m_data->hapus_data_bidang($where,'bangunan_polygon');
        redirect('index.php/bidang2/index');
    }

    public function edit($id){
        $where = array('id_polygon' => $id);
        $data['bangunan_polygon']= $this->m_data->edit_data_bidang($where,'bangunan_polygon')->result();
        //print_r($id   );
        $this->load->view('v_edit_bidang2', $data);
    }
    public function update(){
        $id = $this->input->post('id_polygon');
        $id_polygon = $this->input->post('id_polygon');
        $name_polygon = $this->input->post('name_polygon');
        $information = $this->input->post('information');
        $photo = $_FILES['photo'];
        if($photo=''){}else{
            $config['upload_path'] = './assets/uploads';
            $config['allowed_types'] = 'jpg|png|gif';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('photo')){
                echo "Upload gagal"; die();   
            }else{
                $photo=$this->upload->data('file_name');
            }
        }
        
        $updated_data = array(
            'id_polygon' => $id_polygon,
            'name_polygon' => $name_polygon,
            'information' => $information,
            'photo' => $photo
            );
        $this->m_data->update_data_bidang2($updated_data, $this->input->post('id_polygon'));
        redirect('index.php/bidang2/index');
    }
    
    function print(){
        $this->data['datas']=$this->m_data->showDataBidang2();
        $this->load->view('v_print_tabel4',$this->data);
    }
    // function action(){
    // $uploadDir = "/assets/geojson";
    // // Apabila ada file yang di-upload
    // if(is_uploaded_file($_FILES['myfile']['tmp_name'])){
    //  $uploadFile = $_FILES['myfile'];

    //  // Extract nama file
    //  $extractFile = pathinfo($uploadFile['name']);
    //  $size = $_FILES['myfile']['size']; //untuk mengetahui ukuran file
    //  $tipe = $_FILES['myfile']['type'];// untuk mengetahui tipe file

    //  //Dibawah ini adalah untuk mengatur format gambar yang dapat di uplada ke server.
    //  //Anda bisa tambahakan jika ingin memasukan format yang lain tergantung kebutuhan anda.

    //  // $exts =array('image/geojson');
    //  // if(!in_array(($tipe),$exts)){
    //  //  echo 'Format file yang di izinkan hanya tidak sesuai';
    //  //  exit;
    //  //}
    //  // dibawah ini script untuk mengatur ukuran file yang dapat di upload ke server
    //  if(($size !=0)&&($size>30000)){
    //      exit('Ukuran gambar terlalu besar?');
    //  }
    // }

    // $sameName = 0; // Menyimpan banyaknya file dengan nama yang sama dengan file yg diupload
    // $handle = opendir($uploadDir);
    // while(false !== ($file = readdir($handle))){ // Looping isi file pada directory tujuan
    //  // Apabila ada file dengan awalan yg sama dengan nama file di uplaod
    //  if(strpos($file,$extractFile['filename']) !== false)
    //  $sameName++; // Tambah data file yang sama
    // }

    // /* Apabila tidak ada file yang sama ($sameName masih '0') maka nama file pakai 
    // * nama ketika diupload, jika $sameName > 0 maka pakai format "namafile($sameName).ext */
    // $newName = empty($sameName) ? $uploadFile['name'] : $extractFile['filename'].'('.$sameName.').'.$extractFile['extension'];

    // if(move_uploaded_file($uploadFile['tmp_name'],$uploadDir.$newName)){
    //  echo 'File berhasil diupload dengan nama: '.$newName;
    // }
    // else{
    //  echo 'File gagal diupload';
    // }
    // }
    
    public function do_upload() {
		// setting konfigurasi upload
		$new_name = $_FILES["map8"]['name'];
        $config['upload_path'] = './assets/geojson/';
		$config['allowed_types'] = '*';
		$config['file_name'] = $new_name;
		$config['overwrite'] = TRUE;
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('file')) {
            $error = $this->upload->display_errors();
			// menampilkan pesan error
			redirect('index.php/bidang/index');
            print_r($error);
        } else {
			$result = $this->upload->data();
			
			redirect('index.php/bidang/index');
			
            // echo "<pre>";
            // print_r($result);
            // echo "</pre>";
        }
    }
}   