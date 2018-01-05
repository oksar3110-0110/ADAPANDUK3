<?php
session_start();
if(isset($_POST['kirim'])){
                $nma = $_POST['nama'];
                $kritt = addslashes($_POST['kritiks']);
                
                        $koneksi = mysqli_connect("localhost","root","","adapandu");
                                    
                        mysqli_query($koneksi, "INSERT INTO kritik (id_kritik, nm_balita, kritik) VALUES('', '$nma','$kritt')");
                        echo "<script>alert('POS Berhasil dimasukan!'); window.location = 'kritiksaran.php'</script>";      
                                    
                        }
            
                
?>