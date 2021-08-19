<!-- page content -->
<div class="right_col" role="main">
          <div class="">          
    <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>TAMBAH LAPORAN BASE CLASS</b></a><br><br>
    
    <form action="<?=base_url('admin/insert_form_walas')?>" method="post">
    <div class="row">
    <div class="col">
    <div class="container">
        
        <div class="form-group" hidden>
        <label for=""><b>ID WALAS : </b></label>
        <input type="text" name="id_walas" class="form-control" maxlength="50" placeholder="Judul Informasi" value="<?=$this->session->userdata('id_user')?>">
        </div>  
        <div class="form-group">
        <label for=""><b>KELAS: </b></label>
        <select name="kelas" class="selectpicker form-control" data-live-search="true" data-size="3" data-style="btn-info" required>
        <?php foreach ($kelas_walas as $data) : ?>
            <option selected value="<?=$data->id_kelas?>"><?=$data->nama_kelas?></option>
        <?php endforeach; ?>
      </select>
      </div>   
        <div class="form-group">
        <label for=""><b>TANGGAL BASE CLASS : </b></label>
        <input type="date" name="tanggal" class="form-control" maxlength="50" placeholder="Tanggal" required>
        </div>  

        <div class="form-group">
        <label for=""><b>WAKTU BASE CLASS : </b></label>
        <input type="time" name="waktu" class="form-control" maxlength="50" placeholder="Waktu" required>
        </div>

        <hr>
        <h3>KEHADIRAN</h3>
        <hr>

        <div class="form-group">
          <table style="width:100%">
            <tr>
              <td colspan="2">        
                <label for=""><b>JUMLAH SISWA TEPAT WAKTU : </b></label>
                <input type="number" name="jlh_tepat_waktu" class="form-control" maxlength="50" placeholder="Jumlah" required>
              </td>
              <td colspan="2">        
                <label for=""><b>JUMLAH SISWA YANG TERLAMBAT : </b></label>
                <input type="number" name="jlh_keterlambatan" class="form-control" maxlength="50" placeholder="Jumlah" required>
              </td>
            </tr>
            <tr>
            <td>        
                <label for=""><b>JUMLAH SISWA YANG SAKIT: </b></label>
                <input type="number" name="jlh_sakit" class="form-control" maxlength="50" placeholder="Jumlah" required>
              </td>
              <td>        
                <label for=""><b>JUMLAH SISWA YANG IZIN </b></label>
                <input type="number" name="jlh_izin" class="form-control" maxlength="50" placeholder="Jumlah" required>
              </td>
              <td>        
                <label for=""><b>JUMLAH SISWA YANG ALPA: </b></label>
                <input type="number" name="jlh_alpa" class="form-control" maxlength="50" placeholder="Jumlah" required>
              </td>
              <td></td>
            </tr>
          </table>

          <hr>
          <h3>KONDISI KELAS</h3>
          <hr>

          <div class="form-group">
          <label for=""><b>DESKRIPSI BASE CLASS : </b></label>
          <textarea required name="deskripsi_base_class" cols="30" maxlength="1400"  rows="5" class="form-control" placeholder="Deskripsi Base Class"></textarea>
          </div>  
          <div class="form-group">
          <label for=""><b>PERMASALAHAN KELAS : </b></label>
          <textarea required name="permasalahan_kelas" cols="30" maxlength="1400"  rows="5" class="form-control" placeholder="Permasalahan Kelas"></textarea>
          </div>  
          <div class="form-group">
          <label for=""><b>FOLLOW UP : </b></label>
          <textarea required name="follow_up" cols="30" maxlength="1400"  rows="5" class="form-control" placeholder="Follow Up"></textarea>
          </div> 

        </div>  

        </div>    
        </div>
  
        </div>
        </div>

        <button type="submit" id="btn" class="btn btn-primary form-control font-weight-bold">TAMBAH LAPORAN BASE CLASS</button><br><br>
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