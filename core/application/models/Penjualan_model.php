<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Penjualan_model extends CI_Model{
        public $table='tb_penjualan';
        public $tb_detail='tb_penjualan_detail';
        public $order='ASC';

        
        function searchId(){
            return $this->db->get($this->table)->result();
        }
        function getById($id){
            $this->db->where('id_penjualan',$id);
            $this->db->join('tb_sampah','tb_penjualan_detail.id_sampah=tb_sampah.id_sampah');
            return $this->db->get($this->tb_detail)->result();
        }
        function getAll($id){
            $this->db->where('id_perusahaan',$id);
            // $this->db->join('tb_sampah','tb_penjualan_detail.id_sampah=tb_sampah.id_sampah');
            return $this->db->get($this->table)->result();
        }
        function getAlladm(){
            $this->db->select('berat,total,tgl,nama_perusahaan,tb_penjualan.status,id_penjualan');
            // $this->db->where('id_perusahaan',$id);
            $this->db->join('tb_perusahaan','tb_penjualan.id_perusahaan=tb_perusahaan.id_perusahaan');
            return $this->db->get($this->table)->result();
        }
        function getAllDetail(){
            return $this->db->get($this->tb_detail)->result();
        }
        function insert($data){
            $this->db->insert($this->table,$data);
        }
        function insertDetail($data){
            $this->db->insert($this->tb_detail,$data);
        }
        function searchById($id){
            $this->db->where('id_penjualan',$id);
            $this->db->join('tb_sampah','tb_penjualan_detail.id_sampah=tb_sampah.id_sampah');
            return $this->db->get($this->tb_detail)->result();
        }
        function delete($no){
            $this->db->where('id', $no);
            $this->db->delete($this->tb_detail);
        }
        function updateJual($no){
            $data=array(
                'status' => 1,
            );
            $this->db->where('id_penjualan', $no);
            $this->db->update($this->table,$data);
        }
        function updateDetail($no){
           
            $this->db->where('id_penjualan', $no);
            $this->db->update($this->tb_detail,$data);
        }
        
    }
?>