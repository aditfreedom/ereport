<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
      <div class="row mb-2 rounded" style="background:#5B5EA6">
          <div class="col">
          <br>
            <h1 class="m-0 text-light text-bold">STATUS FORMULIR</h1>
            <footer class="blockquote-footer text-light"><b>Informasi Approval Formulir Pendaftaran</b></footer>
            <hr>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <div class="container">
    <?php foreach ($status as $data) : ?>
      <?php
      if ($data->approve_formulir == "Diterima") {
          $lulus="";
          $tidaklulus="hidden";
          $antrian="hidden";
      }  

      if ($data->approve_formulir == "Ditolak") {
        $lulus="hidden";
        $tidaklulus="";
        $antrian="hidden";
    }  

    if ($data->approve_formulir == "Antrian") {
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
          <strong>Saat Ini Belum Ada Pengumuman Approval, Harap Cek Secara Berkala</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="alert alert-danger alert-dismissible fade show" role="alert" <?=$tidaklulus;?>>
          <strong>Maaf! Formulir Anda Tidak Diterima Dengan Alasan:<br>
          <ul>
          <li><?=$keterangan;?></li>
          </ul>
          </strong>
          Setelah Memperbaiki, Harap Finalisasi Kembali
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="alert alert-info alert-dismissible fade show" role="alert" <?=$lulus;?>>
          <strong><h2 class="text-bold mb-0">Status Formulir : <a href="#" class="btn btn-danger text-decoration-none rounded-pill"><b>DITERIMA</b></a></b></h2>
	             Silahkan Cek Pengumuman Kelulusan Secara Berkala</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      
  <br>
    </section>
</div>
</div>
<br>