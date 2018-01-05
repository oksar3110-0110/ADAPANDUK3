<?php
                $nem = $_POST['nem'];
                $tl = $_POST['tlahir'];
                $bb = $_POST['bb'];
                $tb = $_POST['tb'];
                $ket = $_POST['ket'];
                $cat = $_POST['cat'];
                
                
                $link = mysqli_connect("localhost", "root", "", "adapandu");
                
                if(isset($_POST['tambah'])){
                    $q1 = "INSERT INTO perkembangan SET nm_balita = '$nem', tagl = '$tl', berat = '$bb', tinggi = '$tb', KET = '$ket', CAT_TAMBAHAN = '$cat'";
                    mysqli_query($link, $q1) or die(mysqli_error());
                    echo "<script>alert('Balita Berhasil dimasukan!'); window.location = 'viewperkembanganbalita.php'</script>";
                }
                
            



                 
                
                
                
      ?>