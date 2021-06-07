<?php
include("Ayarlar/ayar.php");

if(isset($_POST["BitkiCinsi"])){
    $GelenBitkiCinsi = $_POST["BitkiCinsi"];
}else{
    $GelenBitkiCinsi = "";
}

if(isset($_POST["Miktar"])){
    $GelenMiktar = $_POST["Miktar"];
}else{
    $GelenMiktar = "";
}

if(isset($_POST["Birim"])){
    $GelenBirim = $_POST["Birim"];
}else{
    $GelenMiktar = "";
}



$GelenEkle = $Baglan->prepare("INSERT INTO nasil (BitkiCinsi, Miktar, Birim)  VALUES(?,?,?) ");
$GelenEkle->execute([$GelenBitkiCinsi, $GelenMiktar, $GelenBirim]);

header("Location:nasil?durum=ok");


?>