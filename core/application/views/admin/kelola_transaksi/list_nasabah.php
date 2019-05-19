
<table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <tr>
                    <th style="text-align: center; width: 40px;">No</th>
                    <th style="text-align: center; width: 150px;">Nama Nasabah</th>
                    <th style="text-align: center; width: 30px;">Jenis Kelamin</th>
                    <th style="text-align: center; width: 100px;">Alamat</th>
                    <th style="text-align: center; width: 100px;">No HP</th>
                    <th style="text-align: center; width: 100px;">action</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $i=0;
        foreach ($list_nasabah as $key) {
            ?>
            <tr>
                <td style="text-align: center"> <?php echo ++$i ?> </td>
                <td><?php echo $key->nm_nasabah  ?></td>
                <td><?php if ($key->jk=="l") {
                    echo "laki-laki";
                }else{echo "perempuan"; }

                ?>
                </td>
                <td style="text-align: center"><?php echo $key->alamat  ?></td>
                <td style="text-align: center"><?php echo $key->hp  ?></td>
                <td style="text-align: center">
                <a href="<?php echo base_url('transaksi/transaksi/'.$key->id_nasabah)?>">
                    <span class="text-primary" style="font-size:21px">
							Tabung(<i class="fa fa-money"></i>)
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