<?php

    $sayfa = "galeri";
    include("header.php");

?>




<!-- Galeri Başlangıç-->
<section id="galeri">
  <div class="row mt-2">




  <?php

$Galeri = $Baglan->prepare("SELECT * FROM galeri");
$Galeri->execute();
$GaleriCek = $Galeri->fetchAll(PDO::FETCH_ASSOC);



foreach($GaleriCek as $GaleriDongusu){

  ?>

    <div class="col-md-4 col-sm-6 text-center mx-auto">
        <div class="inBorder"> 
            <a href=""><img src="Admin/<?php echo $GaleriDongusu["Resim"]; ?>" class="img-fluid" ></a>
        </div>
        <div class="content mx-auto">
            <h3><?php echo $GaleriDongusu["BuyukBaslik"]; ?></h3>
            <p><?php echo $GaleriDongusu["KucukBaslik"]; ?></p>
        </div>
    </div>


    <?php

      }

    ?>  


  </div>
</section>
<!-- Galeri Bitiş-->



</div> <!-- cerceve sonu -->

<?php

    include("footer.php");

?>
