<?php
    include("header.php");
    include("Admin/ayarlar/ayar.php");

    if(isset($_GET["durum"])){
      $GelenDurum = $_GET["durum"];
    }else{
      $GelenDurum = "";
    }
    

?>


<?php
    if($GelenDurum == "yorumok"){
?>
    <script type="text/javascript">
        alert(" Yorumunuz Başarıyla Alınmıştır, Yönetici Onayını Bekliyor...");
    </script>
<?php
    }
?>


<?php
    if($GelenDurum == "mailgonderildi"){
?>
    <script type="text/javascript">
        alert(" Mailiniz Başarıyla Gönderilmiştir...");
    </script>
<?php
    }
?>






<!-- Slider başlangıç-->
<section id="myslider">
  <div class="carousel slide" data-ride="carousel" id="cizgi">
<!-- Slider çizgi şeklindeki geçiş başlangıç-->
      <ol class="carousel-indicators">
        <li data-target="#cizgi" data-slide-to="0" class="active"></li>
        <li data-target="#cizgi" data-slide-to="1" ></li>
        <li data-target="#cizgi" data-slide-to="2" ></li>
        <li data-target="#cizgi" data-slide-to="3" ></li>
      </ol>
<!-- Slider çizgi şeklindeki geçiş bitiş-->
<!-- Slider fotoğrafları başlangıç -->
<div class="carousel-inner">
	
	
      <div class="carousel-item active">
        <img src="img/slider/1.png" class="d-block w-100 img-fluid">
        <div class="carousel-caption d-none d-md-block">
          <h5 class="wow zoomIn">ORGANİK YAŞAM BİR TIK UZAĞINIZDA</h5>
          <p class="wow fadeInDown">Bizimle Kalın Sağlıklı Kalın</p>
        </div>
      </div>
      <?php

      $SliderSorgusu = $Baglan->prepare("SELECT * FROM slider LIMIT 4");
      $SliderSorgusu->execute();
      $Slider = $SliderSorgusu->fetchAll(PDO::FETCH_ASSOC);

      foreach($Slider as $SliderDongusu){

      ?>
      <div class="carousel-item ">
      <img src="Admin/<?php echo $SliderDongusu["Resim"]; ?>" width="300px"  class="d-block w-100 img-fluid">
        <div class="carousel-caption d-none d-md-block">
        <h5 class="wow zoomIn"><?php echo $SliderDongusu["BuyukYazi"]; ?></h5>
        <p class="wow fadeInDown"><?php echo $SliderDongusu["KucukYazi"]; ?></p>
        </div>
      </div>



 
      <?php
    }
    ?>
<!-- Slider fotoğrafları bitiş -->
    </div>

<!-- Slider ileri geri işaretleri  başlangıç-->
    <a href="#cizgi" class="carousel-control-prev" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a href="#cizgi" class="carousel-control-next" role="button" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
<!-- Slider ileri geri işaretleri bitiş-->
  </div>
</section>
<!-- Slider bitiş -->



<!-- Content Başlangıç-->
<section id="content-index">
  <div class="row">
    <div class="col-lg-4">
      <img src="img/sol.png" width="300" class="img-fluid">
    </div>
    
    <div class="col-lg-8">
      <div class="icerik" >
        <p class="p1 wow fadeInRight"><?php echo $GubreCek1["k_baslik"]; ?></p>
        <h3 class=" wow fadeInRight" data-wow-duration="1.5s"><?php echo $GubreCek1["b_baslik"]; ?></h3>
        <p class="p2 mb-3 wow fadeInRight"  data-wow-duration="2s">
        <?php echo $GubreCek1["OnDetay"]; ?>...</p>
          <a href="detay"><button class="btn btn-success wow fadeInRight" data-wow-duration="3s" >Devamı</button></a>    
      </div>
    </div>

  </div>
  
</section>

<!-- Content Bitiş-->

</div> <!-- cerceve sonu -->

<?php

    include("footer.php");

?>
