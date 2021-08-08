
  <div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
 <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>PROGRESS DATA</h1>
          <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="<?php echo base_url('home/progress_data')?>">Kecamatan</a></li>
              <li class="breadcrumb-item active">Progress Data</li>
            </ol> 
          </div><!-- /.col -->
          <div class="col-sm-6">
         
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
    <section class="content">
      <div class="container-fluid">
        <br>      

        <table class="table table-hover" id="example">
          <thead class="text-left">
            <tr>
              <th scope="col" style="width:10%;">NO</th>
              <th scope="col">NAMA SEKOLAH</th>
              <th scope="col">NPSN</th>
              <th scope="col">TOTAL</th>
              <th scope="col">ZONASI</th>
              <th scope="col">AFIRMASI</th>
              <th scope="col">PINDAHAN</th>
              <th scope="col">PRESTASI</th>
              <th scope="col">UMUM</th>
            </tr>
          </thead>


            <tbody>
          <?php $i = 1; 
          foreach ($tampil_sekolah_wilayah2 as $data) :
	        ?>
		      <tr class="nomor text-left">
            <td scope="row"><?php echo $i ;?></td>
            <td><?=$data->nama_sekolah;?></td>
            <td><?=$data->npsn;?></td>
            <td><?=$data->total;?></td>
            <td><?=$data->zonasi;?></td>
            <td><?=$data->afirmasi;?></td>
            <td><?=$data->pindahan;?></td>
            <td><?=$data->prestasi;?></td>
            <td><?=$data->umum;?></td>
            <?php $i++;?>
            <?php endforeach; ?>

		      </tr>
          </tbody>
          </table>



        </div>        
    </section>
    
    </div>
</div>
<!-- Button trigger modal -->



</div>



