<?php
include("Ayarlar/baglan.php");

if(isset($_POST["BuyukBaslik"])){
    $GelenBuyukBaslik = $_POST["BuyukBaslik"];
}else{
    $GelenBuyukBaslik = "";
}


if(isset($_POST["KucukBaslik"])){
    $GelenKucukBaslik = $_POST["KucukBaslik"];
}else{
    $GelenKucukBaslik = "";
}


if(isset($_POST["Tarih"])){
    $GelenTarih = $_POST["Tarih"];
}else{
    $GelenTarih = "";
}




$GelenDosya = $_FILES["Resim"];

$GelenResim = $GelenDosya["name"];
$GelenResimGeciciDizin = $GelenDosya["tmp_name"];

$Yol = "Resimler/Galeri/";

$BenzersizBir = rand(200, 300);
$BenzersizIki = rand(300, 400);

$DosyaYeri = $Yol . $BenzersizBir . $BenzersizIki . $GelenResim;

move_uploaded_file($GelenResimGeciciDizin, $DosyaYeri);



$GaleriEkle = $Baglan->prepare("INSERT INTO galeri (Resim, BuyukBaslik, KucukBaslik, Tarih)  VALUES(?,?,?,?) ");
$GaleriEkle->execute([$DosyaYeri, $GelenBuyukBaslik, $GelenKucukBaslik, $GelenTarih]);

header("Location:galeri?durum=ok");



?>