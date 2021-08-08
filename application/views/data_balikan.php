
  <div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
 <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="text-bold">DATA BALIKAN</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="container">
    <section class="content">
      <div class="container-fluid">
        <br>      

        <table class="table table-hover" id="example2">
          <thead class="text-left">
            <tr>
              <th scope="col">PESERTA DIDIK ID</th>
              <th scope="col">NPSN SEKOLAH ASAL</th>
              <th scope="col">NAMA SEKOLAH ASAL</th>
              <th scope="col">NIK</th>
              <th scope="col">NISN</th>
              <th scope="col">NAMA</th>
              <th scope="col">TEMPAT LAHIR</th>
              <th scope="col">TGL LAHIR</th>
              <th scope="col">JK</th>
              <th scope="col">NAMA IBU</th>
              <th scope="col">SEKOLAH ID TUJUAN</th>
              <th scope="col">NPSN SEKOLAH TUJUAN</th>
              <th scope="col">NAMA SEKOLAH TUJUAN</th>
            </tr>
          </thead>


            <tbody>
          <?php $i = 1; 
          foreach ($kecamatan as $data) :
	        ?>
		      <tr class="nomor text-left text-uppercase">
            <td><?=$data->dsid;?></td>
            <td><?=$data->dsdnpsn;?></td>
            <td class="text-uppercase"><?=$data->dsdnm;?></td>
            <td><?=$data->dsnik;?></td>
            <td><?=$data->dsnisn;?></td>
            <td class="text-uppercase"><?=$data->dsnm;?></td>
            <td class="text-uppercase"><?=$data->dstpt;?></td>
            <td><?=$data->dstgl;?></td>
            <td><?=$data->dsjk;?></td>
            <td class="text-uppercase"><?=$data->dsibu;?></td>
            <td><?=$data->stid;?></td>
            <td><?=$data->dsmpnpsn;?></td>
            <td><?=$data->dsmpnm;?></td>

          </tr>
          <?php $i++;?>
          <?php endforeach; ?>
          </tbody>
          </table>
        </div>        
    </section>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.print.min.js"></script>
 
<script>
  $(document).ready(function() {
    $('#example2').DataTable( {
      "scrollX": true,
        dom: 'Bfrtip',
        buttons: [
            {extend:'excel',title: 'Data Balikan',className: 'btn btn-primary',text: 'Download File Excel'}, 
            {extend:'csv',title: 'Data Balikan',className: 'btn btn-success',header: false,text: 'Download File CSV'}
        ]
    } );
} );
</script>

