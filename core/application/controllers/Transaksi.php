<?php

class Transaksi extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model(array('Nasabah_model','Pembelian_model','Sampah_model','Penjualan_model'));;
        $this->load->library(array('form_validation','upload','image_lib','session','template'));
        $this->load->helper(array('form','url','html','rupiah'));
    }

    function transaksiPerusahaan(){
        $result_sampah=$this->Sampah_model->readJns();
        // $result = $this->Nasabah_model->searchById($nasabah);
        $result_transaksi= $this->Penjualan_model->getAllDetail();
        $totSampah=$this->Sampah_model->totSampah();
        // print_r($result_transaksi);
        $tes=count(array_unique(array_column($result_transaksi, 'id_penjualan')));
        
        if(($tes)==0){
            $no=1;
        }else{
            $no=$tes+1;
        };
        
        $data = array(
            'tittle' => 'Transaksi', 
            'id_penjualan' => $no,
            'sampah'    => $result_sampah,
            'list_pembelian' => null,
            'total'     => $totSampah,
        );
        
        $this->template->display('admin/kelola_transaksi/form_transaksiPerusahaan',$data);
    }
    function tambah_transaksiPerusahaan(){
        // echo $this->input->post('perusahaan');
        $sampah=$this->Sampah_model->searchJns($this->input->post('id_sampah'));
        $jumlah=$sampah->harga_bl*$this->input->post('berat');
        $data2=array(
            'id_penjualan'  => $this->input->post('id_penjualan'),
            'id_sampah'     => $this->input->post('id_sampah'),
            // 'id_nasabah'    => $this->input->post('id_nasabah'),
            'berat'         => $this->input->post('berat'),
            'total'         => $jumlah,
            'tgl'           => date("Y-m-d"),
            'id_perusahaan' => $this->input->post('perusahaan'),
        );
        $this->Penjualan_model->insertDetail($data2);

        // $hit=$this->Nasabah_model->totTabunganNasabah($this->input->post('id_nasabah'));
        // $id=$this->Nasabah_model->tabunganNasabah($this->input->post('id_nasabah'));
        // $id_asli=$id->id_tabungan;
        // $dataTabungan=array(
        //     'id_nasabah'    => $this->input->post('id_nasabah'),
        //     'tgl'           => date('Y-m-d'),
        //     'jumlah'       => $hit->total,
        // );
        // $this->Nasabah_model->updatetabungan($id_asli,$dataTabungan);   
        

        $result_sampah=$this->Sampah_model->readJns();
        $result_penjualan=$this->Penjualan_model->searchById($this->input->post('id_penjualan'));
        $data=array(
            'tittle'        => 'Tambah Sampah',
            'nasabah'       => $this->input->post('nasabah'),
            'id_nasabah'    => $this->input->post('id_nasabah'),
            'id_penjualan'  =>$this->input->post('id_penjualan'),
            'sampah'        => $result_sampah,
            'button'        => 'submit',
            'list_penjualan' => $result_penjualan,
        );
        $this->template->display('admin/kelola_transaksi/form_transaksiPerusahaan',$data);
    }
    function deletePerusahan($no,$id_penjualan){
        $this->Penjualan_model->delete($no);
        $result_sampah=$this->Sampah_model->readJns();
        // $result = $this->Nasabah_model->searchById($id_nasabah);
        $result_penjualan=$this->Penjualan_model->searchById($id_penjualan);
        $data=array(
            // 'nasabah'       => $result->nm_nasabah,
            // 'id_perusahaan'    => $result->id_nasabah,
            'id_penjualan'  => $id_penjualan,
            'sampah'        => $result_sampah,
            'tittle'        => 'Tambah Kategori Sampah',
            'button'        => 'submit',
            'list_penjualan' => $result_penjualan,
        );
        // $hit=$this->Nasabah_model->totTabunganNasabah($id_nasabah);
        // $id=$this->Nasabah_model->tabunganNasabah($id_nasabah);
        // $id_asli=$id->id_tabungan;
        // $dataTabungan=array(
        //     'id_nasabah'    => $id_nasabah,
        //     'tgl'           => date('Y-m-d'),
        //     'jumlah'       => $hit->total,
        // );
        // $this->Nasabah_model->updatetabungan($id_asli,$dataTabungan); 
        $this->template->display('admin/kelola_transaksi/form_transaksiPerusahaan',$data);
    }
    function submitPerusahaan(){
        

        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
        //   $this->create();
        // echo 'eror';
        } else {
            $data2 = array(
                'id_penjualan' =>  $this->input->post('id_penjualan') , 
                'berat'         => $this->input->post('beratTot'),
                'total'         => $this->input->post('total'),
                'tgl'           => date('Y-m-d'),
                'id_perusahaan' => $_SESSION['id'],
                'status'        => '0',
            );
            $this->Penjualan_model->insert($data2);
        }
        $result=$this->Penjualan_model->getAll($_SESSION['id']);
        $data=array(
            'tittle'     => 'Transaksi Perusahaan',
            'list_transaksi'    => $result,
        );
        
        // $this->session->set_flashdata('message', 'Transaksi berhasil');
        $this->template->display('admin/kelola_transaksi/list_transaksiPerusahaan',$data);
    }

    function detailTransaksi($id){
        $result=$this->Penjualan_model->getById($id);
        $data = array(
            'tittle'        => 'Detail Transaksi',
            'list_detail' => $result, 
        );
        // print_r($result);
        $this->template->display('admin/kelola_transaksi/list_detailTransaksi',$data);
    }
    function listPembelian(){
        $result=$this->Penjualan_model->getAlladm();
        $data=array(
            'tittle'     => 'Transaksi Perusahaan',
            'list_transaksi'    => $result,
        );
        
        // $this->session->set_flashdata('message', 'Transaksi berhasil');
        $this->template->display('admin/kelola_transaksi/list_pembeliSampah',$data); 
    }
    function detailPembeli($id){
        $result=$this->Penjualan_model->getById($id);
        $data = array(
            'tittle'        => 'Detail Transaksi',
            'list_detail' => $result, 
        );
        // print_r($result);
        $this->session->set_flashdata('message', 'delete berhasil');
        $this->template->display('admin/kelola_transaksi/list_detailPembeli',$data);
    }
    function setujuiPembeli($id){
        $this->Penjualan_model->updateJual($id);
        // $this->Penjualan_model->deleteDetail($id);

        $result=$this->Penjualan_model->getAlladm();
        $data=array(
            'tittle'     => 'Transaksi Perusahaan',
            'list_transaksi'    => $result,
        );
        // $this->session->set_flashdata('message', 'Transaksi berhasil');
        $this->template->display('admin/kelola_transaksi/list_pembeliSampah',$data); 
    }
