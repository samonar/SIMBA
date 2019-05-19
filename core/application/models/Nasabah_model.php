<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Nasabah_model extends CI_Model{
        public $table='tb_nasabah';
        public $id='id_nasabah';
        public $order='ASC';
    

        //////////////perusahaan//////////////////////////
        function readPerusahaan(){
            return $this->db->get('tb_perusahaan')->result();
        }
        function deletePerusahaan($id){
            $this->db->where('id_perusahaan', $id);
            $this->db->delete('tb_perusahaan');
        }
        function searchByIdPerusahaan($data){
            $this->db->where('id_perusahaan',$data);
            return $this->db->get('tb_perusahaan')->row();
        }
        function updatePerusahaan($data,$id){
            $this->db->where('id_perusahaan', $id);
            $this->db->update('tb_perusahaan',$data);
        }
        

        ///////////////////////nasabah////////////////////
        function insertNasabah($data){
            $this->db->insert($this->table,$data);
        }
        function insertPerusahaan($data){
            $this->db->insert('tb_perusahaan',$data);
        }
        function insertTabungan($data){
            $this->db->insert('tb_tabungan',$data);
        }
        function pengajuanAmbil($data){
            $this->db->insert('tb_pengajuan',$data);
        }

        function read(){
            return $this->db->get($this->table)->result();
        }

        function searchById($data){
            $this->db->where('id_nasabah',$data);
            return $this->db->get($this->table)->row();
        }
        function searchByNama($nm,$hp){
            $this->db->where('nm_nasabah',$nm);
            $this->db->where('hp',$hp);
            return $this->db->get($this->table)->row();
        }

        function updateNasabah($data,$id){
            $this->db->where($this->id, $id);
            $this->db->update($this->table,$data);
        }

        function updatetabungan($id,$data){
            $this->db->where('id_tabungan', $id);
            $this->db->update('tb_tabungan',$data);
        }

        function updatePengajuan($id,$data){
            $this->db->where('id_nasabah', $id);
            $this->db->update('tb_tabungan',$data);
        }

        function delete($id){
            $this->db->where($this->id, $id);
            $this->db->delete($this->table);
        }

        function totTabunganNasabah($id){
            $this->db->select_sum('total');
            $this->db->where('id_nasabah',$id);
            return $this->db->get('tb_pembelian')->row();
        }

        function tabunganNasabah($id){
            $this->db->join('tb_tabungan','tb_nasabah.id_nasabah=tb_tabungan.id_nasabah');
            $this->db->where('tb_nasabah.id_nasabah',$id);
            return $this->db->get('tb_nasabah')->row();
        }
        function pengajuan(){
            $this->db->join('tb_nasabah','tb_pengajuan.id_nasabah=tb_nasabah.id_nasabah');
            $this->db->where('tb_pengajuan.status','0');
            return $this->db->get('tb_pengajuan')->result();
        }
        function update_statusPengajuan($id,$data){
            $this->db->where('id',$id);
            $this->db->update('tb_pengajuan',$data);
        }
    }   
    
?>