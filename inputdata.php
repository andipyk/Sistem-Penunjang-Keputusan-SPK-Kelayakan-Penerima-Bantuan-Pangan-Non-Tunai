<?php
include_once "saw.php";
$saw = new saw();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>saw</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="index.php"><strong>HIGH FIVE</strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.php"><strong>HOME </strong></a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><strong>DATA </strong><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li role="presentation"><a href="inputdata.php">Input Data</a></li>
                                        <li role="presentation"><a href="normalisasi.php">Normalisasi </a></li>
                                        <li role="presentation"><a href="status.php">Status Penerimaan</a></li>
                        </ul>
                    </li>
                    <li role="presentation"><a href="logout.php"><strong>LOGOUT </strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="panel panel-success">
            <div class="panel-heading">
                <h1 class="text-center panel-title"><strong>INPUT DATA KELUARGA</strong></h1></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <h2><strong>Info Keluarga</strong></h2>
                        <form class="form-horizontal custom-form" method="POST"  action="prosesinput.php" >
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="name-input-field">No. KK</label>
                                </div>
                                <div class="col-sm-6 input-column">
                                    <input class="form-control" type="number" name="no_kk" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="email-input-field" >Nama KK</label>
                                </div>
                                <div class="col-sm-6 input-column">
                                    <input class="form-control" type="text" name="nama_kk" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="pawssword-input-field" required>Alamat </label>
                                </div>
                                <div class="col-sm-6 input-column">
                                    <input class="form-control" type="text" name="alamat">
                                </div>
                            </div>
                            <h2><strong>Aspek Tempat Tinggal</strong></h2>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Status Rumah Yang Ditempati</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c1" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="17" selected="">Menyewa</option>
                                            <option value="22">Ikut Keluarga/Orang lain</option>
                                            <option value="27">Milik Lembaga/Kantor</option>
                                            <option value="34">Milik Sendiri</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Status Lahan Tempat Tinggal</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c2" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="61" selected="">Milik Sendiri</option>
                                            <option value="22">Tanah Milik Orang Lain</option>
                                            <option value="17">Tanah Negara</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Luas Rumah Yang Ditempati</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c3" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="17" selected="">&lt;= 5,9 m2</option>
                                            <option value="22">6 m2 - 8,9 m2</option>
                                            <option value="27">9 m2 - 11,9 m2</option>
                                            <option value="37">&gt;= 12 m2</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Jenis Lantai Rumah</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c4" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="4" selected="">Tanah</option>
                                            <option value="6">Bambu Kualitas Rendah</option>
                                            <option value="6">Kayu Kualitas Rendah</option>
                                            <option value="12">Bambu Kualitas Bagus</option>
                                            <option value="9">Kayu Kualitas Bagus</option>
                                            <option value="16">Keramik</option>
                                            <option value="18">Lantai Vinil</option>
                                            <option value="22">Batu Marmer</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Bahan Pembuatan Dinding Rumah</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c5" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="10" selected="">Bambu Kualitas Rendah</option>
                                            <option value="14">Bambu Kualitas Bagus</option>
                                            <option value="21">Kayu Kualitas Rendah</option>
                                            <option value="24">Kayu Kualitas Bagus</option>
                                            <option value="31">Batu Bata/Batako</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Jenis Atap Terluas</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c6" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="5" selected="">Jerami/Ijuk/Daun</option>
                                            <option value="7">Bambu</option>
                                            <option value="13">Seng</option>
                                            <option value="20">Asbes</option>
                                            <option value="25">Keramik/Metal</option>
                                            <option value="30">Beton</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
