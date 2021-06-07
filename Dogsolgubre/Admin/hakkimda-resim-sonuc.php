<?php
    include("Ayarlar/baglan.php");

    
    if(isset($_GET["fotosil"])){
        $GelenId = $_GET["fotosil"];
    }else{
        $GelenId = "";
    }


    $GelenDosya = $_FILES["HakkimdaResim"];

    $DosyaIsmi= $GelenDosya["name"];
    $DosyaGeciciDizin = $GelenDosya["tmp_name"];

    $Yol = "Resimler/Hakkimda/";

    $BenzersizSayiBir = rand(100,200);
    $BenzersizSayiIki = rand(200,300);

    $DosyaYuklenecekYer = $Yol . $BenzersizSayiBir . $BenzersizSayiIki . $DosyaIsmi;

    if($GelenDosya!=""){



    move_uploaded_file($DosyaGeciciDizin, $DosyaYuklenecekYer);

    unlink($GelenId);

    $HakkimdaResimGuncelle = $Baglan->prepare("UPDATE hakkimda SET HakkimdaResim = ? ");
    $HakkimdaResimGuncelle->execute([$DosyaYuklenecekYer ]);

    
    if($HakkimdaResimGuncelle > 0){
        header("Location:hakkimda-ayarlari?durum=resimok");
    }else{
        header("Location:hakkimda-ayarlari?durum=resimno");
    }

    }else{
        header("Location:ana-sayfa");
    }

?>