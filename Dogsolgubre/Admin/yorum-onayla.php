<?php

include("header.php");
include("Ayarlar/ayar.php");

if(isset($_GET["id"])){
    $GelenId = $_GET["id"];
}else{
    $GelenId = "";
}


$YorumDurum = 1;

$YorumOnayla = $Baglan->prepare("UPDATE yorumlar SET YorumDurum = ? WHERE id = ? ");
$YorumOnayla->execute([$YorumDurum, $GelenId]);

header("Location:yorumlar?durum=ok");

?>