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


if(isset($_POST["date"])){
    $GelenTarih = $_POST["date"];
}else{
    $GelenTarih = "";
}



$GelenDosya = $_FILES["resim"];

$GelenResim = $GelenDosya["name"];
$GelenResimGeciciDizin = $GelenDosya["tmp_name"];

$Yol = "Resimler/Galeri/";

$BenzersizBir = rand(200, 300);
$BenzersizIki = rand(300, 400);

$DosyaYeri = $Yol . $BenzersizBir . $BenzersizIki . $GelenResim;

move_uploaded_file($GelenResimGeciciDizin, $DosyaYeri);


 
    $GaleriEkle = $Baglan->prepare("INSERT INTO galeri (resim, b_baslik, k_baslik, tarih) Values(?,?,?,?)");
    $GaleriEkle->execute([$DosyaYeri, $GelenbBaslik, $GelenkBaslik, $GelenTarih]);

    header("Location:galeri?durum=okay");


?>