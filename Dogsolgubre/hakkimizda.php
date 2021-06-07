<?php
    include("Admin/Ayarlar/ayar.php");
    include("header.php");
?>

<!-- Hakkımızda Başlangıç-->
<section id="hakkimizda">
  <div class="row mt-2">
    <div class="col-lg-5">
      <img src="Admin/<?php echo $Hakkimda["HakkimdaResim"]; ?>" class="img-fluid">
    </div>

    <div class="col-lg-7 mt-3 p-5 right">
        <h3>HAKKIMIZDA</h3>
        <div class="title"><b><?php echo $Hakkimda["HakkimdaIsimSoyisim"]; ?></b></div><br>
        <div class="subtitle"><b><?php  echo $Hakkimda["HakkimdaPozisyon"]; ?></b></div><br>
        <?php  echo $Hakkimda["HakkimdaAciklama"]; ?>
    </div>
  </div>
</section>
<!-- Hakkımızda Bitiş-->



</div> <!-- cerceve sonu -->


<?php

    include("footer.php");

?>
