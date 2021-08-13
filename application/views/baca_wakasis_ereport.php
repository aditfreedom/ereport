<!-- page content -->
<div class="right_col" role="main">
          <div class="">          
    <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>LAPORAN BIDANG STUDI</b></a><br><br>
    <form action="<?=base_url('admin/update_form_mapel')?>" method="post">

    <div class="row">
    <div class="col">
    <div class="container">
    <?php foreach ($baca_wakasis as $data) : ?>

      <div class="row">
    <div class="col">
    <div class="container">
        

    <div class="form-group">
        <label for=""><b>NAMA WALI KELAS : </b></label>
        <input hidden type="text" name="id_wakasis" class="form-control" maxlength="50" placeholder="Judul Informasi" value="<?=$this->session->userdata('id_user')?>">
        <input disabled type="text" name="nama_walas" class="form-control" maxlength="50" placeholder="Judul Informasi" value="<?=$data->nama_user?>">
        </div>  
        <div class="form-group">
        <label for=""><b>NAMA SISWA &  KELAS: </b></label>
        <input disabled type="text" name="nama_siswa" class="form-control" maxlength="50" placeholder="Nama Siswa & Kelas" value="<?=$data->nama_siswa?>" required>
        </div>  
        <div class="form-group">
        <label for=""><b>TANGGAL PELANGGARAN: </b></label>
        <input disabled type="date" name="tanggal_pelanggaran" class="form-control" maxlength="50" placeholder="Mata Pelajaran" value="<?=$data->tanggal_pelanggaran?>" required>
        </div>  

          <hr>
          <h3>DESKRIPSI PELANGARAN</h3>
          <hr>

          <div class="form-group">
          <label for=""><b>DESKRIPSI JENIS PELANGGARAN : </b></label>
          <textarea disabled required name="deskripsi_pelanggaran" cols="30" maxlength="1400"  rows="5" class="form-control" placeholder="Deskripsi Jenis Pelanggaran"><?=$data->deskripsi_pelanggaran?></textarea>
          </div>  
          <div class="form-group">
          <label for=""><b>TINDAKAN YANG DILAKUKAN: </b></label>
          <textarea disabled required name="tindakan" cols="30" maxlength="1400"  rows="5" class="form-control" placeholder="Tindakan atau Sanksi yang diberikan"><?=$data->tindakan?></textarea>
          </div>  

        </div>  

        </div>    
        </div>
  
        </div>
        </div>

        </div>    
        </div>
  
        </div>
        </div>

        <?php endforeach; ?>


          
          
          </div>
   

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Created By Pusdatin <a href="https://bireuen.sukmabangsa.sch.id">Sekolah Sukma Bangsa Bireuen</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?=base_url('gentelella')?>/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="<?=base_url('gentelella')?>/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?=base_url('gentelella')?>/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=base_url('gentelella')?>/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?=base_url('gentelella')?>/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- jQuery Sparklines -->
    <script src="<?=base_url('gentelella')?>/vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
    <!-- Flot -->
    <script src="<?=base_url('gentelella')?>/vendors/Flot/jquery.flot.js"></script>
    <script src="<?=base_url('gentelella')?>/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?=base_url('gentelella')?>/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?=base_url('gentelella')?>/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?=base_url('gentelella')?>/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?=base_url('gentelella')?>/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?=base_url('gentelella')?>/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?=base_url('gentelella')?>/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?=base_url('gentelella')?>/vendors/DateJS/build/date.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?=base_url('gentelella')?>/vendors/moment/min/moment.min.js"></script>
    <script src="<?=base_url('gentelella')?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?=base_url('gentelella')?>/build/js/custom.min.js"></script>

    <script src="<?=base_url('gentelella')?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('gentelella')?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?=base_url('gentelella')?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>


    <script src="<?=base_url('gentelella')?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

    <script>
$(document).ready(function() {
    $('#example').DataTable( {
        "ordering": false,
        "info":     false
    } );
} );

    </script>

  </body>
</html>