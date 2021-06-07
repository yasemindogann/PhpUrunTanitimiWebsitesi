<?php

include("Ayarlar/baglan.php");

if(isset($_GET["id"])){
    $GelenId = $_GET["id"];
}else{
    $GelenId = "";
}


if(isset($_POST["BitkiCinsi"])){
    $GelenBitkiCinsi = $_POST["BitkiCinsi"];
}else{
    $GelenBitkiCinsi = "";
}


if(isset($_POST["Miktar"])){
    $GelenBitkiMiktar = $_POST["Miktar"];
}else{
    $GelenBitkiMiktar = "";
}


if(isset($_POST["Birim"])){
    $GelenBitkiBirim = $_POST["Birim"];
}else{
    $GelenBitkiBirim = "";
}


if($GelenId!=""){

$BitkiGuncelle = $Baglan->prepare("UPDATE nasil SET BitkiCinsi = ?, Miktar = ?, Birim = ?  WHERE id = ?");
$BitkiGuncelle->execute([$GelenBitkiCinsi, $GelenBitkiMiktar, $GelenBitkiBirim, $GelenId]);

header("Location:nasil?durum=guncelleok");

}else{
    header("Location:ana-sayfa");
}




?>