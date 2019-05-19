

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
                        <form action="<?php echo base_url('transaksi/tambah_transaksi')?>" method="post" class="form" novalidate="">
                            <div class="form-group row">
                                <label class="col-md-2 offset-md-2">Petugas</label>
                                <div class="col-md-6 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="<?php echo ucwords($this->session->userdata('nama')); ?>" value="<?php echo ucwords($this->session->userdata('nama')); ?>" disabled>
                                    <input type="hidden" name="petugas" class="form-control" placeholder="<?php echo ucwords($this->session->userdata('nama')); ?>" value="<?php echo ucwords($this->session->userdata('nama')); ?>">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 offset-md-2">Nasabah</label>
                                <div class="col-md-6 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="" value="<?php echo $nasabah ?>"  disabled >
                                    <input type="hidden" class="form-control" placeholder="" value="<?php echo $nasabah ?>" name="nasabah"  >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-2 offset-md-2">Jenis Sampah </label>
                                    <div class="col-md-6 col-sm-9 col-xs-12">
                                        <select name="id_sampah" class="form-control">
                                            <option disabled="" selected="">-- Pilih Jenis --</option>
                                            <?php foreach ($sampah as $key ) {?>
                                                <option value="<?php echo $key->id_sampah ?>"><?php echo $key->id_sampah.'/'.$key->nm_sampah.'('.$key->harga_bl.' /Kg)' ?></option>
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
                            <input type="hidden" name="id_nasabah" value="<?php echo $id_nasabah ?>">
                            <input type="hidden" name="id_pembelian" value="<?php echo $id_pembelian ?>">
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
                                    <th style="width: 10px">#</th>
                                    <th>Nama Barang</th>
                                    <th style="width: 40px">Berat</th>
                                    <th >Harga</th>
                                    <th >Jumlah</th>
                                    <th > </th>
                                </tr>
                            <tr>
                            <?php
                            $i=1;
                            if(isset($list_pembelian)){
                                foreach ($list_pembelian as $key) {?>
                                    <tr>
                                    <td><?php echo $i++ ?></td>
                                    <td><?php echo $key->nm_sampah ?></td>
                                    <td><?php echo $key->berat ?></td>
                                    <td><?php echo $key->harga_bl ?></td>
                                    <td><?php echo 'Rp '.$key->total ?></td>
                                    <td style="text-align: center">
                                        <a href="<?php echo base_url('Transaksi/delete/'.$key->no.'/'.$id_nasabah.'/'.$id_pembelian)?>" onclick="return checkDelete()">
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
                                    if (isset($list_pembelian)) {
                                        foreach ($list_pembelian as $list ) {
                                            $hasil[]=$list->total;
                                           
                                            }
                                            echo 'Rp '.array_sum($hasil);
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
                <a href="<?php echo base_url('transaksi/submit') ?>" class="btn btn-success float-right">submit</a>
            </div><!--col -->
                
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<script language="javascript" type="text/javascript">
    function checkDelete(){
        return confirm('Yakin menghapus data ?');
    }
    </script>