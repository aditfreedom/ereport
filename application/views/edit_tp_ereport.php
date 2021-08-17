<!-- page content -->
<div class="right_col" role="main">
          <div class="">          
    <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>EDIT TAHUN PELAJARAN</b></a><br><br>
    <form action="<?=base_url('admin/update_tp')?>" method="post">

    <div class="row">
    <div class="col">
    <div class="container">
    <?php 
    $text="";
    foreach ($edit_tp as $data) : 
       $text=$data->visible;
       if ($text == "0") {
         $text="HIDDEN";
       }else{
         $text="VISIBLE";
       }?>

      <div class="row">
    <div class="col">
    <div class="container">
        
    <div class="form-group" hidden>
        <label for=""><b>ID FORM : </b></label>
        <input type="text" name="id_tp" class="form-control" maxlength="50" placeholder="Judul Informasi" value="<?=$data->id_tp?>">
        </div>  
        <div class="form-group">
        <label for=""><b>TAHUN PELAJARAN : </b></label>
        <input  type="text" name="nama_tp" class="form-control" maxlength="50" placeholder="Tahun Ajaran" value="<?=$data->nama_tp?>">
        </div>  
        <div class="form-group">
        <label for=""><b>STATUS : </b></label>
          <select name="status" class="form-control" id="">
            <option selected hidden value="<?=$data->status?>"><?=$data->status?></option>
            <option value="AKTIF">AKTIF</option>
            <option value="TIDAK AKTIF">TIDAK AKTIF</option>
          </select>
          </div> 

          <div class="form-group">
        <label for=""><b>VISIBLE : </b></label>
          <select name="visible" class="form-control" id="">
          <option selected hidden value="<?=$data->visible?>"><?=$text;?></option>
            <option value="1">VISIBLE</option>
            <option value="0">HIDDEN</option>
          </select>
      </div> 
          <br>
          
            <button type="submit" id="btn" class="btn btn-primary form-control font-weight-bold">UBAH DATA</button><br><br>
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