<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" href="<?=base_url()?>/logo.png" type="image/png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&family=Share+Tech+Mono&family=Varela+Round&display=swap" rel="stylesheet">    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

  <script type="text/javascript">
$(document).ready( function () {
    $('#example').DataTable({
    });

} );
</script>
    <title>PPDB SEKOLAH SUKMA BANGSA BIREUEN</title>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50" style="font-family: 'Varela Round', sans-serif;">
  
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
  <img src="<?=base_url()?>/logo.png" type="image/png" alt="" width="40px"><a class="navbar-brand text-info" href="#"> <b>&nbspPPDB SSB BIREUEN</b></a></img>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#sd" style="font-family: 'Share Tech Mono', monospace;">PENGUMUMAN KELULUSAN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#jadwal" style="font-family: 'Share Tech Mono', monospace;">KETENTUAN DAFTAR ULANG</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#kontak" style="font-family: 'Share Tech Mono', monospace;">KONTAK</a>
      </li>
    </ul>
  </div>
  </div>
</nav>


<div  id="sd" style="height: 1000px;padding-top:70px;background-color:#f5f8fd;">
<div class="container">
<div class="text-center">
          <div>
            <h2 class="featurette-heading"><b>PENGUMUMAN KELULUSAN PPDB<br><span class="text-info"> SEKOLAH SUKMA BANGSA BIREUEN TP. 2021/2022</span></b>
            <hr class="my-4" style="border-color: #F05F40;width: 20%;margin-top:0px;border-width: 3px;">
          </h2><br>

            <table class="table table-hover" id="example">
          <thead class="text-center">
            <tr>
              <th scope="col">NO PESERTA</th>
              <th scope="col">NAMA LENGKAP</th>
              <th scope="col">NISN</th>
              <th scope="col">SEKOLAH ASAL</th>
              <th scope="col">JENIS PENERIMAAN</th>
              <th scope="col">STATUS KELULUSAN</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	        foreach ($kelulusan as $data) : ?>
		<tr class="nomor text-center">
            <td><?php echo $data->id;?></td>
            <td><?php echo $data->nama_lengkap;?></td>
            <td><?php echo $data->nisn;?></td>
            <td><?php echo $data->sekolah_asal;?></td>
            <td><?php echo $data->jenis;?></td>
    <?php
    $approval= $data->approve_lulus;
      if ($approval=="Antrian") {
        $class="btn-warning";
      }elseif($approval=="Lulus"){
        $class="btn-info";
      }
      else{
        $class="btn-danger";
      }    
    ?>
            <td><a class="font-weight-bold text-uppercase <?= $class;?> rounded-pill" style="width:60px;text-decoration:none;">&nbsp&nbsp<?php echo $data->approve_lulus?>&nbsp&nbsp</a></td>
		</tr>
		<?php $i++; ?>
	<?php endforeach ;?>
          </tbody>
        </table>
          </div>
          
        </div>
</div>
</div>

