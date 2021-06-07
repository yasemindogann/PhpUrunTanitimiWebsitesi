<?php

    include("Ayarlar/baglan.php");

    if(isset($_POST["HakkimdaIsimSoyisim"])){
        $GelenHakkimdaIsimSoyisim = $_POST["HakkimdaIsimSoyisim"];
    }else{
        $GelenHakkimdaIsimSoyisim = "";
    }

    if(isset($_POST["HakkimdaPozisyon"])){
        $GelenHakkimdaPozisyon = $_POST["HakkimdaPozisyon"];
    }else{
        $GelenHakkimdaPozisyon = "";
    }

    if(isset($_POST["HakkimdaAciklama"])){
        $GelenHakkimdaAciklama = $_POST["HakkimdaAciklama"];
    }else{
        $GelenHakkimdaAciklama = "";
    }


    if(($GelenHakkimdaIsimSoyisim!="") and ($GelenHakkimdaPozisyon!="") and ($GelenHakkimdaAciklama!="")){


    $HakkimdaGuncelleSorgusu =$Baglan->prepare("UPDATE hakkimda SET HakkimdaIsimSoyisim = ?, HakkimdaPozisyon = ?, HakkimdaAciklama = ?");
    $HakkimdaGuncelleSorgusu ->execute([$GelenHakkimdaIsimSoyisim, $GelenHakkimdaPozisyon, $GelenHakkimdaAciklama]);

    if($HakkimdaGuncelleSorgusu > 0){
        header("Location:hakkimda-ayarlari?durum=ok");
    }else{
        header("Location:hakkimda-ayarlari?durum=no");
    }

    }else{
        header("Location:ana-sayfa");
    }


?>