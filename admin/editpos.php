<?php
session_start();
$nam = $_GET['nm'];
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
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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

<div class="content" style="margin-bottom: 200px; padding:10px;">
<form method="post" action="">
	<?php  
	$link = mysqli_connect("localhost", "root", "", "adapandu");

    $hasil = mysqli_query($link, "SELECT * FROM pos WHERE nm_pos = '".$nam."'");

    $row=mysqli_fetch_row($hasil);
    ?>
	<div class="form-group">
	<input class="form-control" type="text" style="background-color: white; border-radius: 5px;" name="namap" value=<?php echo "$row[0]";?>></input><br><br>
      <input class="form-control" type="text" style="background-color: white; border-radius: 5px;" name="palamat" value=<?php echo "$row[1]";?>></input><br><br>
      <input type="submit" value="UPDATE" name="update" class="btn btn-primary btn-md"></input> 
      <input type="submit" value="HAPUS" name="del" class="btn btn-primary btn-md" onClick="return confirm ('Yakin?')"></input>
	</div>
      
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
<?php 
if (isset($_POST['update'])) {
    $link = mysqli_connect("localhost", "root", "", "adapandu");
    $up = mysqli_query ($link, "UPDATE pos SET nm_pos = '".$_POST['namap']."' , alamat_pos = '".$_POST['palamat']."' where nm_pos = '".$nam."'");
    
    echo $up;
    echo '<script language="javascript">alert("Data Berhasil di UPDATE!"); document.location="mpos.php";</script>';
    
}else if(isset($_POST['del'])){
    $link = mysqli_connect("localhost", "root", "", "adapandu");
    
    $dell = mysqli_query($link, "DELETE FROM pos WHERE nm_pos = '".$nam."'");
    echo $dell;
    
    echo "<script language='javascript'>document.location='mpos.php'</script>";
}

?>

</body>
</html>
<?php } ?>