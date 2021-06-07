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
        alert("Hakkımda Ayarlarınız Başarıyla Güncellenmiştir.");
    </script>
<?php
    }
?>


<?php
    if($GelenDurum == "resimok"){
?>
    <script type="text/javascript">
        alert("Hakkımda Resim Başarıyla Güncellenmiştir.");
    </script>
<?php
    }
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
                            Hakkımda Ayarları
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">

                            <form class="cmxform form-horizontal "  method="POST" action="hakkimda-resim-sonuc.php?fotosil=<?php echo $Hakkimda["HakkimdaResim"]; ?>" enctype="multipart/form-data" novalidate="novalidate">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Resim </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="HakkimdaResim"  minlength="2" type="file">
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit"> Resmi Kaydet </button>
                                        </div>
                                    </div>
                                </form>
                                <br><br>

                                <form class="cmxform form-horizontal "  method="POST" action="hakkimda-sonuc.php" novalidate="novalidate">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> İsim Soyisim </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="HakkimdaIsimSoyisim" value="<?php echo $Hakkimda["HakkimdaIsimSoyisim"]; ?>" minlength="2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Pozisyon</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="HakkimdaPozisyon" value="<?php echo $Hakkimda["HakkimdaPozisyon"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Hakkımda Açıklama</label>
                                        <div class="col-lg-6">
                                            <textarea class="ckeditor " id="curl" type="text" name="HakkimdaAciklama"><?php echo $Hakkimda["HakkimdaAciklama"]; ?></textarea>
                                        </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-success" type="submit">Kaydet</button>
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
	include("footer.php");
?>