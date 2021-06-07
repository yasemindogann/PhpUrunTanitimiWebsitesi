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

$Yol = "Resimler/Urunler/";

$BenzersizBir = rand(200, 300);
$BenzersizIki = rand(300, 400);

$DosyaYeri = $Yol . $BenzersizBir . $BenzersizIki . $GelenResim;

move_uploaded_file($GelenResimGeciciDizin, $DosyaYeri);



$UrunEkle = $Baglan->prepare("INSERT INTO urunler (Resim, BuyukBaslik, KucukBaslik, Tarih)  VALUES(?,?,?,?) ");
$UrunEkle->execute([$DosyaYeri, $GelenBuyukBaslik, $GelenKucukBaslik, $GelenTarih]);

header("Location:urunler?durum=ok");



?>