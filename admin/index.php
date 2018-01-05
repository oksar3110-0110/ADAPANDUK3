<?php
 session_start();
 if (empty($_SESSION['admin'])) {
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
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <a class="navbar-brand" href="index.php">DASHBOARD ADMIN</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="viewpetugas.php">MANAGE PETUGAS</a>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MANAGE DATA
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="mpos.php">POSYANDU</a></li>
          <li><a href="mvbal.php">VIEW BALITA</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">LAPORAN
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="lperk.php">PERKEMBANGAN BALITA</a></li>
          <li><a href="lkrit.php">KRITIK DAN SARAN</a></li>
          <li><a href="lkeg.php">KEGIATAN POSYANDU</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a ><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['admin']; ?></a></li>
      <li><a href="../logout.php" onClick="return confirm ('Yakin?')"><span class="glyphicon glyphicon-log-in"></span> Log Out</button></a></li>
    </ul>
  </div>
</nav>

<div class="content" style="margin-bottom: 200px;">
<center><h1>GRAFIK JUMLAH BALITA YANG TERDATA</h1></center>
<center><div style="width: 65%">
<canvas id="grafikBatang"></canvas>
<?php
       $konek=mysqli_connect("localhost", "root", "", "adapandu");
       
       $sqlCommand = "SELECT COUNT(nm_balita) FROM balita WHERE nm_pos = 'DAHLIA1'";
       $sqlCommand1 = "SELECT COUNT(nm_balita) FROM balita WHERE nm_pos = 'DAHLIA2'";
       $sqlCommand2 = "SELECT COUNT(nm_balita) FROM balita WHERE nm_pos = 'DAHLIA3'";
       $sqlCommand3 = "SELECT COUNT(nm_balita) FROM balita WHERE nm_pos = 'DAHLIA4'";
       $sqlCommand4 = "SELECT COUNT(nm_balita) FROM balita WHERE nm_pos = 'DAHLIA5'";
       $query1 = mysqli_query($konek, $sqlCommand) or die (mysqli_error());
       $query2 = mysqli_query($konek, $sqlCommand1) or die (mysqli_error());
       $query3 = mysqli_query($konek, $sqlCommand2) or die (mysqli_error());
       $query4 = mysqli_query($konek, $sqlCommand3) or die (mysqli_error());
       $query5 = mysqli_query($konek, $sqlCommand4) or die (mysqli_error());
       $row = mysqli_fetch_row($query1);
       $row1 = mysqli_fetch_row($query2);
       $row2 = mysqli_fetch_row($query3);
       $row3 = mysqli_fetch_row($query4);
       $row4 = mysqli_fetch_row($query5);
       
       $pos = "SELECT nm_pos FROM pos";
       $nmpos = mysqli_query($konek, $pos);
       //echo "Ada " . $row[0] . " pos.";
?>
<script>
var ctx = document.getElementById("grafikBatang").getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?php while ($p = mysqli_fetch_array($nmpos)) { echo '"' . $p['nm_pos'] . '",';}?>],
        datasets: [{
            label: '',
            data: [<?php echo $row[0]; mysqli_free_result($query1);?>,<?php echo $row1[0]; mysqli_free_result($query2);?>,<?php echo $row2[0]; mysqli_free_result($query3);?>,<?php echo $row3[0]; mysqli_free_result($query4);?>,<?php echo $row4[0]; mysqli_free_result($query5);?>],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:true
                }
            }]
        }
    }
});
</script>
</div></center>    
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