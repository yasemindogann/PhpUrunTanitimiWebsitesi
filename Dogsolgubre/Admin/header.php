<?php
    include("Ayarlar/ayar.php");

    ob_start();
    session_start();

    $YoneticiKontrol = $Baglan->prepare("SELECT * FROM yonetici WHERE EmailAdresi=:email");
    $YoneticiKontrol->execute(array(
        "email" => $_SESSION["Yonetici"]
    ));

    $Say = $YoneticiKontrol->rowCount();
    $YoneticiCek = $YoneticiKontrol->fetch(PDO::FETCH_ASSOC);

    if($Say==0){
        header("Location:login");
    }


    $YorumlarSorgusu = $Baglan->prepare("SELECT * FROM yorumlar ORDER BY id DESC ");
    $YorumlarSorgusu->execute();
    $YorumlarSayisi = $YorumlarSorgusu->rowCount();
    $YorumCek = $YorumlarSorgusu->fetchAll(PDO::FETCH_ASSOC);

    
    $YorumlarSorgusuu = $Baglan->prepare("SELECT * FROM yorumlar WHERE YorumDurum = '0' LIMIT 4 ");
    $YorumlarSorgusuu->execute();
    $YorumlarSayisii = $YorumlarSorgusuu->rowCount();
    $YorumCekk = $YorumlarSorgusuu->fetchAll(PDO::FETCH_ASSOC);



?>

<!DOCTYPE html>
<head>
<title><?php echo $SiteTitle; ?> | Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<script src="//cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="index" class="logo">
       <h3 style="margin:10px"> DOĞSOL ADMİN </h3>
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important"><?php echo $YorumlarSayisii; ?></span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">Okunmayan <?php echo $YorumlarSayisii; ?> Yorum var</p>
                </li>
            <?php

            foreach($YorumCekk as $YorumlarDongusu){

                ?>

           
                <li>
                    <a href="yorum-oku?id=<?php echo $YorumlarDongusu["id"]; ?>">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from"><?php echo $YorumlarDongusu["YorumIsim"]; ?></span>
                                <span class="time"><?php echo $YorumlarDongusu["YorumTarih"]; ?></span>
                                </span>
                                <span class="message">
                                <?php echo substr($YorumlarDongusu["YorumMesaj"], -40); ?>
                                </span>
                    </a>
                </li>
                <?php
                
            }

                ?>

                <li>
                    <a href="yorumlar">Yorumlara Git</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
       
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                <img alt="" src="<?php echo $Hakkimda["HakkimdaResim"]; ?>">
                <span class="username"> <?php echo $YoneticiCek["IsimSoyisim"]; ?> </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="logout"><i class="fa fa-key"></i> Çıkış Yap </a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->
       
    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="ana-sayfa">
                        <i class="fa fa-dashboard"></i>
                        <span>Anasayfa</span>
                    </a>
                </li>
                
                
                <li>
                    <a href="urunler">
                        <i class="fa fa-table"></i>
                        <span> Ürünler </span>
                    </a>
                </li>
                
                <li>
                    <a href="slider">
                        <i class="fa fa-table"></i>
                        <span> Slider </span>
                    </a>
                </li>
                <li>
                    <a href="galeri">
                        <i class="fa fa-table"></i>
                        <span> Galeri </span>
                    </a>
                </li>
                <li>
                    <a href="gubre-detay">
                        <i class="fa fa-table"></i>
                        <span> Gübre Bilgi </span>
                    </a>
                </li>
                <li>
                    <a href="nasil">
                        <i class="fa fa-table"></i>
                        <span> Nasıl Kullanılır? </span>
                    </a>
                </li>
                <li>
                    <a href="yorumlar">
                        <i class="fa fa-table"></i>
                        <span> Yorumlar </span>
                    </a>
                </li>
                <li>
                    <a href="iletisim-ayarlari">
                        <i class="fa fa-table"></i>
                        <span>İletişim </span>
                    </a>
                </li>
                <li>
                    <a href="siteayarlari">
                        <i class="fa fa-cog"></i>
                        <span> Site Ayarları </span>
                    </a>
                </li>
                <li>
                    <a href="hakkimda-ayarlari">
                        <i class="fa fa-info"></i>
                        <span> Hakkımda Ayarları </span>
                    </a>
                </li>
            </ul>           
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->