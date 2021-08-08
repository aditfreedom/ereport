<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-info text-bold no-print">CETAK KARTU PESERTA UJIAN</h1>
            <footer class="blockquote-footer"><b>Untuk Print Kartu Peserta Ujian, Klik Cetak Kartu Ujian</b></footer>
            <hr>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <div class="container">
    <table border="1" width="500" style="margin-right:20px;background:white;">
    <td style="padding:15px;">
    <?php foreach ($cetak_kartu as $data) : ?>
      <?php echo form_open_multipart('user/updateformulir');?>
      <label for="">NISN : <?php echo $data->nisn;?></label>
      <img class="mx-auto d-block" src="<?= base_url();?>/assets/img/favicon.png" width="150" style="margin-bottom:5px;">
      <h4 class="text-center text-bold">KARTU PESERTA UJIAN<br>PPDB DISDIKBUD<br>KAB.BIREUEN<br>TP.2021/2022</h4><br>

    <div class="form-group">
        <input type="hidden" name="id" class="form-control" value="<?php echo $data->id;?>">
        </div>
        <div class="form-group">
        <label for="" class="font-weight-normal" style="font-size:20px;">Nama Lengkap :</label>
        <input readonly type="text" name="nama" class="form-control text-center text-dark text-bold text-uppercase" style="font-size: 25px;" value="<?php echo $data->nama_lengkap;?>"></input>
        </div>
        <div class="form-group">
        <label for="" class="font-weight-normal"  style="font-size:20px;">Sekolah Asal :</label>
        <input readonly type="text" name="sekolah_asal" class="form-control text-center text-dark text-bold text-uppercase" style="font-size: 25px;" value="<?php echo $data->sekolah_asal;?>">
        </div>
        <div class="form-group">
        <label for="" class="font-weight-normal"  style="font-size:20px;">Jenis Penerimaan :</label>
        <input readonly type="text" name="jenis" class="form-control text-center text-dark text-bold text-uppercase" style="font-size: 25px;" value="<?php echo $data->jenis;?>">
        </div>
        <h6 class="text-danger" style="font-size:12px;"><b>*Harap Memakai Masker & Membawa Surat Aktif Sekolah Saat Tes Berlangsung</b></h6>
        </form>
	<?php endforeach ;?> 
  <br>
    </td>
  </table>
  <br>
    </div>
    <p align="center"><button style="width:100%;" type="button" onclick="window.print();" class="btn btn-primary no-print"><i class="fa fa-print"></i> Cetak Kartu Ujian</button></button></p>
    <br>
    </section>
</div>
</div>
<br>