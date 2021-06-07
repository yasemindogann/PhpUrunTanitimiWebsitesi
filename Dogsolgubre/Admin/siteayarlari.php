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
        alert("Site Ayarları Başarıyla Güncellenmiştir.");
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
                            Site Ayarları
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal "  method="POST" action="siteayarlari-sonuc.php" novalidate="novalidate">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3">Site Title</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="Title"  value="<?php echo $SiteTitle;?>" minlength="2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Site Description</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="Description" value="<?php echo $SiteDescription;?>" >
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Site Keywords</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="text" name="Keywords" value="<?php echo $SiteKeywords;?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Site Copyright</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="text" name="Author" value="<?php echo $SiteAuthor;?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Site Instagram</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="text" name="Instagram" value="<?php echo $SiteInstagram;?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Site Twitter</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="text" name="Twitter" value="<?php echo $SiteTwitter;?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Site Youtube</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="text" name="Youtube" value="<?php echo $SiteYoutube;?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Site GoogleMap</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="text" name="GoogleMap" value="<?php echo $SiteGoogleMap;?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Site Mail Adresi</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="mail" name="MailAdresi" value="<?php echo $SiteMailAdresi;?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Site Host Adresi</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="mail" name="HostAdresi" value="<?php echo $SiteHostAdresi;?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Site Password</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="password" name="Password" value="<?php echo $SitePassword;?>">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="curl" class="control-label col-lg-3">Site Link</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="curl" type="text" name="SiteLink" value="<?php echo $SiteSiteLink;?>">
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