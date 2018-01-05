<?php
 session_start();
 if (empty($_SESSION['ortu'])) {
 header("location:../index.php");
 echo '<script language="javascript">alert("AAnda Belum Login, Silahkan Login Atau Daftar"); document.location="index.php";</script>';
 }
 else {
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>.::ADAPANDU::.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <div class="container-fluid" style="background-color: white;">
  <div class="page-header">
  	<img src="../img/logo.jpg" width="100" height="65" align="left">&nbsp;
      <font size="18px">APLIKASI PENDATAAN POSYANDU</font>
    <img src="../img/menkes.png" width="100" height="65" align="right"">
  </div>   
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">DASHBOARD ORTU</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="perkembangan.php">PERKEMBANGAN BALITA</a>
      </li>
      <li class="dropdown">
        <a href="kritiksaran.php">KRITIK DAN SARAN</a>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a ><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['ortu']; ?></a></li>
      <li><a href="../logout.php" onClick="return confirm ('Yakin?')"><span class="glyphicon glyphicon-log-in"></span> Log Out</button></a></li>
    </ul>
  </div>
</nav>

<div class="content" style="margin-bottom: 100px;">
<div class="container">
      <div class="well">
        <div class="row"> 
  <div class="col-sm-12">
<div class='navbar navbar-inverse'>
  <div class='navbar-header'>
    <div class="navbar-text"><i class="fa fa-file"></i> VIEW PERKEMBANGAN BALITA</div>
  </div>
</div>
  <div>
  
    <br>
    <br>
    <div class="col-sm-12 content-body">  
    <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>NAMA</th>
            <th>TGL LAPORAN</th>

            <th>TINGGI</th>
            <th>BERAT(Kg)</th>
            
            <th>KETERANGAN</th>
            <th>CATATAN TAMBAHAN</th>
        </tr>
      </thead>
      <tbody>
      <?php
                $link = mysqli_connect("localhost", "root", "", "adapandu");

                $result = mysqli_query($link, "SELECT * FROM perkembangan WHERE nm_balita LIKE '".$_SESSION['ortu']."'");
                 
                while ($row=mysqli_fetch_row($result))
                {
                   $no=1;
                echo " <tr>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[4]</td>
                        <td>$row[5]</td>
                        <td>$row[6]</td>
                        
                        </tr>";
                 $no++;
                }

            ?>
    </tbody>
    </table>
  </div>
    <div class="col-sm-12">
    Jumlah 1 data </div>
  <div class="col-sm-12">
      <nav aria-label="Page navigation">
    <ul class="pagination">
    <li class=disabled><span aria-hidden=true>&laquo;</span>
          </li><li class="active"><a href="https://sertifikasi.lsptik.or.id/report/1">1</a></li><li class=disabled>
            <span aria-hidden=true>&raquo;</span>
          </li>   </ul>
  </nav>
  </div>
</div>
</div>
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
</body>
</html>
<?php } ?>