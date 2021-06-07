<?php

include("header.php");

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
                            BİTKİ ÇEŞİTİ EKLEME ALANI
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                             </span>
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal "  method="POST" action="nasil-ekle-sonuc" novalidate="novalidate" >
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Bitki Cinsi </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="BitkiCinsi" value="" minlength="2" type="text" >
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cemail" class="control-label col-lg-3"> Miktar </label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="cemail" type="text" name="Miktar" value="">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="cname" class="control-label col-lg-3"> Birim </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="cname" name="Birim" value="" minlength="2" type="text">
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