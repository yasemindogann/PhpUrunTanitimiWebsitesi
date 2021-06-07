<?php

    include("header.php");
    include("Admin/ayarlar/ayar.php");

?>

<!-- Detay Başlangıç-->
<section id="detay">
 

  <?php

    foreach($GubreCek as $GubreDongusu){

  ?>



  <div class="row mt-5 pt-3">
    <div class="col-lg-12">
      <h4><?php echo $GubreDongusu["b_baslik"]; ?></h4>
      <p class="p1 mt-4"><?php echo $GubreDongusu["Aciklama"]; ?></p>
    </div>
  </div>
  

  <?php

      }
  ?>  


</section>
<!-- Detay Bitiş-->



</div> <!-- cerceve sonu -->


<?php

    include("footer.php");

?>
