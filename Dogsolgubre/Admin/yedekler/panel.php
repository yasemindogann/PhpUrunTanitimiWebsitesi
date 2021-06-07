<!doctype html>
<html lang="tr">
<head>
  <title>DOĞSOLGÜBRE-PANEL</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Email</th>
    <th>Telefon</th>
    <th>Mesaj</th>
  </tr>


<?php


session_start();

    if($_SESSION['user'] ==""){

      echo "<script>window.location.href='cikis.php'</script>";

    }else{

              echo "Kullanıcı Adınız: ".$_SESSION['user']."<br>";        
              echo "<a href='cikis.php'>ÇIKIŞ YAP</a> <br>";

              include("baglanti.php");

              $VeritanindanGetir    =  "Select * From iletisim";
              $Sonuc = $baglan->query($VeritanindanGetir);


              if($Sonuc->num_rows>0){

                while($VeritanindanGetir = $Sonuc->fetch_assoc()){
                  
                      echo "
                      
                            <tr>
                                <td>".$VeritanindanGetir['AdSoyad']."</td>
                                <td>".$VeritanindanGetir['Mail']."</td>
                                <td>".$VeritanindanGetir['Telefon']."</td>
                                <td>".$VeritanindanGetir['Mesaj']."</td>
                            </tr>

                          ";

                }

              }else{

                    echo "Veritabında Kayıtlı Veri Bulunamadı";

              }

    }


?>


</table>

</body>
</html>

