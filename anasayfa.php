<?php 
include 'baglanti.php';
include 'header.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>
    
    
    <p class="left">Sn. <?php echo $_SESSION['kullanici_adsoyad'];?></p>

    <div class="randevu-box">
        <form action="randevuKaydet.php" method="post">
        <input type="date" name="randevu_tarih" id="tarih">
        <select  name="randevu_sehir">
            <option value="0">Şehir seçin</option>
            <option value="1">Adana</option>
            <option value="2">Adıyaman</option>
            <option value="3">Afyonkarahisar</option>
            <option value="4">Ağrı</option>
            <option value="5">Amasya</option>
            <option value="6">Ankara</option>
            <option value="7">Antalya</option>
            <option value="8">Artvin</option>
            <option value="9">Aydın</option>
            <option value="10">Balıkesir</option>
            <option value="11">Bilecik</option>
            <option value="12">Bingöl</option>
            <option value="13">Bitlis</option>
            <option value="14">Bolu</option>
            <option value="15">Burdur</option>
            <option value="16">Bursa</option>
            <option value="17">Çanakkale</option>
            <option value="18">Çankırı</option>
            <option value="19">Çorum</option>
            <option value="20">Denizli</option>
            <option value="21">Diyarbakır</option>
            <option value="22">Edirne</option>
            <option value="23">Elazığ</option>
            <option value="24">Erzincan</option>
            <option value="25">Erzurum</option>
            <option value="26">Eskişehir</option>
            <option value="27">Gaziantep</option>
            <option value="28">Giresun</option>
            <option value="29">Gümüşhane</option>
            <option value="30">Hakkâri</option>
            <option value="31">Hatay</option>
            <option value="32">Isparta</option>
            <option value="33">Mersin</option>
            <option value="34">İstanbul</option>
            <option value="35">İzmir</option>
            <option value="36">Kars</option>
            <option value="37">Kastamonu</option>
            <option value="38">Kayseri</option>
            <option value="39">Kırklareli</option>
            <option value="40">Kırşehir</option>
            <option value="41">Kocaeli</option>
            <option value="42">Konya</option>
            <option value="43">Kütahya</option>
            <option value="44">Malatya</option>
            <option value="45">Manisa</option>
            <option value="46">Kahramanmaraş</option>
            <option value="47">Mardin</option>
            <option value="48">Muğla</option>
            <option value="49">Muş</option>
            <option value="50">Nevşehir</option>
            <option value="51">Niğde</option>
            <option value="52">Ordu</option>
            <option value="53">Rize</option>
            <option value="54">Sakarya</option>
            <option value="55">Samsun</option>
            <option value="56">Siirt</option>
            <option value="57">Sinop</option>
            <option value="58">Sivas</option>
            <option value="59">Tekirdağ</option>
            <option value="60">Tokat</option>
            <option value="61">Trabzon</option>
            <option value="62">Tunceli</option>
            <option value="63">Şanlıurfa</option>
            <option value="64">Uşak</option>
            <option value="65">Van</option>
            <option value="66">Yozgat</option>
            <option value="67">Zonguldak</option>
            <option value="68">Aksaray</option>
            <option value="69">Bayburt</option>
            <option value="70">Karaman</option>
            <option value="71">Kırıkkale</option>
            <option value="72">Batman</option>
            <option value="73">Şırnak</option>
            <option value="74">Bartın</option>
            <option value="75">Ardahan</option>
            <option value="76">Iğdır</option>
            <option value="77">Yalova</option>
            <option value="78">Karabük</option>
            <option value="79">Kilis</option>
            <option value="80">Osmaniye</option>
            <option value="81">Düzce</option>
        </select>
        <select  name="randevu_hastane">
            <option value="hastane">Hastane Seçin</option>
            <option value="Yaşam Hastanesi">Yaşam Hastanesi</option>
            <option value="Sağlık Hastanesi">Sağlık Hastanesi</option>
            <option value="Necip Fazıl Hastanesi">Necip Fazıl Hastanesi</option>
            <option value="Devlet Hastanesi">Devlet Hastanesi</option>
        </select>
        <select  name="randevu_klinik">
            <option value="klinik">Klinik Seçin</option>
            <option value="Dahiliye">Dahiliye</option>
            <option value="Göz Hastalıkları">Göz Hastalıkları</option>
            <option value="Kulak Burun Boğaz">Kulak Burun Boğaz</option>
            <option value="Ortopedi">Ortopedi</option>
        </select>
        <select  name="randevu_doktor">
            <option value="doktor">Doktor seçin</option>
            <option value="Bilal Sağlam">Dr. Bilal Sağlam</option>
            <option value="Yılmaz Şahin">Dr. Yılmaz Şahin</option>
            <option value="Sinem Doğan">Dr. Sinem Doğan</option>
        </select>
        <input type="hidden" name="randevu_hasta_id" value="<?php echo $_SESSION['kullanici_id']; ?>">
        <button name="randevu_kaydet">Randevu Kaydet</button>
        </form>
    </div>


    <div class="hekim-box">
        <p>Aile Hekimi</p>
        <p class="text-muted mt-5">Aile Hekiminize ait bir çalışma saati bulunmamıştır.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>