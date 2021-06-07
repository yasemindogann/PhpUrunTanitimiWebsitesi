<?php

    try{
        $Baglan = new PDO("mysql:host=localhost;dbname=dogsolgubre;charset=UTF8", "root", "");
    }catch(PDOException $Hata){
        echo "Baglantı Hatası" . $Hata->getmessage();
    }

?>
