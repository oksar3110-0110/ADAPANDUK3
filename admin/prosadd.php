<?php
if(isset($_POST['tambah'])){
                $pnama      = @$_POST['nama'];
                $palamat    = @$_POST['alamat'];
                $pos        = @$_POST['pos'];
                $alamatpos  = @$_POST['alamatpos'];
                $puser      = @$_POST['user'];
                $ppas       = @$_POST['pass'];
                $type       = 'pet';

                        $koneksi = mysqli_connect("localhost","root","","adapandu");
                
                        $q1 = "INSERT INTO login SET user = '$puser', pass = '$ppas', type = '$type'";
                        $crot = mysqli_query($koneksi, $q1);
                        echo $crot;
                        
                        if(isset($crot)){
                        $quew = "INSERT INTO petugas SET nm_pet = '$pnama', alamat_pet = '$palamat', user = '$puser', pass = '$ppas', nm_pos = '$pos'";
                        mysqli_query($koneksi, $quew);
                        echo "<script>alert('Petugas Berhasil dimasukan!'); window.location = 'viewpetugas.php'</script>";
                        }
                        
                       
            }
                
?>