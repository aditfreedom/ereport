<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 rounded" style="background:#5B5EA6">
        <div class="col">
          <br>
          <h1 class="m-0 text-light text-bold">PENGISIAN FORMULIR</h1>
          <footer class="blockquote-footer text-light"><b>Mohon Diisi Formulir Pendaftaran Dengan Lengkap Dan Benar</b></footer>
          <hr>
          <a href="<?= base_url('user/isi_formulir/' . $id_pesertadidik) ?>" class="btn btn-danger" style="width:20%;">1. Pengisian Data Diri</a>&nbsp;&nbsp;<a href="<?= base_url('user/sekolahtujuan/' . $id_pesertadidik) ?>" style="width:20%;" class="btn btn-danger">2. Pilih Sekolah Tujuan</a>
          &nbsp;<a href="<?= base_url('user/upload_berkas/' . $id_pesertadidik) ?>" style="width:20%;" class="btn btn-danger">3. Upload Berkas</a>&nbsp;&nbsp;<a href="<?= base_url('user/finalisasi/' . $id_pesertadidik) ?>" style="width:20%;" class="btn btn-light">4. Finalisasi Pendaftaran</a>
          <br><br>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <?php foreach ($finalisasi as $data) : ?>
      <?php
      if ($data->status == "1") {
        $checked = "checked";
        $disabled = "disabled";
        $buttonclick = "";
      } else {
        $checked = "";
        $disabled = "";
        $buttonclick = "disabled";
      }
      ?>
    <?php endforeach ?>

    <?php
    if ($status2 == 0) {
      $hidden = "hidden";
      $box = "";
    }
    if ($status2 == 1) {
      $hidden = "";
      $box = "hidden";
    }
    ?>

    <div class="alert alert-warning alert-dismissible fade show" <?= $box; ?> role="alert">
      <strong>Mohon Untuk Mengupload Berkas Terlebih Dahulu</strong> Terima Kasih.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>

    <a <?= $hidden ?> href="#" class="btn rounded-pill text-left text-light" style="width:100%;background:#325288;"><b>FINALISASI PENDAFTARAN</b></a><br><br>

    <form data-url="<?= base_url('user/updatefinalisasi') ?>" method="post" id="form-finalisasi" >
      <div <?= $hidden ?> class="container">
        <div class="form-group">
             <div class="container shadow p-3 mb-3 bg-white rounded">
            <h3><b>PROSES FINALISASI</b></h3>
            <ol>
            <li>Pada tahap ini anda hanya perlu mengklik centang pada checkbox dibawah</li>
            <li>Pastikan semua kebenaran data karena data akan terkunci dan tidak bisa diedit kembali</li>
            <li>Harap Segera Finalisasi Agar Dinyatakan Sebagai Pendaftar Di Sekolah Tujuan <b>(Apabila Belum Finalisasi Belum Dianggap Mendaftar!)</b></li>
            </ol>
            <br>
            <input type="checkbox" id="status" name="status" value="1" required <?= $checked ?>> <label for="status" class="font-weight-normal"> <b>Dengan ini saya menyatakan bahwa semua informasi yang dimasukkan adalah benar.</b></p></label>
          </div>
            
            
          <div class="container shadow p-3 mb-3 bg-white rounded">
            <h5 class="text-uppercase"><b>Harap Membawa Berkas Ke Sekolah Tujuan : </b></h5>
              <ol>
              <li>Fotocopy Berkas Yang Telah Di Upload Pada Menu <b>Upload Berkas</b></li>
              <li>Print Out Formulir Pendaftaran <a href="<?=base_url('user/cetak_formulir');?>" class="btn btn-success rounded-pill <?=$buttonclick;?>">Download Disini</a></li>
              <li>Berkas Di Satukan Ke Dalam Map :</li>
              <b><a href="#" class="btn btn-primary text-decoration-none rounded-pill"><b>Zonasi :  Map Biru</b></a> 
                  <a href="#" class="btn btn-warning text-dark text-decoration-none rounded-pill"><b>Afirmasi :  Map Kuning</b></a> 
                  <a href="#" class="btn btn-danger text-decoration-none rounded-pill"><b>Perpindahan Tugas Orang Tua :  Map Merah</b></a> </b>
                  <a href="#" class="btn btn-success text-decoration-none rounded-pill"><b>Prestasi :  Map Hijau</b></a> </b>

              </ol>
          </div>

        
        </div>
      </div>
      <button <?= $hidden; ?> <?= $disabled; ?>  type="submit" id="btn" class="btn btn-primary font-weight-bold" style="width:100%;">FINALISASI PENDAFTARAN</button><br><br>
    </form>






</div>
</section>
<br>