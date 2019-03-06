    <!DOCTYPE html>
    <html>

    <?php
            /**
            * 
            */
            require_once "saw.php";
            $saw = new saw();
            $link = mysql_connect('localhost', 'root', '');
            if (!$link) {
                die('Not connected : ' . mysql_error());
            }

                                // make sawer the current db
            $db_selected = mysql_select_db('sawer', $link);
            if (!$db_selected) {
                die ('Can\'t use sawer : ' . mysql_error());
            }


            /*$cek_kriteria = mysql_query("SELECT * FROM tabel_faktor")or die(mysql_error());
            $bobot = mysql_fetch_assoc($cek_kriteria);*/
            $faktor['c1'] =7.1;
            $faktor['c2'] =6.8;
            $faktor['c3'] =6.5;
            $faktor['c4'] =6.3;
            $faktor['c5'] =6.1;
            $faktor['c6'] =5.8;
            $faktor['c7'] =5.5;
            $faktor['c8'] =5.3;
            $faktor['c9'] =5.1;
            $faktor['c10'] =4.8;
            $faktor['c11'] =4.5;
            $faktor['c12'] =4.3;
            $faktor['c13'] =4.0;
            $faktor['c14'] =3.7;
            $faktor['c15'] =3.5;
            $faktor['c16'] =3.3;
            $faktor['c17'] =3.0;
            $faktor['c18'] =2.7;
            $faktor['c19'] =2.5;
            $faktor['c20'] =2.1;
            $faktor['c21'] =2.0;
            $faktor['c22'] =1.5;
            $faktor['c23'] =1.3;
            $faktor['c24'] =1.2;
            $faktor['c25'] =1.1;


            ?>
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
                    <h1 class="text-center">Normalisasi</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>

                                            <th>NAMA </th>
                                            <?php 
                                            $loop = 1;
                                            while ( $loop <= 25) {

                                                echo "<th>C".$loop."</th>";
                                                $loop++;
                                            }?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $keluarga = $saw->get_data_keluarga();
                                        while ($data_keluarga = $keluarga->fetch(PDO::FETCH_ASSOC)) {
                                            ?>
                                            <tr>
                                                <td><center><?php echo $data_keluarga['nama']; ?></center></td>
                                                <?php
                                                $nilai = $saw->get_data_nilai_id($data_keluarga['nik']);
                                                $maksimal = $saw->nilai_max();
                                                $data_max = $maksimal->fetch(PDO::FETCH_ASSOC);
                                                while ($data_nilai = $nilai->fetch(PDO::FETCH_ASSOC)) {

                                                    ?>
                                                    <td><center>
                                <?php echo $h1=$data_nilai['c1']/$data_max['max1']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h2=$data_nilai['c2']/$data_max['max2']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h3=$data_nilai['c3']/$data_max['max3']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h4=$data_nilai['c4']/$data_max['max4']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h5=$data_nilai['c5']/$data_max['max5']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h6=$data_nilai['c6']/$data_max['max6']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h7=$data_nilai['c7']/$data_max['max7']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h8=$data_nilai['c8']/$data_max['max8']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h9=$data_nilai['c9']/$data_max['max9']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h10=$data_nilai['c10']/$data_max['max10']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h11=$data_nilai['c11']/$data_max['max11']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h12=$data_nilai['c12']/$data_max['max12']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h13=$data_nilai['c13']/$data_max['max13']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h14=$data_nilai['c14']/$data_max['max14']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h15=$data_nilai['c15']/$data_max['max15']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h16=$data_nilai['c16']/$data_max['max16']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h17=$data_nilai['c17']/$data_max['max17']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h18=$data_nilai['c18']/$data_max['max18']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h19=$data_nilai['c19']/$data_max['max19']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h20=$data_nilai['c20']/$data_max['max20']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h21=$data_nilai['c21']/$data_max['max21']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h22=$data_nilai['c22']/$data_max['max22']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h23=$data_nilai['c23']/$data_max['max23']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h24=$data_nilai['c24']/$data_max['max24']; ?>
                            </center></td>
                            <td><center>
                                <?php echo $h25=$data_nilai['c25']/$data_max['max25']; ?>
                            </center></td>

                            <?php
                            $nik = $data_keluarga['nik'];
                            $jumlah = ($h1*$faktor['c1']+$h2*$faktor['c2']+$h3*$faktor['c3']+$h4*$faktor['c4']+$h5*$faktor['c5']+$h6*$faktor['c6']+$h7*$faktor['c7']+$h8*$faktor['c8']+$h9*$faktor['c9']+$h10*$faktor['c10']+$h11*$faktor['c11']+$h12*$faktor['c12']+$h13*$faktor['c13']+$h14*$faktor['c14']+$h15*$faktor['c15']+$h16*$faktor['c16']+$h17*$faktor['c17']+$h18*$faktor['c18']+$h19*$faktor['c19']+$h20*$faktor['c20']+$h21*$faktor['c21']+$h22*$faktor['c22']+$h23*$faktor['c23']+$h24*$faktor['c24']+$h25*$faktor['c25']);
                            //echo $jumlah;

                            if ($jumlah<50) {
                                $kelayakan = "menerima bantuan";
                            }
                            else{
                                $kelayakan = "tidak menerima";
                            }

                                    //$simpan = $saw->prepare("INSERT INTO `kelayakan`(`NIK`, `Skor`, `Status`) VALUES ( $nik ,$jumlah, '$kelayakan')");

                            $query = "INSERT INTO `kelayakan`(`NIK`, `Skor`, `Status`) VALUES ( $nik ,$jumlah, '$kelayakan')";

                            
                            $cek_kk = mysql_query("SELECT * FROM kelayakan where NIK='$nik'")or die(mysql_error());
                            $cek_skor = mysql_query("SELECT * FROM kelayakan where NIK='$nik' AND Skor='$jumlah'")or die(mysql_error());


                            if (mysql_num_rows($cek_kk) > 0) {
                                if (mysql_num_rows($cek_skor) > 0) {
                                    
                                    $updateSkordanLayak = "UPDATE `kelayakan` SET Skor=$jumlah ,Status=$kelayakan WHERE  NIK='$nik' ";
                                }
                            }
                            else{

                                $hasil = mysql_query($query);
                                if($hasil){  
                                //  echo "Data Tersimpan";  
                                }else{  
                                    echo "Error! gagal menyimpan".mysql_error();  
                                }   
                            }
                            
                        } ?>

                    </tr>

                    <?php } ?>
                </table>
                                    </div>
                                    <nav>
                                        <ul class="pagination">
                                            <li><a aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li><a>1</a></li>
                                            <li><a>2</a></li>
                                            <li><a>3</a></li>
                                            <li><a>4</a></li>
                                            <li><a>5</a></li>
                                            <li><a aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
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