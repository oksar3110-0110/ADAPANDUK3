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

<div class="content" style="margin-bottom: 200px;">
<div class="container">
      <div class="well">
        <div class="row"> 
  <div class="col-sm-12">
<div class='navbar navbar-inverse'>
  <div class='navbar-header'>
    <div class="navbar-text"><i class="fa fa-file"></i>PETUGAS POSYANDU</div>
  </div>
</div>
  <div>
  <form method="POST" action="https://sertifikasi.lsptik.or.id/report">
    <div class="col-sm-3 pull-right">
      <div class="input-group">
        <input type="text" name="filter" class="form-control" value="" placeholder="Cari...">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-primary btn-xs"><i class="material-icons">youtube_searched_for</i></button>
        </span>
      </div>  
    </div><a data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-md"> + TAMBAH</a>
  </form>
    <br>
    <br>
    <div class="col-sm-12 content-body">  
    <table class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>NAMA PETUGAS</th>
          <th>ALAMAT</th>
          <th>USERNAME</th>
          <th>PASSWORD</th>
          <th>NAMA POS</th>
          <th>MANAGE</th>
        </tr>
      </thead>
      <tbody>
      <?php
                $link = mysqli_connect("localhost", "root", "", "adapandu");

                $result = mysqli_query($link, "SELECT * FROM petugas");
                 
                while ($row=mysqli_fetch_row($result))
                {
                   $no=1;
                echo " <tr>
                        <td>$row[0]</td>
                        <td>$row[1]</td>
                        <td>$row[2]</td>
                        <td>$row[3]</td>
                        <td>$row[4]</td>
                        <td data-label='Detail'>
                        <center><a href='editpos.php?nm=$row[0]'><i class='material-icons'><i class='material-icons'>storage</i></a></center></td>
                        </td>
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
</div>      </div>
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
          <h4 class="modal-title">TAMBAH PETUGAS</h4>
        </div>
        <div class="modal-body">
          <div class="contentt">
    <fieldset style="border: none;padding-top: 14px;">
      <form method="post" action="prosadd.php">
      <div class="form-group">
      <label>Nama Petugas :</label>
      <input class="form-control" type="text" placeholder="Nama" style="background-color: white; border-radius: 5px;" name="nama"></input><br><br>
      <label>Alamat Petugas :</label>
      <input class="form-control" type="text" placeholder="Alamat" style="background-color: white; border-radius: 5px;" name="alamat"></input><br><br>
      <label>Username :</label>
      <input class="form-control" type="text" placeholder="Username" style="background-color: white; border-radius: 5px;" name="user"></input><br><br>
      <label>Password :</label>
      <input class="form-control" type="text" placeholder="Password" style="background-color: white; border-radius: 5px;" name="pass"></input><br><br>
      <label>Nama Pos :</label>
      <select class="form-control" name='pos'/>
      </div>
      <?php
              $link = mysqli_connect("localhost", "root", "", "adapandu");
              
              $result = mysqli_query($link, "SELECT * FROM pos");
              
              while ($row=mysqli_fetch_row($result))
              echo "<option value='$row[0]'>$row[0]</option>";
      ?>
      </select><br><br>
      <input type="submit" value="+ TAMBAH" name="tambah" class="btn btn-primary btn-md"></input>
    </form>
    </fieldset>
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
<?php } ?>

