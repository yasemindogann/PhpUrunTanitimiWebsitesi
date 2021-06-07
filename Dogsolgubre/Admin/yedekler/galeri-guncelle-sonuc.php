<?php

include("Ayarlar/baglan.php");

if(isset($_POST["bBaslik"])){
    $GelenBuyukBaslik = $_POST["bBaslik"];
}else{
    $GelenBuyukBaslik = "";
}


if(isset($_POST["kBaslik"])){
    $GelenKucukBaslik = $_POST["kBaslik"];
}else{
    $GelenKucukBaslik = "";
}


if(isset($_POST["tarih"])){
    $GelenTarih = $_POST["tarih"];
}else{
    $GelenTarih = "";
}


$GaleriGuncelle = $Baglan->prepare("UPDATE galeri SET b_baslik = ?, k_baslik = ?, tarih = ? ");
$GaleriGuncelle->execute([$GelenBuyukBaslik, $GelenKucukBaslik, $GelenTarih]);

if($GaleriGuncelle > 0 ){
    header("Location:galeri?durum=guncelleok");
}else{
    header("Location:galeri?durum=guncelleno");
}


?>