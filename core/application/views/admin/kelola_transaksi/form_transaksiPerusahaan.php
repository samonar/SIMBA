<?php 
$this->load->helper('rupiah');
?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Form Transaksi</h3>
                    </div>
                    
                    <!-- /.card-header -->
                    <div class="card-body">
                   
                    </button>
                        <form action="<?php echo base_url('transaksi/tambah_transaksiPerusahaan')?>" method="post" class="form" novalidate="">
                            <div class="form-group row">
                                <label class="col-md-3 offset-md-1">Perusahaan</label>
                                <div class="col-md-6 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="<?php echo ucwords($this->session->userdata('nama')); ?>" value="<?php echo ucwords($this->session->userdata('nama')); ?>" disabled>
                                    <input type="text" name="perusahaan" class="form-control" value="<?php echo ucwords($this->session->userdata('id')); ?>">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-md-2 offset-md-2">Jenis Sampah </label>
                                    <div class="col-md-6 col-sm-9 col-xs-12">
                                        <select name="id_sampah" class="form-control">
                                            <option disabled="" selected="">-- Pilih Jenis --</option>
                                            <?php $j=0;
                                            foreach ($sampah as $key ) {?>
                                                <option value="<?php echo $key->id_sampah ?>"><?php echo $key->nm_sampah.'('.$key->harga_bl.' /Kg) stock='?>
                                                <?php if(isset($total[$j])){
                                                        echo $total[$j++]->berat ;
                                                    }else{
                                                        echo '0';
                                                    }
                                                        ?>(kg)
                                                </option>
                                            <?php } ?>
                                            
                                        </select>
                                    </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-md-2 offset-md-2">Berat Sampah</label>
                                    <div class="col-md-4 col-sm-9 col-xs-12">
                                        <div class="input-group mb-8">
                                            <input type="text" name="berat" class="form-control" placeholder="Berat">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">/Kg</span>
                                                </div>
                                        </div>
                                    </div>
                            </div>
                            <!-- <input type="hidden" name="id_nasabah" value="<?php echo $id_nasabah ?>"> -->
                            <input type="text" name="id_penjualan" value="<?php echo $id_penjualan ?>">
                            <div class="form-group">
                                <div class="col-md-6 offset-5">
                                <button type="submit" class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-info float-right">krim </button>
                                </div>
                            </div>
                        </form>
                    </div>

            

                    <!-- /.card-body -->
                </div><!-- /.card -->
            </div><!-- /.col -->
            
            <div class="col-md-6">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Daftar Transaksi</h3>
                    </div>
                <!-- /.card-header -->
                    <div class="card-body p-0">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <th >#</th>
                                    <th>Nama Barang</th>
                                    <th>Berat</th>
                                    <th style="width:21%; ">Harga</th>
                                    <th style="width:29%; ">   Jumlah </th>
                                    <th > </th>
                                </tr>
                            <tr>
                            <?php
                            $i=1;
                            if(isset($list_penjualan)){
                                foreach ($list_penjualan as $key) {?>
                                    <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $key->nm_sampah ?></td>
                                    <td><?php echo $beratTot[]=$key->berat ?></td>
                                    <td><?php echo rupiah($key->harga_bl) ?></td>
                                    <td><?php echo rupiah($key->total) ?></td>
                                    <td style="text-align: center">
                                        <a href="<?php echo base_url('Transaksi/deletePerusahan/'.$key->id.'/'.$id_penjualan)?>" onclick="return checkDelete()">
                                        <span class="text-primary" style="font-size:21px">
                                                    <i class="fa fa-trash"></i>
                                            </span>
                                        </a> 
                                    </td>
                                    </tr>
                                <?php 
                                }
                            }else{
                                
                            }
                            
                            ?>
                            </tr>
                            
                            
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="4">Total</td>
                                    <td><?php 
                                    if (isset($list_penjualan)) {
                                        foreach ($list_penjualan as $list ) {
                                            $hasil[]=$list->total;
                                           
                                            }
                                            echo rupiah(array_sum($hasil));
                                    } else {
                                        echo 'Rp 0';
                                    }
                                        ?>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                <!-- /.card-body -->
                </div>
                <form action="<?php echo base_url('transaksi/submitPerusahaan')?>" method="post">
               penjualan <input type="text" name="id_penjualan" value="<?php echo $id_penjualan ?>" >
                beratTOt <input type="text" name="beratTot" value="<?php if (isset($beratTot)) {
                    echo array_sum($beratTot);
                }else{
                    echo '0';
                }
                 ?>" >
                total <input type="text" name="total" value="<?php if (isset($hasil)) {
                     echo array_sum($hasil);
                 } ?>">
                 <button name="submit" type="submit" class="btn btn-success float-right">Submit</button>
                <!-- <a href="<?php echo base_url('transaksi/submitPerusahaan') ?>" class="btn btn-success float-right">submit</a> -->
                </form>
            </div><!--col -->
                
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<script language="javascript" type="text/javascript">
    function checkDelete(){
        return confirm('Yakin menghapus data ?');
    }
    </script>