<div  id="jadwal" style="height: 1700px;padding-top:70px;background-color:#f5f8fd;">
<div class="container">
<div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading"><b>KETENTUAN<span class="text-info"> DAFTAR ULANG</span></b></h2>
            <hr class="my-4" style="border-color: #F05F40;width: 35%;text-align: left;margin-left: 0;margin-top:0px;border-width: 3px;">
            <p class="lead font-weight-bold" style="margin-bottom:0px;"><b>Jadwal Pendaftaran Ulang : </b></p><br>
            <p class="lead font-weight-bold" style="margin-bottom:0px;"><b>TAHAP I </b></p>
            <ul>
            <li>20 April - 30 April 2021, Di Sekolah Sukma Bangsa Bireuen</li>
                <li>Senin-Kamis : 08.00-13.00 WIB</li>
                <li>Jumat-Sabtu : 08.00- 11.30 WIB</li> <br>

            </ul>

            <p class="lead font-weight-bold" style="margin-bottom:0px;"><b>TAHAP II </b></p>
            <ul>
            <li>24 Mei - 05 Juni 2021, Di Sekolah Sukma Bangsa Bireuen</li>
                <li>Senin-Kamis : 08.00-15.30 WIB</li>
                <li>Jumat-Sabtu : 08.00- 11.30 WIB</li> <br>

            </ul>
       
            <p class="lead font-weight-bold" style="margin-bottom:0px;"><b>Cara Pendaftaran Ulang : </b></p>
            <ul>
            <li>Login Kembali Pada <a href="<?=base_url('hal/login')?>"><b>Link Berikut</b></a></b>, Lalu Mengisi Form Registrasi Ulang > Daftar Ulang</li>
            <li>Mencetak dokumen Pendaftaran Ulang (Formulir, Surat Pernyataan & Pakta Integritas) Pada Aplikasi PPDB <a href="<?=base_url('hal/login')?>"><b>Link Berikut</b></a></li>
            <li>Melapor kepada panitia di Ruangan PPDB Sekolah Sukma Bangsa Bireuen dengan membawa berkas pendaftaran ulang diisi kedalam map (Map Merah : SD, Map Kuning : SMP, Map Hijau : SMA)</a></li>
            <li>Membayar Lunas Biaya Pendidikan sesuai dengan ketentuan sekolah</li>
            <li>Mengembalikan Map Pendaftaran Ulang kepada Panitia</li>
            </ul><br>


            <p class="lead font-weight-bold" style="margin-bottom:0px;"><b>Kelengkapan Berkas : </b></p>
            <ul>
            <li><i>Photocopy</i> Akta Kelahiran <b>1 Lembar</b></li> 
            <li><i>Photocopy</i> Kartu Keluarga (KK) <b>1 Lembar</b></li> 
            <li><i>Photocopy</i> KTP Orang Tua <b>1 Lembar</b></li> 
            <li><i>Photocopy</i> Kartu NISN/ Surat Keterangan NISN <b>1 Lembar</b></li> 
            <li>Pasfoto terbaru layar merah ukuran 3x4 cm dan 2x3 cm <b>masing-masing 2 lembar</b></li> 
            <li><i>Photocopy</i> Ijazah/Surat Keterangan Lulus <b>1 lembar</b></li> 
            <li>Surat Pernyataan Orang Tua (Tersedia Di Aplikasi PPDB) <b>1 lembar (materai 6.000 disediakan sendiri oleh ortu)</b></li>
            <li>Surat Pakta Integritas (Tersedia Di Aplikasi PPDB) <b>1 lembar (materai 6.000 disediakan sendiri oleh ortu)</b></li>
            <li>Menunjukkan Slip Pembayaran BPP resmi dari TU <b>(Pada Saat Pendaftaran Ulang)</b></li>
            <li>Menunjukkan Slip Biaya Perawatan Sekolah resmi dari TU <b>(Pada Saat Pendaftaran Ulang)</b></li>
            <li>Menunjukkan Slip Pembayaran Paket Seragam resmi dari Koperasi Sekolah SSB Bireuen <b>(Pada Saat Pendaftaran Ulang)</b></li>
            <li><i>Photocopy</i> Rapor dan Sertifikat Prestasi <b>(Jalur alumni dan prestasi)</b></li> 
            </ul>
            </div>

          <div class="col-md-5">
            <img class=" img-fluid mx-auto" src="<?=base_url()?>/jadwal.JPG" alt="Generic placeholder image">
          </div>
          <p class="text-danger" style="font-size:12px;"><b>Dokumen Tersebut Diatas Dibawa Dan Disatukan Dalam Map Berwarna Merah Saat Pendaftaran Ulang. Harap Memakai Masker Dan Menjaga Protokol Kesehatan Saat Proses Pendaftaran Ulang.</b></p> 


        </div>
</div>
</div>

<div  id="kontak" style="height: 550px;padding-top:70px;">
<div class="container">
        <div class="row featurette">
          <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading"><b>KONTAK<span class="text-info"> PANITIA DAFTAR ULANG</span></b></h2>
          <hr class="my-4" style="border-color: #F05F40;width: 35%;text-align: left;margin-left: 0;margin-top:0px;border-width: 3px;">
            <p class="lead" style="margin-bottom:0px;">Alamat : </p>
            <p>Jln. Banda Aceh - Medan, Desa Cot Keutapang Kecamatan Jeumpa, Kabupaten Bireuen, 24251 Provinsi Aceh, Indonesia</p>
            
            <p class="lead" style="margin-bottom:0px;">Telepon : </p>
            <p>(0644) 324985/328996</p>

            <p class="lead" style="margin-bottom:0px;">Panitia PPDB : </p>
            <p style="margin-bottom:0px;">085377137849 - Helmiati (WhatsApp)</p>
            <p>085206743404 - Amrul Hakim (WhatsApp)</p>

            <p class="lead" style="margin-bottom:0px;">E-Mail : </p>
            <p>suk_ma2012@yahoo.com</p>
            
          </div>
          <div class="col-md-4 order-md-1">
            <img class=" img-fluid mx-auto" src="<?=base_url()?>/kontak.jpeg" width="300px" alt="Generic placeholder image">
          </div>
        </div>
</div>
</div>

<hr class="featurette-divider">
<footer class="container" ID="kontak">
        <p class="float-right"><a href="#">Kembali Ke Atas</a></p>
        <p>&copy; 2021 Sekolah Sukma Bangsa Bireuen. &middot; <a href="http://www.sukmabangsabireuen.sch.id/">Website</a> &middot; <a href="https://www.facebook.com/profile.php?id=100013199972355">Facebook</a></p>
      </footer>
    </main>




    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>



<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
      "lengthChange": false,
      "pageLength": 5 ,
      "oLanguage": {
      "sSearch": "Cari Nama : ",
      "scrollX": true


 }

    } );
} );
</script>
  </body>
</html>