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


if(isset($_POST["url"])){
    $GelenUrl = $_POST["url"];
}else{
    $GelenUrl = "";
}


$UrunGuncelle = $Baglan->prepare("UPDATE urunler SET b_baslik = ?, k_baslik = ?, UrlAdresi = ?");
$UrunGuncelle->execute([$GelenBuyukBaslik, $GelenKucukBaslik, $GelenUrl]);

if($UrunGuncelle > 0 ){
    header("Location:urun-ekle?durum=guncelleok");
}else{
    header("Location:urun-ekle?durum=guncelleno");
}


?>