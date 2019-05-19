<?php

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model(array('Admin_model'));
		$this->load->library(array('form_validation','upload','image_lib','template','session'));
		$this->load->helper(array('form', 'url', 'html'));	

	}

	//load form login
	function index(){
		
			$session_login=$this->session->userdata('logged_in');
			if($session_login==true){
				redirect('welcome');
			}else {
				$this->load->view('user/login');			
			}
	}
	
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => ($password),
			);
		$where1 = array(
			'username' => $username,
			'password' =>md5(($password)),
			'status'	=> '1',
			);
		$where2 = array(
			'email' => $username,
			'password' =>md5(($password)),
			'status'	=> '1',
			);
		$cek=$this->Admin_model->cek_login("tb_admin",$where)->row();
		$cek2=$this->Admin_model->cek_login_nasabah("tb_nasabah",$where1)->row();
		$cek3=$this->Admin_model->cek_login_perusahaan("tb_perusahaan",$where2)->row();
		if(isset($cek)){
			$data_session = array(
				'id' => $cek->id,
				'nama' => $cek->nama_pgw,
				'logged_in' => true,
				'status' => $cek->status,
				'bagian'	=>'admin',
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("welcome"));
		}elseif(!$cek2==null){
			// session_start();
			$_SESSION['id'] = $cek2->id_nasabah;
			$_SESSION['nama'] = $cek2->nm_nasabah;
			print_r($_SESSION['nama']);
			
			redirect('../session.php?id='.$cek2->id_nasabah.'&nama='.$cek2->nm_nasabah);
		}elseif(!$cek3==null){
			$data_session = array(
				'id' => $cek3->id_perusahaan,
				'nama' => $cek3->nama_perusahaan,
				'logged_in' => true,
				'status' => $cek3->status,
				'bagian'	=> 'perusahaan',
				);
			$this->session->set_userdata($data_session);
			redirect(base_url("welcome"));
		}else{
			  echo "<script type='text/javascript'>alert('login gagal!')</script>";
			  ?> <meta http-equiv="Refresh" content="0; url=../index.php"> <?php
		}
	}	

	// //cek password dan username
	// function proses_login(){
	// 	$session_login=$this->session->userdata('logged_in');
	// 	if($session_login==true){
	// 		redirect('welcome');
	// 	}

	// 	//menangkap input
	// 	$username=$this->input->post('username','true');
	// 	$password=$this->input->post('password','true');

	// 	//pencarian data di databasr
	// 	$temp_account=$this->User_model->check_user_account($username,$password)->row();

	// 	//cek jumlah data dari hasil pencarian
	// 	$num_account=count($temp_account);

	// 	//validation
	// 	$this->form_validation->set_rules('username','Username','required');
	// 	$this->form_validation->set_rules('password','Password','required');

	// 	if($this->form_validation->run()==FALSE){
	// 		$this->load->view('user/login');
	// 	}
	// 	else{
	// 		if($num_account>0){

	// 			$session_nik=$this->session->userdata('id_user');

	// 			$array_items=array(
	// 				'id_user'			=> $temp_account->id_user,
	// 				'username'		=> $temp_account->username,
	// 				'nama_jabatan'	=> $temp_account->jabatan,
	// 				'nama_user'	=> $temp_account->nama_pgw,
	// 				'image'			=> $temp_account->image,
	// 				'logged_in'		=> true,
	// 			);
    //     			$this->session->set_userdata($array_items);
	// 				redirect(site_url('welcome'));
	// 		}
	// 		else{
	// 			$this->session->set_flashdata('notification','Username dan Password Salah');
	// 			redirect(site_url('user'));
	// 		}
	// 	}
	// }

	//logout
	function logout(){
		
     	$this->session->sess_destroy();
		$this->load->view('user/login');
	}
}
?>
