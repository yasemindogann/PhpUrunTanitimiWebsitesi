<?php

include("Ayarlar/ayar.php");
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
        alert("İletişim Ayarlarınız Başarıyla Güncellenmiştir.");
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
                            İletişim Ayarları
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">                          

                                <form class="cmxform form-horizontal "  method="POST" action="iletisim-sonuc" novalidate="novalidate">
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> İsim Soyisim </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="AdSoyad" value="<?php echo $İletisimSorgusuCek["AdSoyad"]; ?>" minlength="2" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Adres</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="Adres" value="<?php echo $İletisimSorgusuCek["Adres"]; ?>">
                                        </div>
                                    </div> 
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Telefon</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="Telefon" value="<?php echo $İletisimSorgusuCek["Telefon"]; ?>">
                                        </div>
                                    </div> 
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Whatsapp</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="Whatsapp" value="<?php echo $İletisimSorgusuCek["Whatsapp"]; ?>">
                                        </div>
                                    </div> 
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Instagram</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="Instagram" value="<?php echo $İletisimSorgusuCek["Instagram"]; ?>">
                                        </div>
                                    </div> 
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Website</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="Website" value="<?php echo $İletisimSorgusuCek["Website"]; ?>">
                                        </div>
                                    </div> 
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3">Email</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="email" name="Email" value="<?php echo $İletisimSorgusuCek["Email"]; ?>">
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

