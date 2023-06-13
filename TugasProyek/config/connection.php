<?php
    session_start();
    $con = mysqli_connect("localhost","root","","fossacraft");
    if(empty($_SESSION['username'])) {
        $_SESSION['username']="";
     }

    if($con == false){
        die("gagal terubung");
    }
    // echo "berhasil terhubung";
?>