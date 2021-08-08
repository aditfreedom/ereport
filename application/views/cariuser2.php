 
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
    <br>
</div>
<br>


    <div class="container">
    <?php foreach ($cariuser as $data) : ?>
    <?php
    $status = $data->status;  
    $jenjang = $data->jenjang;  
    $hidden ="";
    if ($status=="LUNAS" ) {
      $hidden ="";
      $box ="hidden";
    }else {
      $hidden="hidden";
      $box="";
    }

    if ($jenjang == "SMA") {
      $jenjangsma="";
      $jenjangsmp="hidden";
      $jenjangsd="hidden";

    }elseif ($jenjang == "SMP") {
      $jenjangsma="hidden";
      $jenjangsmp="";
      $jenjangsd="hidden";  }
      else {
        $jenjangsma="hidden";
        $jenjangsmp="hidden";
        $jenjangsd="";
                }

    ?>

<div <?=$box;?> class="alert alert-danger" role="alert">
<b>GAGAL MENCETAK KARTU</b><br>
<ul><b>
<li>Mohon maaf kartu ujian belum bisa dicetak. Silahkan melakukan pembayaran BPP hingga bulan Juni 2021.</li>
<li>Ananda tidak dapat mengakses E-Learning bila kartu ujian tidak muncul</li>
<li>Apabila sudah lunas namun belum bisa mencetak kartu ujian, harap menghubungi Bagian tata Usaha untuk melakukan konfirmasi.</li>
Terima Kasih. </b>

</ul>

</div>

    <div <?=$hidden;?> style="border: 1px solid black;width:602px;">

    <table style="undefined;table-layout: fixed; width: 601px; background: url('<?=base_url()?>/assets22/img/favicon2.png');  background-size: 600px 400px;" >
<colgroup>
<col style="width: 89px">
<col style="width: 27px">
<col style="width: 177px">
<col style="width: 208px">
</colgroup>
<thead style="border-bottom: 1px solid black;">
  <tr >
    <th style="border-right: 1px solid black;" colspan="2" rowspan="3" class="text-center"><img src="<?=base_url()?>assets22/img/favicon.png" alt="" width="80px"><h2 class="logo mr-auto"></img>
</th>
    <th colspan="2" class="text-center" >UJIAN AKHIR SEMESTER<br>SMA SUKMA BANGSA BIREUEN<br>TP. 2021/2022</th>
  </tr>
  <tr>
    <td colspan="2"  class="text-center"><b></b></td>
  </tr>
  <tr>
    <td colspan="2"  class="text-center"><b></b></td>
  </tr>
</thead>
<tbody>
  <tr height="50px">
    <td colspan="2"></td>
    <td colspan="2"  class="text-center"><b><u>KARTU PESERTA UJIAN</u></b></td>
  </tr>
  <tr >
    <td>&nbsp;NAMA</td>
    <td>:</td>
    <td colspan="2"><b><?=$data->nama;?></b></td>
  </tr>
  <tr>
    <td>&nbsp;NIS</td>
    <td>:</td>
    <td colspan="2"><b><?=$data->nis;?></b></td>
  </tr>
  <tr>
    <td>&nbsp;JENJANG</td>
    <td>:</td>
    <td colspan="2"><b><?=$data->jenjang;?></b></td>
  </tr>
  <tr>
    <td>&nbsp;KELAS</td>
    <td>:</td>
    <td colspan="2"><b><?=$data->kelas;?></b></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>Bireuen, 06 Desember 2021</td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td>Kepala Sekolah,</td>
  </tr>
  <tr>
    <td colspan="4" rowspan="2"></td>
  </tr>
  <tr>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td><img src="<?=base_url()?>assets22/img/sign.png" alt="" width="60px"><br><b <?=$jenjangsma;?>><u>KARTIKA HAKIM, M.A.</u></b><b <?=$jenjangsmp;?>><u>CHANDRA NURMANSYAH, S.Si</u></b><b <?=$jenjangsd;?>><u>MARINA NOVA WAHYUNI, S.T</u></b></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td <?=$jenjangsma;?>>NIP. 10151003</td><td <?=$jenjangsmp;?>>NIP. 10101064</td><td <?=$jenjangsd;?>>NIP. 12101107</td>
  </tr>
</tbody>
</table>
    </div>

    <!-- <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>NAMA : </b></label>
        <h2 class="text-uppercase"><?php echo $data->nama;?></h2>
        </div>  
        <div class="form-group">
        <label for=""><b>NIS :</b></label>
        <h2><?php echo $data->nis;?></h2>
        </div>  
        <div class="form-group">
        <label for=""><b>KELAS :</b></label>
        <h2 class="text-uppercase"><?php echo $data->kelas;?></h2>
        </div>  
        </div>    
        </div> -->

  
  <?php endforeach ;?>

  <br><br>
        <a onclick="window.print();" <?=$hidden;?> class="btn btn-primary font-weight-bold d-print-none" style="width:100%;">CETAK KARTU</a>

        <div class="text-center mt-3 font-weight-bold">
              <a class="d-print-none btn btn-danger text-decoration-none font-weight-bold" style="width:50%;" href="<?=base_url('hal/cari2')?>">CARI DATA KEMBALI</a>
              <a class="d-print-none btn btn-success text-decoration-none font-weight-bold" style="width:49%;" href="<?=base_url()?>">KEMBALI KE HALAMAN UTAMA</a>
              </div>
              <br>

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
