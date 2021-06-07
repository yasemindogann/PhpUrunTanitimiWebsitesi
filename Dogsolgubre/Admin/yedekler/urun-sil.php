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

        $UrunSil  = $Baglan->prepare("DELETE FROM urunler WHERE id = ?");
        $UrunSil->execute([$GelenId]);

        header("Location:urun-ekle?durum=silindi");


    }else{
        header("Location:ana-sayfa");
    }
?>