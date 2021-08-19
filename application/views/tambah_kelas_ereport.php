<!-- page content -->
<div class="right_col" role="main">
          <div class="">          
    <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>TAMBAH KELAS BARU</b></a><br><br>
    
    <form action="<?=base_url('admin/insert_kelas')?>" method="post">
    <div class="row">
    <div class="col">
    <div class="container">
        
    
    <div class="form-group">
        <label for=""><b>TAHUN PELAJARAN : </b></label> <br>
        <select name="id_tp" class="selectpicker form-control" data-live-search="true" data-size="3" data-style="btn-info">
        <?php foreach ($tp as $data) : ?>
            <option value="<?=$data->id_tp?>"><?=$data->nama_tp?></option>
        <?php endforeach; ?>
      </select>
      </div>   

      <div class="form-group">
        <label for=""><b>NAMA KELAS : </b></label>
        <input type="text" name="nama_kelas" class="form-control" placeholder="Nama Kelas" maxlength="100" required>
        </div>  

        <div class="form-group">
        <label for=""><b>WALI KELAS : </b></label> <br>
        <select name="id_walas" class="selectpicker form-control" data-live-search="true" data-size="3" data-style="btn-info">
        <?php foreach ($walas as $data) : ?>
            <option value="<?=$data->id_user?>"><?=$data->nama_user?></option>
        <?php endforeach; ?>
      </select>
      </div>   
    

      <div class="form-group">
      
    </div>   

        </div>    
        </div>
  
        </div>
        </div>

        <button type="submit" id="btn" class="btn btn-primary form-control font-weight-bold">TAMBAH DATA</button><br><br>
        </form>
          
          
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