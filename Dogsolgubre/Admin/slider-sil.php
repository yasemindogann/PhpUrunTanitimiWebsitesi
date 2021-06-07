<?php
include("Ayarlar/baglan.php");

if(isset($_GET["id"])){
    $GelenId = $_GET["id"];
}else{
    $GelenId = "";
}


if(isset($_GET["fotosil"])){
    $GelenFotoSil = $_GET["fotosil"];
}else{
    $GelenFotoSil = "";
}



if($GelenId!=""){

    unlink($GelenFotoSil);

    $SliderSil = $Baglan->prepare("DELETE FROM slider WHERE id = ?");
    $SliderSil->execute([$GelenId]);

    header("Location:slider?durum=silindi");

}else{
    header("Location:ana-sayfa");
}

?>