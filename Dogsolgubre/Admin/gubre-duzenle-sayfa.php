<?php

include("header.php");

if(isset($_GET["id"])){
    $GelenId  = $_GET["id"];
}else{
    $GelenId = "";
}

$GubreDuzenle = $Baglan->prepare("SELECT * FROM gubrebilgileri WHERE id = ? ");
$GubreDuzenle->execute([$GelenId]);
$GubreDuzenleCek = $GubreDuzenle->fetch(PDO::FETCH_ASSOC);

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
                            GÜBRE GÜNCELLEME ALANI
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal "  method="POST" action="gubre-duzenle-sonuc?id=<?php echo $GelenId; ?>" novalidate="novalidate">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Küçük Başlık </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="kBaslik" value="<?php echo $GubreDuzenleCek["k_baslik"]; ?>" minlength="2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Büyük Başlık</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="bBaslik" value="<?php echo $GubreDuzenleCek["b_baslik"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Ön Detay </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="onDetay" value="<?php echo $GubreDuzenleCek["OnDetay"]; ?>" minlength="2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Tarih </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="Tarih" value="<?php echo $GubreDuzenleCek["Tarih"]; ?>" minlength="2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Açıklama</label>
                                        <div class="col-lg-6">
                                            <textarea class="ckeditor " id="curl" type="text" name="Aciklama"><?php echo $GubreDuzenleCek["Aciklama"]; ?></textarea>
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
