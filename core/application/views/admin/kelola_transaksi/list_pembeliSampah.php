
<table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <tr>
                    <th style="text-align: center; width: 40px;">No</th>
                    <th style="text-align: center; width: 150px;">Nama Perusahaan</th>
                    <th style="text-align: center; width: 80px;">Berat Sampah</th>
                    <th style="text-align: center; width: 100px;">Total Harga</th>
                    <th style="text-align: center; width 30px;">Tgl</th>
                    <th style="text-align: center; width: 180px;">Status</th>
                    <th style="text-align: center; width: 100px;">action</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $i=0;
        foreach ($list_transaksi     as $key) {
            ?>
            <tr>
                <td style="text-align: center"> <?php echo ++$i ?> </td>
                <td><?php echo $key->nama_perusahaan  ?></td>
                <td style="text-align: center"><?php echo $key->berat  ?></td>
                <td style="text-align: center"><?php echo rupiah($key->total)  ?></td>
                <td style="text-align: center"><?php echo $key->tgl  ?></td>
                <td style="text-align: center"><?php 
                    if ($key->status==0) {
                        echo 'menunggu verifikasi';
                    }else{
                        echo "sudah diverifikasi";
                    }
                ?></td>
                <td style="text-align: center">
                <a href="<?php echo base_url('transaksi/detailPembeli/').$key->id_penjualan ?>">
                    <span class="text-primary" style="font-size:21px">
							detail(<i class="fa fa-search-plus"></i>)
                    </span>
                </a>
                <a href="<?php echo base_url('transaksi/setujuiPembeli/').$key->id_penjualan ?>">
                    <span class="text-primary" style="font-size:21px">
							setujui(<i class="fa fa-check"></i>)
                    </span>
                </a> 
                </td>
            </tr>
            
            <?php
        }
        ?>
        </tbody>
    </table>
    <script language="javascript" type="text/javascript">
    function checkDelete(){
        return confirm('Yakin menghapus data ?');
    }
    </script>