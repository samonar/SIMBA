
<div class="content container-fluid">
            <form action="http://localhost/sppb/tagihan_bulanan/create_action.html" method="post" class="form" novalidate="">
        

        <div class="form-group row">
            <label class="col-md-2 offset-md-3">Petugas</label>
              <div class="col-md-4 col-sm-9 col-xs-12">
                <input type="text" class="form-control" placeholder="<?php echo ucwords($this->session->userdata('nama')); ?>" value="<?php echo ucwords($this->session->userdata('nama')); ?>" disabled>
              </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 offset-md-3">Nasabah</label>
              <div class="col-md-4 col-sm-9 col-xs-12">
                <input type="text" class="form-control" placeholder="" value="<?php echo $nasabah ?>" name="nasabah" disabled >
              </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 offset-md-3">Jenis Sampah </label>
                <div class="col-md-4 col-sm-9 col-xs-12">
                    <select name="kelas" class="form-control">
                        <option disabled="" selected="">-- Pilih Jenis --</option>
                                                <option value="">Logam</option>
                                                <option value="1" selected>Kertas</option>
                                                <option value="">Plastik</option>
                                                <option value="">Botol</option>
                                            </select>
                </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2 offset-md-3">Kategori Sampah </label>
                <div class="col-md-4 col-sm-9 col-xs-12">
                    <select name="kelas" class="form-control">
                        <option disabled="" selected="">-- Pilih Kategori --</option>
                                                <option value="">koran</option>
                                                <option value="" selected>kerdus</option>
                                                <option value="">hvs</option>
                                            </select>
                </div>
        </div>

        <div class="form-group row">
            <label class="col-md-2 offset-md-3">Berat Sampah</label>
                <div class="col-md-3 col-sm-9 col-xs-12">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Berat">
                  <div class="input-group-append">
                    <span class="input-group-text">/Kg</span>
                  </div>
                </div>
                </div>
        </div>

        <div class="form-group row">
            <label class="col-md-2 offset-md-3" for="name">Nominal  <span class="required"></span>
                        </label>
                <div class="col-md-4 col-sm-6 col-xs-12">
                
                    <input id="nominal" class="form-control col-md-9 col-xs-12" name="nominal" required="required" type="text" value="15,000" onkeypress="if(event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">
                    
                </div>
        </div>
                        <input type="hidden" name="id_nasabah" value="<?php echo $id_nasabah ?>">

                      <div class="form-group">
                        <div class="col-md-6 offset-5">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
      </div>