<?php
include("Ayarlar/baglan.php");

if(isset($_POST["BuyukYazi"])){
    $GelenBuyukYazi = $_POST["BuyukYazi"];
}else{
    $GelenBuyukYazi = "";
}


if(isset($_POST["KucukYazi"])){
    $GelenKucukYazi = $_POST["KucukYazi"];
}else{
    $GelenKucukYazi = "";
}



$GelenDosya = $_FILES["Resim"];

$GelenResim = $GelenDosya["name"];
$GelenResimGeciciDizin = $GelenDosya["tmp_name"];

$Yol = "Resimler/Slider/";

$BenzersizBir = rand(200, 300);
$BenzersizIki = rand(300, 400);

$DosyaYeri = $Yol . $BenzersizBir . $BenzersizIki . $GelenResim;

move_uploaded_file($GelenResimGeciciDizin, $DosyaYeri);



$SliderEkle = $Baglan->prepare("INSERT INTO slider (Resim, BuyukYazi, KucukYazi)  VALUES(?,?,?) ");
$SliderEkle->execute([$DosyaYeri, $GelenBuyukYazi, $GelenKucukYazi]);

header("Location:slider?durum=ok");



?>