<?php
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
        alert("Yeni Bilgiler Başarıyla Eklendi.");
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
    if($GelenDurum == "guncelleok"){
?>
    <script type="text/javascript">
        alert("Bitki Çeşiti Güncelleme İşlemi Başarılı..");
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
      BİTKİ  ALANI
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">               
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3" align="right">
            <a href="nasil-ekleme-alani">
            <button class="btn btn-success" type="button">Ekle (+)</button></a>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th>Bitki Cinsi</th>
            <th>Miktar</th>
            <th>Birim</th>
            <th>Düzenle</th>
            <th>Sil</th>
          </tr>
        </thead>
        <tbody>

        <?php

        $Nasil = $Baglan->prepare("SELECT * FROM nasil");
        $Nasil->execute();
        $NasilCek = $Nasil->fetchAll(PDO::FETCH_ASSOC);

        foreach($NasilCek as $NasilDongusu){
            
        ?>
        <tr>
            <td><?php echo $NasilDongusu["BitkiCinsi"]; ?></td>
            <td><?php echo $NasilDongusu["Miktar"]; ?></td>
            <td><?php echo $NasilDongusu["Birim"]; ?></td>
            <td><a href="nasil-guncelle?id=<?php echo $NasilDongusu["id"]; ?>"><button class="btn btn-info">Düzenle</button></a></td>
            <td><a href="nasil-sil?id=<?php echo $NasilDongusu["id"]; ?>"><button class="btn btn-danger">Sil</button></a></td>
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