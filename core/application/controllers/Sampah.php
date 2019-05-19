<?php

class Sampah extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(array('Sampah_model'));
        $this->load->library(array('form_validation','upload','image_lib','session','template'));
        $this->load->helper(array('form','url','html'));
        
    }
    //////////////function kategori sampah
    function list_kat_sampah(){
        $data=$this->Sampah_model->read();
        $data = array(
            'tittle' => 'Kategori', 
            'list_kat'  =>$data,
        );

        $this->template->display('admin/kelola_sampah/list_kat',$data);
    }
    function createKatSampah(){
        $data=array(
            'tittle'    => 'Tambah Kategori Sampah',
            'nm_kategori'	=> set_value('nm_kategori'),
            'id_kat_sampah'	=> set_value('id_kat_sampah'),
            'action'        => 'sampah/createKatSampahAct',
            'button'        => 'submit',
        );
        $this->template->display('admin/kelola_sampah/form_kat_sampah',$data);
    }
    function createKatSampahAct(){
        $data=array(
            'nm_kategori'   => $this->input->post('nm_kategori'),
        );
        $this->Sampah_model->insertKat($data);
        $this->session->set_flashdata('message', 'Tambah kategori sampah sukses');
        redirect(base_url('sampah/list_kat_sampah'));
    }
    function update($id){
        $result=$this->Sampah_model->searchById($id);
        $data=array(
            'tittle'    => 'Edit Kategori Sampah',
            'nm_kategori'	=> $result->nm_kategori,
            'id_kat_sampah'	=> $result->id_kat_sampah,
            'action'        => 'sampah/update_action',
            'button'        => 'edit',
        );
        $this->template->display('admin/kelola_sampah/form_kat_sampah',$data);
    }
    function update_action(){
        $data=array(
            'nm_kategori'   => $this->input->post('nm_kategori'),
            'id_kat_sampah'   => $this->input->post('id_kat_sampah'),
        );
        $this->Sampah_model->updateKat($data,$this->input->post('id_asli'));
        $this->session->set_flashdata('message', 'Tambah update sukses');
        redirect(base_url('sampah/list_kat_sampah'));
    }
    function delete($id){
        $this->Sampah_model->deleteKat($id);
        $this->session->set_flashdata('message','delete sukses');
        redirect(base_url('sampah/list_kat_sampah'));
    }

    
/////////////////function jenis sampah///////////////////
    function list_jns_sampah(){
        $result=$this->Sampah_model->readJns();
        $totSampah=$this->Sampah_model->totSampah();
        $data = array(
            'tittle'    => 'Jenis Sampah',
            'list'      => $result,
            'total'     => $totSampah,
        );
        $this->template->display('admin/kelola_sampah/list_jenis',$data);
    }
    function createJns(){
        $result=$this->Sampah_model->listKatSampah();
        $data=array(
            'tittle'        => 'Tambah Jenis Sampah',
            'id_sampah'	    => set_value('id_sampah'),
            'nm_sampah'	    => set_value('nm_sampah'),
            'id_kat_sampah' => $result,
            'harga_bl'      => set_value('harga_bl'),
            'harga_jl'      => set_value('harga_jl'),
            'stok'         => set_value('stok'),
            'button'        => 'submit',
            'action'        => 'sampah/createJns_action',
        );
        $this->template->display('admin/kelola_sampah/form_jns_sampah',$data);
    }
    function createJns_action(){
        $data=array(
            'nm_sampah'	    => $this->input->post('nm_sampah'),
            'id_kat_sampah' => $this->input->post('id_kat_sampah'),
            'harga_bl'      => $this->input->post('harga_bl'),
            'harga_jl'      => $this->input->post('harga_jl'),
            'stok'         => '0',
        );
        // print_r($data);
        $this->Sampah_model->insertJns($data);
        $this->session->set_flashdata('message','Tambah Jenis Sampah Berhasil');
        redirect(base_url('sampah/list_jns_sampah'));
    }
    function updateJns($id){
        $result=$this->Sampah_model->searchJns($id);
        $kat=$this->Sampah_model->listKatSampah();
        $data=array(
            'id_sampah' =>$id,
            'tittle'    => 'Edit Jenis Sampah',
            'id_sampah'	    => $result->id_sampah,
            'nm_sampah'	    =>  $result->nm_sampah, 
            'harga_bl'      => $result->harga_bl,
            'harga_jl'      => $result->harga_jl,
            'stok'         => $result->stok,
            'id_kat_sampah' => $kat,
            'action'    => 'sampah/updateJns_action',
            'button'    => 'Edit',
        );
        $this->template->display('admin/kelola_sampah/form_jns_sampah',$data);
    }
    function updateJns_action(){
        $data=array(
            'nm_sampah'	    => $this->input->post('nm_sampah'),
            'id_kat_sampah' => $this->input->post('id_kat_sampah'),
            'harga_bl'      => $this->input->post('harga_bl'),
            'harga_jl'      => $this->input->post('harga_jl'),
            'stok'         => '0',
        );
        $this->Sampah_model->updateJns($data,$this->input->post('id_sampah'));
        $this->session->set_flashdata('message','Update Jenis Sampah Berhasil');
        redirect(base_url('sampah/list_jns_sampah'));
    }
    function deleteJns($id){
        $this->Sampah_model->deleteJns($id);
        $this->session->set_flashdata('message','delete sukses');
        redirect(base_url('sampah/list_jns_sampah'));
    }
}

?>