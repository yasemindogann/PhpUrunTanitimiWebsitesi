<?php

include("header.php");
include("Ayarlar/ayar.php");

if(isset($_GET["id"])){
    $GelenId = $_GET["id"];
}else{
    $GelenId = "";
}

$YorumlarSorgusu = $Baglan->prepare("SELECT * FROM yorumlar WHERE id = ? ");
$YorumlarSorgusu->execute([$GelenId]);
$YorumCek = $YorumlarSorgusu->fetch(PDO::FETCH_ASSOC); 


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
                            YORUM ONAYLAMA ALANI
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">

                                <form class="cmxform form-horizontal "  method="POST" action="hakkimda-sonuc.php" novalidate="novalidate">
                                  
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Onay Bekleyen Yorum</label>
                                        <div class="col-lg-6">
                                            <textarea disabled="" class="ckeditor" type="text" name="Aciklama"><?php echo $YorumCek["YorumMesaj"]; ?></textarea>
                                        </div>
                                    </div>
                                   
                                    </form>

                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6" align="center">
                                            <a href="yorum-onayla?id=<?php echo $GelenId; ?>"><button class="btn btn-success" type="submit">ONAYLA</button></a>
                                            <a href="yorumlar"><button class="btn btn-danger" type="submit">ONAYLAMA</button></a>
                                        </div>
                                    </div>
                                
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

