<?php
     include("Admin/Ayarlar/ayar.php");
     include("header.php");

?>



<!-- Ürünler Başlangıç-->
<section id="urunler">
  <div class="row mt-2">



  <?php

$Urunler = $Baglan->prepare("SELECT * FROM urunler");
$Urunler->execute();
$UrunCek = $Urunler->fetchAll(PDO::FETCH_ASSOC);



    foreach($UrunCek as $UrunDongusu){

  ?>

    <div class="col-md-4 col-sm-6 text-center mx-auto">
        <div class="inBorder"> 
            <a href="urun-detay"><img src="Admin/<?php echo $UrunDongusu["Resim"]; ?>" class="img-fluid" style="height:300px;"></a>
        </div>
        <div class="content mx-auto">
            <h3><?php echo $UrunDongusu["BuyukBaslik"]; ?></h3>
            <p><?php echo $UrunDongusu["KucukBaslik"]; ?></p>
        </div>
    </div>

    <?php

      }

    ?>  




  </div>
  </div>
</section>
<!-- Ürünler Bitiş-->



</div> <!-- cerceve sonu -->

<?php

    include("footer.php");

?>
