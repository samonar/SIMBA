       <!-- Main content -->
       <style>
       .centered {
  position: absolute;
  top: 17%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.centered2 {
  position: absolute;
  top: 23%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>
        <section class="content">              
                <img class="img-responsive" src="<?php echo base_url()."assets/"?>/dist/img/simba.png" alt="Chania" width="100%" > 
                <h1 align=center class="centered " style="color:#325D6E">Selamat Datang <?php echo ucwords($this->session->userdata('nama')) ?></h1>
                <h4 align=center class="centered2 " style="margin-bottom: 22px;color:#325D6E">
                  <?php
                    // setting timezone
                    date_default_timezone_set('Asia/Jakarta');
                    /* script menentukan hari */
                    $array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
                    $hr = $array_hr[date('N')];

                    /* script menentukan tanggal */
                    $tgl= date('j');

                    /* script menentukan bulan */
                      $array_bln = array(1=>"Januari","Februari","Maret", "April", "Mei","Juni","Juli","Agustus","September","Oktober", "November","Desember");
                      $bln = $array_bln[date('n')];

                    /* script menentukan tahun */
                    $thn = date('Y');
                    /* script perintah keluaran*/
                    echo $hr . ", " . $tgl . " " . $bln . " " . $thn;
                  ?>
                </h4>
                
              
        </section>
        <!-- /.content -->
