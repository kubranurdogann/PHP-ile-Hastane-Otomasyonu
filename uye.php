<?php
	include 'baglanti.php';
?>

<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hastane Otomasyonu</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header class="d-flex justify-content-center align-items-center p-5">
        <h1 class="fw-semibold">HASTANE OTOMASYONU</h1>
    </header> 
    
    
    <div class="tableOuter">
      
      
      <h1>Üye Ol</h1>

      <form class="mt-4">
            <div class="mb-3">
              <input type="text" class="form-control uye_input" id="kullanici_adsoyad" aria-describedby="emailHelp" placeholder="Kullanıcı adı">
            </div>
            <div class="mb-3">
            <input type="text" class="form-control uye_input" id="kullanici_tc" aria-describedby="emailHelp" placeholder="TC Kimlik No">
          </div>
            <div class="mb-3">
              <input type="password" class="form-control uye_input" id="kullanici_password" placeholder="Şifre">
            </div>
            
            <button type="submit" class="buton fw-bolder mb-2" id="uye_ol">Giriş yap</button>
            <br>

        </form>

      <div class="uyeOl mt-4">
          <p>
            ya da  
            <a href="index.php">giriş yap</a>
      </div>
  
</div>
    
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script>

$(document).ready(function() {


$('#uye_ol').click(function(){

   kullanici_adsoyad = $('#kullanici_adsoyad').val();
   kullanici_tc = $('#kullanici_tc').val();
   kullanici_password = $('#kullanici_password').val();

  if(kullanici_adsoyad == "" || kullanici_tc == "" || kullanici_password == ""){
    alert("Lütfen boş alanları doldurunuz.");
  }else if(kullanici_tc.length !== 11){
    alert("TC numarası 11 haneli olmalı!");
  }else if(kullanici_password.length < 6 ){
    alert("Şifre en az 6 karakter olmalı!");
  }else{

    $.ajax(
      {
        type: "POST",
        url:"kayit.php",
        data:{"kullanici_adsoyad": kullanici_adsoyad,"kullanici_tc": kullanici_tc,"kullanici_password": kullanici_password},
        success: function(data){
            if (data == 1){
              alert("Kayıt başarılı.");
              $(location).attr('href', 'http://localhost/HastaneOtomasyonu/index.php');
            }else if(data == 0){
              alert("Kayıt başarısız.Lütfen tekrar deneyin!");
            }else{
              alert("TC numarasına ait kullanıcı mevcut!");
            }
          },
      }
    );
    

  }




});


});

  </script>
  </body>
</html>