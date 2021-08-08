    <section class="content">
    <?php foreach ($approval_daftarulang as $data) : ?>
		<form method="post" action="<?php echo base_url().'home/updatedaftarulang'; ?>">
    <div class="form-group">
        <input type="hidden" name="id" class="form-control" value="<?php echo $data->id;?>">
        </div>
        <div hidden class="form-group">
        <label for="">Nama Lengkap</label>
        <input readonly type="text" name="nama" class="form-control" value="<?php echo $data->nama_lengkap;?>">
        </div>
        <div hidden class="form-group">
        <label for="">Jenis</label>
        <input readonly type="text" name="jenis" class="form-control" value="<?php echo $data->jenis?>">
        </div>
        <div hidden class="form-group">
        <label for="">NISN</label>
        <input readonly type="text" name="nisn" class="form-control" value="<?php echo $data->nisn;?>">
        </div>
        <div hidden class="form-group">
        <label for="">Alamat</label>
        <input readonly type="text" name="alamat" class="form-control" value="<?php echo $data->alamat;?>">
        </div>
        <div hidden class="form-group">
        <label for="">Sekolah Asal</label>
        <input readonly type="text" name="sekolah_asal" class="form-control" value="<?php echo $data->sekolah_asal;?>">
        </div>
        <div hidden class="form-group">
        <label for="">No HP</label>
        <input readonly type="text" name="no_hp" class="form-control" value="<?php echo $data->no_hp;?>">
        </div>
        <div hidden class="form-group">
        <label for="">Foto</label><br>
        <input  type="hidden" name="foto" class="form-control" value="<?php echo $data->foto;?>">
        <img src="<?php echo base_url();?>asset/foto/<?php echo $data->foto;?>" class="border border-dark rounded" width="150px">
        </div>
        <div hidden class="form-group">
        <label for="">Bukti Transfer</label><br>
        <input  type="hidden" name="bukti_tf" class="form-control" value="<?php echo $data->bukti_tf;?>">
        <img src="<?php echo base_url();?>asset/buktitf/<?php echo $data->bukti_tf;?>" class="border border-dark rounded" width="150px">
        </div>
        <div hidden class="form-group">
        <input type="text" name="username" class="form-control" value="<?php echo $data->username;?>">
        </div>
        <div hidden class="form-group">
        <input type="text" name="password" class="form-control" value="<?php echo $data->password;?>">
        </div>
        <div hidden class="form-group">
        <input type="text" name="role" class="form-control" value="<?php echo $data->role;?>">
        </div>
        <div class="form-group">
        <label for="">Approve Daftar Ulang</label>
        <select class="form-control form-control" name="approve_daftarulang">
          <option selected hidden><?php echo $data->approve_daftarulang;?></option>
          <option>Antrian</option>
          <option>Diterima</option>
          <option>Ditolak</option>
          </select>
      </div>
      <div hidden class="form-group">
      <input  type="text" name="approve_formulir" class="form-control" value="<?php echo $data->approve_formulir;?>">
      </div>  
      <div hidden class="form-group">
      <input  type="text" name="approve_lulus" class="form-control" value="<?php echo $data->approve_lulus;?>">
      </div>  
        <button type="submit" class="btn btn-primary" style="width:100%;"><i class="fa fa-save"></i> Simpan</button>         
        </form>
	<?php endforeach ;?>


    </section>
</div>
<br>