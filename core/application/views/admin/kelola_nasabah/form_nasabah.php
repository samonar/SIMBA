<form action="<?php echo base_url('nasabah/create_action')?>" method="post" class="col-md-6 offset-md-3">
    <div class="form-group row">
        <label class="col-md-4 ">Nama Nasabah </label>
        <div class="col-md-7">
            <input type="text" name="nama_nasabah" id="nama_nasabah" class="form-control" placeholder=""required >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4">Jenis Kelamin</label>
        <div class="col-md-4">
            <select  name="jk" id="jk" class="form-control" placeholder="" required>
                <option disabled selected value="l">--jenis kelamin--</option>
                <option value="l">laki-laki</option>
                <option value="p">perempuan</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4">No HP</label>
        <div class="col-md-7">
            <input type="number" name="no_hp" id="no_hp" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4">alamat</label>
        <div class="col-md-7">
            <textarea class="form-control" name="alamat" id="alamat"  rows="2" required></textarea >
        </div>
    </div>
    <!-- <div class="form-group row">
        <label class="col-md-4">Lokasi</label>
        <div class="col-md-7">
            <div class="row">
                <input type="text" name="lat" class="col-md-6 form-control " placeholder="latitude">
                <input type="text" name="lon" class=" col-md-6 form-control " placeholder="longitude">
            </div>
        </div>
    </div> -->

    
        <button type="cancel" class="btn btn-default ">
            <a href="<?php echo base_url("nasabah")?>">Cancel</a>
        </button>
        <button type="submit" class="btn btn-info float-right">Simpan</button>
</form>