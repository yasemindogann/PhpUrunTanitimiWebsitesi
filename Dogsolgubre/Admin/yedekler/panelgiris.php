<!doctype html>
<html lang="tr">
<head>
  <title>DOĞSOLGÜBRE-PANEL</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<form action="panelgiris.php" style="max-width:500px;margin:auto" method="POST">
  <h2 style="margin-left: 28px; margin-top: 50px;">Panel Girişi</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Kullanıcı Adı" name="usrnm">
  </div>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Şifre" name="psw">
  </div>

  <button type="submit" class="btn">Giriş Yap</button>
</form>

</body>
</html>




<?php

session_start();

//include("baglanti.php");

if(isset($_POST["usrnm"], $_POST["psw"] )){

    if($_POST["usrnm"]=="Admin" && $_POST["psw"]=="44353720772"){

      $_SESSION["user"] =$_POST["usrnm"];
        header("location:panel.php");

    }else{

      echo "<script>alert('Kullanıcı adı veya şifre yanlış')</script>";

    }


}

?>