

<table class="table table-bordered table-striped" id="example1">
        <thead>
            <tr>
                <tr>
                    <th style="text-align: center; width: 40px;">No</th>
                    <th style="text-align: center; width: 150px;">Nama Perusahaan</th>
                    <th style="text-align: center; width: 100px;">email</th>
                    <th style="text-align: center; width: 100px;">Alamat</th>
                    <th style="text-align: center; width: 100px;">Status</th>
                    <th style="text-align: center; width: 100px;">action</th>
            </tr>
        </thead>

        <tbody>
        <?php
        $i=0;
        foreach ($list_perusahaan as $key) {
            ?>
            <tr>
                <td style="text-align: center"> <?php echo ++$i ?> </td>
                <td><?php echo $key->nama_perusahaan  ?></td>
                <td style="text-align: center"><?php echo $key->email  ?></td>
                <td style="text-align: center"><?php echo $key->alamat  ?></td>
                <td style="text-align: center"><?php if ($key->status==0) {?>
                    belum aktif
                <?php }else{?> aktif <?php }  ?></td>
                <td style="text-align: center">
                <a href="<?php echo base_url('nasabah/detailPerusahaan/'.$key->id_perusahaan)?>">
                    <span class="text-primary" style="font-size:21px">
							<i class="fa fa-eye"></i>
                    </span>
                </a> | 
                <a href="<?php echo base_url('nasabah/deletePerusahaan/'.$key->id_perusahaan)?>" onclick="return checkDelete()">
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
    <script language="javascript" type="text/javascript">
    function checkDelete(){
        return confirm('Yakin menghapus data ?');
    }
    </script>