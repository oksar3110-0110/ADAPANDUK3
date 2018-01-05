<!DOCTYPE html>
<html lang="en">
<head>
  <title>.::ADAPANDU::.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>


  <div class="container-fluid" style="background-color: white;">
  <div class="page-header">
  	<img src="./img/logo.jpg" width="100" height="65" align="left">&nbsp;
      <font size="18px">APLIKASI PENDATAAN POSYANDU</font>
    <img src="./img/menkes.png" width="100" height="65" align="right"">
  </div>   
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">ADAPANDU</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
      <li><a data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-log-in"></span> Log In</a></li>
    </ul>
  </div>
</nav>

<div class="container-fluid" style="padding-bottom: 100px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="img/1.jpg" alt="Los Angeles">
        <div class="carousel-caption">
          <h1 style="color: #607D8B;" align="left">KEGIATAN POSYANDU</h1>
          <p align="left">Kegiatan Posyandu Dalam Rangka Pemantauan Gizi Balita</p>
        </div>
      </div>

      <div class="item">
        <img src="img/2.jpg" alt="Chicago">
        <div class="carousel-caption">
          <h1 style="color: #607D8B;" align="left">KEGIATAN POSYANDU</h1>
          <p align="left">Kegiatan Posyandu Dalam Rangka Pemantauan Kesehatan<br> Ibu Hamil</p>
        </div>
      </div>

      <div class="item">
        <img src="img/3.jpg" alt="New York">
        <div class="carousel-caption">
          <h1 style="color: #607D8B;" align="left">KEGIATAN POSYANDU</h1>
          <p align="left">Kegiatan Posyandu Dalam Rangka Penyuluhan Kepada <br> Warga Akan Pentingnya Menjaga Kesehatan</p>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <br>
  <div class="row" align="center">
    <div class="col-lg-6">
    <div class="jumbotron"  style="height: 370px;">
      <h1>Apakah ADAPANDU Itu?</h1> 
      <p>ADAPANDU Merupakan Aplikasi Website Buatan Kelompok 3 Pada Proyek UAS Semester 3 D3TI2D</p></div>
    </div>
    <div class="col-lg-6">
    <div class="jumbotron">
      <h1>Apa Yang Tersedia?</h1> 
      <p>ADA PANDU membantu proses pendataan dan penyampaian informasi mengenai imunisasi balita dan terutama bodata balita tingkat RT.</p>
    </div>
  </div>
  </div>
</div>
<footer class="text-center">
        <div class="footer-above" style="background-color: #37474F; color: white;">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Temukan Kami</h3>
                        <p>Jalan Lohbener Lama NO.8
                            <br>Indramayu, Jawa Barat</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Around the Web</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4" style="background-color: #37474F; color: white;">
                        <h3>About ADAPANDU</h3>
                        <p>ADAPANDU Merupakan Aplikasi Website Buatan Kelompok 3 Pada Proyek UAS Semester 3 D3TI2D <a href="http://ti.polindra.ac.id">Teknik Informatika</a> Politeknik Negeri Indramayu.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below" style="background-color: #424242; color: white;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; ADAPANDU 2017
                    </div>
                </div>
            </div>
        </div>
    </footer>





<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">DAFTAR</h4>
        </div>
        <div class="modal-body">
          <div class="contentt">
    	<h1>Panduan Pendaftaran</h1><br>
    	<p>Bagi masyarakat yang belum mendapatkan akun ADAPANDU harap menghubungi bidan desa maupun kader Posyandu<br>
    	terdekat dengan menyediakan persyaratan yang ditetapkan oleh POSYANDU.<br><br>
    	TTD<br><br>
    	Admin ADAPANDU</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
  <div class="modal modal-transparent fade" id="myModal1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">LOG IN</h4>
        </div>
        <div class="modal-body">
          <p><div class="row">
    <div class="row" style="vertical-align: middle; margin-top: 50px;">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">SIGN IN</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" action="login.php" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" type="text" autofocus name="user">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" type="password" value="" name="pass">
                                </div>
                                <div class="form-group">
                                    <input name="captcha" type="text" maxlength="7" size="9"> <img src="captcha.php">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me</input><br>
                                        
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" class="btn btn-lg btn-success btn-block" name="login" value="LOGIN"></a>
                                <input type="reset" class="btn btn-lg btn-success btn-block" value="RESET">
                            </fieldset><br>

                        </form>
                    </div>
                </div>
            </div>
</div></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
