<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2 rounded" style="background:#5B5EA6">
        <div class="col">
          <br>
          <h1 class="m-0 text-light text-bold">PENGISIAN FORMULIR</h1>
          <footer class="blockquote-footer text-light"><b>Mohon Diisi Formulir Pendaftaran Dengan Lengkap Dan Benar</b></footer>
          <hr>
          <a href="<?= base_url('user/isi_formulir/' . $id_pesertadidik) ?>" class="btn btn-danger" style="width:20%;">1. Pengisian Data Diri</a>&nbsp;&nbsp;<a href="<?= base_url('user/sekolahtujuan/' . $id_pesertadidik) ?>" style="width:20%;" class="btn btn-light">2. Pilih Sekolah Tujuan</a>
          &nbsp;<a href="<?= base_url('user/upload_berkas/' . $id_pesertadidik) ?>" style="width:20%;" class="btn btn-danger">3. Upload Berkas</a>&nbsp;&nbsp;<a href="<?= base_url('user/finalisasi/' . $id_pesertadidik) ?>" style="width:20%;" class="btn btn-danger">4. Finalisasi Pendaftaran</a>
          <br><br>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <section class="content">
    <div class="container">
          <?php foreach ($tampil_admin as $data) : ?>
            <div class="container alert alert-primary alert-dismissible fade show" role="alert">
              <p class="mb-1"><b>DATA YANG TELAH TERDAFTAR :</b>
                    <ul class="mb-0">
                        <li>Jenis Pendaftaran : <b><?=$data->nama;?></b></li>
                        <li>Kecamatan : <b><?=$data->nama_wilayah;?></b></li>
                        <li>Desa : <b><?=$data->nama_desa;?></b></li>
                        <li>Sekolah Tujuan : <b><?=$data->nama_sekolah;?></b></li>
                    </ul>
              </p>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
          <?php endforeach; ?>
      <a href="#" class="btn rounded-pill text-left text-light" style="width:100%;background:#325288;"><b>MOHON DIISI DATA SESUAI DENGAN KK</b></a><br><br>
      <form action="<?= base_url('user/updatesekolahtujuan') ?>" method="post" data-baseurl="<?=base_url('user');?>">

      <?php foreach ($status as $data) : ?>
      <?php
      if ($data->status == 1) {
          $disabled="disabled";
      }else {
        $disabled="";
      }
      ?>
      <?php endforeach; ?>

        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for=""><b>JENIS PENDAFTARAN :</b></label>
              <select <?=$disabled;?> class="form-control selectpicker" data-size="5" name="jenis_pendaftaran" id="jenis_pendaftaran" data-live-search="true" required>
                  <option value="">-- Pilih Jenis --</option>
                <?php foreach ($jenis_pendaftaran as $data) : ?>
                  <option value="<?php echo $data['id_jenis']; ?>"><?php echo $data['nama']; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            

            <div class="form-group">
              <label for=""><b>KECAMATAN :</b></label>
              <select <?=$disabled;?> class="form-control selectpicker" data-size="5" name="kode_wilayah" id="kode_wilayah" data-live-search="true" data-url="<?= base_url('user/getDesaByWilayah'); ?>" required>
                <option value="">-- Pilih Kecamatan --</option>
                <?php foreach ($sekolahtujuan as $data) : ?>
                  <option value="<?php echo $data->kode_wilayah; ?>"><?php echo $data->nama_wilayah; ?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group">
              <label for=""><b>DESA :</b></label>
              <select <?=$disabled;?> class="form-control selectpicker" data-size="5" name="id_desa" id="id_desa" data-live-search="true" data-url="<?= base_url('user/getSekolahByDesa'); ?>" data-url2="<?= base_url('user/getAllSekolah'); ?>" data-url3="<?= base_url('user/getSekolahSwasta'); ?>" required>
                <option value="">-- Pilih Desa --</option>
              </select>
            </div>

            <div class="form-group">
              <label for=""><b>SEKOLAH TUJUAN :</b></label>
              <select <?=$disabled;?> class="form-control selectpicker" data-size="5" name="sekolah_tujuan" id="sekolah_tujuan" data-live-search="true" required>
                <option value="">-- Pilih Sekolah Tujuan --</option>
              </select>
            </div>
            
            <div id="sisa_kuota" class="mb-3"></div>

            <button <?=$disabled;?> type="submit" id="btn" class="btn btn-primary font-weight-bold" style="width:100%;">SIMPAN DATA</button><br><br>
      </form>

    </div>


  </section>
</div>
<br>