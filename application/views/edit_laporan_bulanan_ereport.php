<!-- page content -->
<div class="right_col" role="main">
          <div class="">          
    <a href="#" class="btn btn-danger rounded-pill text-left" style="width:100%"><b>PESAN INFORMASI</b></a><br><br>
    
    <div class="row">
    <div class="col">
    <div class="container">
    <form action="<?=base_url('admin/update_laporan_bulanan')?>" method="post">
    <div class="row">
    <div class="col">
    <div class="container">
    <?php foreach ($edit_laporan as $data) : ?>
        <div class="form-group" hidden>
        <label for=""><b>ID : </b></label>
        <input type="text" name="id_user" class="form-control" maxlength="50" placeholder="Judul Informasi" value="<?=$data->id_user?>">
        </div>  
        <div class="form-group" hidden>
        <label for=""><b>ID WALAS : </b></label>
        <input type="text" name="id_walas" class="form-control" maxlength="50" placeholder="Judul Informasi" value="<?=$this->session->userdata('id_user')?>">
        </div>  
        <div class="form-group" hidden>
        <label for=""><b>ID KELAS: </b></label>
        <input type="text" name="id_kelas" class="form-control" maxlength="50" placeholder="Judul Informasi" value="<?=$data->id_kelas?>">
        </div>  
        <div class="form-group">
        <label for=""><b>KELAS: </b></label>
        <input readonly type="text" name="abc" class="form-control" maxlength="50" placeholder="Judul Informasi" value="<?=$data->nama_kelas?>">

      </select>
      </div>   
        <div class="form-group">
        <label for=""><b>PERIODE : </b></label>
        <input type="text" name="periode" class="form-control" maxlength="100" placeholder="Ex : Agustus 2021" value="<?=$data->periode?>" required>
        </div>  

        <hr>
        <h3 class="text-dark">JUMLAH SISWA</h3>
        <hr>

<div class="form-group">
<table border=1 class="text-center text-dark" style="undefined;table-layout: fixed; width: 100%">
<colgroup>
<col style="width: 49.77778px">
<col style="width: 149.88889px">
<col style="width: 100.88889px">
<col style="width: 110.88889px">
<col style="width: 119.88889px">
<col style="width: 128.88889px">
<col style="width: 121.88889px">
<col style="width: 140.88889px">
</colgroup>
<thead>
  <tr>
    <th>NO</th>
    <th>JENIS KELAMIN</th>
    <th>JUMLAH</th>
    <th>ISLAM</th>
    <th>KRISTEN</th>
    <th>KATOLIK</th>
    <th>BUDHA</th>
    <th>HINDU</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td>1</td>
    <td>Laki - Laki</td>
    <td><input  type="number" name="jlh_laki" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_laki?>" required></td>
    <td><input  type="number" name="jlh_laki_islam" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_laki_islam?>" required></td>
    <td><input  type="number" name="jlh_laki_kristen" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_laki_kristen?>" required></td>
    <td><input  type="number" name="jlh_laki_katolik" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_laki_katolik?>" required></td>
    <td><input  type="number" name="jlh_laki_budha" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_laki_budha?>" required></td>
    <td><input  type="number" name="jlh_laki_hindu" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_laki_hindu?>" required></td>
  </tr>
  <tr>
    <td>2</td>
    <td>Perempuan</td>
    <td><input  type="number" name="jlh_perempuan" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_perempuan?>" required></td>
    <td><input  type="number" name="jlh_perempuan_islam" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_perempuan_islam?>" required></td>
    <td><input  type="number" name="jlh_perempuan_kristen" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_perempuan_kristen?>" required></td>
    <td><input  type="number" name="jlh_perempuan_katolik" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_perempuan_katolik?>" required></td>
    <td><input  type="number" name="jlh_perempuan_budha" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_perempuan_budha?>" required></td>
    <td><input  type="number" name="jlh_perempuan_hindu" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_perempuan_hindu?>" required></td>
  </tr>
  <tr>
    <td colspan="2"><b>TOTAL</b></td>
    <td><input  type="number" name="total" class="form-control border border-dark" maxlength="5" value="<?=$data->total?>" required></td>
    <td colspan="5"></td>
  </tr>
