<?php
    
    include("header.php");

?>



<!-- Kalite Başlangıç-->
<section id="nasil">
    <div class="row mt-5 pt-5">
        <div class="col-lg-12">
            <h5>Solucan Gübresi Kullanım Miktarları</h5>
            <ul>
                <li>Tohum çimlenmesinden ürün hasadına kadar her dönemde kullanılabilir.</li>
                <li>Kullanım miktarları, toprağın kaliesine ve bitki cinsine göre belirlenir.</li>
                <li>Toprağın en az 2 cm altına karıştırılması ve ağaçlarda yaprak iz düşümüne uygulanması gerekir.</li>
            </ul>
        </div>
      </div>



      <table id="customers">
  <tr>
    <th>Bitki Cinsi</th>
    <th>Miktar</th>
    <th>Birim</th>
  </tr>


<?php

$GelenNasil = $Baglan->prepare("SELECT * FROM nasil");
$GelenNasil->execute();
$GelenNasilCek = $GelenNasil->fetchAll(PDO::FETCH_ASSOC);

foreach($GelenNasilCek as $GelenNasilDongusu){
  ?>


                      
                            <tr>
                                <td><?php echo $GelenNasilDongusu["BitkiCinsi"]; ?></td>
                                <td><?php echo $GelenNasilDongusu["Miktar"]; ?></td>
                                <td><?php echo $GelenNasilDongusu["Birim"]; ?></td>
                            </tr>

<?php                            

}      

?>


</table>

      <div class="row mt-2 pt-5">
        <div class="col-lg-12">
            <ul>
                <li><b>Tüm uygulama ve dozlar için verilmiş talimatlar ortalama değerlerdir.</b></li>
                <li><b>Üreticilerin topraktaki besin ihtiyacını tespit edebilmeleri için toprak analizi yaptırmaları önerilir.</b></li>
            </ul>
        </div>
      </div>



</section>
<!-- Kalite Bitiş-->



</div> <!-- cerceve sonu -->


<?php

    include("footer.php");

?>
