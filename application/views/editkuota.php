<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">EDIT KUOTA PENDAFTARAN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Edit Kuota Pendaftaran</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <?php foreach ($kuota as $data) : ?>
		<form method="post" action="<?php echo base_url().'home/updatekuota'; ?>">
    <div class="form-group">
        <input type="hidden" name="id" class="form-control" value="<?php echo $data->id;?>">
        </div>
        <div class="form-group">
        <input readonly type="text" name="jenis" class="form-control" value="<?php echo $data->jenis;?>">
        </div>
    
        <div class="form-group">
        <label for="">Kuota Penerimaan</label>
        <input type="text" name="kuota" class="form-control" value="<?php echo $data->kuota;?>">
        </div>
        <div class="form-group">
        <label for="">Keterangan</label>
        <input type="text" name="keterangan" class="form-control" value="<?php echo $data->keterangan;?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
	<?php endforeach ;?>
    </section>
</div>