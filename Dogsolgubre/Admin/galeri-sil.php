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

    $UrunSil = $Baglan->prepare("DELETE FROM galeri WHERE id = ?");
    $UrunSil->execute([$GelenId]);

    header("Location:galeri?durum=silindi");

}else{
    header("Location:ana-sayfa");
}

?>