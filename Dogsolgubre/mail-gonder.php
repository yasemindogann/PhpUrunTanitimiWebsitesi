<?php

include("Admin/Ayarlar/ayar.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Admin/PHPMailer/src/Exception.php';
require 'Admin/PHPMailer/src/PHPMailer.php';
require 'Admin/PHPMailer/src/SMTP.php';


if(isset($_POST["Email"])){
    $GelenEmail          =  $_POST["Email"];
}else{
    $GelenEmail           =  "";
}


if(isset($_POST["Isim"])){
    $GelenIsim          =  $_POST["Isim"];
}else{
    $GelenIsim           =  "";
}


if(isset($_POST["Mesaj"])){
    $GelenMesaj          =  $_POST["Mesaj"];
}else{
    $GelenMesaj           =  "";
}


if(($GelenEmail!="") and ($GelenIsim!="") and ($GelenMesaj!="")){



$mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $HostAdresi;                    //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $MailAdresi;                     //SMTP username
            $mail->Password   = $Password;                               //SMTP password
            $mail->SMTPSecure = "tls";         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->Charset    = "UTF-8";

            //Recipients
            $mail->setFrom($MailAdresi, $SiteTitle);
            $mail->addAddress($MailAdresi, $SiteTitle);     //Add a recipient
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $SiteTitle . 'Yönetim Paneli Şifre Sıfırlama';
            $mail->Body    = "İsim Soyisim: " . $GelenIsim . "<br>Mail Adresi:" . $GelenEmail . "br> Gelen Mesaj:" . $GelenMesaj;

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }

        header("Location:ana-sayfa?durum=mailgonderildi");


    }else{
        header("Location:ana-sayfa");
    }


?>