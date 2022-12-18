<?php
include 'baglanti.php';
session_start();

	$kullanici_adsoyad=$_POST['kullanici_adsoyad'];
	$kullanici_tc=$_POST['kullanici_tc'];
	$kullanici_password=$_POST['kullanici_password'];

	//TC ye ait kullanicinin tabloda var olup olmadığını kontrol etme işlemi
	$kontrolet = $db->query("SELECT * FROM kullanicilar WHERE `kullanici_tc`='$kullanici_tc'");
    $verisay  = $kontrolet->rowCount();

	if($verisay == 0){
	$see=$db->prepare("INSERT INTO `kullanicilar`(`kullanici_adsoyad`, `kullanici_tc`, `kullanici_password`) VALUES ('$kullanici_adsoyad','$kullanici_tc','$kullanici_password')");
	$see2=$see->execute();
	echo $see2==true?1:0;
	}else{
	echo 2;
	}


	


?>