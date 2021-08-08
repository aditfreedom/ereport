<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DATA SISWA PENDAFTAR</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">DATA SISWA PENDAFTAR</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
    <section class="content">
    <div class="container">
    <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>DATA DIRI</b></a><br><br>
    <form action="#" method="post">
    <div class="row">
    <div class="col">
    <div class="container">
    <?php foreach ($editpengguna as $data) : ?>
        <div class="form-group">
        <label for=""><b>NAMA CALON PESERTA DIDIK : </b></label>
        <input  disabled type="text" name="nama_siswa" value="<?php echo $data->nama_siswa;?>" class="form-control" maxlength="50" placeholder="Nama Lengkap" required>
        </div>  

        <div class="form-group">
        <label for=""><b>ASAL SEKOLAH :</b></label>
          <input disabled type="text" name="nama_sekolah" value="<?php echo $data->nama_sekolah;?>" class="form-control" maxlength="50" placeholder="Nama Lengkap" required>
        </div>  


        <div class="form-group">
        <label for=""><b>TEMPAT LAHIR :</b></label>
        <input disabled type="text" name="tempat_lahir" value="<?php echo $data->tempat_lahir;?>" class="form-control" placeholder="Tempat Lahir" maxlength="50" required>
        </div>  


        <div class="form-group">
        <label for=""><b>JENIS KELAMIN :</b></label>
            <?php if($data->jk =="L"){
                  $jk="Laki-Laki";
                }else {
                  $jk="Perempuan";
                }?>
                <input disabled type="text" name="tempat_lahir" value="<?php echo $jk?>" class="form-control"  maxlength="50" required>
        </div>  
        </div>    
        </div>
    
    
    <div class="col">
        <div class="container">
        <div class="form-group">
        <label for=""><b>NIK :</b></label>
        <input disabled type="text" name="nik" value="<?php echo $data->nik;?>" class="form-control" placeholder="NIK" maxlength="16" required>
        </div>  

        <div class="form-group">
        <label for=""><b>NISN :</b></label>
        <input disabled type="text" name="nisn" value="<?php echo $data->nisn;?>" class="form-control"placeholder="NISN" maxlength="10" required>
        </div>  

        <div class="form-group">
        <label for=""><b>TANGGAL LAHIR :</b></label>
        <input disabled type="text" name="tanggal_lahir" value="<?php echo $data->tanggal_lahir;?>" class="form-control" required>
        </div>  
        </div>    
        </div>


  </div><br><br>
  <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>DATA TEMPAT TINGGAL</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>ALAMAT JALAN : </b></label>
        <input disabled type="text" name="alamat_jalan" value="<?php echo $data->alamat_jalan;?>" class="form-control" placeholder="Nama Jalan" maxlength="190" required>
        </div>  

        <div class="form-group">
        <label for=""><b>DESA KELURAHAN :</b></label>
        <input disabled type="text" name="desa_kelurahan" value="<?php echo $data->desa_kelurahan;?>" class="form-control" placeholder="Nama Desa" maxlength="200" required>
        </div>  

        <div class="form-group">
        <label for=""><b>DUSUN :</b></label>
        <input disabled type="text" name="nama_dusun" value="<?php echo $data->nama_dusun;?>" class="form-control" placeholder="Nama Dusun" maxlength="200" required>
        </div>  
        </div>    
        </div>

    <div class="col">
        <div class="container">
        <div class="form-group">
        <label for=""><b>RT :</b></label>
        <input disabled type="number" name="rt" value="<?php echo $data->rt;?>" class="form-control" placeholder="Rt" maxlength="5" required>
        </div>  

        <div class="form-group">
        <label for=""><b>RW :</b></label>
        <input disabled type="number" name="rw" value="<?php echo $data->rw;?>" class="form-control" placeholder="Rw" maxlength="5" required>
        </div>  

        <div class="form-group" hidden>
        <label for=""><b>NO HP/WA/TELP</b></label>
        <input disabled type="text" name="id_pesertadidik" value="<?php echo $data->id_pesertadidik;?>"  class="form-control" placeholder="Salah Satu Saja" maxlength="14" required>
        </div>  
        </div>    
        </div>


        </div><br><br>
  <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>DATA ORANG TUA</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>NAMA IBU KANDUNG : </b></label>
        <input disabled type="text" name="nama_ibu_kandung" value="<?php echo $data->nama_ibu_kandung;?>" class="form-control" placeholder="Nama Ibu Kandung" maxlength="190" required>
        </div>  

        <div class="form-group">
        <label for=""><b>PEKERJAAN IBU KANDUNG :</b></label>
        <input disabled type="text" name="pekerjaan_ibu_kandung" value="<?php echo $data->pekerjaan_ibu_kandung;?>" class="form-control" placeholder="Pekerjaan Ibu Kandung" maxlength="50" required>
        </div>  
        <div class="form-group">
        <label for=""><b>PENGHASILAN IBU KANDUNG :</b></label>
        <input disabled type="text" name="tempat_lahir" value="<?php echo $data->penghasilan_ibu_kandung;?>" class="form-control"  maxlength="50" required>

        </div>  
        </div>    
        </div>

    <div class="col">
        <div class="container">
        <div class="form-group">
        <label for=""><b>NAMA AYAH : </b></label>
        <input disabled type="text" name="nama_ayah" value="<?php echo $data->nama_ayah;?>" class="form-control" placeholder="Nama Ayah" maxlength="190" required>
        </div>  

        <div class="form-group">
        <label for=""><b>PEKERJAAN AYAH :</b></label>
        <input disabled type="text" name="pekerjaan_ayah" value="<?php echo $data->pekerjaan_ayah;?>" class="form-control" placeholder="Pekerjaan Ayah" maxlength="50" required>
        </div>  
        <div class="form-group">
        <label for=""><b>PENGHASILAN AYAH :</b></label>
        <input disabled type="text" name="tempat_lahir" value="<?php echo $data->penghasilan_ayah;?>" class="form-control"  maxlength="50" required>

        </div>  
        </div>    
        </div>


        </div><br><br>
  <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>DATA WALI</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>NAMA WALI : </b></label>
        <input disabled type="text" name="nama_wali" value="<?php echo $data->nama_wali;?>" placeholder="Nama Wali" class="form-control" maxlength="190" required>
        </div>  

        <div class="form-group">
        <label for=""><b>PEKERJAAN WALI :</b></label>
        <input disabled type="text" name="pekerjaan_wali" value="<?php echo $data->pekerjaan_wali;?>" placeholder="Pekerjaan Wali" class="form-control" maxlength="50" required>
        </div>  
        <div class="form-group">
        <label for=""><b>PENGHASILAN WALI :</b></label>
        <input disabled type="text" name="tempat_lahir" value="<?php echo $data->penghasilan_wali;?>" class="form-control" maxlength="50" required>
        </div>  
        </div>    
        </div>


        </div><br><br>
  <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>DATA LAINNYA</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>NO KIP : </b></label>
        <input disabled type="text" name="no_kip" value="<?php echo $data->no_kip;?>"  class="form-control"  maxlength="50" required>
        </div>  

        <div class="form-group">
        <label for=""><b>NO PKH :</b></label>
        <input disabled type="text" name="no_pkh" value="<?php echo $data->no_pkh;?>" class="form-control" maxlength="50" required>
        </div>  

        <div class="form-group" hidden>
        <label for=""><b>ID PD :</b></label>
        <input disabled type="text" name="id_pesertadidik" value="<?php echo $data->id_pesertadidik;?>" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" required>
        </div> 
        <div class="form-group" hidden>
        <label for=""><b>KODE WIL :</b></label>
        <input disabled type="text" name="kode_wilayah" value="<?php echo $data->kode_wilayah;?>" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" required>
        </div> 
        <div class="form-group" hidden>
        <label for=""><b>LINTANG :</b></label>
        <input disabled type="text" name="lintang" value="<?php echo $data->lintang;?>" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" required>
        </div> 
        <div class="form-group" hidden>
        <label for=""><b>BUJUR :</b></label>
        <input disabled type="text" name="bujur" value="<?php echo $data->bujur;?>" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" required>
        </div> 
        <div class="form-group" hidden>
        <label for=""><b>KHUSUS :</b></label>
        <input disabled type="text" name="kebutuhan_khusus" value="<?php echo $data->kebutuhan_khusus;?>" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" required>
        </div> 
        <?php endforeach ;?>
        </form>

    </div>


    </section>
</div>
<br>