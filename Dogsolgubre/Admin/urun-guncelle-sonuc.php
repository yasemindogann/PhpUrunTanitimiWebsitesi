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

$UrunGuncelle = $Baglan->prepare("UPDATE urunler SET BuyukBaslik = ?, KucukBaslik = ?, Tarih = ?  WHERE id = ?");
$UrunGuncelle->execute([$GelenBuyukBaslik, $GelenKucukBaslik, $GelenTarih, $GelenId]);

header("Location:urunler?durum=guncellendiok");

}else{
    header("Location:ana-sayfa");
}




?>