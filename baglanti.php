<?php 

try {
    $db=new PDO("mysql:host=localhost;dbname=hastaneotomasyon;charset:utf8",'kubra','67ZbLe)B8s.1usU/');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Bağlantı Başarılı";
} catch(PDOExpception $e){
	echo $e->getMessage();
}



?>