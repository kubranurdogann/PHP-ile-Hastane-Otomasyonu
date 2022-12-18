<?php 
include 'baglanti.php';
include 'header.php'; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Randevular</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
  <body>

  <div class="randevu_content">
    <table class="table">
         <thead>
           <tr>
             <th scope="col">Hastane</th>
             <th scope="col">Klinik</th>
             <th scope="col">Doktor</th>
             <th scope="col">İl</th>
             <th scope="col">Tarih</th>
           </tr>
         </thead>
         <tbody>

           <?php
           
            $sorgu = $db->prepare("SELECT randevu_hastane, randevu_klinik, randevu_doktor, randevu_sehir, randevu_tarih FROM randevu");
            $sorgu->execute();
            
            foreach ($sorgu as $cikti) {
              echo "<tr>";
                 echo "<td>" . $cikti["randevu_hastane"] . "</td>";
                 echo "<td>" . $cikti["randevu_klinik"] . "</td>";
                 echo "<td>" . $cikti["randevu_doktor"] . "</td>";
                 echo "<td>" . $cikti["randevu_sehir"] . "</td>";
                 echo "<td>" . $cikti["randevu_tarih"] . "</td>";

              echo "</tr>";
                }

           ?>

         </tbody>
    </table>
  </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>