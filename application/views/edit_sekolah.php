<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">EDIT AKUN SEKOLAH</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Edit Sekolah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($data_sekolah as $data) : ?>
		<form method="post" action="<?php echo base_url().'home/update_sekolah'; ?>">
    <div class="form-group">
        <input type="hidden" name="id" class="form-control" value="<?php echo $data->id;?>">
        </div>
        <div class="form-group">
        <input type="hidden" name="id_pesertadidik" class="form-control" value="<?php echo $data->id_pesertadidik;?>">
        </div>
        <div class="form-group">
        <input type="hidden" name="role" class="form-control" value="<?php echo $data->role;?>">
        </div>
        <div class="form-group">
        <label  for="">Nama Sekolah</label>
        <input readonly type="text" name="approve_formulir" class="form-control" value="<?php echo $data->approve_formulir;?>">
        </div>
        <div class="form-group">
        <label for="">Username</label>
        <input  type="text" name="username" class="form-control" maxlegth="100" value="<?php echo $data->username;?>">
        </div>
        <div class="form-group">
        <label for="">Password</label>
        <input type="text" name="password" maxlegth="100" class="form-control" value="<?php echo $data->password;?>">
        </div>
        <button type="submit" class="btn btn-primary form-control"><i class="fa fa-save"></i> Simpan</button>         
        </form>
	<?php endforeach ;?>



    </section>
</div>
<br>