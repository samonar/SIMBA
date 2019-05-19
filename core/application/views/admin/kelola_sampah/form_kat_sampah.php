<form action="<?php echo base_url().$action?>" method="post" class="col-md-6 offset-md-3">
    <!-- <?php
    if($action=='sampah/update_action'){?>
         <div class="form-group row">
        <label class="col-md-4 ">ID kat Sampah </label>
        <div class="col-md-7">
            <input type="text" name="id_kat_sampah" id="id_kat_sampah" class="form-control" placeholder="" value="<?php echo $id_kat_sampah ?>" required >
        </div>
    </div>
    <?php };
    ?> -->
    <div class="form-group row">
        <label class="col-md-4 ">Nama Sampah </label>
        <div class="col-md-7">
            <input type="text" name="nm_kategori" id="nm_kategori" class="form-control" placeholder="" value="<?php echo $nm_kategori ?>" required >
        </div>
    </div>
    <input type="hidden" name="id-asli" value="<?php echo $id_kat_sampah ?>">
        <button type="cancel" class="btn btn-default ">
            <a href="<?php echo base_url("sampah/list_kat_sampah")?>">Cancel</a>
        </button>
        <button type="submit" class="btn btn-info float-right"> <?php echo $button ?> </button>
</form>