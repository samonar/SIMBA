<?php

class Tabungan extends CI_Controller{

    function __construct(){
        parent::__construct();
        // $this->load->model(array('Tabungan_model'));
        $this->load->library(array('form_validation','upload','image_lib','template','session'));
        $this->load->helper(array('form','url','html'));
    }

    function index(){
        $data= array(
            'tittle' => 'Tabungan', 
        );

        $this->template->display('admin/kelola_tabungan/list_tabungan',$data);
    }
}

?>