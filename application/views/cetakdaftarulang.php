<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
 <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-bold text-info">CETAK FORMULIR DAFTAR ULANG</h1>
            <footer class="blockquote-footer"><b>Dicetak Ketika Telah Mengisi Menu Registrasi Ulang Dengan Lengkap</b></footer>
            <hr>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Cetak Formulir Daftar Ulang</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
    <section class="content">
    <h2 class="text-bold">FORMULIR DAFTAR ULANG</h2>
    <?php foreach ($cetakdaftarulang as $data) : ?>
		<form method="post" action="<?php echo base_url().'user/cetakformulirdaftarulanguser'; ?>">  
        <div hidden>
        <div hidden class="form-group">
        <label for="">ID</label>
        <input type="text" name="id" class="form-control" value="<?php echo $data->id;?>">
        </div>
        <div hidden class="form-group">
        <label for="">ID DAFTAR ULANG</label>
        <input type="text" name="id_daftarulang" class="form-control" value="<?php echo $data->id_daftarulang;?>">
        </div>

      <h2 class="text-info"><b>DATA RINCI SISWA</b></h2>
      <hr>
    <div class="row">
    <div class="col">

    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Nama Lengkap</label>
        <input readonly type="text" name="nama_lengkap" class="form-control" value="<?php echo $data->nama_lengkap;?>">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Nama Panggilan</label>
        <input readonly type="text" name="nama_panggilan" class="form-control" value="<?php echo $data->nama_panggilan;?>">
        </div>
        </div>
        </div>


    <div class="form-group">
        <label for="">Tingkat</label>
        <input readonly type="text" name="tingkat" class="form-control" value="<?php echo $data->tingkat?>">
        </div>
        <div class="form-group">
        <label for="">NISN</label>
        <input readonly type="text" name="nisn" class="form-control" value="<?php echo $data->nisn;?>">
        </div>
        <div class="form-group">
        <label for="">Golongan Darah</label>
        <input readonly type="text" name="goldar" class="form-control" value="<?php echo $data->goldar;?>">
        </div>
       
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Anak Ke</label>
        <input readonly type="text" name="anak_ke" class="form-control" value="<?php echo $data->anak_ke;?>">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Dari Bersaudara</label>
        <input readonly type="text" name="dari_saudara" class="form-control" value="<?php echo $data->dari_saudara;?>">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Jarak Ke Sekolah (KM)</label>
        <input readonly type="text" name="jarak" class="form-control" value="<?php echo $data->jarak;?>">
        </div>
    </div>
    </div>
    </div>
    
    <div class="col">

    <div class="row">
    <div class="col">

    <div class="form-group">
        <label for="">Tempat Lahir</label>
        <input readonly type="text" name="tpt_lahir" class="form-control" value="<?php echo $data->tpt_lahir;?>">
        </div>
        </div>

        <div class="col">
        <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input readonly type="text" name="tgl_lahir" class="form-control" value="<?php echo $data->tgl_lahir;?>">
        </div>
        </div>
    </div>

    <div class="row">
    <div class="col">

    <div class="form-group">
        <label for="">Agama</label>
        <input readonly type="text" name="agama" class="form-control" value="<?php echo $data->agama;?>">
        </div>
        </div>

        <div class="col">
        <div class="form-group">
        <label for="">Suku</label>
        <input readonly type="text" name="suku" class="form-control" value="<?php echo $data->suku;?>">
        </div>
        </div>
    </div>
   
        <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <input readonly type="text" name="jk" class="form-control" value="<?php echo $data->jk;?>">
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
        <textarea readonly class="form-control" name="alamat" rows="1"><?php echo $data->alamat;?></textarea>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Desa/Kelurahan</label>
        <input readonly type="text" name="desa" class="form-control" value="<?php echo $data->desa;?>">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Kabupaten</label>
        <input readonly type="text" name="kabupaten" class="form-control" value="<?php echo $data->kabupaten;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Provinsi</label>
        <input readonly type="text" name="provinsi" class="form-control" value="<?php echo $data->provinsi;?>">
        </div>
        </div>
        </div>
        </div>
        </div>
        <br>
        <br>

        <h2 class="text-info"><b>DATA AYAH</b></h2>
      <hr>
    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Nama Lengkap Ayah</label>
        <input readonly type="text" name="nama_ayah" class="form-control" value="<?php echo $data->nama_ayah;?>">
        </div>

    <div class="form-group">
        <label for="">Pendidikan Terakhir Ayah</label>
        <input readonly type="text" name="pendidikan_ayah" class="form-control" value="<?php echo $data->pendidikan_ayah?>">
        </div>
       
        <div class="form-group">
        <label for="">Penghasilan Per Bulan</label>
        <input readonly type="text" name="penghasilan_ayah" class="form-control" value="<?php echo $data->penghasilan_ayah;?>">
        </div>

        <div class="form-group">
        <label for="">No Telp/HP Ayah</label>
        <input readonly type="text" name="hp_ayah" class="form-control" value="<?php echo $data->hp_ayah;?>">
        </div>
    </div>
    
    <div class="col">
    <div class="row">
    <div class="col">

    <div class="form-group">
        <label for="">Tempat Lahir Ayah</label>
        <input readonly type="text" name="tptlahir_ayah" class="form-control" value="<?php echo $data->tptlahir_ayah;?>">
        </div>
        </div>

        <div class="col">
        <div class="form-group">
        <label for="">Tanggal Lahir Ayah</label>
        <input readonly type="text" name="tgllahir_ayah" class="form-control" value="<?php echo $data->tgllahir_ayah;?>">
        </div>
        </div>
    </div>
   
       
        <div class="form-group">
        <label for="">Pekerjaan Ayah</label>
        <input readonly type="text" name="pekerjaan_ayah" class="form-control" value="<?php echo $data->pekerjaan_ayah;?>">
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
        <textarea readonly class="form-control" name="alamat_ayah" rows="1"><?php echo $data->alamat_ayah;?></textarea>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Desa/Kelurahan</label>
        <input readonly type="text" name="desa_ayah" class="form-control" value="<?php echo $data->desa_ayah;?>">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Kabupaten</label>
        <input readonly type="text" name="kabupaten_ayah" class="form-control" value="<?php echo $data->kabupaten_ayah;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Provinsi</label>
        <input readonly type="text" name="provinsi_ayah" class="form-control" value="<?php echo $data->provinsi_ayah;?>">
        </div>
        </div>
        </div>
        </div>
        </div>
        <br>
        <br>


        <h2 class="text-info"><b>DATA IBU</b></h2>
      <hr>
    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Nama Lengkap Ibu</label>
        <input readonly type="text" name="nama_ibu" class="form-control" value="<?php echo $data->nama_ibu;?>">
        </div>

    <div class="form-group">
        <label for="">Pendidikan Terakhir Ibu</label>
        <input readonly type="text" name="pendidikan_ibu" class="form-control" value="<?php echo $data->pendidikan_ibu?>">
        </div>
       
        <div class="form-group">
        <label for="">Penghasilan Per Bulan</label>
        <input readonly type="text" name="penghasilan_ibu" class="form-control" value="<?php echo $data->penghasilan_ibu;?>">
        </div>

        <div class="form-group">
        <label for="">No Telp/HP Ibu</label>
        <input readonly type="text" name="hp_ibu" class="form-control" value="<?php echo $data->hp_ibu;?>">
        </div>
       
       
    </div>
    
    <div class="col">

    <div class="row">
    <div class="col">

    <div class="form-group">
        <label for="">Tempat Lahir Ibu</label>
        <input readonly type="text" name="tptlahir_ibu" class="form-control" value="<?php echo $data->tptlahir_ibu;?>">
        </div>
        </div>

        <div class="col">
        <div class="form-group">
        <label for="">Tanggal Lahir Ibu</label>
        <input readonly type="text" name="tgllahir_ibu" class="form-control" value="<?php echo $data->tgllahir_ibu;?>">
        </div>
        </div>
    </div>
   
       
        <div class="form-group">
        <label for="">Pekerjaan Ibu</label>
        <input readonly type="text" name="pekerjaan_ibu" class="form-control" value="<?php echo $data->pekerjaan_ibu;?>">
        </div>
        <div class="form-group">
        <label for="">Alamat</label>
        <textarea readonly class="form-control" name="alamat_ibu" rows="1"><?php echo $data->alamat_ibu;?></textarea>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Desa/Kelurahan</label>
        <input readonly type="text" name="desa_ibu" class="form-control" value="<?php echo $data->desa_ibu;?>">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Kabupaten</label>
        <input readonly type="text" name="kabupaten_ibu" class="form-control" value="<?php echo $data->kabupaten_ibu;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Provinsi</label>
        <input readonly type="text" name="provinsi_ibu" class="form-control" value="<?php echo $data->provinsi_ibu;?>">
        </div>
        </div>
        </div>
        </div>
        </div>
        <br>
        <br>

        <h2 class="text-info"><b>DATA SEKOLAH ASAL SISWA</b></h2>
      <hr>
    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Sekolah Asal</label>
        <input readonly type="text" name="sekolah_asal" class="form-control" value="<?php echo $data->sekolah_asal;?>">
        </div>

    <div class="form-group">
        <label for="">NPSN</label>
        <input readonly type="text" name="npsn" class="form-control" value="<?php echo $data->npsn?>">
        </div>
    </div>
    
    <div class="col">
    <div class="row">
    <div class="col">
        <div class="form-group">
        <label for="">Alamat</label>
        <input readonly type="text" name="alamat_sekolah" class="form-control" value="<?php echo $data->alamat_sekolah?>">
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Kabupaten</label>
        <input readonly type="text" name="kabupaten_sekolah" class="form-control" value="<?php echo $data->kabupaten_sekolah;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Provinsi</label>
        <input readonly type="text" name="provinsi_sekolah" class="form-control" value="<?php echo $data->provinsi_sekolah;?>">
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        <br><br>

        
        <h2 class="text-info"><b>DATA KESEHATAN, MINAT DAN BAKAT SISWA</b></h2>
      <hr>
    <div class="row">
    <div class="col">
    <div class="form-group">
        <label for="">Penyakit Serius Yang Pernah Diderita</label>
        <input readonly type="text" name="penyakit" class="form-control" value="<?php echo $data->penyakit;?>">
        </div>

        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Olahraga</label>
        <input readonly type="text" name="olah_raga" class="form-control" value="<?php echo $data->olah_raga;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Seni Musik</label>
        <input readonly type="text" name="seni" class="form-control" value="<?php echo $data->seni;?>">
        </div>
        </div>
        </div>
        </div>

    
    <div class="col">

    <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Seni Tari</label>
        <input readonly type="text" name="tari" class="form-control" value="<?php echo $data->tari;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Seni Lukis</label>
        <input readonly type="text" name="lukis" class="form-control" value="<?php echo $data->lukis;?>">
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Drama</label>
        <input readonly type="text" name="drama" class="form-control" value="<?php echo $data->drama;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Sastra</label>
        <input readonly type="text" name="sastra" class="form-control" value="<?php echo $data->sastra;?>">
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Organisasi</label>
        <input readonly type="text" name="organisasi" class="form-control" value="<?php echo $data->organisasi;?>">
        </div>
        </div>
        </div>
       </div>
        </div>
        <div class="form-group">
        <label for="">Prestasi Yang Pernah Diraih</label>
        <textarea readonly class="form-control" name="prestasi" rows="2"><?php echo $data->prestasi;?></textarea>
        </div>    
        <br><br>

        <h2 class="text-info"><b>INFORMASI TENTANG SEKOLAH</b></h2>
      <hr>
    
        <div class="form-group">
        <label for="">Alasan Anda Ingin Bersekolah Di Sekolah Sukma Bangsa</label>
        <textarea readonly class="form-control" name="alasan" rows="2"><?php echo $data->alasan;?></textarea>
        </div>  

        <div class="form-group">
        <label for="">Apa Yang Anda Ketahui Tentang Sekolah Sukma Bangsa?</label>
        <textarea readonly class="form-control" name="tentang_sekolah" rows="2"><?php echo $data->tentang_sekolah;?></textarea>
        </div>    
        </div>
        <p align="left"><button type="submit" class="btn btn-success"><i class="fa fa-print"></i> Cetak Formulir Pendaftaran Ulang</button></p>         
        </form>
	<?php endforeach ;?>
        <br>
  <h2 class="text-bold">SURAT PERNYATAAN</h2>
  <a class="btn btn-success" href="<?php echo base_url().'surat_pernyataan.doc'; ?>" role="button"><i class="fa fa-print"></i> Cetak Surat Pernyataan</button></a>
        <br><br><br>
  <h2 class="text-bold">PAKTA INTEGRITAS</h2>
  <a class="btn btn-success" href="<?php echo base_url().'pakta_integritas.doc'; ?>" role="button"><i class="fa fa-print"></i> Cetak Pakta Integritas</button></a>

        
    </section>
    
    </div>
</div>
<!-- Button trigger modal -->



</div>

