<!-- page content -->
<div class="right_col" role="main">
<?php
  $role=$this->session->userdata('role');
  $hidden_kepsek="";
  $hidden_mapel="";
  $hidden_walas="";
  $hidden_wakasis="";
  $hidden_wakakur="";

  if ($role=="1") {
    $hidden_kepsek="hidden";
  }
  if ($role=="2") {
    $hidden_mapel="hidden";
  }
  if ($role=="3") {
    $hidden_walas="hidden";
  }
  if ($role=="4") {
    $hidden_wakasis="hidden";
  }
  if ($role=="4") {
    $hidden_wakasis="hidden";
  }
  if ($role=="5") {
    $hidden_wakakur="hidden";
  }
  ?>
          <div class="">
          <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>INFORMASI TAMBAHAN WAKA KESISWAAN</b></a><br><br>
            <p align="left" <?=$hidden_mapel?> <?=$hidden_walas?> <?=$hidden_wakakur?> <?=$hidden_wakasis?>>
              <a class="btn btn-success font-weight-bold" href="<?=base_url('admin/tambah_info_wakasis')?>">TAMBAH INFO BARU</a>
            </p>

            <table class="table table-bordered table-stripped" id="example">
                <thead class="text-center">
                  <tr>
                  <th scope="col">NO</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">TANGGAL TERBIT</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1;
                  foreach ($info_tambahan as $data) : ?>
                    <tr class="nomor text-center">
                    <td scope="row"><?php echo $i; ?></td>
                      <td scope="row"><?php echo $data->judul; ?></td>
                      <td><?php echo $data->tanggal_terbit; ?></td>
                     <td><a  href="<?=base_url('admin/baca_infotambahan_wakasis/').$data->id_info?>" class="btn btn-sm btn-success"><b>BACA INFO</u></a>
                        <a <?=$hidden_mapel?> <?=$hidden_wakakur?> <?=$hidden_wakasis?> <?=$hidden_walas?> href="<?=base_url('admin/edit_infotambahan_wakasis/').$data->id_info?>" class="btn btn-sm btn-primary"><b>EDIT INFO</u></a>
                        <a <?=$hidden_mapel?> <?=$hidden_wakakur?> <?=$hidden_wakasis?> <?=$hidden_walas?> href="<?=base_url('admin/hapus_infotambahan_wakasis/').$data->id_info?>" class="btn btn-sm btn-danger"><b>HAPUS INFO</u></a>
                    </td>
                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>

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