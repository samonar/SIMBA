<form action="<?php echo base_url('nasabah/update')?>" method="post" class="col-md-6 offset-md-3">
    <div class="form-group row">
        <label class="col-md-4 ">Nama Nasabah </label>
        <div class="col-md-7">
            <input type="text" name="nama_nasabah" id="nama_nasabah" class="form-control" placeholder="" value="<?php echo$data->nm_nasabah ?>" required >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4">Jenis Kelamin</label>
        <div class="col-md-4">
            <select  name="jk" id="jk" class="form-control" placeholder="" required>
                <option disabled>--jenis kelamin--</option>
                <?php if($data->jk==l){
                    ?>  <option selected value="l">laki-laki</option>
                        <option value="p">perempuan</option>
                    <?php
                }else {?> <option value="l">laki-laki</option>
                    <option selected value="p">perempuan</option><?php }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4">No HP</label>
        <div class="col-md-7">
            <input type="number" name="no_hp" id="no_hp" class="form-control" value=<?php echo $data->hp ?>      required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4">alamat</label>
        <div class="col-md-7">
            <textarea class="form-control" name="alamat" id="alamat"  rows="2" required><?php echo $data->alamat ?></textarea >
        </div>
    </div>
    <!-- <div class="form-group row">
        <label class="col-md-4">Lokasi</label>
        <div class="col-md-7">
            <div class="row">
                <input type="text" name="lat" class="col-md-6 form-control " placeholder="latitude" value="<?php echo $data->lati ?>" >
                <input type="text" name="lon" class=" col-md-6 form-control " placeholder="longitude" value="<?php echo $data->long ?>">
            </div>
        </div>
    </div> -->
    <div class="form-group row">
        <label class="col-md-4">username</label>
        <div class="col-md-7">
            <input  type=" text" class="form-control" name="username" id="username"  rows="2" value="<?php echo $data->username ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4">password</label>
        <div class="col-md-7">
            <input type="password" class="form-control" name="password" id="password"  rows="2" value="<?php echo $data->password ?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4">Bukti</label>
        <div class="col-md-7">
            <img src="http://localhost/simba/img/<?php echo $data->img ?>" alt="" style="width: 130%;">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4">Status</label>
        <div class="col-md-4">
            <select  name="status" class="form-control" placeholder="" required>
                <?php
                if ($data->status==0) {?>
                    <option value="0" selected>belum aktif</option>
                    <option value="1" >aktif</option>
                <?php }else{?>
                    <option value="0" selected> belum aktif</option>
                    <option value="1" selected>aktif</option>
                <?php }
                  ?>
                
                
            </select>
        </div>
    </div>
    <input type="hidden" name="id_nasabah" value="<?php echo $data->id_nasabah ?>">
    
        <button type="cancel" class="btn btn-default ">
            <a href="<?php echo base_url("nasabah")?>">Cancel</a>
        </button>
        <button type="submit" class="btn btn-info float-right"> Edit </button>
</form>