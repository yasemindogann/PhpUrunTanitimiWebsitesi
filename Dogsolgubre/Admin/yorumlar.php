<?php

  include("Ayarlar/ayar.php");
	include("header.php");

  if(isset($_GET["durum"])){
		$GelenDurum = $_GET["durum"];
	}else{
		$GelenDurum = "";
	}
	
?>



<?php
    if($GelenDurum == "ok"){
?>
    <script type="text/javascript">
        alert("İlgili Yorum Onaylanmıştır...");
    </script>
<?php
    }
?>

<?php
    if($GelenDurum == "silindi"){
?>
    <script type="text/javascript">
        alert("İlgili Yorum Başarıyla Silinmiştir...");
    </script>
<?php
    }
?>





<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      YORUMLAR
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">               
      </div>
      <div class="col-sm-4">
      </div>
     
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th> İsim Soyisim </th>
            <th>Email</th>
            <th>Tarih</th>
            <th>Durumu</th>
            <th>Oku</th>
            <th>Sil</th>
          </tr>
        </thead>
        <tbody>


        <?php
        foreach($YorumCek as $YorumDongusu){
            ?>
          <tr>
        
            <td><?php echo $YorumDongusu["YorumIsim"]; ?></td>
            <td><?php echo $YorumDongusu["YorumEmail"]; ?></td>
            <td><?php echo $YorumDongusu["YorumTarih"]; ?></td>
            <?php

            if($YorumDongusu["YorumDurum"] === "0" ){
            
              ?>
            <td><button class="btn btn-primary">Onaylanmadı</button></td>

            <?php
            
            }else{
              ?>

              <td><button class="btn btn-success">Onaylandı</button></td>
            <?php
            
            }
            ?>
             <td><a href="yorum-oku?id=<?php echo $YorumDongusu["id"]; ?>"><button class="btn btn-info">Oku</button></a></td>
            <td><a href="yorum-sil?id=<?php echo $YorumDongusu["id"]; ?>"><button class="btn btn-danger">Sil</button></a></td>
          </tr>

        <?php
        }
        ?>

      
        </tbody>
      </table>
    </div>
  </div>
</div>
</section>

<?php

	include("footer.php");
	
?>


