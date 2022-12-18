<?php
include 'baglanti.php';
session_start();


if(isset($_POST['randevu_kaydet'])){
    $randevu_sehir = $_POST['randevu_sehir'];
    $randevu_hastane = $_POST['randevu_hastane'];
    $randevu_klinik = $_POST['randevu_klinik'];
    $randevu_tarih = $_POST['randevu_tarih'];
    $randevu_doktor = $_POST['randevu_doktor'];
    $randevu_hasta_id = $_POST['randevu_hasta_id'];




    
    $kaydet=$db->prepare("INSERT INTO `randevu`(`randevu_sehir`,`randevu_tarih`,`randevu_hastane`,`randevu_doktor`,`randevu_klinik`,`randevu_hasta_id`) VALUES ('$randevu_sehir','$randevu_tarih','$randevu_hastane','$randevu_doktor','$randevu_klinik','$randevu_hasta_id')");
    $insert=$kaydet->execute();

    if($insert){
        header('location:anasayfa.php?kayitbasarili');
    }else{
        header('location:anasayfa.php?kayitbasarisiz');
    }

    
}else{
    echo '<script>alert("olmadı");</scri;>';
}





    
 /*   $randevu_sehir=$_POST['randevu_sehir'];
    $randevu_hastane=$_POST['randevu_hastane'];
    $randevu_klinik=$_POST['randevu_klinik'];
    $randevu_doktor=$_POST['randevu_doktor'];
    $randevu_tarih=$_POST['randevu_tarih'];
    $randevu_hasta_id=$_POST['randevu_hasta_id'];
  


    


    if($insert){
        header("Location:anasayfa.php"); 
        echo 1;
                
    }else{
        echo 0;
    }
  */  
    
    

?>