</tbody>
</table>
</div>  



        <hr>
        <h3 class="text-dark">KEHADIRAN SISWA</h3>
        <hr>
              <table border=1 class="text-dark" style="undefined;table-layout: fixed; width: 100%">
              <colgroup>
              <col style="width: 50.77778px">
              <col style="width: 229.88889px">
              <col style="width: 288.88889px">
              <col style="width: 195.88889px">
              <col style="width: 320.88889px">
              </colgroup>
              <thead>
                <tr class="text-center">
                  <th>NO</th>
                  <th>JENIS PENCATATAN</th>
                  <th>JUMLAH</th>
                  <th>%</th>
                  <th>KETERANGAN<br>(Nama siswa yang muncul/menonjol)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">1</td>
                  <td>Hadir Tepat Waktu</td>
                  <td><input  type="number" name="jlh_hadir_tpt_waktu" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_hadir_tpt_waktu?>" required></td>
                  <td><input  type="number" name="persen_hadir_tpt_waktu" class="form-control border border-dark" maxlength="5" value="<?=$data->persen_hadir_tpt_waktu?>" required></td>
                  <td><input  type="text" name="keterangan_hadir_tpt_waktu" class="form-control border border-dark" maxlength="100" value="<?=$data->keterangan_hadir_tpt_waktu?>" required></td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td>Keterlambatan</td>
                  <td><input  type="number" name="jlh_terlambat" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_terlambat?>" required></td></td>
                  <td><input  type="number" name="persen_terlambat" class="form-control border border-dark" maxlength="5" value="<?=$data->persen_terlambat?>" required></td></td>
                  <td><input  type="text" name="keterangan_terlambat" class="form-control border border-dark" maxlength="100" value="<?=$data->keterangan_terlambat?>" required></td></td>
                </tr>
                <tr>
                  <td rowspan="4" class="text-center">3</td>
                  <td>Ketidakhadiran :</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>a. Sakit</td>
                  <td><input  type="number" name="jlh_sakit" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_sakit?>" required></td>
                  <td><input  type="number" name="persen_sakit" class="form-control border border-dark" maxlength="5" value="<?=$data->persen_sakit?>" required></td>
                  <td><input  type="text" name="ket_sakit" class="form-control border border-dark" maxlength="100" value="<?=$data->ket_sakit?>" required></td>
                </tr>
                <tr>
                  <td>b. Ijin</td>
                  <td><input  type="number" name="jlh_izin" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_izin?>" required></td>
                  <td><input  type="number" name="persen_izin" class="form-control border border-dark" maxlength="5" value="<?=$data->persen_izin?>" required></td>
                  <td><input  type="text" name="ket_izin" class="form-control border border-dark" maxlength="100" value="<?=$data->ket_izin?>" required></td>
                </tr>
                <tr>
                  <td>c. Alpha</td>
                  <td><input  type="number" name="jlh_alpa" class="form-control border border-dark" maxlength="5" value="<?=$data->jlh_alpa?>" required></td>
                  <td><input  type="number" name="persen_alpa" class="form-control border border-dark" maxlength="5" value="<?=$data->persen_alpa?>" required></td>
                  <td><input  type="text" name="ket_alpa" class="form-control border border-dark" maxlength="100" value="<?=$data->ket_alpa?>" required></td>
                </tr>
              </tbody>
              </table>

          <hr>
          <h3 class="text-dark">KONDISI AKADEMIK KELAS</h3>
          <p >Jelaskan kondisi pencapaian nilai siswa secara umum yang diperoleh dari guru mapel, siapa saja yang sangat menonjol, dan siapa saja yang sangat tertinggal</p>
          <hr>

          <div class="form-group">
          <textarea  required name="kondisi_akademik" cols="30" maxlength="1400"  rows="5" class="form-control" placeholder="Deskripsi kondisi Akademik Kelas"><?=$data->kondisi_akademik?></textarea>
          </div>  

          <hr>
          <h3 class="text-dark">KONDISI PSIKO-SOSIAL KELAS</h3>
          <p>Jelaskan kondisi psikososial kelas secara keseluruhan: bagaimana hubungan guru dan siswa, antar siswa, kekompakan kelas, masalah dengan orangtua ataupun masalah penting lain yang muncul serta penangann yang dilakukan-jika ada</p>
          <hr>
          <div class="form-group">
          <textarea  required name="kondisi_psiko" cols="30" maxlength="1400"  rows="5" class="form-control" placeholder="Deskripsi Psiko-sosial Kelas"><?=$data->kondisi_psiko?></textarea>
          </div>  

          <hr>
          <h3 class="text-dark">KONDISI FISIK KELAS</h3>
          <p>Jelaskan kondisi fisik kelas: kebersihan, kerapian, keindahan dalam dan depan/taman, kelengkapan alat kebersihan, kelengkapan perangkat kelas, kondisi dan kelengkapan mobiler kelas</p>
          <hr>
          <div class="form-group">
          <textarea  required name="kondisi_fisik" cols="30" maxlength="1400"  rows="5" class="form-control" placeholder="Deskripsi Kondisi Fisik Kelas"><?=$data->kondisi_fisik?></textarea>
          </div> 

        

        </div>    
        </div>
  
        </div>
        </div>

        <button type="submit" id="btn" class="btn btn-primary form-control font-weight-bold">EDIT LAPORAN BULANAN</button><br><br>

        <?php endforeach; ?>

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