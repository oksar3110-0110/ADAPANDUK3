<?php
if(isset($_POST['tambah'])){
    $pnama      = @$_POST['nama'];
    $palamat    = @$_POST['alamat'];
    $lahir      = @$_POST['tlahir'];
    $pos        = @$_POST['pos'];
    $ayah       = @$_POST['ayah'];
    $ibu        = @$_POST['ibu'];
    $puser      = @$_POST['user'];
    $ppas       = @$_POST['pass'];
    $type       = 'ortu';
    
    $koneksi = mysqli_connect("localhost","root","","adapandu");
    
    $q1 = "INSERT INTO login SET user = '$puser', pass = '$ppas', type = '$type'";
    $crots = mysqli_query($koneksi, $q1);
    echo $crots;
    
    if(isset($crots)){
        $quewe = "INSERT INTO balita SET nm_balita = '$pnama', tgl_lahir = '$lahir' , nm_ayah = '$ayah', nm_ibu = '$ibu', alamat = '$palamat', user = '$puser', nm_pos = '$pos'";
        mysqli_query($koneksi, $quewe);
        echo "<script>alert('Balita Berhasil dimasukan!'); window.location = 'balita.php'</script>";
    }
    
    
}

?>