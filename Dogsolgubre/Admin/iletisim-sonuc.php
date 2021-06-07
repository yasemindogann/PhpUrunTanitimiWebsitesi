<?php

    include("Ayarlar/baglan.php");

    if(isset($_POST["AdSoyad"])){
        $GelenAdSoyad = $_POST["AdSoyad"];
    }else{
        $GelenAdSoyad = "";
    }

    if(isset($_POST["Adres"])){
        $GelenAdres = $_POST["Adres"];
    }else{
        $GelenAdres = "";
    }

    if(isset($_POST["Telefon"])){
        $GelenTelefon = $_POST["Telefon"];
    }else{
        $GelenTelefon = "";
    }

    if(isset($_POST["Whatsapp"])){
        $GelenWhatsapp = $_POST["Whatsapp"];
    }else{
        $GelenWhatsapp = "";
    }

    if(isset($_POST["Instagram"])){
        $GelenInstagram = $_POST["Instagram"];
    }else{
        $GelenInstagram = "";
    }

    if(isset($_POST["Website"])){
        $GelenWebsite = $_POST["Website"];
    }else{
        $GelenWebsite = "";
    }

    if(isset($_POST["Email"])){
        $GelenEmail = $_POST["Email"];
    }else{
        $GelenEmail = "";
    }


    


    $İletisimGuncelleSorgusu =$Baglan->prepare("UPDATE iletisim SET AdSoyad = ?, Adres = ?, Telefon = ?, Whatsapp = ?, Instagram = ?, Website = ?, Email = ?");
    $İletisimGuncelleSorgusu ->execute([$GelenAdSoyad, $GelenAdres, $GelenTelefon, $GelenWhatsapp, $GelenInstagram, $GelenWebsite, $GelenEmail]);

    if($İletisimGuncelleSorgusu > 0){
        header("Location:iletisim-ayarlari?durum=ok");
    }else{
        header("Location:ana-sayfa");
    }



?>