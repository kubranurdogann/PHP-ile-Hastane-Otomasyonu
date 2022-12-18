<?php
include 'baglanti.php';


$kullanici_tc=$_POST['kullanici_tc'];
$kullanici_password=$_POST['kullanici_password'];


    $check_tc=$db->prepare("SELECT * FROM kullanicilar WHERE `kullanici_tc`='$kullanici_tc'");
    $check_tc->execute();
    $get=$check_tc->fetch(PDO::FETCH_ASSOC);

    if ($get['kullanici_password']==$kullanici_password){
        echo 1;
        session_start();
        $_SESSION['kullanici_tc']=$kullanici_tc;
        $_SESSION['kullanici_adsoyad']=$get['kullanici_adsoyad'];
        $_SESSION['kullanici_id']=$get['kullanici_id'];
    }else{
        echo 0;
    } 



?>