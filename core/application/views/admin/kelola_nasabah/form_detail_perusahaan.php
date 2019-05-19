<form action="<?php echo base_url('nasabah/updatePerusahaan')?>" method="post" class="col-md-6 offset-md-3">
    <div class="form-group row">
        <label class="col-md-4 ">Nama Nasabah </label>
        <div class="col-md-7">
            <input type="text" name="nama_nasabah" id="nama_nasabah" class="form-control" placeholder="" value="<?php echo$data->nama_perusahaan ?>" disabled >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4">Email</label>
        <div class="col-md-7">
            <input  type=" text" class="form-control" name="username" id="username"  rows="2" value="<?php echo $data->email ?>" disabled>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4">Password</label>
        <div class="col-md-7">
            <input  type="password" class="form-control" name="password" id="password"  rows="2" value="<?php echo $data->password ?>" disabled>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4">alamat</label>
        <div class="col-md-7">
            <textarea class="form-control" name="alamat" id="alamat"  rows="2" disabled><?php echo $data->alamat ?></textarea >
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
    <input type="hidden" name="id_perusahaan" value="<?php echo $data->id_perusahaan ?>">
    
        <button type="cancel" class="btn btn-default ">
            <a href="<?php echo base_url("nasabah/listPerusahaan")?>">Cancel</a>
        </button>
        <button type="submit" class="btn btn-info float-right"> Edit </button>
</form>