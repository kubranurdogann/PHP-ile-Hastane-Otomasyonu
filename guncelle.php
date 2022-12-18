<?php 
include 'baglanti.php';

if(isset($_POST["ok"])){
    $eskisif = $_POST["eskisif"];
	$yenisif = $_POST["yenisif"];
    $kullanici_tc = $_POST['kullanici_tc'];

    $kontrolet = $db->query("SELECT * FROM kullanicilar WHERE `kullanici_password`='$eskisif' AND `kullanici_tc`='$kullanici_tc'");
    $verisay  = $kontrolet->rowCount();

    if($verisay > 0){
        $guncelle = $db->query("UPDATE kullanicilar SET `kullanici_password`=$yenisif WHERE `kullanici_tc`='$kullanici_tc'");
        echo 1;
    }else{
        echo 0;
    }

   /* 

    

        

        if($verisay > 0) {  //şifre doğruysa
            echo "<script>alert('Şifre doğru.');</script";
        }else{  //şifre yanlışsa
            echo "<script>alert('Şifre yanlış.');</script";
        }

    */
}


?>