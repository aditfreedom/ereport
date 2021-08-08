<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">TAMBAH BPP SISWA</h1>
          <hr>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">SIM BPP</a></li>
            <li class="breadcrumb-item active">Data BPP</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="content">

  <form method="post" action="<?php echo base_url().'admin/insert_bpp'; ?>">
          <div class="form-group">
            <label for="">NIS</label>
            <input type="text" name="nis" maxlength="10" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="">NAMA</label>
            <input type="text" name="nama" class="form-control" required>
          </div>

          <div class="form-group">
              <label for="">KELAS</label>
              <select class="form-control selectpicker" data-style="btn-primary" data-size="3" name="kelas" id="kelas" data-live-search="true" required>
                  <option value="I">I</option>
                  <option value="II">II</option>
                  <option value="III">III</option>
                  <option value="IV">IV</option>
                  <option value="V">V</option>
                  <option value="VI">VI</option>
                  <option value="VII">VII</option>
                  <option value="VIII">VIII</option>
                  <option value="IX">IX</option>
                  <option value="X">X</option>
                  <option value="XI">XI</option>
                  <option value="XII">XII</option>
              </select>
          </div>

          <div class="form-group">
            <label for="">JENJANG</label>
            <select class="form-control " data-size="3" name="jenjang">
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
            </select>         
           </div>

          <div class="form-group">
            <label for="">STATUS</label>
            <select class="form-control " data-size="3" name="status">
                <option value="LUNAS">LUNAS</option>
                <option value="BELUM LUNAS">BELUM LUNAS</option>
            </select>         
           </div>

          <div class="form-group">
              <label for="">PERIODE TUNGGAKAN</label>
              <div class="row">
                <div class="col">
                  <h6>Bulan</h6>
                <select class="form-control selectpicker" data-style="btn-primary" data-size="3" name="bulan1" id="bulan1" data-live-search="true" >
                  <option value="">Lunas</option>
                  <option value="JANUARI">JANUARI</option>
                  <option value="FEBRUARI">FEBRUARI</option>
                  <option value="MARET">MARET</option>
                  <option value="APRIL">APRIL</option>
                  <option value="MEI">MEI</option>
                  <option value="JUNI">JUNI</option>
                  <option value="JULI">JULI</option>
                  <option value="AGUSTUS">AGUSTUS</option>
                  <option value="SEPTEMBER">SEPTEMBER</option>
                  <option value="OKTOBER">OKTOBER</option>
                  <option value="NOVEMBER">NOVEMBER</option>
                  <option value="DESEMBER">DESEMBER</option>
              </select>
                </div>
                <div class="col">
                <h6>Tahun</h6>
                <select class="form-control selectpicker" data-style="btn-primary" data-size="3" name="tahun1" id="tahun1" data-live-search="true" >
                  <option value="">Lunas</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
              </select>
                </div>
                <div class="col">
                  <br>
                  <h6 class="text-center">Sampai Dengan</h6>
                </div>

                <div class="col">
                <h6>Bulan</h6>
                <select class="form-control selectpicker" data-style="btn-danger" data-size="3" name="bulan2" id="bulan1" data-live-search="true" >
                  <option value="">Lunas</option>
                  <option value="JANUARI">JANUARI</option>
                  <option value="FEBRUARI">FEBRUARI</option>
                  <option value="MARET">MARET</option>
                  <option value="APRIL">APRIL</option>
                  <option value="MEI">MEI</option>
                  <option value="JUNI">JUNI</option>
                  <option value="JULI">JULI</option>
                  <option value="AGUSTUS">AGUSTUS</option>
                  <option value="SEPTEMBER">SEPTEMBER</option>
                  <option value="OKTOBER">OKTOBER</option>
                  <option value="NOVEMBER">NOVEMBER</option>
                  <option value="DESEMBER">DESEMBER</option>
              </select>
                </div>
                <div class="col">
                <h6>Tahun</h6>
                <select class="form-control selectpicker" data-style="btn-danger" data-size="3" name="tahun2" id="tahun1" data-live-search="true" >
                  <option value="">Lunas</option>
                  <option value="2018">2018</option>
                  <option value="2019">2019</option>
                  <option value="2020">2020</option>
                  <option value="2021">2021</option>
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                  <option value="2027">2027</option>
                  <option value="2028">2028</option>
                  <option value="2029">2029</option>
              </select>
                </div>
              </div>
          </div>
          <div class="form-group">
            <label for="">KETERANGAN TAMBAHAN</label>
            <textarea class="form-control" name="keterangan_tambahan" cols="30" rows="5" placeholder="Keterangan Tambahan"></textarea>
          </div>



           <button type="submit" class="form-control btn btn-info font-weight-bold" id="simpan">SIMPAN DATA</button>

    </form>


  </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kuota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
   
    </div>
  </div>
</div>
</div>