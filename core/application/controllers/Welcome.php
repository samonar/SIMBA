<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model(array('Saldo_model','Tagihan_siswa_kls_model','Jn_tagihan_model','Kelas_siswa_model','Siswa_model','Kelas_model','Pembayaran_model','User_model'));
		$this->load->library(array('form_validation','upload','image_lib','template','session'));
		$this->load->helper(array('form', 'url', 'html'));
		$session_login=$this->session->userdata('logged_in');
		if($session_login==true){
			// redirect('welcome/index');
		}else {
			redirect('login');
		}
		// $session_jabatan=$this->session->userdata('nama_jabatan');
		
	}
	
	public function index()
	{
		$data = array(
			'action' => site_url('absensi/finish_action'),
			'tittle'    	 => 'Dasboard',
			'menu2'                 => false,
			'page_header2'          => '',
			'active'                => '',
									'page_header'           => '', //judul halaman
			'icon_active'           => 'fa-sign-in',
			'icon_header'           => 'fa-book',
			'icon_header2'          => '',
			'deskripsi_page_header' => '',
			//'user_image'            => $user_data->image,
			//'user_nama'             => $user_data->nama_,
			//'user_jabatan'          => $user_data->jabatan,
		);
		$this->template->display('user/beranda_admin',$data);
	
	}
	
}