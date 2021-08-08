
  <div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
 <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="text-bold">PROGRESS DATA</h1>
          <h4>Rekap Menu Per kecamatan Yang Ada Di Dalam Kecamatan Masing-Masing</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
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
              <th scope="col">KECAMATAN</th>
              <th scope="col">ZONASI</th>
              <th scope="col">AFIRMASI</th>
              <th scope="col">PINDAHAN ORANG TUA</th>
              <th scope="col">PRESTASI</th>
              <th scope="col">UMUM</th>
            </tr>
          </thead>


          <tbody>
            <?php $i = 1;
            foreach ($kecamatan as $data) :
            ?>
              <tr class="nomor text-center">
                <td scope="row"><?php echo $i; ?></td>
                <td><a href="<?php echo base_url('home/tampil_sekolah_wilayah/') . $data['kode_wilayah']; ?>"><?= $data['nama_wilayah']; ?></a></td>
                <td><?=$data['zonasi'];?></td>
                <td><?=$data['afirmasi'];?></td>
                <td><?=$data['pindahan'];?></td>
                <td><?=$data['prestasi'];?></td>
                <td><?=$data['umum'];?></td>
              </tr>
              <?php $i++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>



      </div>
    </section>

  </div>
</div>
<!-- Button trigger modal -->



</div>