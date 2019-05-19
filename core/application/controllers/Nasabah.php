<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nasabah extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model(array('Nasabah_model'));
		$this->load->library(array('form_validation','upload','image_lib','template','session'));
		$this->load->helper(array('form', 'url', 'html'));
		// $session_login=$this->session->userdata('logged_in');
		// $session_jabatan=$this->session->userdata('nama_jabatan');
		
	}
	////////////////////perusahaan////////////////
	function transaksiPerusahaan(){
		$data=array(
			'tittle'     		=> 'Daftar Sampah',
			'list_perusahaan'	=> $result,
		);
        $this->template->display('admin/kelola_transaksi/transaksiPerusahaan',$data);
	}
	function listPerusahaan()
	{	$result=$this->Nasabah_model->readPerusahaan();
        $data=array(
			'tittle'     		=> 'Daftar Perusahaan',
			'list_perusahaan'	=> $result,
		);
        $this->template->display('admin/kelola_nasabah/list_perusahaan',$data);
	}
	public function detailPerusahaan($data){
		$result=$this->Nasabah_model->searchByIdPerusahaan($data);
		$data=array(
			'data'		=> $result,
			'tittle'		=>'Detail Perusahaan',
		);
		//print_r($result);
		$this->template->display('admin/kelola_nasabah/form_detail_perusahaan',$data);
	}
	function updatePerusahaan(){
		
			
			$data=array(
				// 'nama_perusahaan' 	=> $this->input->post('nama_nasabah'),
				// 'alamat'			=> $this->input->post('alamat'),
				// 'email'				=> $this->input->post('username'),
				// 'password'			=> $this->input->post('password'),
				'status'			=> $this->input->post('status'),
			);
			$this->Nasabah_model->updatePerusahaan($data,$this->input->post('id_perusahaan'));	
		
		
		$this->session->set_flashdata('message', 'Update nasabah sukses');
        redirect(site_url('nasabah/listPerusahaan'));
	}
	function deletePerusahaan($data){
		
		if (!null==$data) {
			$row=$this->Nasabah_model->deletePerusahaan($data);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('nasabah/listPerusahaan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nasabah/listPerusahaan'));
        }
	}
	
	//////////////////////////nasabah///////////////
	function index()
	{	$result=$this->Nasabah_model->read();
        $data=array(
			'tittle'     => 'Nasabah',
			'list_nasabah'	=> $result,
		);
        $this->template->display('admin/kelola_nasabah/list_nasabah',$data);
	
	}

	function create(){
		$data=array(
			'tittle'	=> 'Tambah Nasabah',
		);
		$this->template->display('admin/kelola_nasabah/form_nasabah',$data);
	}

	function create_action()
	{
		$this->_rules();
        if ($this->form_validation->run() == FALSE) {
          $this->create();
        } else {
			$username=(explode(' ',$this->input->post('nama_nasabah')));
			$data=array(
				'nm_nasabah' 	=> $this->input->post('nama_nasabah'),
				'jk'			=> $this->input->post('jk'),
				'alamat'		=> $this->input->post('alamat'),
				'lati'			=> $this->input->post('lati'),
				'long'			=> $this->input->post('long'),
				'hp'			=> $this->input->post('no_hp'),
				'username'		=> $username[0].substr($this->input->post('no_hp'),-3),
				'password'		=> substr($this->input->post('no_hp'),-3),
			);
			$this->Nasabah_model->insertNasabah($data);	
		}
		$this->session->set_flashdata('message', 'Tambah nasabah sukses');
        redirect(site_url('nasabah'));
	}
	function daftar_perusahaan(){
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
					move_uploaded_file($file_tmp,"C:/xampp/htdocs/simba/img/".$file_name);
					echo "Success";
				}else{
					print_r($errors);
				}
			}
		$data=array(
			'nama_perusahaan'	=> $this->input->post('nama_perusahaan'),
			'alamat'			=> $this->input->post('alamat'),
			'email'				=> $this->input->post('email'),
			'password'			=> md5($this->input->post('password')),
			'status'			=> '0',
			'img'				=> $file_name,
		);
		$this->Nasabah_model->insertPerusahaan($data);
		$this->session->set_flashdata('message', 'Tambah nasabah sukses');
        redirect('../contact.php?d=1');
	}

	function daftar()
	{
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
				move_uploaded_file($file_tmp,"C:/xampp/htdocs/simba/img/".$file_name);
				echo "Success";
			}else{
				print_r($errors);
			}
			}
			
			$data=array(
				'nm_nasabah' 	=> $this->input->post('nama'),
				'jk'			=> $this->input->post('jk'),
				'alamat'		=> $this->input->post('alamat'),
				'lati'			=> $this->input->post('lati'),
				'long'			=> $this->input->post('long'),
				'hp'			=> $this->input->post('no_hp'),
				'username'		=> $this->input->post('username'),
				'password'		=> md5($this->input->post('password')),
				'status'		=> '0',
				'img'			=> $file_name,
			);
			$this->Nasabah_model->insertNasabah($data);	
			$cari=$this->Nasabah_model->searchByNama($this->input->post('nama'),$this->input->post('no_hp'));
			$data2=array(
				'id_nasabah'	=> $cari->id_nasabah,
				'tgl'		 	=> date("Y-m-d"),
				'jumlah'		=> '0',
			);
			// print_r($data2);
		
			$this->Nasabah_model->insertTabungan($data2);	
		
		$this->session->set_flashdata('message', 'Tambah nasabah sukses');
		redirect('../contact.php?d=1');
	}

	public function detailNasabah($data){
		$result=$this->Nasabah_model->searchById($data);
		$data=array(
			'data'		=> $result,
			'tittle'		=>'Detail Nasabah',
		);
		$this->template->display('admin/kelola_nasabah/form_detail_nasabah',$data);
	}

	function update(){
		$this->_rules();
        if ($this->form_validation->run() == FALSE) {
          $this->create();
        } else {
			
			$data=array(
				'nm_nasabah' 	=> $this->input->post('nama_nasabah'),
				'jk'			=> $this->input->post('jk'),
				'alamat'		=> $this->input->post('alamat'),
				'lati'			=> $this->input->post('lati'),
				'long'			=> $this->input->post('long'),
				'hp'			=> $this->input->post('no_hp'),
				'username'		=> $this->input->post('username'),
				'password'		=> $this->input->post('password'),
				'status'		=> $this->input->post('status'),
			);
			$this->Nasabah_model->updateNasabah($data,$this->input->post('id_nasabah'));	
		}
		$this->session->set_flashdata('message', 'Update nasabah sukses');
        redirect(site_url('nasabah'));
	}

	function updateNasabah(){

			$data=array(
				'nm_nasabah' 	=> $this->input->post('nama_nasabah'),
				'jk'			=> $this->input->post('jk'),
				'alamat'		=> $this->input->post('alamat'),
				'lati'			=> $this->input->post('lati'),
				'long'			=> $this->input->post('long'),
				'hp'			=> $this->input->post('no_hp'),
				'username'		=> $this->input->post('username'),
				'password'		=> $this->input->post('password'),
				'status'		=> $this->input->post('status'),
			);
			$this->Nasabah_model->updateNasabah($data,$this->input->post('id_nasabah'));	
		
		$this->session->set_flashdata('message', 'Update nasabah sukses');
        redirect('../tabungan.php?m=succes');
	}

	function pengajuan(){
		$data=array(
			'id_nasabah'	=> $this->input->post('id_nasabah'),
			'tgl'			=> date('Y-m-d'),
			'nominal'		=> $this->input->post('nominal'),
			'status'		=> 0,
		);
		// print_r($data);
		$this->Nasabah_model->pengajuanAmbil($data);

		redirect('../tabungan.php?p=succes');
	}

	function delete($data){
		
		if (!null==$data) {
			$row=$this->Nasabah_model->delete($data);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('nasabah'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('nasabah'));
        }
	}

	public function _rules(){
	$this->form_validation->set_rules('nama_nasabah', 'nama_nasabah', 'trim|required');
	$this->form_validation->set_rules('jk', 'jk', 'trim|required');
	$this->form_validation->set_rules('no_hp', 'no hp', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
	}
	

}

?>