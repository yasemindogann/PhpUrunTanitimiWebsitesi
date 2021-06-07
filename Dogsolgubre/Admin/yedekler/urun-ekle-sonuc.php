<?php

include("Ayarlar/baglan.php");



if(isset($_POST["bBaslik"])){
    $GelenbBaslik = $_POST["bBaslik"];
}else{
    $GelenbBaslik = "";
}


if(isset($_POST["kBaslik"])){
    $GelenkBaslik = $_POST["kBaslik"];
}else{
    $GelenkBaslik = "";
}


if(isset($_POST["url"])){
    $GelenUrl = $_POST["url"];
}else{
    $GelenUrl = "";
}



$GelenDosya = $_FILES["Resim"];

$GelenResim = $GelenDosya["name"];
$GelenResimGeciciDizin = $GelenDosya["tmp_name"];

$Yol = "Resimler/Urunler/";

$BenzersizBir = rand(200, 300);
$BenzersizIki = rand(300, 400);

$DosyaYeri = $Yol . $BenzersizBir . $BenzersizIki . $GelenResim;

move_uploaded_file($GelenResimGeciciDizin, $DosyaYeri);


 
    $UrunEkle = $Baglan->prepare("INSERT INTO urunler (b_baslik, k_baslik, UrlAdresi, Resim) Values(?,?,?,?)");
    $UrunEkle->execute([$GelenbBaslik, $GelenkBaslik, $GelenUrl, $DosyaYeri]);

    header("Location:urun-ekle?durum=okay");


?>