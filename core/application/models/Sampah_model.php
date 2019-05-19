<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampah_model extends CI_Model{
    public $table='tb_kat_sampah';
    public $id='id_kat_sampah';
    public $order='ASC';

    //////////////function kategori samaph///////////////
    function read(){
        return $this->db->get($this->table)->result();
    }
    function insertKat($data){
        $this->db->insert($this->table,$data);
    }
    function searchById($id){
        $this->db->where('id_kat_sampah',$id);
        return $this->db->get($this->table)->row();
    }
    function updateKat($data,$id){
        $this->db->where('id_kat_sampah',$id);
        $this->db->update($this->table,$data);
    }
    function deleteKat($id){
        $this->db->delete($this->table,array('id_kat_sampah'=>$id));
    }

    /////////////////function jenis sampah//////////////
    function readJns(){
        return $this->db->get('tb_sampah')->result();
    }
    function listKatSampah(){
        return $this->db->get('tb_kat_sampah')->result();
    }
    function insertJns($data){
        $this->db->insert('tb_sampah',$data);
    }
    function searchJns($id){
        return $this->db->get_where('tb_sampah',array('id_sampah' =>$id))->row();
    }
    function updateJns($data,$id){
        $this->db->where('id_sampah',$id);
        $this->db->update('tb_sampah',$data);
    }
    function totSampah(){
        $this->db->select_sum('tb_pembelian.berat');
        $this->db->join('tb_sampah','tb_pembelian.id_sampah = tb_sampah.id_sampah');
        $this->db->group_by('tb_pembelian.id_sampah');
        return $this->db->get('tb_pembelian')->result();
    }
    function deleteJns($id){
        $this->db->delete('tb_sampah',array('id_sampah'=>$id));
    }

}
?>