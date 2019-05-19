<a href="<?php echo base_url('transaksi/listPembelian') ?>">
<button type="button" name="" id="" class="btn btn-primary" btn-lg btn-block">Kembali</button>
</a> 

</br>
</br>
<table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <tr>
                    <th style="text-align: center; width: 40px;">No</th>
                    <th style="text-align: center; width: 150px;">Nama Sampah</th>
                    <th style="text-align: center; width: 150px;">Berat Sampah</th>
                    <th style="text-align: center; width: 100px;">Total Harga</th>
                    <th style="text-align: center; width: 100px;">Tgl</th>

            </tr>
        </thead>

        <tbody>
        <?php
        $i=0;
        foreach ($list_detail     as $key) {
            ?>
            <tr>
                <td style="text-align: center"> <?php echo ++$i ?> </td>
                <td><?php echo $key->nm_sampah  ?></td>
                <td><?php echo $key->berat  ?></td>
                <td style="text-align: center"><?php echo $key->total  ?></td>
                <td style="text-align: center"><?php echo $key->tgl  ?></td>
                
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