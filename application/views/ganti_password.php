<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">GANTI PASSWORD</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Ganti Password</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
    <section class="content">
    <div class="container">
    <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>GANTI PASSWORD</b></a><br><br>
    </div>
    <form action="<?=base_url('admin/updatepassword')?>" method="post">
    <div class="container">
    <?php foreach ($ganti_password as $data) : ?>
        <div class="form-group">
        <label for=""><b>USERNAME : </b></label>
        <input type="text" name="username" value="<?php echo $data->username;?>" class="form-control" maxlength="50" placeholder="Nama Lengkap" required>
        </div>  

        <div class="form-group">
        <label for=""><b>PASSWORD : </b></label>
          <input type="text" name="password" value="<?php echo $data->password;?>" class="form-control" maxlength="50" placeholder="Nama Lengkap" required>
        </div>  


        <div class="form-group" hidden>
        <label for=""><b>ID :</b></label>
        <input type="text" name="id_pesertadidik" value="<?php echo $data->id_pesertadidik;?>" class="form-control" placeholder="Beri Angka 0 Bila Tidak Ada" maxlength="50" required>
        </div> 
        <?php endforeach ;?>
        <button type="submit" id="btn" class="btn btn-primary font-weight-bold" style="width:100%;">SIMPAN DATA</button><br><br>

        </form>


    </div>
    </div>
    </section>
</div>
<br>