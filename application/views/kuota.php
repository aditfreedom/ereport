<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">KUOTA PENDAFTARAN</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">PPDB</a></li>
            <li class="breadcrumb-item active">Kuota Penerimaan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <div class="content">
    <p align="left">
      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus"></i> Tambah Data</button>
    </p>

    <table class="table table-hover" id="example">
      <thead class="text-left">
        <tr>
          <th scope="col">NO</th>
          <th scope="col">NAMA SEKOLAH</th>
          <th scope="col">TOTAL</th>
          <th scope="col">ZONASI</th>
          <th scope="col">AFIRMASI</th>
          <th scope="col">PINDAHAN ORANG TUA</th>
          <th scope="col">PRESTASI</th>
          <th scope="col">UMUM</th>
          <th hidden scope="col">AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        foreach ($kuota as $data) : ?>
          <tr class="nomor text-left">
            <th scope="row"><?php echo $i; ?></th>
            <td><?php echo $data['nama_sekolah']; ?></td>
            <td><?php echo $data['total']; ?></td>
            <td><?php echo $data['sisa_zonasi']; ?></td>
            <td><?php echo $data['sisa_afirmasi']; ?></td>
            <td><?php echo $data['sisa_pindahan']; ?></td>
            <td><?php echo $data['sisa_prestasi']; ?></td>
            <td><?php echo $data['sisa_umum']; ?></td>
            <td hidden>
              <button class="btn btn-sm btn-primary edit" data-id="<?= $data['id_kuota']; ?>">
                <i class="fa fa-edit"></i>
              </button>
              <?php echo anchor('home/hapuskuota/' . $data['id_kuota'], '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?>
            </td>
          </tr>
          <?php $i++; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Kuota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?= base_url('home') . '/tambahkuota'; ?>" data-baseurl="<?= base_url('home'); ?>">
          <div class="form-group">
            <label for="">Nama Sekolah</label>
            <select class="form-control selectpicker" data-size="3" name="id_sekolah" id="id_sekolah" data-style="btn-info" data-live-search="true">
              <?php foreach ($kuota2 as $data) : ?>
                <option value="<?php echo $data->id_sekolah; ?>" data-type="<?=$data->status_sekolah;?>"><?php echo $data->nama_sekolah; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="">Total Kuota Penerimaan</label>
            <input type="text" name="total" id="total" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Kuota Zonasi</label>
            <input type="text" name="zonasi" id="zonasi" class="form-control negeri" required>
          </div>
          <div class="form-group">
            <label for="">Kuota Afirmasi</label>
            <input type="text" name="afirmasi" id="afirmasi" class="form-control negeri" required>
          </div>
          <div class="form-group">
            <label for="">Kuota Pindahan Orang tua</label>
            <input type="text" name="pindahan" id="pindahan" class="form-control negeri" required>
          </div>
          <div class="form-group">
            <label for="">Kuota Prestasi</label>
            <input type="text" name="prestasi" id="prestasi" class="form-control negeri" required>
          </div>
          <div class="form-group swasta" style="display: none;">
            <label for="">Kuota Umum</label>
            <input type="text" name="umum" id="umum" value="0" class="form-control" required>
          </div>
          <input type="hidden" name="kuota_in" id="kuota_in" value="0">
          <button type="button" class="btn btn-primary" id="simpan">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>
</div>