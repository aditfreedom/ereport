<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
          <footer class="text-danger"><b>Selamat! Anda Lulus Seleksi PPDB Sekolah Sukma Bangsa Bireuen TA.2021/2022</b></footer>
          <h1 class="m-0 text-info text-bold no-print">REGISTRASI ULANG PESERTA DIDIK</h1>
          <footer class="blockquote-footer"><b>Mohon Diisi Formulir Pendaftaran Dengan Lengkap Dan Benar</b></footer>
            <hr>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($registrasi_ulang as $data) : ?>
		<form method="post" action="<?php echo base_url().'user/updatelulususer'; ?>">
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
        <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $data->nama_lengkap;?>" required>
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Nama Panggilan</label>
        <input type="text" name="nama_panggilan" class="form-control" value="<?php echo $data->nama_panggilan;?>"required>
        </div>
        </div>
        </div>


        <div class="form-group">
        <label for="">Daftar Ulang Ke Tingkat</label>
        <select class="form-control form-control" name="tingkat" required>
          <option selected hidden><?php echo $data->tingkat;?></option>
          <option>SD</option>
          <option>SMP</option>
          <option>SMA</option>
          </select>
        </div>
        <div class="form-group">
        <label for="">NISN</label>
        <input type="text" name="nisn" class="form-control" maxlength="15" value="<?php echo $data->nisn;?>" required>
        </div>
        <div class="form-group">
        <label for="">Golongan Darah</label>
        <select class="form-control form-control" name="goldar" required>
          <option selected hidden><?php echo $data->goldar;?></option>
          <option>A</option>
          <option>B</option>
          <option>AB</option>
          <option>O</option>
          </select>
        </div>
       
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Anak Ke</label>
        <input type="text" name="anak_ke" class="form-control" maxlength="2" value="<?php echo $data->anak_ke;?>" required>
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Dari Bersaudara</label>
        <input type="text" name="dari_saudara" class="form-control" maxlength="2" value="<?php echo $data->dari_saudara;?>" >
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Jarak Ke Sekolah (KM)</label>
        <input type="text" name="jarak" class="form-control" maxlength="5" value="<?php echo $data->jarak;?>" required>
        </div>
    </div>
    </div>
    </div>
    
    <div class="col">

    <div class="row">
    <div class="col">

    <div class="form-group">
        <label for="">Tempat Lahir</label>
        <input type="text" name="tpt_lahir" class="form-control" value="<?php echo $data->tpt_lahir;?>" required>
        </div>
        </div>

        <div class="col">
        <div class="form-group">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $data->tgl_lahir;?>" required>
        </div>
        </div>
    </div>

    <div class="row">
    <div class="col">

    <div class="form-group">
        <label for="">Agama</label>
        <select class="form-control form-control" name="agama" required>
          <option selected hidden><?php echo $data->agama;?></option>
          <option>Islam</option>
          <option>Kristen</option>
          <option>Budha</option>
          <option>Hindu</option>
          <option>Konghucu</option>
          <option>Katolik</option>
          </select>
        </div>
        </div>

        <div class="col">
        <div class="form-group">
        <label for="">Suku</label>
        <select class="form-control form-control" name="suku" required>
          <option selected hidden><?php echo $data->suku;?></option>
          <option>Aceh</option>
          <option>Batak</option>
          <option>Jawa</option>
          <option>Gayo</option>
          <option>Jawa</option>
          <option>Tionghoa</option>
          <option>Padang</option>
          <option>Lainnya</option>
          </select>
        </div>
        </div>
    </div>
   
    <div class="form-group">
        <label for="">Jenis Kelamin</label>
        <select class="form-control form-control" name="jk" required>
          <option selected hidden><?php echo $data->jk;?></option>
          <option>Laki-Laki</option>
          <option>Perempuan</option>
          </select>
        </div>
        <div class="form-group">
        <label for="">Alamat Lengkap</label>
        <textarea class="form-control" name="alamat" rows="1" maxlength="500" required><?php echo $data->alamat;?></textarea>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Desa/Kelurahan</label>
        <input type="text" name="desa" class="form-control" maxlength="300" value="<?php echo $data->desa;?>" required>
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Kabupaten</label>
        <input type="text" name="kabupaten" class="form-control" maxlength="100" value="<?php echo $data->kabupaten;?>" required>
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Provinsi</label>
        <input type="text" name="provinsi" class="form-control" maxlength="100" value="<?php echo $data->provinsi;?>" required>
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
        <input type="text" name="nama_ayah" class="form-control" value="<?php echo $data->nama_ayah;?>" required>
        </div>

        <div class="form-group">
        <label for="">Pendidikan Terakhir</label>
        <select class="form-control form-control" name="pendidikan_ayah" required>
          <option selected hidden><?php echo $data->pendidikan_ayah;?></option>
          <option>SD</option>
          <option>SMP</option>
          <option>SMA</option>
          <option>S1/D4</option>
          <option>S2</option>
          <option>S3</option>
          </select>
        </div>
       
        <div class="form-group">
        <label for="">Penghasilan Per Bulan</label>
        <select class="form-control form-control" name="penghasilan_ayah" required>
          <option selected hidden><?php echo $data->penghasilan_ayah;?></option>
          <option>< Rp. 1.000.000</option>
          <option>Rp. 1.000.000 s/d Rp. 2.500.000</option>
          <option>Rp. 2.500.000 s/d Rp. 5.000.000</option>
          <option>> Rp. 5.000.000</option>
          </select>
        </div>

        <div class="form-group">
        <label for="">No Telp/HP Ayah</label>
        <input type="text" name="hp_ayah" class="form-control" maxlength="14" value="<?php echo $data->hp_ayah;?>" required>
        </div>
    </div>
    
    <div class="col">
    <div class="row">
    <div class="col">

    <div class="form-group">
        <label for="">Tempat Lahir Ayah</label>
        <input type="text" name="tptlahir_ayah" class="form-control" value="<?php echo $data->tptlahir_ayah;?>" required>
        </div>
        </div>

        <div class="col">
        <div class="form-group">
        <label for="">Tanggal Lahir Ayah</label>
        <input type="date" name="tgllahir_ayah" class="form-control" value="<?php echo $data->tgllahir_ayah;?>" required>
        </div>
        </div>
    </div>
   
       
        <div class="form-group">
        <label for="">Pekerjaan Ayah</label>
        <input type="text" name="pekerjaan_ayah" class="form-control" value="<?php echo $data->pekerjaan_ayah;?>" required>
        </div>
        <div class="form-group">
        <label for="">Alamat Lengkap</label>
        <textarea class="form-control" name="alamat_ayah" rows="1" maxlength="500" required><?php echo $data->alamat_ayah;?></textarea>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Desa/Kelurahan</label>
        <input type="text" name="desa_ayah" class="form-control" maxlength="300" value="<?php echo $data->desa_ayah;?>" required>
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Kabupaten</label>
        <input type="text" name="kabupaten_ayah" class="form-control" maxlength="100" value="<?php echo $data->kabupaten_ayah;?>" required>
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Provinsi</label>
        <input type="text" name="provinsi_ayah" class="form-control" maxlength="100" value="<?php echo $data->provinsi_ayah;?>" required>
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
        <input type="text" name="nama_ibu" class="form-control" value="<?php echo $data->nama_ibu;?>" required>
        </div>

        <div class="form-group">
        <label for="">Pendidikan Terakhir</label>
        <select class="form-control form-control" name="pendidikan_ibu" required>
          <option selected hidden><?php echo $data->pendidikan_ibu;?></option>
          <option>SD</option>
          <option>SMP</option>
          <option>SMA</option>
          <option>S1/D4</option>
          <option>S2</option>
          <option>S3</option>
          </select>
        </div>
       
        <div class="form-group">
        <label for="">Penghasilan Per Bulan</label>
        <select class="form-control form-control" name="penghasilan_ibu" required>
          <option selected hidden><?php echo $data->penghasilan_ibu;?></option>
          <option>< Rp. 1.000.000</option>
          <option>Rp. 1.000.000 s/d Rp. 2.500.000</option>
          <option>Rp. 2.500.000 s/d Rp. 5.000.000</option>
          <option>> Rp. 5.000.000</option>
          </select>
        </div>

        <div class="form-group">
        <label for="">No Telp/HP Ibu</label>
        <input type="text" name="hp_ibu" class="form-control" maxlength="14" value="<?php echo $data->hp_ibu;?>" required>
        </div>
       
       
    </div>
    
    <div class="col">

    <div class="row">
    <div class="col">

    <div class="form-group">
        <label for="">Tempat Lahir Ibu</label>
        <input type="text" name="tptlahir_ibu" class="form-control" value="<?php echo $data->tptlahir_ibu;?>" required>
        </div>
        </div>

        <div class="col">
        <div class="form-group">
        <label for="">Tanggal Lahir Ibu</label>
        <input type="date" name="tgllahir_ibu" class="form-control" value="<?php echo $data->tgllahir_ibu;?>" required>
        </div>
        </div>
    </div>
   
       
        <div class="form-group">
        <label for="">Pekerjaan Ibu</label>
        <input type="text" name="pekerjaan_ibu" class="form-control" value="<?php echo $data->pekerjaan_ibu;?>" required>
        </div>
        <div class="form-group">
        <label for="">Alamat Lengkap</label>
        <textarea class="form-control" name="alamat_ibu" rows="1" maxlength="500" required><?php echo $data->alamat_ibu;?></textarea>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Desa/Kelurahan</label>
        <input type="text" name="desa_ibu" class="form-control" maxlength="300" value="<?php echo $data->desa_ibu;?>" required>
        </div>
        </div>
        <div class="col">
        <div class="form-group">
        <label for="">Kabupaten</label>
        <input type="text" name="kabupaten_ibu" class="form-control" maxlength="100" value="<?php echo $data->kabupaten_ibu;?>" required>
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Provinsi</label>
        <input type="text" name="provinsi_ibu" class="form-control" maxlength="100" value="<?php echo $data->provinsi_ibu;?>" required>
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
        <input type="text" name="sekolah_asal" class="form-control" value="<?php echo $data->sekolah_asal;?>" required>
        </div>

    <div class="form-group">
        <label for="">NPSN Sekolah</label>
        <input type="text" name="npsn" class="form-control" value="<?php echo $data->npsn?>">
        </div>
    </div>
    
    <div class="col">
    <div class="row">
    <div class="col">
        <div class="form-group">
        <label for="">Alamat Sekolah</label>
        <textarea class="form-control" name="alamat_sekolah" rows="1" maxlength="500" required><?php echo $data->alamat_sekolah;?></textarea>
        </div>
        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Kabupaten</label>
        <input type="text" name="kabupaten_sekolah" class="form-control" maxlength="300" value="<?php echo $data->kabupaten_sekolah;?>" required>
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Provinsi</label>
        <input type="text" name="provinsi_sekolah" class="form-control" maxlength="100" value="<?php echo $data->provinsi_sekolah;?>" required>
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
        <input type="text" name="penyakit" class="form-control" value="<?php echo $data->penyakit;?>" required>
        </div>

        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Olahraga</label>
        <select class="form-control form-control" name="olah_raga" required>
          <option selected hidden><?php echo $data->olah_raga;?></option>
          <option>Ya</option>
          <option>Tidak</option>
          </select>
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Seni Musik</label>
        <select class="form-control form-control" name="seni" required>
          <option selected hidden><?php echo $data->seni;?></option>
          <option>Ya</option>
          <option>Tidak</option>
          </select>
        </div>
        </div>
        </div>
        </div>

    
    <div class="col">

    <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Seni Tari</label>
        <select class="form-control form-control" name="tari" required>
          <option selected hidden><?php echo $data->tari;?></option>
          <option>Ya</option>
          <option>Tidak</option>
          </select>
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Seni Lukis</label>
        <select class="form-control form-control" name="lukis" required>
          <option selected hidden><?php echo $data->lukis;?></option>
          <option>Ya</option>
          <option>Tidak</option>
          </select>
        </div>
        </div>
        </div>

        <div class="row">
        <div class="col">
        <div class="form-group">
        <label for="">Drama</label>
        <select class="form-control form-control" name="drama" required>
          <option selected hidden><?php echo $data->drama;?></option>
          <option>Ya</option>
          <option>Tidak</option>
          </select>
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Sastra</label>
        <select class="form-control form-control" name="sastra" required>
          <option selected hidden><?php echo $data->sastra;?></option>
          <option>Ya</option>
          <option>Tidak</option>
          </select>
        </div>
        </div>
        <div class="col"> 
        <div class="form-group">
        <label for="">Organisasi</label>
        <select class="form-control form-control" name="organisasi" required>
          <option selected hidden><?php echo $data->organisasi;?></option>
          <option>Ya</option>
          <option>Tidak</option>
          </select>
        </div>
        </div>
        </div>
       </div>
        </div>
        <div class="form-group">
        <label for="">Prestasi Yang Pernah Diraih</label>
        <textarea class="form-control" name="prestasi" rows="2" required><?php echo $data->prestasi;?></textarea>
        </div>    
        <br><br>

        <h2 class="text-info"><b>INFORMASI TENTANG SEKOLAH</b></h2>
      <hr>
    
        <div class="form-group">
        <label for="">Alasan Anda Ingin Bersekolah Di Sekolah Sukma Bangsa</label>
        <textarea class="form-control" name="alasan" rows="2" maxlength="100" required><?php echo $data->alasan;?></textarea>
        </div>  

        <div class="form-group">
        <label for="">Apa Yang Anda Ketahui Tentang Sekolah Sukma Bangsa?</label>
        <textarea class="form-control" name="tentang_sekolah" rows="2" maxlength="100" required><?php echo $data->tentang_sekolah;?></textarea>
        </div>    
        <button type="submit" class="btn btn-primary" style="width:100%;"><i class="fa fa-save"></i> Simpan</button>         
        </form>
	<?php endforeach ;?>



  <br>
  <div class="row no-print">
  <div class="col">
  <p align="center"><a class="btn btn-success" href="<?=base_url('user/cetak_kartu/'.$id)?>" style="width:50%;" role="button"><i class="fa fa-arrow-left"></i> Sebelumnya</a></p>     
  </div>
  <div class="col">
  <p align="center"><a class="btn btn-success" href="<?=base_url('user/cetakdaftarulang/'.$id)?>" style="width:50%;" role="button">Selanjutnya <i class="fa fa-arrow-right"></i></a></p>
  </div>
  </div>
    </section>
</div>
<br>