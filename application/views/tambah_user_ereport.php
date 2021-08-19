<!-- page content -->
<div class="right_col" role="main">
          <div class="">          
    <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>TAMBAH PENGGUNA</b></a><br><br>
    
    <form action="<?=base_url('admin/insert_user')?>" method="post">
    <div class="row">
    <div class="col">
    <div class="container">
        

        <div class="form-group">
        <label for=""><b>NAMA PENGGUNA: </b></label>
        <input type="text" name="nama_user" class="form-control" maxlength="50" placeholder="Nama Pengguna" required>
        </div>  

        <div class="form-group">
        <label for=""><b>ROLE :</b></label>
        <select class="form-control"  name="role">
        <option value="0">Admin</option>
        <option value="1">Kepala Sekolah</option>
        <option value="2">Guru Bidang Studi</option>
        <option value="3">Wali Kelas</option>
        <option value="4">Waka Kesiswaan</option>
        <option value="5">Waka Kurikulum</option>
        <option value="6">Tidak Aktif</option>
        </select>
        </div>  

        </div>    
        </div>

    <div class="col">
        <div class="container">
        <div class="form-group">
        <label for=""><b>USERNAME</b></label>
        <input type="text" name="username" class="form-control" placeholder="Username" maxlength="15" required>
        </div>  

        <div class="form-group">
        <label for=""><b>PASSWORD</b></label>
        <input type="password" name="password" class="form-control" maxlength="20" placeholder="Password" required>
        </div>  

       
        </div>    
        </div>
        </div>

        <button type="submit" id="btn" class="btn btn-primary form-control font-weight-bold">TAMBAH PENGGUNA</button><br><br>
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