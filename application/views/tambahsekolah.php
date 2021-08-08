<!doctype html>
<html lang="en">
  <head>
  <link href="<?=base_url()?>assets/img/favicon.png" rel="icon">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!-- Favicons -->
    <link href="<?=base_url()?>assets/img/favicon.png" rel="icon">
    <link href="<?=base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">


  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?=base_url()?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="<?=base_url()?>assets/css/style.css" rel="stylesheet">
    <title>Tambah Sekolah</title>
  </head>
  <body  >
  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <i class="icofont-envelope"></i> <a>ppdb.disdikbud@gmail.com</a>
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

      <img src="<?=base_url()?>assets/img/favicon.png" alt="" width="40px"><h2 class="logo mr-auto"><a href="#">&nbsp;DISDIKBUD<br>&nbsp;KAB. BIREUEN<span></span></a></h2></img>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  
    <div class="container text-center">
    <br>
<h2 class="text-dark" style="margin-top:10px;">TAMBAH SEKOLAH</h2>
<hr>
</div>
<br>

    <div class="container">
    <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>DATA SEKOLAH</b></a><br><br>
    <form action="<?=base_url('hal/insertsekolah')?>" method="post">
    <div class="row">
    <div class="col">
    <div class="container">
        
        <div class="form-group" hidden>
        <label for=""><b>ID SEKOLAH: </b></label>
        <input type="text" name="id_sekolah" class="form-control" value="<?= hash('md5', rand(10,10000000000000000));?>"  placeholder="id" required>
        </div>  

        <div class="form-group" hidden>
        <label for=""><b>KOWIL </b></label>
        <input type="text" name="kode_wilayah" class="form-control" value="0"  required>
        </div>  

        <div class="form-group">
        <label for=""><b>NPSN SEKOLAH: </b></label>
        <input type="text" name="npsn" class="form-control" maxlength="15" placeholder="NPSN" required>
        </div>  

        <div class="form-group">
        <label for=""><b>STATUS SEKOLAH :</b></label>
        <select class="form-control"  name="status_sekolah">
        <option value="1">Negeri</option>
        <option value="2">Swasta</option>
        </select>
        </div>  

        <div class="form-group">
        <label for=""><b>ALAMAT JALAN : </b></label>
        <input style="text-transform:uppercase" type="text" name="alamat_jalan" class="form-control" placeholder="Nama Jalan" maxlength="190" required>
        </div>  

        </div>    
        </div>

    <div class="col">
        <div class="container">
        <div class="form-group">
        <label for=""><b>NAMA SEKOLAH :</b></label>
        <input type="text" name="nama_sekolah" class="form-control" placeholder="NAMA SEKOLAH" maxlength="200" style="text-transform:uppercase" required>
        </div>  

        <div class="form-group">
        <label for=""><b>BENTUK PENDIDIKAN :</b></label>
        <select class="form-control"  name="bentuk_pendidikan">
        <option value="5">SD</option>
        <option value="9">MI/MIN</option>
        <option value="45">LAINNYA</option>
        </select>
        </div>  

        <div class="form-group">
        <label for=""><b>DESA KELURAHAN :</b></label>
        <input style="text-transform:uppercase" type="text" name="desa_kelurahan" class="form-control" placeholder="Nama Desa" maxlength="200" required>
        </div>  
        </div>    
        </div>
        </div>
       
        <button type="submit" id="btn" class="btn btn-primary form-control font-weight-bold">TAMBAH SEKOLAH</button><br><br>
        </form>

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

  </body>
</html>