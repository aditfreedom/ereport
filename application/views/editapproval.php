<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 rounded" style="background:#5B5EA6">
          <div class="col">
          <br>
            <h1 class="m-0 text-light text-bold">APPROVAL CALON PESERTA DIDIK</h1>
            <footer class="blockquote-footer text-light"><b>Approve Data Formulir PPDB 2021/2022</b></footer>
            <hr> 
                    <!-- Nav pills -->
            <ul class="nav nav-pills" role="tablist">
              <li class="nav-item">
                <a class="nav-link text-light bg-danger active" data-toggle="pill" href="#home">1. Data Peserta Didik</a>
              </li>&nbsp;&nbsp;
              <li class="nav-item">
                <a class="nav-link text-light bg-danger" data-toggle="pill" href="#menu1">2. Verval Berkas</a>
              </li>&nbsp;&nbsp;
              <li class="nav-item">
                <a class="nav-link text-light bg-danger" data-toggle="pill" href="#menu2">3. Approval Formulir</a>
              </li>&nbsp;&nbsp;
            </ul>
            <br>
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->

     
    </div>
    
    
    <section class="content">

 <!-- Tab panes -->
 <div class="tab-content">
    <div id="home" class="container tab-pane active">
    <!-- data siswa -->
    <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>DATA DIRI</b></a><br><br>
    <form action="<?=base_url('admin/updateapproval')?>" method="post">
    <div class="row">
    <div class="col">
    <div class="container">
    <?php foreach ($approval as $data) : ?>
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
        </div>

        <br><br>
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
        </div>

        <br><br>
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
        </div>

        <br><br>
  <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>DATA WALI</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">
        <div class="form-group">
        <label for=""><b>NAMA WALI : </b></label>
        <input disabled type="text" name="nama_wali" value="<?php echo $data->nama_wali;?>" placeholder="File Tidak Ada" class="form-control" maxlength="190" required>
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
        </div>

        <br><br>
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
        </div>
        </div>
        </div>
      


      </div>
      <!-- data berkas -->
    <div id="menu1" class="container tab-pane fade">
    <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>BERKAS PENDAFTARAN</b></a><br><br>
  <div class="row">
    <div class="col">
    <div class="container">

    <?php 
    if ($data->jenis_pendaftaran == 1) {
      $zonasi="";
      $afirmasi="hidden";
      $pindahan="hidden";
      $prestasi="hidden";
    }
    if ($data->jenis_pendaftaran == 2) {
      $zonasi="hidden";
      $afirmasi="";
      $pindahan="hidden";
      $prestasi="hidden";
    }
    if ($data->jenis_pendaftaran == 3) {
      $zonasi="hidden";
      $afirmasi="hidden";
      $pindahan="";
      $prestasi="hidden";
    }
    if ($data->jenis_pendaftaran == 4) {
      $zonasi="hidden";
      $afirmasi="hidden";
      $pindahan="hidden";
      $prestasi="";
    }
    if ($data->jenis_pendaftaran == 5) {
      $zonasi="";
      $afirmasi="hidden";
      $pindahan="hidden";
      $prestasi="hidden";
    }
    ?>

    <div class="form-group" <?=$zonasi;?>>
        <label for=""><b>FILE ZONASI :</b></label>
        <table>
          <tr>
          <td><input disabled type="text" name="data_pdf" value="<?php echo $data->up_zonasi1;?>" placeholder="File Tidak Ada" class="form-control" maxlength="190" required></td>
          <td><a class="btn btn-success" target="_blank" href="<?=base_url('asset/file/').$data->up_zonasi1;?>">DOWNLOAD</a></td>
          </tr>
          <tr>
          <td><input hidden disabled type="text" name="nama_wali" value="<?php echo $data->up_zonasi2;?>" placeholder="File Tidak Ada" class="form-control" maxlength="190" required></td>
          <td><a hidden class="btn btn-success" target="_blank" href="<?=base_url('asset/file/').$data->up_zonasi2;?>">DOWNLOAD</a></td>
          </tr>
          <tr>
          <td></td>
          </tr>
        </table>
        <tr>
        <object data="<?=base_url()?>/asset/file/<?=$data->up_zonasi1?>" width="1050" height="600" type="application/pdf">
          <embed src="<?=base_url()?>/asset/file/<?=$data->up_zonasi1?>" type="application/pdf" /> 
        </object>
        </tr>
        </div>  
        
        <div class="form-group" <?=$afirmasi;?>>
        <label for=""><b>FILE AFIRMASI :</b></label>
        <table>
          <tr>
          <td><input disabled type="text" name="nama_wali" value="<?php echo $data->up_afirmasi1;?>" placeholder="File Tidak Ada" class="form-control" maxlength="190" required></td>
          <td><a class="btn btn-success" target="_blank" href="<?=base_url('asset/file/').$data->up_afirmasi1;?>">DOWNLOAD</a></td>
          </tr>
          <tr>
          <td><input hidden disabled type="text" name="nama_wali" value="<?php echo $data->up_afirmasi2;?>" placeholder="File Tidak Ada" class="form-control" maxlength="190" required></td>
          <td><a hidden class="btn btn-success" target="_blank" href="<?=base_url('asset/file/').$data->up_afirmasi2;?>">DOWNLOAD</a></td>
          </tr>
          <tr>
          <td></td>
          </tr>
          <tr>
        <object data="<?=base_url()?>/asset/file/<?=$data->up_afirmasi1?>" width="1050" height="600" type="application/pdf">
          <embed src="<?=base_url()?>/asset/file/<?=$data->up_afirmasi1?>" type="application/pdf" /> 
        </object>
        </tr>
        </table>
        </div>  

        <div class="form-group" <?=$pindahan;?>>
        <label for=""><b>FILE PINDAHAN ORANG TUA :</b></label>
        <table>
          <tr>
          <td><input disabled type="text" name="nama_wali" value="<?php echo $data->up_pindahan1;?>" placeholder="File Tidak Ada" class="form-control" maxlength="190" required></td>
          <td><a class="btn btn-success" target="_blank" href="<?=base_url('asset/file/').$data->up_pindahan1;?>">DOWNLOAD</a></td>
          </tr>
          <tr>
          <td><input hidden disabled type="text" name="nama_wali" value="<?php echo $data->up_pindahan2;?>" placeholder="File Tidak Ada" class="form-control" maxlength="190" required></td>
          <td><a hidden class="btn btn-success" target="_blank" href="<?=base_url('asset/file/').$data->up_pindahan2;?>">DOWNLOAD</a></td>
          </tr>
          <tr>
          <td></td>
          </tr>
          <tr>
        <object data="<?=base_url()?>/asset/file/<?=$data->up_pindahan1?>" width="1050" height="600" type="application/pdf">
          <embed src="<?=base_url()?>/asset/file/<?=$data->up_pindahan1?>" type="application/pdf" /> 
        </object>
        </tr>
        </table>
        </div>  

        <div class="form-group" <?=$prestasi;?>>
        <label for=""><b>FILE JALUR PRESTASI :</b></label>
        <table>
          <tr>
          <td><input disabled type="text" name="nama_wali" value="<?php echo $data->up_prestasi1;?>" placeholder="File Tidak Ada" class="form-control" maxlength="190" required></td>
          <td><a class="btn btn-success" target="_blank" href="<?=base_url('asset/file/').$data->up_prestasi1;?>">DOWNLOAD</a></td>
          </tr>
          <tr>
          <td><input hidden disabled type="text" name="nama_wali" value="<?php echo $data->up_prestasi2;?>" placeholder="File Tidak Ada" class="form-control" maxlength="190" required></td>
          <td><a hidden class="btn btn-success" target="_blank" href="<?=base_url('asset/file/').$data->up_prestasi2;?>">DOWNLOAD</a></td>
          </tr>
          <tr>
          <td></td>
          </tr>
          <tr>
        <object data="<?=base_url()?>/asset/file/<?=$data->up_prestasi1?>" width="1050" height="600" type="application/pdf">
          <embed src="<?=base_url()?>/asset/file/<?=$data->up_prestasi1?>" type="application/pdf" /> 
        </object>
        </tr>
        </table>
        </div>  
        


       
        </div>    
        </div>
        </div>

    </div>
    <div id="menu2" class="container tab-pane fade">
    <div class="form-group">
        <label for="">Approve Formulir</label>
        <select class="form-control form-control" name="approve_formulir">
          <option selected hidden><?php echo $data->approve_formulir;?></option>
          <option>Antrian</option>
          <option>Ditolak</option>
          <option>Diterima</option>
          </select>
      </div>
      <div class="form-group" hidden>
        <label for=""><b>ID :</b></label>
        <input type="text" name="id" value="<?php echo $data->id;?>" class="form-control" required>
        </div> 

        <div class="form-group" hidden >
        <label for=""><b>ID PESERTADIDIK :</b></label>
        <input type="text" name="id_pesertadidik" value="<?php echo $data->id_pesertadidik;?>" class="form-control" required>
        </div>         
        <?php endforeach ;?>


        <?php
          $keterangan="";
        ?>

        <?php foreach ($approval2 as $data) {
            $keterangan=$data->keterangan;
        }
        ?>


        <div class="form-group">
        <label for="">Alasan Penolakan/Tidak Lulus/Ditolak Daftar Ulang</label>
        <input type="text" name="keterangan" value="<?php echo $keterangan;?>" maxlength="150" placeholder="Bila Diterima Kosongkan Saja" class="form-control">
        </div>

      <button type="submit" class="btn btn-primary form-control"><i class="fa fa-save"></i> <b>APPROVE</b></button>         

      </form>
    </div>
  </div>
</div>

    

    </div>


    </section>
</div>
<br>
