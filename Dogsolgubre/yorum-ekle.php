<?php
include("Admin/Ayarlar/ayar.php");


if(isset($_GET["durum"])){
    $GelenDurum = $_GET["durum"];
}else{
    $GelenDurum = "";
}
    

if(isset($_POST["AdSoyad"])){
    $GelenAdSoyad = $_POST["AdSoyad"];
}else{
    $GelenAdSoyad = "";
}
    

if(isset($_POST["Mail"])){
    $GelenMail = $_POST["Mail"];
}else{
    $GelenMail = "";
}
    

if(isset($_POST["Mesaj"])){
    $GelenMesaj = $_POST["Mesaj"];
}else{
    $GelenMesaj = "";
}

$GelenAdSoyadTemiz = htmlspecialchars($GelenAdSoyad);
$GelenYorumTemiz = htmlspecialchars($GelenMesaj);

$YorumResim = "img/h3.png";

$YorumDurum = 0;

$YorumEkle = $Baglan->prepare("INSERT INTO yorumlar (YorumResim, YorumIsim, YorumEmail, YorumMesaj, YorumTarih, YorumDurum) VALUES(?,?,?,?,?,?)");
$YorumEkle->execute([$YorumResim, $GelenAdSoyadTemiz, $GelenMail,  $GelenYorumTemiz, $GelenYorumTarih, $YorumDurum]);

header("Location:index?durum=yorumok");

?>
