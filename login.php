<?php
include "conn.php";
session_start();
$user = $_POST['user'];
$pass = $_POST['pass'];
$type;

if (!empty($user) AND !empty($pass)){
    if($_POST['captcha'] == $_SESSION['captcha'])
    {
        $login = mysqli_query($dbconnect, "SELECT * FROM login WHERE user = '$user' AND pass='$pass'");
        $row=mysqli_fetch_array($login);
        if ($row['user'] == $user AND $row['pass'] == $pass)
        {
            if($row['type'] == "admin"){
                $_SESSION['admin']=$user;
                echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="admin/index.php";</script>';
            }
            else if($row['type'] == "ortu"){
                $_SESSION['ortu']=$user;
                echo '<script language="javascript">alert("Anda berhasil Login Sebagai Ortu!"); document.location="ortu/index.php";</script>';
            }
            else if($row['type'] == "pet"){
                $_SESSION['pet']=$user;
                echo '<script language="javascript">alert("Anda berhasil Login Petugas!"); document.location="petugas/index.php";</script>';
            }
        } else if(empty($user) || empty($pass)){
            echo '<script language="javascript">alert("Username Maupun Password Tidak Boleh Kosong!"); document.location="index.php";</script>';
        }
        else {
            echo '<script language="javascript">alert("Maaf, Username atau Password salah!!"); document.location="index.php";</script>';
        }
    } else {
        echo '<script language="javascript">alert("Maaf, Captcha salah!!"); document.location="index.php";</script>';
    }
} else {
    echo '<script language="javascript">alert("Username Maupun Password Tidak Boleh Kosong!!"); document.location="index.php";</script>';
}

?>