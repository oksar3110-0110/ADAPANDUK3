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

<div class="content" style="margin-bottom: 200px;">
<div class="well">
<div class="row"> 
<div class="col-sm-12">
<div class='navbar navbar-inverse'>
<div class='navbar-header'>
<div class="navbar-text"><i class="fa fa-file"></i> LAPORAN PERKEMBANGAN</div>
</div>
</div>
  <div>
  <form method="POST" action="https://sertifikasi.lsptik.or.id/report">
    <a data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-md"> + TAMBAH</a>
    <div class="col-sm-3 pull-right">
      <div class="input-group">
              <input type="text" name="filter" class="form-control" value="" placeholder="Cari...">
        <span class="input-group-btn">
          <button type="submit" class="btn btn-primary btn-xs"><i class="material-icons">youtube_searched_for</i></button>
        </span>
      </div>  
    </div>
  </form>
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
            <th>MANAGE</th>
        </tr>
      </thead>
      <tbody>
      <?php
                $link = mysqli_connect("localhost", "root", "", "adapandu");

                $result = mysqli_query($link, "SELECT * FROM perkembangan");
                 
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
</div>
</div>
    
      <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">TAMBAH PERKEMBANGAN BALITA</h4>
        </div>
        <div class="modal-body">
          <div class="contentt">
    <fieldset style="border: none;padding-top: 14px;">
      <form method="post" action="adper.php">
      <div class="form-group">
      <label>Nama Balita :</label>
      <select class="form-control" name = "nem">
      <?php
                $link = mysqli_connect("localhost", "root", "", "adapandu");

                $result = mysqli_query($link, "SELECT nm_balita FROM balita");
                 
                while ($row=mysqli_fetch_row($result)){
                
                echo "<option value = $row[0] style='background-color: white; border-radius: 5px;'>$row[0]</option>";
                }             
      ?>
       </select><br><br>
      <label>Tanggal Pendataan :</label>
      <input class="form-control" type="date" placeholder="Tanggal Lahir" style="background-color: white; border-radius: 5px;" name="tlahir"></input><br><br>
      <label>Berat Badan :</label>
      <input class="form-control" type="text" placeholder="Berat Badan" style="background-color: white; border-radius: 5px;" name="bb"></input><br><br>
      <label>Tinggi Badan :</label>
      <input class="form-control" type="text" placeholder="Tinggi Badan" style="background-color: white; border-radius: 5px;" name="tb"></input><br><br>
      <label>Keterangan :</label>
      <input class="form-control" type="text" placeholder="Keterangan" style="background-color: white; border-radius: 5px;" name="ket"></input><br><br>
      <label>Catatan Tambahan :</label>
      <textarea class="form-control" rows="5" cols="70" placeholder="Catatan Tambahan" name="cat"></textarea><br><br>
      <input  type="submit" value="+ TAMBAH" name="tambah" class="btn btn-primary btn-md"></input>
      </div>
      
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