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
        alert("Yeni Bilgiler Başarıyla Güncellendi.");
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
      ÜRÜNLER
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">               
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3" align="right">
            <a href="urun-ekle">
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
        foreach($UrunCek as $UrunDongusu){
            ?>
          <tr>
        
            <td><img src="<?php echo $UrunDongusu["Resim"]; ?>" width="50px"></td>
            <td><?php echo $UrunDongusu["BuyukBaslik"]; ?></td>
            <td><?php echo $UrunDongusu["KucukBaslik"]; ?></td>
            <td><?php echo $UrunDongusu["Tarih"]; ?></td>
            <td><a href="urun-guncelle?id=<?php echo $UrunDongusu["id"]; ?>"><button class="btn btn-info">Düzenle</button></a></td>
            <td><a href="urun-sil?id=<?php echo $UrunDongusu["id"]; ?>"><button class="btn btn-danger">Sil</button></a></td>
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