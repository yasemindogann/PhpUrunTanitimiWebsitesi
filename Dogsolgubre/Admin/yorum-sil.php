<?php
include("Ayarlar/baglan.php");

if(isset($_GET["id"])){
    $GelenId = $_GET["id"];
}else{
    $GelenId = "";
}



if($GelenId!=""){


    $YorumSil = $Baglan->prepare("DELETE FROM yorumlar WHERE id = ?");
    $YorumSil->execute([$GelenId]);

    header("Location:yorumlar?durum=silindi");

}else{
    header("Location:ana-sayfa");
}

?>