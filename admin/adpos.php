<?php
if(isset($_POST['tambah'])){
    $pnama      = @$_POST['namap'];
    $palamat    = @$_POST['palamat'];
   
    
    $koneksi = mysqli_connect("localhost","root","","adapandu");
    
    $q1 = "INSERT INTO pos SET nm_pos = '$pnama', alamat_pos = '$palamat'";
    $crot = mysqli_query($koneksi, $q1);
    echo $crot;
    
    echo "<script>alert('Pos Berhasil dimasukan!'); window.location = 'mpos.php'</script>";
}else{
    echo "<script>alert('Petugas Gagal dimasukan!'); window.location = 'mpos.php'</script>";
    
}
    

?>