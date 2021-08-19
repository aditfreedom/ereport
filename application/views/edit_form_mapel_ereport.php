<!-- page content -->
<div class="right_col" role="main">
          <div class="">          
    <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>EDIT LAPORAN BIDANG STUDI</b></a><br><br>
    <form action="<?=base_url('admin/update_form_mapel')?>" method="post">

    <div class="row">
    <div class="col">
    <div class="container">
    <?php foreach ($edit_form_mapel as $data) : ?>

      <div class="row">
    <div class="col">
    <div class="container">
        
    <div class="form-group" hidden>
        <label for=""><b>ID FORM : </b></label>
        <input type="text" name="id_form_mapel" class="form-control" maxlength="50" placeholder="Judul Informasi" value="<?=$data->id_form_mapel?>">
        </div>  
    <div class="form-group" hidden>
        <label for=""><b>NAMA WALI KELAS : </b></label>
        <input  type="text" name="id_guru_mapel" class="form-control" maxlength="50" placeholder="Judul Informasi" value="<?=$data->id_guru_mapel?>">
        </div>  
        <?php endforeach; ?>
        <div class="form-group">
        <label for=""><b>KELAS: </b></label>
        <select name="kelas" class="selectpicker form-control" data-live-search="true" data-size="3" data-style="btn-info" required>
        <?php foreach ($edit_form_mapel as $data) : ?>
            <option selected value="<?=$data->id_kelas?>"><?=$data->nama_kelas?></option>
            <?php endforeach; ?>
        <?php foreach ($kelas as $data) : ?>
            <option value="<?=$data->id_kelas?>"><?=$data->nama_kelas?></option>
        <?php endforeach; ?>
      </select>  

      <?php foreach ($edit_form_mapel as $data) : ?>
        <div class="form-group">
        <label for=""><b>MATA PELAJARAN : </b></label>
        <input  value="<?=$data->mapel?>" type="text" name="mapel" class="form-control" maxlength="50" placeholder="Mata Pelajaran" required>
        </div>  

          <hr>
          <h3>DESKRIPSI HARIAN KELAS</h3>
          <hr>

          <div class="form-group">
          <label for=""><b>DESKRIPSI AKADEMIK : </b></label>
          <textarea  required name="deskripsi_akademik" cols="30" maxlength="1400"  rows="5" class="form-control" placeholder="Deskripsikan keadaan akademik siswa (Terutama bagi siswa yang menonjol (baik atau kurang) dalam pelajaran)"><?=$data->deskripsi_akademik?></textarea>
          </div>  
          <div class="form-group">
          <label for=""><b>DESKRIPSI SIKAP: </b></label>
          <textarea  required name="deskripsi_sikap" cols="30" maxlength="1400"  rows="5" class="form-control" placeholder="Deskripsikan keadaan sikap siswa (Terutama bagi siswa yang menonjol (baik atau kurang) dalam sikap)"><?=$data->deskripsi_sikap?></textarea>
          </div>  
          
            <button type="submit" id="btn" class="btn btn-primary form-control font-weight-bold">UBAH DATA LAPORAN</button><br><br>
            <?php endforeach; ?>
            </form>
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

     <!-- selectpicker -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

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