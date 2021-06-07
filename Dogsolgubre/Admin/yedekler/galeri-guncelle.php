<?php

include("header.php");

if(isset($_GET["id"])){
    $GelenId = $_GET["id"];
}else{
    $GelenId = "";
}

$GaleriGuncelle = $Baglan->prepare("SELECT * FROM galeri WHERE id = ? ");
$GaleriGuncelle->execute([$GelenId]);
$GaleriGuncelleCek = $GaleriGuncelle->fetch(PDO::FETCH_ASSOC);

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
                            GALERİ GÜNCELLEME ALANI
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">

                                <form class="cmxform form-horizontal "  method="POST" action="galeri-resim-guncelle?id=<?php echo $GelenId; ?>&fotosil=<?php echo $GaleriGuncelleCek["resim"];?>" novalidate="novalidate" enctype="multipart/form-data">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Mevcut Resim </label>
                                        <div class="col-lg-6">
                                            <img src="<?php echo $GaleriGuncelleCek["resim"]; ?>" width="10%" >
                                    </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Resim </label>
                                        <div class="col-lg-6">
                                       
                                            <input class=" form-control" id="cname" name="Resim" value="<?php echo $GaleriGuncelleCek["resim"]; ?>" minlength="2" type="file">
                                        </div>
                                    </div>
                                     
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-success" type="submit">RESİM GÜNCELLE</button>
                                        </div>
                                    </div>

                                </form>
                                <br><br>

                                <form class="cmxform form-horizontal "  method="POST" action="galeri-guncelle-sonuc?id=<?php echo $GelenId; ?>" novalidate="novalidate" enctype="multipart/form-data">
                                
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3"> Büyük Başlık</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="bBaslik" value="<?php echo $GaleriGuncelleCek["b_baslik"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Küçük Başlık </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="kBaslik" value="<?php echo $GaleriGuncelleCek["k_baslik"]; ?>" minlength="2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Tarih </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="tarih" value="<?php echo $GaleriGuncelleCek["tarih"]; ?>" minlength="2" type="date">
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


