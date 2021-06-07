<?php
    include("Ayarlar/baglan.php");

    if(isset($_GET["id"])){
        $GelenId = $_GET["id"];
    }else{
        $GelenId = "";
    }

    
    if(isset($_GET["fotosil"])){
        $Gelenfotosil = $_GET["fotosil"];
    }else{
        $Gelenfotosil = "";
    }


    if($GelenId!=""){

        unlink($Gelenfotosil);

        $GaleriSil  = $Baglan->prepare("DELETE FROM galeri WHERE id = ?");
        $GaleriSil->execute([$GelenId]);

        header("Location:galeri?durum=silindi");


    }else{
        header("Location:ana-sayfa");
    }
?>