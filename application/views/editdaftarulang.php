<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2 rounded" style="background:#5B5EA6">
          <div class="col">
          <br>
            <h1 class="m-0 text-light text-bold">APPROVAL DAFTAR ULANG</h1>
            <footer class="blockquote-footer text-light"><b>Konfirmasi Daftar Ulang Peserta Didik</b></footer>
            <hr>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <section class="content">
    <div class="container">

    <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>APPROVE DAFTAR ULANG</b></a><br><br>
    <form action="<?=base_url('admin/updatedaftarulang')?>" method="post">
    <?php foreach ($daftarulang as $data) : ?>
        <div class="form-group">
            <label for="">Approve Daftar Ulang</label>
            <select class="form-control form-control" name="approve_daftarulang">
              <option selected hidden><?php echo $data->approve_daftarulang;?></option>
              <option>Antrian</option>
              <option>Diterima</option>
              <option>Ditolak</option>
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
       
        <button type="submit" id="btn" class="btn btn-primary font-weight-bold" style="width:100%;"> SIMPAN DATA</button><br><br>
        </form>

    </div>


    </section>
</div>
<br>