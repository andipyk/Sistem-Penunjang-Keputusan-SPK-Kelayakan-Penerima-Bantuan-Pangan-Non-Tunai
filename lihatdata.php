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
                            <li role="presentation"><a href="lihatdata.php">Lihat Data</a></li>
                            <li role="presentation"><a href="normalisasi.php">Normalisasi </a></li>
                            <li role="presentation"><a href="status.php">Status Penerimaan</a></li>
                        </ul>
                    </li>
                    <li role="presentation"><a href="#"><strong>LOGOUT </strong></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <h1 class="text-center">Data Penduduk</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No </th>
                                <th>NIK </th>
                                <th>NAMA </th>
                                <th>BOBOT1 </th>
                                <th>BOBOT2 </th>
                                <th>BOBOT3 </th>
                                <th>PILIHAN </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1 </td>
                                <td>Cell 2</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 5</td>
                                <td>Cell 6</td>
                                <td>Cell 7</td>
                            </tr>
                            <tr>
                                <td>2 </td>
                                <td>Cell 4</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 5</td>
                                <td>Cell 6</td>
                                <td>Cell 7</td>
                            </tr>
                            <tr>
                                <td>3 </td>
                                <td>Cell 2</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 5</td>
                                <td>Cell 6</td>
                                <td>Cell 7</td>
                            </tr>
                            <tr>
                                <td>4 </td>
                                <td>Cell 2</td>
                                <td>Cell 3</td>
                                <td>Cell 4</td>
                                <td>Cell 5</td>
                                <td>Cell 6</td>
                                <td>Cell 7</td>
                            </tr>
                        </tbody>
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