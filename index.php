<?php
include 'baglanti.php';

?>
<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hastane Otomasyonu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">    
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <header class="d-flex justify-content-center align-items-center p-5">
        <h1 class="fw-semibold">HASTANE OTOMASYONU</h1>
    </header> 
    
    
    <div class="tableOuter">
      
        <h1>Giriş Yap</h1>

        <form class="mt-4">
            <div class="mb-3">
              <input type="text" class="form-control" id="kullanici_tc" aria-describedby="emailHelp" placeholder="TC Kimlik No">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="kullanici_password" placeholder="Şifre">
            </div>
            
            <button type="submit" class="buton fw-bolder" id="giris_yap">Giriş yap</button>
            <br>

        </form>
        
        <div class="uyeOl mt-2">
          <p>
            ya da  
            <a href="uye.php">   Üye ol</a></p>
        </div>
     
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
    
    $(document).ready(function(){

    $('#giris_yap').click(function(){

    let kullanici_tc=$('#kullanici_tc').val();
    let kullanici_password=$('#kullanici_password').val();


    if(kullanici_tc == ""){
      alert("TC boş bırakılamaz.");
    }
    else if(kullanici_password == ""){
      alert("şifre boş bırakılamaz.");
    }else{

      

      $.ajax({
        url:"giris.php",
        type: "POST",
        data:{'kullanici_tc':kullanici_tc,'kullanici_password':kullanici_password},
        success: (function(data){
         
          if(data==1){
            $(location).attr('href', 'http://localhost/HastaneOtomasyonu/anasayfa.php');
            alert("Giriş başarılı.");
          }else{
            alert("Giriş yapılırken bir hata oluştu. Tekrar deneyin!");
          }
        })        
      })

      
    }

    });


    });
    
    </script>
  
  </body>
</html>