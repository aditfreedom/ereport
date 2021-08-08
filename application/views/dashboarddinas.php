<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
 <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DASHBOARD</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB BIREUEN</a></li>
              <li class="breadcrumb-item active">Beranda</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
              $data3=0;
	             foreach ($zonasi as $data) : ?>
               <?php $data2 = $data->sisa_zonasi;
                      $data3+= $data2 ;
               ?>
               <?php endforeach ;?>
                <h3>3099</h3>
                <p>Zonasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->

        <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
              $data3=0;
	             foreach ($afirmasi as $data) : ?>
               <?php $data2 = $data->sisa_afirmasi;
                      $data3+= $data2 ;
               ?>
               <?php endforeach ;?>
                <h3>929</h3>
                <p>Afirmasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
        <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
              $data3=0;
	             foreach ($pindahan as $data) : ?>
               <?php $data2 = $data->sisa_pindahan;
                      $data3+= $data2 ;
               ?>
               <?php endforeach ;?>
                <h3>317</h3>


                <p>Pindahan Orang Tua</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

                    <!-- ./col -->
        <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
              $data3=0;
	             foreach ($prestasi as $data) : ?>
               <?php $data2 = $data->sisa_prestasi;
                      $data3+= $data2 ;
               ?>
               <?php endforeach ;?>
                <h3>1863</h3>
                <p>Prestasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

                       <!-- ./col -->
        <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php  
              $data3=0;
	             foreach ($umum as $data) : ?>
               <?php $data2 = $data->sisa_umum;
                      $data3+= $data2 ;
               ?>
               <?php endforeach ;?>
                <h3><?=$data3;?></h3>
                <p>Umum</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              
                <h3><?php echo $pendaftarzonasi;?></h3>
                <p>Pendaftar Zonasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $pendaftarafirmasi;?></h3>


                <p>Pendaftar Afirmasi</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $pendaftarpindahan;?></h3>


                <p>Pendaftar Pindahan</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $pendaftarprestasi;?></h3>


                <p>Pendaftar Prestasi</p>
              </div>
              <div class="icon">
                  <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          
          <div class="col-lg-3 col-3">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <h3><?php echo $pendaftarumum;?></h3>


                <p>Pendaftar Umum</p>
              </div>
              <div class="icon">
                  <i class="fa fa-user-graduate"></i>
              </div>
            </div>
          </div>

          


        </div>
          
          <!-- ./col -->
        </div>
        
        
    </section>
    
    </div>
</div>
<!-- Button trigger modal -->



</div>

