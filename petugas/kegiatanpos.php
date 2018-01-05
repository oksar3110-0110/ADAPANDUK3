<?php
 session_start();
 if (empty($_SESSION['pet'])) {
 header("location:../index.php");
 echo '<script language="javascript">alert("Anda Belum Login, Silahkan Login Atau Daftar"); document.location="index.php";</script>';
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
  <script  type="text/javascript"  src="../tinymce/tinymce.min.js"></script>
  <script  type="text/javascript">
            tinymce.init({
            selector: "textarea"
            });
</script>
<style type="text/css">
.form-control{
    width: 300px;

}
</style>
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
      <a class="navbar-brand" href="index.php">DASHBOARD PETUGAS</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a href="balita.php">MANAGE DATA BALITA</a>
        </li>
        <li class="dropdown">
        <a href="viewperkembanganbalita.php">PERKEMBANGAN BALITA</a>
        </li>
        <li class="dropdown">
        <a href="viewkritik.php">KRITIK DAN SARAN</a>
      </li>
     <li class="dropdown">
        <a href="kegiatanpos.php">LAPORAN KEGIATAN POSYANDU</a>
      </li>
    <ul class="nav navbar-nav navbar-right">
      <li><a ><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['pet']; ?></a></li>
      <li><a href="../logout.php" onClick="return confirm ('Yakin?')"><span class="glyphicon glyphicon-log-in"></span> Log Out</button></a></li>
    </ul>
  </div>
</nav>

<div class="content" style="margin-bottom: 50px; padding:10px;">
<form method="post" action="kegpos.php">
<div class="form-group">
Nama Pos :<br>
<input class="form-control" type="text" readonly="readonly" name="nmpos" value=<?php echo $_SESSION['pet']; ?>></input><br>
Tanggal :<br>
<input class="form-control" type="date" name="tagl"></input><br>
</div>
Laporan : <br>
<div style="width: 700px;height: 100x;">
<textarea name="lapo" rows="15" cols="80"></textarea>
</div>
<br><br>
<input type="submit" value="KIRIM LAPORAN" name="send" class="btn btn-primary"></input><br><br>
</form>
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