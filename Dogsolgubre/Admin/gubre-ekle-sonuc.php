<?php

include("Ayarlar/ayar.php");

if(isset($_POST["kBaslik"])){
    $GelenkBaslik = $_POST["kBaslik"];
}else{
    $GelenkBaslik = "";
}


if(isset($_POST["bBaslik"])){
    $GelenbBaslik = $_POST["bBaslik"];
}else{
    $GelenbBaslik = "";
}


if(isset($_POST["onDetay"])){
    $GelenonDetay = $_POST["onDetay"];
}else{
    $GelenonDetay = "";
}


if(isset($_POST["Tarih"])){
    $GelenTarih = $_POST["Tarih"];
}else{
    $GelenTarih = "";
}


if(isset($_POST["Aciklama"])){
    $GelenAciklama = $_POST["Aciklama"];
}else{
    $GelenAciklama = "";
}


if(($GelenkBaslik!="") and ($GelenbBaslik!="") and ($GelenonDetay!="") and ($GelenTarih!="") and ($GelenAciklama!="") ){
 
    $GubreEkle = $Baglan->prepare("INSERT INTO gubrebilgileri (k_baslik, b_baslik, OnDetay, Tarih, Aciklama) Values(?,?,?,?,?)");
    $GubreEkle->execute([$GelenkBaslik, $GelenbBaslik, $GelenonDetay, $GelenTarih, $GelenAciklama]);

    header("Location:gubre-detay?durum=ok");

}else{
    header("Location:ana-sayfa");
}

?>