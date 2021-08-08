<div class="content-wrapper">
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col">
          <br>
            <h1 class="m-0 text-dark">EDIT FINALISASI PENDAFTARAN</h1>
            <hr> 
          </div><!-- /.col -->
        </div><!-- /.row -->
        </div><!-- /.container-fluid -->

     
    </div>
    
    
    <section class="content">

 <!-- Tab panes -->
 <div class="tab-content">
    <div id="home" class="container tab-pane active">
    <!-- data siswa -->
    <a href="#" class="btn rounded-pill text-left text-light"  style="width:100%;background:#325288;"><b>STATUS FINALISASI</b></a><br><br>
    <form action="<?=base_url('admin/updatefinalisasi')?>" method="post">
    <div class="row">
    <div class="col">
    <div class="container">
    <?php foreach ($editfinalisasi as $data) : ?>
      <?php
      if ($data->status == 1) {
        $status="Kunci";
      }
      if ($data->status == 0) {
        $status="Buka Kunci";
      }
      ?>
    <div class="form-group">
        <label for="">Status Finalisasi</label>
        <select class="form-control form-control" name="status">
          <option selected hidden><?php echo $status;?></option>
          <option value="1">Kunci</option>
          <option value="0">Buka Kunci</option>
          </select>
      </div>
      <div class="form-group" hidden>
        <label for=""><b>ID PD :</b></label>
        <input type="text" name="id_pesertadidik" value="<?php echo $data->id_pesertadidik;?>" class="form-control" required>
      </div> 
      <div class="form-group" hidden>
        <label for=""><b>ID :</b></label>
        <input type="text" name="id" value="<?php echo $data->id;?>" class="form-control" required>
      </div> 
        <?php endforeach ;?>

      <button type="submit" class="btn btn-primary form-control"><i class="fa fa-save"></i> <b>UBAH FINALISASI</b></button>         

      </form>
    </div>
  </div>
</div>

    

    </div>


    </section>
</div>
<br>
