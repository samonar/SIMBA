<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Pembelian_model extends CI_Model{
        public $table='tb_pembelian';
        public $order='ASC';

        function searchId(){
            return $this->db->get($this->table)->result();
        }
        function insert($data){
            $this->db->insert($this->table,$data);
        }
        function searchById($id){
            $this->db->where('id_pembelian',$id);
            $this->db->join('tb_sampah','tb_pembelian.id_sampah=tb_sampah.id_sampah');
            return $this->db->get($this->table)->result();
        }
        function delete($no){
            $this->db->where('no', $no);
            $this->db->delete($this->table);
        }
    }
?>