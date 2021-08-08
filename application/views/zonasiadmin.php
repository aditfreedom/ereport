<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">ZONASI</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">PPDB</a></li>
                        <li class="breadcrumb-item active">Pengaturan Zonasi</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="content">
        <!-- <p align="left">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
                <i class="fa fa-plus"></i> Tambah Data</button>
        </p> -->
    <div class="container">
        <table class="table table-hover" id="example">
            <thead class="text-left">
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA SEKOLAH</th>
                    <th scope="col">DESA</th>
                    <th scope="col">KECAMATAN</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($zonasi as $data) : ?>
                    <tr class="nomor text-left">
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $data->nama_sekolah; ?></td>
                        <td><?php echo $data->nama_desa; ?></td>
                        <td><?php echo $data->nama_wilayah; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
        </div>

    </div>
</div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pengaturan Zonasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo base_url() . 'home/tambahzonasi'; ?>" data-baseurl="<?=base_url('home/');?>">
                    <div class="form-group">
                        <label for="">Nama Kecamatan</label>
                        <select class="form-control selectpicker" data-size="3" name="wilayah" id="wilayah" data-style="btn-info" data-live-search="true" data-url="<?= base_url('home/getDesaByWilayah'); ?>">
                            <option value="">-- Pilih Kecamatan --</option>
                            <?php foreach ($kecamatan as $data) : ?>
                                <option value="<?= $data['kode_wilayah']; ?>"><?= $data['nama_wilayah']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Desa</label>
                        <select class="form-control selectpicker" data-size="3" name="desa" id="desa" data-style="btn-info" data-live-search="true" data-url="<?= base_url('home/getSekolahByDesa'); ?>">
                            <option value="">-- Pilih Desa --</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Nama Sekolah</label>
                        <select class="form-control selectpicker" data-size="3" name="id_sekolah" data-style="btn-info" data-live-search="true">
                            <?php foreach ($sekolah as $data) : ?>
                                <option value="<?= $data['id_sekolah']; ?>"><?= $data['nama_sekolah']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>