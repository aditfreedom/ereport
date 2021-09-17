<!doctype html>
<html lang="en"><head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>LAPORAN BULANAN E-REPORT</title>
  </head><body style="font-family: 'Times New Roman', Times, serif; color:black;">
      <div class="container">
        <?php foreach ($baca_laporan as $data) : ?>
            <!-- <img class="mx-auto d-block" src="<?=base_url('assets22/img/favicon.png')?>" width="80px"><br> -->
            <table style="width: 100%" class="text-center">
                <tr>
                    <td><img src="<?=base_url()?>assets/img/favicon.png" width="80px"></td><br>
                </tr>
                </table>
            <h6 class="text-center font-weight-bold">LAPORAN BULANAN WALI KELAS<br>SMA SUKMA BANGSA BIREUEN<br>TP. 2021/2022</h6>
            <br><br>
            <table class="font-weight-bold">
                <tr>
                    <td>KELAS</td>
                    <td>&nbsp;:</td>
                    <td>&nbsp;<?=$data->nama_kelas?></td>
                </tr>
                <tr>
                    <td>WALI KELAS</td>
                    <td>&nbsp;:</td>
                    <td>&nbsp;<?=$data->nama_user?></td>
                </tr>
                <tr>
                    <td>PERIODE</td>
                    <td>&nbsp;:</td>
                    <td>&nbsp;<?=$data->periode?></td>
                </tr>
            </table>

            <br><br>

            <p class="font-weight-bold">a. Jumlah Siswa</p>
            <div class="form-group">
            <table border=1 class="text-center" style="undefined;table-layout: fixed; width: 100%">
            <colgroup>
            <col style="width: 49.77778px">
            <col style="width: 149.88889px">
            <col style="width: 100.88889px">
            <col style="width: 110.88889px">
            <col style="width: 119.88889px">
            <col style="width: 128.88889px">
            <col style="width: 121.88889px">
            <col style="width: 140.88889px">
            </colgroup>
            <tr>
                <th>NO</th>
                <th>JENIS KELAMIN</th>
                <th>JUMLAH</th>
                <th>ISLAM</th>
                <th>KRISTEN</th>
                <th>KATOLIK</th>
                <th>BUDHA</th>
                <th>HINDU</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Laki - Laki</td>
                <td><?=$data->jlh_laki?></td>
                <td><?=$data->jlh_laki_islam?></td>
                <td><?=$data->jlh_laki_kristen?></td>
                <td><?=$data->jlh_laki_katolik?></td>
                <td><?=$data->jlh_laki_budha?></td>
                <td><?=$data->jlh_laki_hindu?></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Perempuan</td>
                <td><?=$data->jlh_perempuan?></td>
                <td><?=$data->jlh_perempuan_islam?></td>
                <td><?=$data->jlh_perempuan_kristen?></td>
                <td><?=$data->jlh_perempuan_katolik?></td>
                <td><?=$data->jlh_perempuan_budha?></td>
                <td><?=$data->jlh_perempuan_hindu?></td>
            </tr>
            <tr>
                <td colspan="2"><b>TOTAL</b></td>
                <td><?=$data->total?></td>
                <td colspan="5"></td>
            </tr>
            </table>
            </div>  

            <br>
            <p class="font-weight-bold">b. Kehadiran Siswa</p>

            <table border=1 style="undefined;table-layout: fixed; width: 100%">
              <colgroup>
              <col style="width: 50.77778px">
              <col style="width: 229.88889px">
              <col style="width: 288.88889px">
              <col style="width: 195.88889px">
              <col style="width: 320.88889px">
              </colgroup>
                <tr class="text-center">
                  <th>NO</th>
                  <th>JENIS PENCATATAN</th>
                  <th>JUMLAH</th>
                  <th>%</th>
                  <th>KETERANGAN<br>(Nama siswa yang muncul/menonjol)</th>
                </tr>
                <tr>
                  <td class="text-center">1</td>
                  <td> Hadir Tepat Waktu</td>
                  <td class="text-center"><?=$data->jlh_hadir_tpt_waktu?></td>
                  <td class="text-center"><?=$data->persen_hadir_tpt_waktu?></td>
                  <td class="text-center"><?=$data->keterangan_hadir_tpt_waktu?></td>
                </tr>
                <tr>
                  <td class="text-center">2</td>
                  <td> Keterlambatan</td>
                  <td class="text-center"><?=$data->jlh_terlambat?></td>
                  <td class="text-center"><?=$data->persen_terlambat?></td>
                  <td class="text-center"><?=$data->keterangan_terlambat?>
                </tr>
                <tr>
                  <td rowspan="4" class="text-center">3</td>
                  <td> Ketidakhadiran :</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td> a. Sakit</td>
                  <td class="text-center"><?=$data->jlh_sakit?></td>
                  <td class="text-center"><?=$data->persen_sakit?></td>
                  <td class="text-center"><?=$data->ket_sakit?></td>
                </tr>
                <tr>
                  <td> b. Ijin</td>
                  <td class="text-center"><?=$data->jlh_izin?></td>
                  <td class="text-center"><?=$data->persen_izin?></td>
                  <td class="text-center"><?=$data->ket_izin?></td>
                </tr>
                <tr>
                  <td> c. Alpha</td>
                  <td class="text-center"><?=$data->jlh_alpa?></td>
                  <td class="text-center"><?=$data->persen_alpa?></td>
                  <td class="text-center"><?=$data->ket_alpa?></td>
                </tr>
              </table>

              
                <br><br>
              <p class="font-weight-bold">c. Kondisi Akademik Kelas</p>
              <div class="form-group">
                <textarea style="color:black" required name="kondisi_akademik" cols="30" maxlength="1400"  rows="5" class="form-control border border-dark" placeholder="Deskripsi kondisi Akademik Kelas"><?=$data->kondisi_akademik?></textarea>
                </div> 

                <br><br>
              <p class="font-weight-bold">d. Kondisi Psiko-sosial Kelas</p>
              <div class="form-group">
                <textarea style="color:black" required name="kondisi_psiko" cols="30" maxlength="1400"  rows="5" class="form-control border border-dark" placeholder="Deskripsi Psiko-sosial Kelas"><?=$data->kondisi_psiko?></textarea>
                </div>  

                <br><br>
                <p class="font-weight-bold">e. Kondisi Fisik Kelas</p>
                <div class="form-group">
                <textarea style="color:black" required name="kondisi_fisik" cols="30" maxlength="1400"  rows="5" class="form-control border border-dark" placeholder="Deskripsi Kondisi Fisik Kelas"><?=$data->kondisi_fisik?></textarea>
                </div> 

                <table style="width: 100%" class="text-center">
                <tr>
                    <td>Mengetahui,<br>Kepala Sekolah<br><br><br><br>Kartika Hakim, MA<br>NIP. 10151003</td>
                    <td style="right:1500px;position: absolute;">Bireuen, <?php $currentDateTime = date('d-m-Y'); echo $currentDateTime?><br>Wali Kelas<br><br><br><?=$data->nama_user?><br>NIP. <?=$data->username?> </td>
                </tr>
                </table>

        <?php endforeach; ?>
      </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body></html>