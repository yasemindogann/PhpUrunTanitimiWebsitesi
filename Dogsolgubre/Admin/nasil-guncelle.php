<?php

include("header.php");

if(isset($_GET["id"])){
    $GelenId = $_GET["id"];
}else{
    $GelenId = "";
}

$NasilGuncelle = $Baglan->prepare("SELECT * FROM nasil WHERE id = ? ");
$NasilGuncelle->execute([$GelenId]);
$NasilGuncelleCek = $NasilGuncelle->fetch(PDO::FETCH_ASSOC);

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
                            BİTKİ GÜNCELLEME ALANI
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">



                                <form class="cmxform form-horizontal "  method="POST" action="nasil-guncelle-sonuc?id=<?php echo $GelenId; ?>" novalidate="novalidate" >
                                
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3"> Bitki Cinsi</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="BitkiCinsi" value="<?php echo $NasilGuncelleCek["BitkiCinsi"]; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Miktar </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="Miktar" value="<?php echo $NasilGuncelleCek["Miktar"]; ?>" minlength="2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Birim </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="Birim" value="<?php echo $NasilGuncelleCek["Birim"]; ?>" minlength="2" type="text">
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