/////////////////////////////nasabah////////////////////
    function index(){
        $result=$this->Nasabah_model->read();
        $data=array(
			'tittle'     => 'Transaksi Nasbah',
			'list_nasabah'	=> $result,
		);
		// print_r($result);
        $this->template->display('admin/kelola_transaksi/list_nasabah',$data);
    }
    function submit(){
        $result=$this->Nasabah_model->read();
        $data=array(
			'tittle'     => 'Transaksi Nasbah',
			'list_nasabah'	=> $result,
		);
        // print_r($result);
        $this->session->set_flashdata('message', 'Transaksi berhasil');
        $this->template->display('admin/kelola_transaksi/list_nasabah',$data);
    }
    function transaksi($nasabah){
        $result_sampah=$this->Sampah_model->readJns();
        $result = $this->Nasabah_model->searchById($nasabah);
        $result_transaksi= $this->Pembelian_model->searchId();
        // print_r($result_transaksi);
        $tes=count(array_unique(array_column($result_transaksi, 'id_pembelian')));
        
        if(($tes)==0){
            $no=1;
        }else{
            $no=$tes+1;
        };
        
        $data = array(
            'tittle' => 'Transaksi', 
            'nasabah' => $result->nm_nasabah,
            'id_nasabah' => $result->id_nasabah,
            'id_pembelian' => $no,
            'sampah'    => $result_sampah,
            'list_pembelian' => null,
        );
        
        $this->template->display('admin/kelola_transaksi/form_transaksi2',$data);
    }

    function tambah_transaksi(){
        $sampah=$this->Sampah_model->searchJns($this->input->post('id_sampah'));
        $jumlah=$sampah->harga_bl*$this->input->post('berat');
        $data2=array(
            'id_pembelian'  => $this->input->post('id_pembelian'),
            'id_sampah'     => $this->input->post('id_sampah'),
            'id_nasabah'    => $this->input->post('id_nasabah'),
            'berat'         => $this->input->post('berat'),
            'total'         => $jumlah,
            'tgl'           => date("Y-m-d"),
            'petugas'       => $this->input->post('petugas'),
        );
        $this->Pembelian_model->insert($data2);

        $hit=$this->Nasabah_model->totTabunganNasabah($this->input->post('id_nasabah'));
        $id=$this->Nasabah_model->tabunganNasabah($this->input->post('id_nasabah'));
        $id_asli=$id->id_tabungan;
        $dataTabungan=array(
            'id_nasabah'    => $this->input->post('id_nasabah'),
            'tgl'           => date('Y-m-d'),
            'jumlah'       => $hit->total,
        );
        $this->Nasabah_model->updatetabungan($id_asli,$dataTabungan);   
        

        $result_sampah=$this->Sampah_model->readJns();
        $result_pembelian=$this->Pembelian_model->searchById($this->input->post('id_pembelian'));
        $data=array(
            'tittle'        => 'Tambah Kategori Sampah',
            'nasabah'       => $this->input->post('nasabah'),
            'id_nasabah'    => $this->input->post('id_nasabah'),
            'id_pembelian'  =>$this->input->post('id_pembelian'),
            'sampah'        => $result_sampah,
            'button'        => 'submit',
            'list_pembelian' => $result_pembelian,
        );
        $this->template->display('admin/kelola_transaksi/form_transaksi2',$data);
    }

    function delete($no,$id_nasabah,$id_pembelian){
        $this->Pembelian_model->delete($no);
        $result_sampah=$this->Sampah_model->readJns();
        $result = $this->Nasabah_model->searchById($id_nasabah);
        $result_pembelian=$this->Pembelian_model->searchById($id_pembelian);
        $data=array(
            'nasabah'       => $result->nm_nasabah,
            'id_nasabah'    => $result->id_nasabah,
            'id_pembelian'  => $id_pembelian,
            'sampah'        => $result_sampah,
            'tittle'        => 'Tambah Kategori Sampah',
            'button'        => 'submit',
            'list_pembelian' => $result_pembelian,
        );
        $hit=$this->Nasabah_model->totTabunganNasabah($id_nasabah);
        $id=$this->Nasabah_model->tabunganNasabah($id_nasabah);
        $id_asli=$id->id_tabungan;
        $dataTabungan=array(
            'id_nasabah'    => $id_nasabah,
            'tgl'           => date('Y-m-d'),
            'jumlah'       => $hit->total,
        );
        $this->Nasabah_model->updatetabungan($id_asli,$dataTabungan); 
        $this->template->display('admin/kelola_transaksi/form_transaksi2',$data);
    }

    function pengajuan(){
        $result=$this->Nasabah_model->pengajuan();
        $data=array(
			'tittle'     => 'Tarik Tunai',
			'list_nasabah'	=> $result,
		);
        $this->template->display('admin/kelola_pengajuan/list_nasabah',$data);
    }

    function update_pengajuan($id,$nasabah,$nominal){
        $result=$this->Nasabah_model->pengajuan();
        $hasil=$this->Nasabah_model->tabunganNasabah($nasabah);
        // echo $hasil->jumlah.'<br>';
        $ambil=$hasil->jumlah-$nominal;
        $data2 = array('status' =>'1' , );
        if ($ambil>=0) {
            $data = array(
                'jumlah' => $ambil, 
                'tgl'           => date("Y-m-d"),
            );
            $data3=array(
                'tittle'    => 'Tarik Tunai',
                'list_nasabah'	=> $result,
            );
            $this->Nasabah_model->update_statusPengajuan($id,$data2);
            $this->Nasabah_model->updatePengajuan($nasabah,$data);
            $this->session->set_flashdata('message', 'Pengajuan Diterima');     
            redirect(base_url('transaksi/pengajuan'));
        }else{
            $data3=array(
                'tittle'    => 'Tarik Tunai',
                'list_nasabah'	=> $result,
            );
            $data2 = array('status' =>'1' , );
            $this->Nasabah_model->update_statusPengajuan($id,$data2);
            $this->session->set_flashdata('message', 'Pengajuan Gagal(saldo tidak cukup)');     
            redirect(base_url('transaksi/pengajuan'));
        }
        
    }
    public function _rules(){
        $this->form_validation->set_rules('id_penjualan', 'id_penjualan', 'trim|required');
        $this->form_validation->set_rules('beratTot', 'beratTot', 'trim|required');
        $this->form_validation->set_rules('total', 'total hp', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
        }
}

?>