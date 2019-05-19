<button type="button" class="btn btn-outline-info btn-sm " style="margin-bottom: 10px;">
                    <a href="<?php echo base_url('sampah/createJns') ?>">Tambah Jenis</a>
                    <i class="fa fa-plus"></i> 
</button>
<table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <tr>
                    <th style="text-align: center; width: 10px;">No</th>
                    <th style="text-align: center; width: 40px;">Kode Sampah</th>
                    <th style="text-align: center; width: 250px;">Nama Sampah</th>
                    <th style="text-align: center; width: 100px;">Harga Beli</th>
                    <th style="text-align: center; width: 100px;">Harga Jual</th>
                    <th style="text-align: center; width: 100px;">Stok</th>
                    <th style="text-align: center; width: 150px;">action</th>
                </tr>
        </thead>

        <tbody>
        <?php 
        $i=1;
        $j=0;
        foreach ($list as $key) {?>
            <tr>
                <td style="text-align: center"><?php echo $i++ ?></td>
                <td><?php echo $key->id_sampah ?></td>
                <td style="text-align: "><?php echo $key->nm_sampah ?></td>
                <td style="text-align: center"><?php echo $key->harga_bl ?></td>
                <td style="text-align: center"><?php echo $key->harga_jl?></td>
                <td style="text-align: center"><?php if(isset($total[$j])){
                    echo $total[$j++]->berat ;
                }else{
                    echo '0';
                }
                     ?>(kg)</td>
                <td style="text-align: center">| <a href="updateJns/<?php echo  $key->id_sampah ?>">edit</a> | <a href="deleteJns/<?php echo  $key->id_sampah ?>">hapus</a> |</td>
            </tr>    
        <?php };
        ?>
            </tbody>
        </table>