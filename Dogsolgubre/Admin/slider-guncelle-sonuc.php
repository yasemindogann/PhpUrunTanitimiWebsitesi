<?php

include("Ayarlar/baglan.php");

if(isset($_GET["id"])){
    $GelenId = $_GET["id"];
}else{
    $GelenId = "";
}


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




if($GelenId!=""){

$SliderGuncelle = $Baglan->prepare("UPDATE slider SET BuyukYazi = ?, KucukYazi = ? WHERE id = ?");
$SliderGuncelle->execute([$GelenBuyukYazi, $GelenBuyukYazi, $GelenId]);

header("Location:slider?durum=guncellendiok");

}else{
    header("Location:ana-sayfa");
}




?>