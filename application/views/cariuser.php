<!doctype html>
<html lang="en">
  <head>
  <link href="<?=base_url()?>assets22/img/favicon.png" rel="icon">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<!-- Favicons -->
<link href="<?=base_url()?>assets22/img/favicon.png" rel="icon">
  <link href="<?=base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
  
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

 

  <!-- Template Main CSS File -->
  <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <title>SIM BPP SSB BIREUEN</title>
  </head>
  <body  >
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
      <i class="icofont-envelope"></i> <a>suk_ma2012@gmai.com</a>
      </div>
      <div class="social-links">
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex align-items-center">

    <img class="d-print-none" src="<?=base_url()?>assets22/img/favicon.png" alt="" width="40px"><h2  class="logo mr-auto d-print-none"><a href="<?=base_url()?>">&nbsp;SEKOLAH SUKMA BANGSA<br>&nbsp;BIREUEN<span></span></a></h2></img>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <!-- <li><a href="<?=base_url()?>hal/login">PENDAFTARAN NON NISN</a></li> -->
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  
    <div class="container text-center">
    <br><br>


    <div class="container">
    <?php foreach ($cariuser as $data) : ?>
    <?php
    $status = $data->status;  
    $hidden ="";
    if ($status=="LUNAS") {
      $hidden ="";
      $box ="";
      $class="btn btn-success";
      $alert="alert-success";
    }else {
      $hidden="";
      $box="";
      $alert="alert-danger";
      $class="btn btn-danger";
    }
    ?>



<div <?=$box;?> class="alert <?=$alert?>" role="alert" style="width:70%;margin: 0 auto;">
<b>STATUS BPP ANDA :</b><br><br>

<table class="table table-bordered table-dark font-weight-bold" id="example">
          <thead>
            <tr>
              <th scope="col">NIS</th>
              <th scope="col">NAMA</th>
              <th scope="col">KELAS</th>
              <th scope="col">JENJANG</th>
              <th scope="col">STATUS</th>
              <th scope="col">KETERANGAN TUNGGAKAN</th>
            </tr>
          </thead>
          <tbody class="text-dark ">
            <tr>
<?php foreach ($cariuser as $data) : ?>
            <td><?=$data->nis;?></td>
            <td><?=$data->nama;?></td>
            <td><?=$data->kelas;?></td>
            <td><?=$data->jenjang;?></td>
            <td><a class="<?=$class?> font-weight-bold"><?=$data->status;?></a></td>
            <td><?=$data->keterangan;?></td>
<?php endforeach;?>
</tr>
          </tbody>
          </table><br>
          <b>APABILA TERDAPAT KEKELIRUAN, HARAP MENGHUBUNGI BAGIAN TATA USAHA</b><br><br>

</div>

              <div class="text-center mt-3 font-weight-bold">
              <a class="btn btn-primary text-decoration-none font-weight-bold mb-3" href="<?=base_url('hal/cari')?>">CARI DATA KEMBALI</a> &nbsp;
              <a class="btn btn-dark text-decoration-none font-weight-bold mb-3" href="<?=base_url()?>">KEMBALI KE HALAMAN UTAMA</a>
              </div>

    </div>
  <?php endforeach ;?>


  </div>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>


<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
      "scrollX": true,
      "paging":   false,
        "ordering": false,
        "info":     false,
        "searching": false

    } )      ;
;
} );
</script>
  </body>
</html>