<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 rounded" style="background:#007580">
          <div class="col">
          <br>
            <h1 class="m-0 text-light text-bold">APPROVAL CALON PESERTA DIDIK</h1>
            <footer class="blockquote-footer text-light"><b>Approve Data Formulir PPDB 2021/2022</b></footer>
            <hr>
            <a href="<?=base_url('admin/approve_formulir/'.$id_pesertadidik)?>" class="btn btn-light" style="width:20%;">1. Data Diri</a>&nbsp;&nbsp;<a href="<?=base_url('admin/vervalberkas/'.$id_pesertadidik)?>" style="width:20%;" class="btn btn-danger" >2. Verval Berkas</a>
            &nbsp;<a href=""  style="width:20%;" class="btn btn-danger">3. Upload Berkas</a>&nbsp;&nbsp;<a href="" style="width:20%;" class="btn btn-danger">4. Finalisasi Pendaftaran</a>
            <br><br>
  
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
    <!-- <p align="right">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    <i class="fa fa-plus"></i> Tambah Data</button><br><br></p> -->

    <table class="table table-hover" id="example">
          <thead class="text-center">
            <tr>
              <th scope="col">NO</th>
              <th scope="col">NISN</th>
              <th scope="col">NAMA LENGKAP</th>
              <th scope="col">SEKOLAH ASAL</th>
              <th scope="col">JENIS PENERIMAAN</th>
              <th scope="col">APPROVAL FORMULIR</th>
              <th scope="col" >AKSI</th>
            </tr>
          </thead>
          <tbody>
          <?php $i = 1; 
	        foreach ($verval as $data) : ?>
		<tr class="nomor text-center">
            <th scope="row"><?php echo $i ;?></th>
            <td><?php echo $data->nisn;?></td>
            <td><?php echo $data->nama_siswa;?></td>
            <td><?php echo $data->nama_sekolah;?></td>
            <td><?php echo $data->nama;?></td>
    <?php
    $approval= $data->approve_formulir;
      if ($approval=="Antrian") {
        $class="btn-warning";
      }elseif($approval=="Diterima"){
        $class="btn-info";
      }
      else{
        $class="btn-danger";
      }    
    ?>
            <td><a class="font-weight-bold text-uppercase <?= $class;?> rounded-pill" href="#" role="button">&nbsp&nbsp<?php echo $data->approve_formulir?>&nbsp&nbsp</a></td>
            <td><?php echo anchor('admin/editapproval/'.$data->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>')?></td>	            
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kuota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="<?php echo base_url().'home/tambahkuota'; ?>">
      <div class="form-group">
        <label for="">Jenis Penerimaan</label>
        <select class="form-control form-control" name="jenis">
          <option>Peserta Didik Baru SD</option>
          <option>Peserta Didik Baru SMP</option>
          <option>Peserta Didik Baru SMA</option>
          <option>Pindahan SD</option>
          <option>Pindahan SMP</option>
          <option>Pindahan SMA</option>
          </select>
      </div>
        <div class="form-group">
        <label for="">Kuota Penerimaan</label>
        <input type="text" name="kuota" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>

