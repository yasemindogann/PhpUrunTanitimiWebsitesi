<?php

include("header.php");

if(isset($_GET["id"])){
    $GelenId  = $_GET["id"];
}else{
    $GelenId = "";
}


$UrunDuzenle = $Baglan->prepare("SELECT * FROM urunler WHERE id = ? ");
$UrunDuzenle->execute([$GelenId]);
$UrunDuzenleCek = $UrunDuzenle->fetch(PDO::FETCH_ASSOC);

if($GelenId!=""){



?>

<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<div class="form-w3layouts">
            <!-- page start-->
            
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            ÜRÜN GÜNCELLEME ALANI
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">

                                <form class="cmxform form-horizontal "  method="POST" action="urun-resim-duzenle?id=<?php echo $GelenId; ?>&fotosil=<?php echo $UrunDuzenleCek["Resim"];?>" novalidate="novalidate" enctype="multipart/form-data">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Mevcut Resim </label>
                                        <div class="col-lg-6">
                                            <img src="<?php echo $UrunDuzenleCek["Resim"]; ?>" width="10%" >
                                    </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Resim </label>
                                        <div class="col-lg-6">
                                       
                                            <input class=" form-control" id="cname" name="Resim" value="<?php echo $UrunDuzenleCek["Resim"]; ?>" minlength="2" type="file">
                                        </div>
                                    </div>
                                     
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-success" type="submit">RESİM GÜNCELLE</button>
                                        </div>
                                    </div>

                                </form>
                                <br><br>

                                <form class="cmxform form-horizontal "  method="POST" action="urun-guncelle?id=<?php echo $GelenId; ?>" novalidate="novalidate" enctype="multipart/form-data">
                                
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3"> Büyük Başlık</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="bBaslik" value="<?php echo $UrunDuzenleCek["b_baslik"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Küçük Başlık </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="kBaslik" value="<?php echo $UrunDuzenleCek["k_baslik"]; ?>" minlength="2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Url Adresi </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="url" value="<?php echo $UrunDuzenleCek["UrlAdresi"]; ?>" minlength="2" type="text">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-success" type="submit">GÜNCELLE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>
            </div>
            <!-- page end-->
        </div>
</section>



<?php

}else{
    header("Location:ana-sayfa");
}

?>

<?php
	include("footer.php");
?>

