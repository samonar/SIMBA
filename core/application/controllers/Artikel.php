<?php

class Artikel extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model(array('Admin_model'));
		$this->load->library(array('form_validation','upload','image_lib','template','session'));
		$this->load->helper(array('form', 'url', 'html'));	

    }
    function index(){
        $data=array(
		    'tittle'		=>'Posting Artikel',
		);
		$this->template->display('admin/kelola_artikel',$data);
    }
    
    function posting(){
        if(isset($_FILES['image'])){
			$errors= array();
			$file_name = $_FILES['image']['name'];
			$file_size = $_FILES['image']['size'];
			$file_tmp = $_FILES['image']['tmp_name'];
			$file_type = $_FILES['image']['type'];
			$imageFileType = strtolower(pathinfo($file_name = $_FILES['image']['name'],PATHINFO_EXTENSION));
			// $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
			
			$extensions= array("jpeg","jpg","png");
			
			if(in_array($imageFileType,$extensions)=== false){
				$errors[]="extension not allowed, please choose a JPEG or PNG file.";
			}
			
			if($file_size > 2097152) {
				$errors[]='File size must be excately 2 MB';
			}
			
			if(empty($errors)==true) {
				move_uploaded_file($file_tmp,"C:/xampp/htdocs/simba/img/bg-img/".$file_name);
				$data2 = array(
                    'judulartikel' =>$this->input->post('judulartikel') ,
                    'isi_artikel'   => $this->input->post('isi_artikel'),
                    'tgl'   => date('Y-m-d h:i:s'),
                    'gambar'    =>$file_name,
                );
                $this->Admin_model->upload($data2);

                $data=array(
                    'tittle'    => "Posting Artikel",
                );
                $this->session->set_flashdata('message', 'Tambah Artikel sukses');
                $this->template->display('admin/kelola_artikel',$data);
			}else{
                $this->session->set_flashdata('message', 'Tambah Artikel Gagal');
				redirect('artikel');
			}
			}
        
        
    }
}