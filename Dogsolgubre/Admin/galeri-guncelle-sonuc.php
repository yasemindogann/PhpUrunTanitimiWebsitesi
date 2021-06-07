<?php

include("Ayarlar/baglan.php");

if(isset($_GET["id"])){
    $GelenId = $_GET["id"];
}else{
    $GelenId = "";
}


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


if($GelenId!=""){

$GaleriGuncelle = $Baglan->prepare("UPDATE galeri SET BuyukBaslik = ?, KucukBaslik = ?, Tarih = ?  WHERE id = ?");
$GaleriGuncelle->execute([$GelenBuyukBaslik, $GelenKucukBaslik, $GelenTarih, $GelenId]);

header("Location:galeri?durum=guncellendiok");

}else{
    header("Location:ana-sayfa");
}




?>