<?php

include("Ayarlar/baglan.php");

if(isset($_GET["id"])){
    $GelenId = $_GET["id"];
}else{
    $GelenId = "";
}


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



if($GelenId!=""){
 
    $GubreGuncelle = $Baglan->prepare("UPDATE gubrebilgileri SET k_baslik = ?, b_baslik = ?, OnDetay = ?, Tarih = ?, Aciklama = ?  WHERE id = ? ");
    $GubreGuncelle->execute([$GelenkBaslik, $GelenbBaslik, $GelenonDetay, $GelenTarih, $GelenAciklama, $GelenId]);

    header("Location:gubre-detay?durum=duzenlendi");


}else{
    header("Location:ana-sayfa");
}


?>