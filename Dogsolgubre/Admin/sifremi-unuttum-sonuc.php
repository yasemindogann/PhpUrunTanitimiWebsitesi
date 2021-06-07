<?php

include("Ayarlar/ayar.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


if(isset($_POST["Email"])){
    $GelenEmail          =  $_POST["Email"];
}else{
    $GelenEmail           =  "";
}



if($GelenEmail!=""){

    $MailSor = $Baglan->prepare("SELECT * FROM yonetici WHERE EmailAdresi = ?");
    $MailSor->execute([$GelenEmail]);
    $Kontrol = $MailSor->rowCount();
    $MailCek = $MailSor->fetch(PDO::FETCH_ASSOC);

    if($Kontrol > 0){

        $MesajHazirla = "Sayın &nbsp;" . $MailCek["IsimSoyisim"] . "<br>Yönetici Şifrenizi Sıfırlamak İçin <a href='" . 
        $SiteLinki . "Admin/sifremi-yenile.php?EmailAdresi=" . $MailCek["EmailAdresi"] . "'>Buraya Tıklayınız </a>" ;

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
            $mail->addAddress($MailCek["EmailAdresi"], $MailCek["IsimSoyisim"]);     //Add a recipient
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $SiteTitle . 'Yönetim Paneli Şifre Sıfırlama';
            $mail->Body    = $MesajHazirla;

            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }



    header("Location:sifremi-unuttum?durum=mailgonderildi");
        
    }else{
        header("Location:sifremi-unuttum?durum=mailyok");
    }
    

}else{
    header("Location:login");
}


?>