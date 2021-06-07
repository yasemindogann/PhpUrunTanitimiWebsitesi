<?php

    include("Admin/Ayarlar/ayar.php");
    include("header.php");

    if(isset($_GET["id"])){
		$GelenId = $_GET["id"];
	}else{
		$GelenId = "";
	}

?>





<!-- İletişim Başlangıç-->
<section id="iletisim">
  <div class="row mt-2">

    <div class="col-lg-6 mt-3 left">
        <h4>İletişim</h4>
        <p class="p1 mt-3">
        <b><i class="fa fa-map-marker"></i></b>
            <?php echo $İletisimSorgusuCek["Adres"]; ?>
            <h6><b><?php echo $İletisimSorgusuCek["AdSoyad"]; ?></b></h6>
        </p>
        <p class="p1 mt-3">
            <b><i class="fa fa-phone"></i></b>
            <?php echo $İletisimSorgusuCek["Telefon"]; ?><br>
            Arayın Bilgi Verelim
        </p>
        <p class="p1 mt-3">
        <b><i class="fab fa-whatsapp"></i></b>
        <a href="https://api.whatsapp.com/send?phone=905423352853&text"><?php echo $İletisimSorgusuCek["Whatsapp"]; ?></a><br>
            Buradan Sipariş Verebilirsiniz
        </p>
        <p class="p1 mt-3">
          <b><i class="fab fa-instagram"></i></b>
          <a href="https://www.instagram.com/dogansolucangubresi/"><?php echo $İletisimSorgusuCek["Instagram"]; ?></a><br>
            Sayfamıza Bekleriz
        </p>
        <p class="p1 mt-3">
       <b><i class="fa fa-envelope"></i></b>
       <a href="#"><?php echo $İletisimSorgusuCek["Email"]; ?></a>
        </p>
        
    </div>

<div class="col-lg-5 mt-2 right">
    <h4 class="mt-2 pb-3"> Yorum Yap</h4>
    <form action="yorum-ekle.php<?php echo $GelenId; ?>" method="post"> 
        <div class="mt-4 pb-3">
            <input type="text" name="AdSoyad" class="form-control" placeholder="*Adınız Soyadınız" required>
        </div>
        <div class=" pb-3">
            <input type="email" name="Mail" class="form-control" placeholder="*Mail Adresiniz" required>
        </div>
        <div class=" pb-3">
            <textarea name="Mesaj" class="form-control" placeholder="*Mesajınız" required></textarea>
        </div>
        <div class="input-group pb-4">
        <button class="btn btn-success" name="submit" type="submit" id="submit">GÖNDER</button>
        </div>
    </form>
</div>


  </div>
<br><br><br>

  <div class="container mt-3">
  <h4>Yorumlar</h4>
  <p></p>
  <hr>

<?php

$Yorum = $Baglan->prepare("SELECT * FROM yorumlar WHERE YorumDurum ='1' ORDER BY id DESC ");
$Yorum->execute();
$YorumCek = $Yorum->fetchAll(PDO::FETCH_ASSOC);

?>


    <?php

    foreach($YorumCek as $YorumDongusu){

    ?>

    <div class="media border p-3">
    <b><i class="fas fa-user-edit fa-2x"></i>&nbsp;&nbsp;&nbsp;</b>
    <div class="media-body">

      <h6><b><?php echo $YorumDongusu["YorumIsim"]; ?></b>  ----  <small><i><?php echo $YorumDongusu["YorumTarih"]; ?></i></small></h6>
     
      <p><?php echo $YorumDongusu["YorumMesaj"]; ?></p>      
      </div>
      </div>
    <?php
    }
    ?>
    
 
</div>





</section>
<!-- İletişim Bitiş-->



</div> <!-- cerceve sonu -->

<?php

    include("footer.php");

?>

