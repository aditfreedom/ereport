<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', Times, serif;
            font-size: 10px;
        }

        body {
            margin: 0 50px;
        }

        .text-center {
            text-align: center;
        }

        h3 {
            margin: 10px 0;
        }

        hr {
            border-style: dashed;
        }

        .ceklis {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .ceklis td {
            border: 1px solid black;
            padding: 2.5px 5px;
        }

        .frame {
            height: 3.5cm;
            width: 3cm;
            border: 1px solid black;
            border-style: dotted;
            position: absolute;
            top: 170px;
            right: 50px;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .kop {
            text-align: center;
            border-bottom: 5px solid black;
            padding: 15px;
            margin-bottom: 10px;
        }

        .kop * {
            margin: 0;
        }

        .kop-logo {
            position: absolute;
            top: 0;
            left: 50px;
            height: 70px;
        }

        h3 {
            font-size: 13px;
        }

        h2 {
            font-size: 17px;
        }

        h1 {
            font-size: 22px;
        }
    </style>
</head>

<body onafterprint="goBack()">
    <div class="kop">
        <img src="<?=base_url();?>assets/img/favicon.png" alt="" srcset="" class="kop-logo">
        <h2>PENERIMAAN PESERTA DIDIK BARU</h2>
        <h1>DINAS PENDIDIKAN DAN KEBUDAYAAN</h1>
        <?php foreach ($siswa2 as $data) : ?>
        <p>Jl. Banta Ahmad Komplek SKB -SPNF Telp (0644) 21229 fax. (0644) 324210<br>Email:disdik_bireuen@gmail.com Kode Pos 24211</p>
        <?php endforeach; ?>
        <!-- <small>Jalan Banta Ahmad Komplek SKB - SPNF Telp. (0644) 21229 Fax (0644) 34210 Email: <a>disdik.bireuen@gmail.com</a> Kode Pos 24211</small> -->
        <h3>B I R E U E N</h3>
    </div>

    <!-- validasi nomor pendaftaran -->
    <?php
    $nomor = $siswa3 + 1;
    ?>

    <?php date_default_timezone_set("Asia/Bangkok");?>
    <h3 class="text-center">FORMULIR PENDAFTARAN PESERTA DIDIK BARU</h3>
    <h3 class="text-center">TAHUN PELAJARAN 2021/2022</h3>
    <table style="width: 100%; margin-bottom: 10px" class="table-data">
        <thead>
            <tr>
                <th colspan="3" align="left"><strong>DATA</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="width: 48%;">No. Pendaftaran</td>
                <td style="width: 10px;">:</td>
                <td style="width: 50%;"><?=$nomor?>/PPDB/2021</td>
            </tr>
            <tr>
                <td style="padding-bottom: 10px;">Tgl. Pendaftaran</td>
                <td>:</td>
                <td><?=date("d-m-Y")?></td>
            </tr>
            <tr>
                <td>Asal Sekolah (SD)</td>
                <td>:</td>
                <td style="text-transform: uppercase;"><?=$siswa['sekolah_asal'];?></td>
            </tr>
            <tr>
                <td>Nomor Induk Siswa Nasional (NISN)</td>
                <td>:</td>
                <td><?=$siswa['nisn'];?></td>
            </tr>
            <tr>
                <td>Nama Pesera Didik</td>
                <td>:</td>
                <td style="text-transform: uppercase;"><?=$siswa['nama_siswa'];?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td style="text-transform: uppercase;"><?=$siswa['tempat_lahir'];?></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?=$siswa['tanggal_lahir'];?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td style="text-transform: uppercase;"><?=$siswa['jk'];?></td>
            </tr>
            <tr>
                <td>Nomor Induk Kependudukan (NIK)</td>
                <td>:</td>
                <td><?=$siswa['nik'];?></td>
            </tr>
            <tr>
                <td>Alamat (Nama Desa/Kelurahan)</td>
                <td>:</td>
                <td style="text-transform: uppercase;"><?=$siswa['alamat_jalan'];?>, <?=$siswa['desa_kelurahan'];?></td>
            </tr>
            <tr>
                <td>Nomor Program Indonesia Pintar (PIP)</td>
                <td>:</td>
                <td><?=$siswa['no_kip'];?></td>
            </tr>
            <tr>
                <td>Nomor Program Program Keluarga Harapan (PKH)</td>
                <td>:</td>
                <td><?=$siswa['no_pkh'];?></td>
            </tr>
        </tbody>
    </table>

    <table style="width: 100%; margin-bottom: 10px" class="table-data">
        <thead>
            <tr>
                <th colspan="3" align="left"><strong>DATA ORANG TUA WALI</strong></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td  style="width: 48%;">Nama Ayah Kandung</td>
                <td style="width: 10px;">:</td>
                <td style="width: 50%;text-transform: uppercase;><?=$siswa['nama_ayah'];?></td>
            </tr>
            <tr>
                <td>Pekerjaan Ayah</td>
                <td>:</td>
                <td style="text-transform: uppercase;"><?=$siswa['pekerjaan_ayah'];?></td>
            </tr>
            <tr>
                <td>Nama Ibu Kandung</td>
                <td>:</td>
                <td style="text-transform: uppercase;"><?=$siswa['nama_ibu_kandung'];?></td>
            </tr>
            <tr>
                <td>Pekerjaan Ibu</td>
                <td>:</td>
                <td style="text-transform: uppercase;"><?=$siswa['pekerjaan_ibu_kandung'];?></td>
            </tr>
            <tr>
                <td>Nama Wali Siswa</td>
                <td>:</td>
                <td></td>
            </tr>
        </tbody>
    </table>

    <table style="width: 100%">
        <thead>
            <tr>
                <th colspan="3" align="left"><strong>DATA SEKOLAH TUJUAN</strong></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($siswa2 as $data) : ?>
            <tr>
                <td style="width: 48%;">Jalur Pendaftaran</td>
                <td style="width: 10px;">:</td>
                <td style="width: 50%;text-transform: uppercase;"><?=$data->nama;?></td>
            </tr>
            <tr>
                <td>Kecamatan</td>
                <td>:</td>
                <td style="text-transform: uppercase;" ><?=$data->nama_wilayah;?></td>
            </tr>
            <tr>
                <td>Nama Desa/Kelurahan</td>
                <td>:</td>
                <td style="text-transform: uppercase;" ><?=$data->nama_desa;?></td>
            </tr>
            <tr>
                <td>Sekolah Tujuan</td>
                <td>:</td>
                <td style="text-transform: uppercase;" ><?=$data->nama_sekolah;?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br>
    <br>
    <table style="width: 100%; margin-top: 15px;">
        <tr>
            <td align="center">Petugas Pendaftaran</td>
            <td align="center">Orang Tua/Wali Siswa</td>
            <td align="center">Siswa Pendaftar</td>
        </tr>
        <tr>
            <td>&emsp;</td>
        </tr>
        <tr>
            <td>&emsp;</td>
        </tr>
        <tr>
            <td style="padding: 25px">
                <hr />
            </td>
            <td style="padding: 25px">
                <hr />
            </td>
            <td style="padding: 25px">
                <hr />
            </td>
        </tr>
    </table>
    <strong>Kolom Checklist Kelengkapan Dokumen</strong>
    <div style="
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding-top: 5px;
      ">
        <table class="ceklis" style="width: 28%">
        <tr>
                <td>1</td>
                <td>Kartu Keluarga (Zonasi)</td>
                <td>&emsp;&emsp;&emsp;</td>
            </tr>
            <tr>
                <td>2</td>
                <td>KIP/PKH (Afirmasi)</td>
                <td>&emsp;&emsp;&emsp;</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Kartu Keluarga (Afirmasi)</td>
                <td>&emsp;&emsp;&emsp;</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Surat Keterangan Pindah Dinas (Pindahan)</td>
                <td>&emsp;&emsp;&emsp;</td>
            </tr>
 
        </table>
        <table class="ceklis" style="width: 28%">
        <tr>
                <td>5</td>
                <td>Kartu Keluarga (Pindahan)</td>
                <td>&emsp;&emsp;&emsp;</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Surat Keterangan Berprestasi (Prestasi)</td>
                <td>&emsp;&emsp;&emsp;</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Kartu Keluarga (Prestasi)</td>
                <td>&emsp;&emsp;&emsp;</td>
            </tr>
        </table>
        <table class="ceklis" style="width: 28%">
            <tr>
           
            </tr>
        </table>
    </div>

    <br />
    <strong>Note:</strong>
    <ul>
        <li>
            Semua Persyaratan dimasukkan kedalam:
            <br />
            <table>
                <tr>
                    <td><strong>Jalur Zonasi</strong></td>
                    <td><strong>: Biru</strong></td>
                </tr>
                <tr>
                    <td><strong>Jalur Afirmasi</strong></td>
                    <td><strong>: Kuning</strong></td>
                </tr>
                <tr>
                    <td><strong>Jalur Pindahan Orang Tua &emsp;</strong></td>
                    <td><strong>: Merah</strong></td>
                </tr>
                <tr>
                    <td><strong>Jalur Prestasi &emsp;</strong></td>
                    <td><strong>: Hijau</strong></td>
                </tr>
            </table>
        </li>
        <br>
        <li>Formulir di Print Out Sebanyak 1 Lembar</li>
        <li>Diserahkan Kepada Panitia PPDB di Sekolah Tujuan</li>
    </ul>

    <div class="frame">
        Foto <br>
        3 x 4
    </div>

    <script>
        window.print()

        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>