<form action="<?php echo base_url().$action?>" method="post" class="col-md-6 offset-md-3">
    <!-- <div class="form-group row">
        <label class="col-md-4 ">ID Jenis Sampah </label>
        <div class="col-md-7">
            <input type="text" name="id_sampah" id="id_sampah" class="form-control" placeholder="" value="<?php echo $id_sampah ?>" required >
        </div>
    </div> -->
    <div class="form-group row">
        <label class="col-md-4 ">Nama Sampah </label>
        <div class="col-md-7">
            <input type="text" name="nm_sampah" id="nm_sampah" class="form-control" placeholder="" value="<?php echo $nm_sampah ?>" required >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 ">Kategori Sampah </label>
        <div class="col-md-7">
            <select class="form-control" name="id_kat_sampah" id="id_kat_sampah">
                <option disabled selected>Pilih Kategori</option>
                <?php
                foreach ($id_kat_sampah as $key) {?>
                    <option value="<?php echo $key->id_kat_sampah ?>"><?php echo $key->nm_kategori ?></option>
                <?php }
                ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 ">Harga Beli Sampah </label>
        <div class="col-md-7">
            <input type="text" name="harga_bl" id="harga_bl" class="form-control" placeholder="" value="<?php echo $harga_bl ?>" required >
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 ">Harga Jual Sampah </label>
        <div class="col-md-7">
            <input type="text" name="harga_jl" id="harga_jl" class="form-control" placeholder="" value="<?php echo $harga_jl ?>" required >
        </div>
    </div>
    <input type="hidden" name="id-asli" value="<?php echo $id_sampah ?>">
        <button type="cancel" class="btn btn-default ">
            <a href="<?php echo base_url("sampah/list_jns_sampah")?>">Cancel</a>
        </button>
        <button type="submit" class="btn btn-info float-right"> <?php echo $button ?> </button>
</form>