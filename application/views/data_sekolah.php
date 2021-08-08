<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DATA AKUN SEKOLAH</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">PPDB</a></li>
              <li class="breadcrumb-item active">Akun Admin Sekolah</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
    <p align="left">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-plus"></i> Tambah Data</button></p>

    <table class="table table-hover" id="example">
          <thead class="text-left">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NPSN</th>
              <th scope="col">NAMA SEKOLAH</th>
              <th scope="col">USERNAME</th>
              <th scope="col">PASSWORD</th>
              <th scope="col">AKSI</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	        foreach ($data_sekolah as $data) : ?>
		<tr class="nomor text-left">
            <th scope="row"><?php echo $i ;?></th>
            <td><?php echo $data->npsn;?></td>
            <td><?php echo $data->nama_sekolah;?></td>
            <td><?php echo $data->username;?></td>
            <td><?php echo $data->password;?></td>
            <td><?php echo anchor('home/edit_sekolah/'.$data->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?>
            <?php echo anchor('home/hapus_sekolah/'.$data->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?></td>	
		</tr>
		<?php $i++; ?>
	<?php endforeach ;?>
          </tbody>
        </table>

    </div>
   
</div>

</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content"> 
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Akun Sekolah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url().'home/tambahpengguna_sekolah'; ?>">
      <div class="form-group">
        <label for="">Nama Sekolah</label>
        <select class="form-control selectpicker" id="select1" data-size="3" name="id_pesertadidik" data-style="btn-info" data-live-search="true">
        <?php foreach ($pengguna2 as $data) : ?>
        <option value="<?php echo $data->id_sekolah;?>"><?php echo $data->nama_sekolah;?></option>
        <?php endforeach ;?>
        </select>
      </div>
      <div class="form-group" hidden>
        <label for="">Nama Sekolah</label>
        <input type="text" id="nama_sekolah" name="nama_sekolah" class="form-control">
        </div>
        <div class="form-group">
        <label for="">Username</label>
        <input type="text" name="username" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="">password</label>
        <input type="text" name="password" class="form-control" required>
        </div>
        <div class="form-group">
        <button type="submit" class="form-control btn btn-primary">Simpan</button>
        </div>

      </div>
        </form>
    </div>
  </div>
</div>
</div>
<script>
document.getElementById('select1').onchange = function() {
  var e = document.getElementById("select1");
  var strAtt = e.options[e.selectedIndex].getAttribute('name'); // will return the value
  var strVal = e.options[e.selectedIndex].value; // will return the value
  var strText = e.options[e.selectedIndex].text; // will return the text
  console.log(strText);
  var tb = document.getElementById("nama_sekolah");
  tb.value = strText;
}
</script>