<div class="form-group">
            <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Bahan Bakar Utama Masak</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c7" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="10" selected="">Kayu Bakar</option>
                                            <option value="14">Briket</option>
                                            <option value="21">Minyak Tanah</option>
                                            <option value="24">Gas</option>
                                            <option value="31">Listrik</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Penggunaan Fasilitas Layanan Tempat Buang Air Besar</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c8"class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="17" selected="">Tidak Ada</option>
                                            <option value="22">Bersama</option>
                                            <option value="27">Umum</option>
                                            <option value="34">Sendiri</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Tempat Pembuangan Akhir Tinja</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c9" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="17" selected="">Tanah Lapang/Kebun</option>
                                            <option value="22">Sawah/Sungai/Kolam/Danau/Laut</option>
                                            <option value="27">SPAL</option>
                                            <option value="34">Tangki</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Jenis Sumber Penerangan</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c10" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="20" selected="">Belum Menggunakan Listrik</option>
                                            <option value="35">Menyalur Dari Orang Lain</option>
                                            <option value="45">Milik Sendiri</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Jenis Sumber Air</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c11" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="20" selected="">Air Alam Sekitar (Danau, Sungai, Hujan)</option>
                                            <option value="35">Sumur Bor</option>
                                            <option value="45">Membeli Secara Eceran/Langganan</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                        <h2><strong>Aspek Kepemilikan Aset</strong></h2>
                        <div class="form-group">
                            <div class="col-sm-4 label-column">
                                <label class="control-label" for="dropdown-input-field"> Perkiraan harga semua aset fisik yang dimiliki apabila diuangkan </label>
                            </div>
                            <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                <select name="c24">
                                    <optgroup label="Kriteria">
                                        <option value="2" selected="">&lt;= Rp. 2.999.000,00</option>
                                        <option value="4">Rp. 3.000.000 - Rp. 4.999.000,00</option>
                                        <option value="6" selected="">Rp. 5.000.000 - Rp. 6.999.000,00</option>
                                        <option value="8">Rp. 7.000.000 - Rp. 8.999.000,00</option>
                                        <option value="9" selected="">Rp. 9.000.000 - Rp. 10.999.000,00</option>
                                        <option value="10">Rp. 11.000.000 - Rp. 12.999.000,00</option>
                                        <option value="11">Rp. 13.000.000 - Rp. 14.999.000,00</option>
                                        <option value="12">Rp. 15.000.000 - Rp. 16.999.000,00</option>
                                        <option value="12">Rp. 17.000.000 - Rp. 18.999.000,00</option>
                                        <option value="13">Rp. 19.000.000 - Rp. 20.999.000,00</option>
                                        <option value="13">&gt;= Rp. 21. 999.000,00</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><strong>Aspek Keluarga</strong></h2>
                        <div class="form-horizontal custom-form">
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Jumlah Anggota Keluarga</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c13" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="34" selected="">1 - 4</option>
                                            <option value="27">5 - 8</option>
                                            <option value="22">8 - 11</option>
                                            <option value="17">&gt;=12</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Jumlah Anak Usia Sekolah dan Balita</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c14" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="34" selected="">1 - 4</option>
                                            <option value="27">5 - 8</option>
                                            <option value="22">8 - 11</option>
                                            <option value="17">&gt;=12</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Pendidikan Terakhir Ayah</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c15" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="10" selected="">SD/MI/Sederajat</option>
                                            <option value="14">SMP/MTS/Sederajat</option>
                                            <option value="21">SMA/MA/Sederajat</option>
                                            <option value="24">D1/D2/D3/D4</option>
                                            <option value="31">&gt;=S1/S2/S3</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Pendidikan Terakhir Ibu</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c16" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="10" selected="">SD/MI/Sederajat</option>
                                            <option value="14">SMP/MTS/Sederajat</option>
                                            <option value="21">SMA/MA/Sederajat</option>
                                            <option value="24">D1/D2/D3/D4</option>
                                            <option value="31">&gt;=S1/S2/S3</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Keanggotaan Keluarga dalam Program Bantuan Pemerintah</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c12" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="30" selected="">Ya</option>
                                            <option value="70">Tidak</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <h2><strong>Aspek Penghasilan</strong></h2>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Pekerjaan Ayah</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c18" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="2" selected="">Pengangguran</option>
                                            <option value="3">Serabutan</option>
                                            <option value="4">Tukang Pijat</option>
                                            <option value="5">Tukang Becak</option>
                                            <option value="6">Petani</option>
                                            <option value="7">Nelayan</option>
                                            <option value="8">Pedagang</option>
                                            <option value="9">Supir</option>
                                            <option value="9">Wiraswasta</option>
                                            <option value="11">Tenaga Pendidik (Guru, Instruktur)</option>
                                            <option value="12">Pegawai Negeri Sipil (PNS)</option>
                                            <option value="12">Karyawan Perusahaan</option>
                                            <option value="12">Petinggi Perusahaan</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Pekerjaan Ibu</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c19" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="" selected="">Ibu Rumah Tangga</option>
                                            <option value="3">Serabutan</option>
                                            <option value="4">Tukang Pijat</option>
                                            <option value="5">Tukang Becak</option>
                                            <option value="6">Petani</option>
                                            <option value="7">Nelayan</option>
                                            <option value="8">Pedagang</option>
                                            <option value="9">Supir</option>
                                            <option value="9">Wiraswasta</option>
                                            <option value="11">Tenaga Pendidik (Guru, Instruktur)</option>
                                            <option value="12">Pegawai Negeri Sipil (PNS)</option>
                                            <option value="12">Karyawan Perusahaan</option>
                                            <option value="12">Petinggi Perusahaan</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Rata - Rata Penghasilan Ayah-Ibu</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c17" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="3" selected="">&lt;= Rp. 499.000,00</option>
                                            <option value="5">Rp. 500.000 - Rp. 999.000,00</option>
                                            <option value="7">Rp. 1.000.000 - Rp. 1.499.000,00</option>
                                            <option value="9">Rp. 1.500.000 - Rp. 1.999.000,00</option>
                                            <option value="11">Rp. 2.000.000 - Rp. 2.499.000,00</option>
                                            <option value="13">Rp. 2.500.000 - Rp. 2.999.000,00</option>
                                            <option value="15">Rp. 3.000.000 - Rp. 3.499.000,00</option>
                                            <option value="17">Rp. 3.500.000 - Rp. 3.999.000,00</option>
                                            <option value="20">&gt;=Rp. 4.000.000,00</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <h2><strong>Aspek Pangan</strong></h2>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Rata - Rata Frekuensi Makan dalam Sehari</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c20" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="17" selected="">&lt;= 1 kali</option>
                                            <option value="22">2 - 3 kali</option>
                                            <option value="27">4 - 5 kali</option>
                                            <option value="34">&gt;= 6 kali</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Frekuensi Makan Daging atau Telur dalam Seminggu</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c21" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="17" selected="">&lt;= 1 kali</option>
                                            <option value="22">2 - 3 kali</option>
                                            <option value="27">4 - 5 kali</option>
                                            <option value="34">&gt;= 6 kali</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <h2><strong>Aspek Kesehatan</strong></h2>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Frekuensi membawa anggota keluarga yang sakit ke Sarana Kesehatan</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c23" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="34" selected="">&lt;= 1 kali</option>
                                            <option value="27">2 - 3 kali</option>
                                            <option value="22">4 - 5 kali</option>
                                            <option value="17">&gt;= 6 kali</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Sumber Biaya Untuk Membayar Pengobatan</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c22" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="20" selected="">Tidak Ada Sumber Biaya</option>
                                            <option value="35">Bantuan Pemerintah/Pinjaman Orang Lain</option>
                                            <option value="45">Mampu Membayar Sendiri</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <h2><strong>Aspek Sandang</strong></h2>
                            <div class="form-group">
                                <div class="col-sm-4 label-column">
                                    <label class="control-label" for="dropdown-input-field">Rata - Rata Pakaian Baru yang dibeli dalam Setahun Terakhir</label>
                                </div>
                                <div class="col-md-6 col-md-offset-0 col-sm-4 input-column">
                                    <select name="c25" class="form-control">
                                        <optgroup label="Kriteria">
                                            <option value="17" selected="">&lt;= 1 kali</option>
                                            <option value="22">2 - 3 kali</option>
                                            <option value="27">4 - 5 kali</option>
                                            <option value="34">&gt;= 6 kali</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block btn-lg" value="Submit">
                        </form>
            </div>
            <div class="panel-footer"></div>
        </div>
    </div>
    <div id="poter">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <footer>
                    <h4 class="text-center">© HIGH FIVE ALL RIGHT RESERVED</h4></footer>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>