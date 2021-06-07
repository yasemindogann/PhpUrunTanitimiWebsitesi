<?php

include("Ayarlar/baglan.php");

if(isset($_GET["id"])){
    $GelenId = $_GET["id"];
}else{
    $GelenId = "";
}



if($GelenId!=""){

$NasilSil = $Baglan->prepare("DELETE FROM nasil WHERE id = ?");
$NasilSil->execute([$GelenId]);

header("Location:nasil?durum=silindi");

}else{
    header("Location:ana-sayfa");
}



?>