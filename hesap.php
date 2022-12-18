<?php include 'header.php'; ?>
<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hesap Bilgileri</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    
    <link rel="stylesheet" href="style.css">
</head>
  <body>

  <div class="hesap_content">

        <h4 class="mb-4 fw-semibold">Hesap Bilgilerini Güncelle</h4>
        
        
           <div class="label">
            <label>Ad Soyad</label>
            <input type="text" value="<?php echo $_SESSION['kullanici_adsoyad'];?>" disabled>
        </div>
        <div class="label">
            <label>TC Kimlik No</label>
            <input type="text" id="kullanici_tc" value="<?php echo $_SESSION['kullanici_tc'];?>" disabled>
        </div>
        <div class="label">
            <label>Eski Şifre</label>
            <input type="password" id="eskisif">
        </div>
        <div class="label">
            <label>Yeni şifre</label>
            <input type="password" id="yenisif">
        </div>
        <div class="label">
            <label>Yeni şifre Tekrar*</label>
            <input type="password" id="yenisifTekrar">
        </div> 
        <a class="guncelle-btn">Güncelle</a>  
        <a class="iptal-btn">iptal</a>
        
    </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>   
<script>

$(document).ready(function(){

    $('.guncelle-btn').click(function(){
        let eskisif = $('#eskisif').val();
        let yenisif = $('#yenisif').val();
        let kullanici_tc = $('#kullanici_tc').val();
        let yenisifTekrar = $('#yenisifTekrar').val();

        if(eskisif =="" || yenisif == "" || yenisifTekrar == ""){
            alert("Lütfen boş alanlarını doldurunuz.");
        }else if(yenisif ==! yenisifTekrar){
            alert("Şifreler uyuşmuyor.")
        }else{
            $.post("guncelle.php",{"kullanici_tc":kullanici_tc,"eskisif":eskisif,"yenisif":yenisif,"ok":"ok"}).done(function(gelenveri){
				
				if(gelenveri == 1){
                    alert("Şifre güncelleme işlemi başarılı.");
                    $(location).attr('href', 'http://localhost/HastaneOtomasyonu/hesap.php');
                }else{
                    alert("Güncelleme işlemi başarısız. Lütfen tekrar deneyiniz.")
                }
					
			});
        }

    });

});


</script>

</body>
</html>