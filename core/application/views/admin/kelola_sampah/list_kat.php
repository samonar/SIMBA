<button type="button" class="btn btn-outline-info btn-sm " style="margin-bottom: 10px;">
                    <a href="<?php echo base_url('sampah/createKatSampah') ?>">Tambah kategori</a>
                    <i class="fa fa-plus"></i> 
</button>
<table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <tr>
                    <th style="text-align: center; width: 40px;">No</th>
                    <th style="text-align: center; width: 40px;">ID Jenis</th>
                    <th style="text-align: center; width: 100px;">Jenis Sampah</th>
                    <!-- <th style="text-align: center; width: 100px;">Jumlah</th> -->
                    <th style="text-align: center; width: 100px;">Action</th>
                </tr>
        </thead>

        <tbody>
        <?php
        $j=1;
        foreach ($list_kat as $key) {
            ?>
            <tr>
            <td style="text-align: center"><?php echo $j++ ?></td>
            <td><?php echo $key->id_kat_sampah ?></td>
            <td style="text-align: center"><?php echo $key->nm_kategori ?></td>
            <!-- <td style="text-align: center"></td> -->
            <td style="text-align: center">
            <a href="<?php echo base_url('sampah/update/'.$key->id_kat_sampah)?>">
                    <span class="text-primary" style="font-size:21px">
							<i class="fa fa-eye"></i>
                    </span>
                </a> | 
                <a href="<?php echo base_url('sampah/delete/'.$key->id_kat_sampah)?>" onclick="return checkDelete()">
                <span class="text-primary" style="font-size:21px">
							<i class="fa fa-trash"></i>
                    </span>
                </a> 
            </td>
        </tr>
        <?php
        }
        ?>
            </tbody>
        </table>