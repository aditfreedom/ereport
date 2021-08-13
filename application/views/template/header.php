<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?=base_url()?>/assets22/img/favicon.png">

    <title>E-REPORT SSB BIREUEN</title>

    <!-- Bootstrap -->
    <link href="<?=base_url('gentelella')?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=base_url('gentelella')?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=base_url('gentelella')?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?=base_url('gentelella')?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">


    <link href="<?=base_url('gentelella')?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url('gentelella')?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">


    <!-- Custom Theme Style -->
    <link href="<?=base_url('gentelella')?>/build/css/custom.min.css" rel="stylesheet">
  </head>
  <?php
    if ($role=="1") {
      $role_name="Kepala Sekolah";
    }
    elseif ($role=="2") {
      $role_name="Bidang Studi";
    }
    elseif ($role=="3") {
      $role_name="Wali Kelas";
    }
    elseif ($role=="4") {
      $role_name="Waka. Kesiswaan";
    }
    elseif ($role=="5") {
      $role_name="Waka. Kurikulum";
    }
    else{
      $role_name="ADMIN";

    }
  ?>

  <body class="nav-md ">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?=base_url('admin')?>" class="site_title"><span>E-REPORT SMA</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?=base_url()?>/assets22/img/favicon.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?=$nama_user?><br>(<?=$role_name?>)</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />