<?php
    include("Ayarlar/baglan.php");



if(isset($_POST["Title"])){
    $GelenSiteTitle           =  $_POST["Title"];
}else{
    $GelenSiteTitle           =  "";
}


if(isset($_POST["Description"])){
    $GelenSiteDescription     =  $_POST["Description"];
}else{
    $GelenSiteDescription     =  "";
}


if(isset($_POST["Keywords"])){
    $GelenSiteKeywords        =  $_POST["Keywords"];
}else{
    $GelenSiteKeywords        =  "";
}


if(isset($_POST["Author"])){
    $GelenSiteAuthor          =  $_POST["Author"];
}else{
    $GelenSiteAuthor          =  "";
}


if(isset($_POST["Instagram"])){
    $GelenSiteInstagram       =  $_POST["Instagram"];
}else{
    $GelenSiteInstagram       =  "";
}


if(isset($_POST["Twitter"])){
    $GelenSiteTwitter         =  $_POST["Twitter"];
}else{
    $GelenSiteTwitter         =  "";
}


if(isset($_POST["Youtube"])){
    $GelenSiteYoutube         =  $_POST["Youtube"];
}else{
    $GelenSiteYoutube         =  "";
}


if(isset($_POST["GoogleMap"])){
    $GelenSiteGoogleMap       =  $_POST["GoogleMap"];
}else{
    $GelenSiteGoogleMap       =  "";
}


if(isset($_POST["MailAdresi"])){
    $GelenSiteMailAdresi      =  $_POST["MailAdresi"];
}else{
    $GelenSiteMailAdresi      =  "";
}


if(isset($_POST["HostAdresi"])){
    $GelenSiteHostAdresi      =  $_POST["HostAdresi"];
}else{
    $GelenSiteHostAdresi      =  "";
}


if(isset($_POST["Password"])){
    $GelenSitePassword        =  $_POST["Password"];
}else{
    $GelenSitePassword        =  "";
}


if(isset($_POST["SiteLink"])){
    $GelenSiteSiteLink        =  $_POST["SiteLink"];
}else{
    $GelenSiteSiteLink        =  "";
}


if(($GelenSiteTitle!="") and ($GelenSiteDescription!="") and ($GelenSiteKeywords!="") and ($GelenSiteAuthor!="") and ($GelenSiteInstagram!="") and ($GelenSiteTwitter!="")
and ($GelenSiteYoutube!="") and ($GelenSiteGoogleMap!="") and ($GelenSiteMailAdresi!="") and ($GelenSiteHostAdresi!="") and ($GelenSitePassword1="") and ($GelenSiteSiteLink!="")){

    
    $Md5 = md5($GelenSitePassword);

    $AyarGuncelle = $Baglan->prepare("UPDATE ayarlar SET Title = ? , Description = ?, Keywords = ?, Author= ?, Instagram = ?, Twitter = ?, Youtube = ?, 
    GoogleMap = ?, MailAdresi = ?, HostAdresi = ?, Password = ?, SiteLink = ?");
    $AyarGuncelle -> execute([ $GelenSiteTitle, $GelenSiteDescription, $GelenSiteKeywords, $GelenSiteAuthor,  $GelenSiteInstagram, $GelenSiteTwitter, $GelenSiteYoutube, 
    $GelenSiteGoogleMap, $GelenSiteMailAdresi, $GelenSiteHostAdresi, $GelenSitePassword, $GelenSiteSiteLink]);

    if($AyarGuncelle > 0 ){
        header("Location:siteayarlari?durum=ok");
    }else{
        header("Location:siteayarlari?durum=no");
    }


}else{
    header("Location:ana-sayfa");
}



?>