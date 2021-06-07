<?php

    include("baglan.php");

    $AyarlarSorgusu          =  $Baglan->prepare("SELECT * FROM ayarlar");
    $AyarlarSorgusu          ->  execute();
    $AyarlarSayisi           =  $AyarlarSorgusu->rowCount();
    $Ayarlar                 =  $AyarlarSorgusu->fetch(PDO::FETCH_ASSOC);

    if($AyarlarSayisi > 0){

        $SiteTitle           =  $Ayarlar["Title"];
        $SiteDescription     =  $Ayarlar["Description"];
        $SiteKeywords        =  $Ayarlar["Keywords"];
        $SiteAuthor          =  $Ayarlar["Author"];
        $SiteInstagram       =  $Ayarlar["Instagram"];
        $SiteTwitter         =  $Ayarlar["Twitter"];
        $SiteYoutube         =  $Ayarlar["Youtube"];
        $SiteGoogleMap       =  $Ayarlar["GoogleMap"];
        $SiteMailAdresi      =  $Ayarlar["MailAdresi"];
        $SiteHostAdresi      =  $Ayarlar["HostAdresi"];
        $SitePassword        =  $Ayarlar["Password"];
        $SiteSiteLink        =  $Ayarlar["SiteLink"];

    }else{
        //echo "Bağlantı Hatası..";
        die();
    }


    
    $HakkimdaSorgusu = $Baglan->prepare("SELECT * FROM hakkimda");
    $HakkimdaSorgusu->execute();
    $Hakkimda = $HakkimdaSorgusu->fetch(PDO::FETCH_ASSOC);


    
    $GubreSor = $Baglan->prepare("SELECT * FROM gubrebilgileri");
    $GubreSor->execute();
    $GubreCek = $GubreSor->fetchAll(PDO::FETCH_ASSOC);

    

    $GubreSor1 = $Baglan->prepare("SELECT * FROM gubrebilgileri");
    $GubreSor1->execute();
    $GubreCek1 = $GubreSor1->fetch(PDO::FETCH_ASSOC);



    $UrunSor = $Baglan->prepare("SELECT * FROM urunler  ORDER BY id DESC");
    $UrunSor->execute();
    $UrunCek = $UrunSor->fetchAll(PDO::FETCH_ASSOC);



    $GaleriSor = $Baglan->prepare("SELECT * FROM galeri  ORDER BY id DESC");
    $GaleriSor->execute();
    $GaleriCek = $GaleriSor->fetchAll(PDO::FETCH_ASSOC);



    $YorumSor = $Baglan->prepare("SELECT * FROM yorumlar ORDER BY id DESC");
    $YorumSor->execute();
    $YorumCek = $YorumSor->fetchAll(PDO::FETCH_ASSOC);

    
    
    $İletisimSorgusu = $Baglan->prepare("SELECT * FROM iletisim");
    $İletisimSorgusu->execute();
    $İletisimSorgusuCek = $İletisimSorgusu->fetch(PDO::FETCH_ASSOC);

    

?>