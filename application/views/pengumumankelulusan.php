<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2 rounded" style="background:#5B5EA6">
          <div class="col">
          <br>
            <h1 class="m-0 text-light text-bold">PENGUMUMAN KELULUSAN</h1>
            <footer class="blockquote-footer text-light"><b>Approval Formulir dan Pengumuman Kelulusan</b></footer>
            <hr>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <div class="container">
    <?php foreach ($status as $data) : ?>
      <?php
      if ($data->approve_lulus == "Lulus") {
          $lulus="";
          $tidaklulus="hidden";
          $antrian="hidden";
      }  

      if ($data->approve_lulus == "Tidak Lulus") {
        $lulus="hidden";
        $tidaklulus="";
        $antrian="hidden";
    }  

    if ($data->approve_lulus == "Antrian") {
      $lulus="hidden";
      $tidaklulus="hidden";
      $antrian="";
  }  
      ?>
	  <?php endforeach ;?> 

    <?php 
    $keterangan="";
    
    foreach ($approval2 as $data) {
      $keterangan = $data->keterangan;
    }
    ?>


        <div class="alert alert-warning alert-dismissible fade show" role="alert" <?=$antrian;?>>
          <strong>Saat Ini Belum Ada Pengumuman Kelulusan, Harap Cek Secara Berkala</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="alert alert-danger alert-dismissible fade show" role="alert" <?=$tidaklulus;?>>
          <strong>Maaf! Anda Tidak Lulus Seleksi PPDB 2021/2022 Dengan Alasan :<br>
          <ul>
          <li><?=$keterangan;?></li></strong>
          <br>
          </ul>
          Harap Untuk Memilih Sekolah Lain Di Menu : Isi Formulir -> Poin 3. Sekolah Tujuan
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="alert alert-info alert-dismissible fade show" role="alert" <?=$lulus;?>>
          <strong><h2 class="text-bold mb-0">Selamat Anda Dinyatakan Lulus!</h2>
	             Silahkan Melakukan Pendaftaran Ulang Ke Sekolah Tujuan Dengan Membawa :</strong>
          <ul>
          <li>Foto Copy KK/Surat Keterangan Domisili</li>
          <li>Foto Copy KTP Orang Tua</li>
          <li>Foto Copy Akte Kelahiran</li>
          <li>Foto Copy Kartu NISN</li>
          <li>Semua Berkas Dimasukkan Ke Dalam :</li>
          </ul>
          <b><a href="#" class="btn btn-primary text-decoration-none rounded-pill"><b>Zonasi :  Map Biru</b></a> 
          <a href="#" class="btn btn-warning text-dark text-decoration-none rounded-pill"><b>Afirmasi :  Map Kuning</b></a> 
          <a href="#" class="btn btn-danger text-decoration-none rounded-pill"><b>Pindahan :  Map Merah</b></a> 
          <a href="#" class="btn btn-success text-decoration-none rounded-pill"><b>Prestasi :  Map Hijau</b></a></b>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      
  <br>
    </section>
</div>
</div>
<br>