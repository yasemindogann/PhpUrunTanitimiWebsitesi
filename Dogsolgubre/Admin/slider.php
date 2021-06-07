<?php
	include("header.php");

    	if(isset($_GET["durum"])){
		$GelenDurum = $_GET["durum"];
	}else{
		$GelenDurum = "";
	}
	
?>

<?php
    if($GelenDurum == "resimok"){
?>
    <script type="text/javascript">
        alert("Resim Başarıyla Güncellendi.");
    </script>
<?php
    }
?>

<?php
    if($GelenDurum == "ok"){
?>
    <script type="text/javascript">
        alert("Yeni Slider Başarıyla Eklendi.");
    </script>
<?php
    }
?>




<?php
    if($GelenDurum == "silindi"){
?>
    <script type="text/javascript">
        alert("Silme İşlemi Başarılı..");
    </script>
<?php
    }
?>


<?php
    if($GelenDurum == "guncellendiok"){
?>
    <script type="text/javascript">
        alert("Güncelleme İşlemi Başarılı..");
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
      SLİDER
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">               
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3" align="right">
            <a href="slider-ekle">
            <button class="btn btn-success" type="button">Ekle (+)</button></a>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Resim</th>
            <th>Büyük Başlık</th>
            <th>Küçük Başlık</th>
            <th>Düzenle</th>
            <th>Sil</th>
          </tr>
        </thead>
        <tbody>


        <?php

        $SliderSorgusu = $Baglan->prepare("SELECT * FROM slider");
        $SliderSorgusu->execute();
        $SliderCek = $SliderSorgusu->fetchAll(PDO::FETCH_ASSOC);


        foreach($SliderCek as $SliderDongusu){
            ?>
          <tr>
        
            <td><img src="<?php echo $SliderDongusu["Resim"]; ?>" width="50px"></td>
            <td><?php echo $SliderDongusu["BuyukYazi"]; ?></td>
            <td><?php echo $SliderDongusu["KucukYazi"]; ?></td>
            <td><a href="slider-guncelle?id=<?php echo $SliderDongusu["id"]; ?>"><button class="btn btn-info">Düzenle</button></a></td>
            <td><a href="slider-sil?id=<?php echo $SliderDongusu["id"]; ?>"><button class="btn btn-danger">Sil</button></a></td>
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
	require("footer.php"); //include gibi
?>