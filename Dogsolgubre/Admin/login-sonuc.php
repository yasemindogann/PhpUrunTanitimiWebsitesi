<?php
ob_start();
session_start();

include("Ayarlar/baglan.php");

if(isset($_POST["Email"])){
    $GelenEmail          =  $_POST["Email"];
}else{
    $GelenEmail           =  "";
}


if(isset($_POST["Sifre"])){
    $GelenPassword        =  $_POST["Sifre"];
}else{
    $GelenPassword          =  "";
}

$Md5 = md5($GelenPassword);

if(($GelenEmail!="") and ($GelenPassword!="")){

    $YoneticiSor = $Baglan->prepare("SELECT * FROM yonetici WHERE EmailAdresi = ? AND Sifre = ?");
    $YoneticiSor -> execute([$GelenEmail, $Md5]);
    $Kontrol = $YoneticiSor->rowCount();      //Böyle bir yönetici var mı yok mu kontrol et(rowcount)

    if($Kontrol > 0){
        $_SESSION["Yonetici"] = $GelenEmail;
        header("Location:ana-sayfa");
    }else{
        header("Location:login?durum=bilgihata");
    }

}else{
    header("Location:login");
}


?>