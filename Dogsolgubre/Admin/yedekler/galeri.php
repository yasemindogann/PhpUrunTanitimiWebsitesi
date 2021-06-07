<?php
	include("header.php");

    if(isset($_GET["durum"])){
		$GelenDurum = $_GET["durum"];
	}else{
		$GelenDurum = "";
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
    if($GelenDurum == "duzenlendi"){
?>
    <script type="text/javascript">
        alert("Güncelleme İşlemi Başarılı..");
    </script>
<?php
    }
?>


<?php
    if($GelenDurum == "resimok"){
?>
    <script type="text/javascript">
        alert("Ürün Resim Güncelleme İşlemi Başarılı..");
    </script>
<?php
    }
?>


<?php
    if($GelenDurum == "guncelleok"){
?>
    <script type="text/javascript">
        alert("Ürün Güncelleme İşlemi Başarılı..");
    </script>
<?php
    }
?>

<?php
    if($GelenDurum == "okay"){
?>
    <script type="text/javascript">
        alert("Galeri Ekleme İşlemi Başarılı..");
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
      GALERİ
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">               
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3" align="right">
            <a href="galeri-ekle">
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
            <th>Tarih</th>
            <th>Düzenle</th>
            <th>Sil</th>
          </tr>
        </thead>
        <tbody>


        <?php
        $Galeri = $Baglan->prepare("SELECT * FROM galeri");
        $Galeri->execute();
        $GaleriCek = $Galeri->fetchAll(PDO::FETCH_ASSOC);


        foreach($GaleriCek as $GaleriDongusu){
            ?>
          <tr>
        

            <td><img src="<?php echo $GaleriDongusu["resim"]; ?>" width="50px"></td>
            <td><?php echo $GaleriDongusu["b_baslik"]; ?></td>
            <td><?php echo $GaleriDongusu["k_baslik"]; ?></td>
            <td><?php echo $GaleriDongusu["tarih"]; ?></td>
            <td><a href="galeri-guncelle?id=<?php echo $GaleriDongusu["id"]; ?>"><button class="btn btn-info">Düzenle</button></a></td>
            <td><a href="galeri-sil?id=<?php echo $GaleriDongusu["id"]; ?>&fotosil=<?php echo $GaleriDongusu["resim"]; ?>"><button class="btn btn-danger">Sil</button></a></td>
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