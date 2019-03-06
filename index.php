<!DOCTYPE html>
<html>
<?php
session_start();
  
if(!isset($_SESSION['login'])){
   header("location:login.php");

}

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
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#"><strong>HIGH FIVE</strong></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right">
                    <li role="presentation"><a href="index.php"><strong>HOME </strong></a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><strong>DATA </strong><span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="inputdata.php">Input Data</a></li>
                            <!-- <li role="presentation"><a href="lihatdata.php">Lihat Data</a></li> -->
                            <li role="presentation"><a href="normalisasi.php">Normalisasi </a></li>
                            <li role="presentation"><a href="status.php">Status Penerimaan</a></li>
                        </ul>
                    </li>
                    <li role="presentation"><a href="logout.php"><strong>LOGOUT </strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="desk">
        <div class="jumbotron">
            <h1><strong>Sistem Penunjang Keputusan</strong></h1>
            <p>Pemberian Bantuan Pangan Non-Tunai Dengan Metode Simple Additive Weighting</p>
        </div>
    </div>
    <div>
        <h1 class="text-center"><strong>OUR TEAM</strong></h1></div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="text-center"><img class="img-circle" src="assets/img/foto1.png" alt="111" width="111" height="111"></p>
                  <h1 class="text-center">Andi Syafrianda</h1>
                    <p class="text-center">Back-end Developer</p>
                </div>
                <div class="col-md-6">
                    <p class="text-center"><img class="img-circle" src="assets/img/foto2.png" alt="111" width="111" height="111"></p>
                  <h1 class="text-center">Alif Yusrianto</h1>
                    <p class="text-center">Front-end Developer </p>
                </div>
                <div class="col-md-6">
                    <p class="text-center"><img class="img-circle" src="assets/img/foto3.png" alt="111" width="111" height="111"></p>
                  <h1 class="text-center">Cholidian R</h1>
                    <p class="text-center">System Analyst</p>
                </div>
                <div class="col-md-6">
                    <p class="text-center"><img class="img-circle" src="assets/img/foto4.png" alt="111" width="111" height="111"></p>
                  <h1 class="text-center">Fajar Anang C.</h1>
                    <p class="text-center">Data Specialist</p>
                </div>
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