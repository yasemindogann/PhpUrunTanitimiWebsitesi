<?php
    include("Ayarlar/baglan.php");

    if(isset($_GET["id"])){
        $GelenId = $_GET["id"];
    }else{
        $GelenId = "";
    }


    if($GelenId!=""){

        $GubreSil  = $Baglan->prepare("DELETE FROM gubrebilgileri WHERE id = ?");
        $GubreSil->execute([$GelenId]);

        header("Location:gubre-detay?durum=silindi");


    }else{
        header("Location:ana-sayfa");
    }
?>