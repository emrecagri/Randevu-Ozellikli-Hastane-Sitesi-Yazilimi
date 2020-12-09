<!DOCTYPE html>
<html lang="en">
<head>

     <title>ECB HASTANESİ - RANDEVU KAYDI</title>
     <meta name="theme-color" content="#a5c422" />
     <link rel="shortcut icon" type="image/png" href="../images/ico.png"/>
<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/magnific-popup.css">

     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <link rel="stylesheet" href="../css/animate.css">

     <link rel="stylesheet" href="../css/owl.carousel.css">
     <link rel="stylesheet" href="../css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/tooplate-style.css">




          <!-- ILETISIM BUTONU CSS -->
     <style type="text/css">
.iletisimbutonu {
     background-color:#a6c422;
     -moz-border-radius:4px;
     -webkit-border-radius:4px;
     border-radius:4px;
     display:inline-block;
     cursor:pointer;
     color:#ffffff;
     font-family:Arial;
     font-size:16px;
     padding:10px 20px;
     text-decoration:none;
     text-shadow:0px 1px 0px #2f6627;
}
.iletisimbutonu:hover {
     background-color:#5cbf2a;
}
.iletisimbutonu:active {
     position:relative;
     top:1px;
}
</style>









    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>ECB Hastanesi | Randevuyu Yazdır</title>');
            printWindow.document.write('</head><body >');
            printWindow.document.write(divContents);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>









</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>
               
          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-5">
                         <p>Hoşgeldiniz</p>
                    </div>
                         
                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> (512) 345 67 89</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 8:00 - 18:00 (Pzt-Cum)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="../#">iletisim@ecbhastanesi.com</a></span>
                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="../index.html" class="navbar-brand"><i class="fa fa-stethoscope"></i> ECB Hastanesi</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="../index.html#top" class="smoothScroll">Anasayfa</a></li>
                         <li><a href="../index.html#about" class="smoothScroll">Hakkımızda</a></li>
                         <li><a href="../index.html#team" class="smoothScroll">Doktorlarımız</a></li>
                         <li><a href="../index.html#news" class="smoothScroll">Sağlık Rehberi</a></li>
                         <li><a href="../iletisim/index.html" class="smoothScroll">İletişim</a></li>
                         <li class="appointment-btn"><a href="../index.html#appointment">Randevu Al</a></li>
                    </ul>
               </div>

          </div>
     </section>




<?php 










include("vtbaglan.php");



#randevu iptal tuşunun çalışması için veritabanındaki son kaydın id numarasını aldım ve şuanki kaydın id numarasını bulmak için 1 ekledim. Başlangıç

$sorgu= mysqli_query($baglanti,"select * from randevular order by ID desc limit 1");
while($satir=mysqli_fetch_array($sorgu)) $sonkayitidsi = $satir['id'];



$bir = 1;
$iptalid = $sonkayitidsi + $bir;
#iptal idsi bitiş










if($_POST)
$adsoyad = $_POST['adsoyad'];
$telno = $_POST['telno'];
$email = $_POST['email'];
$randevutarih = $_POST['randevutarih'];
$bolum = $_POST['bolum'];
$mesaj = $_POST['mesaj'];
$kayittarihi = date('d.m.Y');
$ipadresi = $_SERVER["REMOTE_ADDR"];
$durum = "Aktif";



//sql kayıt başlangıç

$ekle=mysqli_query($baglanti,"INSERT INTO randevular(adsoyad,telno,email,randevutarih,bolum,mesaj,kayittarihi,ipadresi,durum) VALUES('$adsoyad','$telno','$email','$randevutarih','$bolum','$mesaj','$kayittarihi','$ipadresi','$durum')")

//sql kayıt bitiş
?>




<?php echo '<br>

<center>

<h2>Sn. ' . $adsoyad . ' Randevunuz Başarıyla Alındı</h2>
</center>


 <div id="dvContainer">
<center>
<p>ECB Hastanesi Randevu Bilgileriniz</p>


<table border="1" width="450" height="250">
	<tr>
		<td>
			&nbsp;&nbsp;&nbsp;<b>Adınız Soyadınız:</b>
		</td>
		<td>
			&nbsp;&nbsp;' . $adsoyad . ' 
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;&nbsp;&nbsp;<b>Telefon Numaranız:</b>
		</td>
		<td>
			&nbsp;&nbsp;' . $telno . ' 
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;&nbsp;&nbsp;<b>Email Adresiniz:</b>
		</td>
		<td>
			&nbsp;&nbsp;' . $email . ' 
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;&nbsp;&nbsp;<b>Randevu Tarihiniz:</b>
		</td>
		<td>
			&nbsp;&nbsp;' . $randevutarih . ' 
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;&nbsp;&nbsp;<b>Aldığınız Bölüm:</b>
		</td>
		<td>
			&nbsp;&nbsp;' . $bolum . ' 
		</td>
	</tr>
	<tr>
		<td>
			&nbsp;&nbsp;&nbsp;<b>Ek Mesajınız:</b>
		</td>
		<td>
			&nbsp;&nbsp;' . $mesaj . ' 
		</td>
	</tr>

</table>
<br>
<p>Lütfen randevu zamanından 10dk önce geliniz.</p>
</center>
</div>
<center>


<p>IP Adresi: ' . $ipadresi . '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kayıt Tarihi: ' . $kayittarihi . '</p>
<br>
<input class="iletisimbutonu" type="button" value="Kaydet/Yazdır" id="btnPrint" />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="randevuiptal.php?id='.$iptalid.'" class="iletisimbutonu">Randevuyu İptal Et</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="../index.html" class="iletisimbutonu">Çıkış</a>

<br><br><br>
</center>
';




















?>




<hr>
<!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">İletişim</h4>
                              <p>Bize 7/24 ulaşabileceğiniz iletişim kanallarımız.</p>

                              <div class="contact-info">
                                   <p><a href="../iletisim/index.html" class="iletisimbutonu">İletişim Formu</a></p>
                                   <p><i class="fa fa-phone"></i>(512) 345 67 89</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="../#">iletisim@ecbhastanesi.com</a></p>
                              </div>
                         </div>
                    </div>

                     <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb"> 
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Son Yazılar</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="../yazi1.html"><img src="../images/yazi1.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="../yazi1.html"><h5>Kalp sağlığınızı korumanın en iyi yolu: Spor</h5></a>
                                        <span>Mart 08, 2018</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="../yazi2.html"><img src="../images/yazi2.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="../yazi2.html"><h5>Yeni yılda sağlıklı beslenmek için öneriler</h5></a>
                                        <span>Ekim 20, 2018</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4"> 
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Çalışma Saatlerimiz</h4>
                                   <p>Pazartesi - Cuma <span>08:00 - 18:00</span></p>
                                   <p>Cumartesi <span>08:00 - 13:00</span></p>
                                   <p>Pazar <span>Kapalı</span></p>
                              </div> 

                              <ul class="social-icon">
                                   <li><a href="../#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="../#" class="fa fa-twitter"></a></li>
                                   <li><a href="../#" class="fa fa-instagram"></a></li>
                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2019 ECB Hastanesi 
                                   
                                   | Design: <a rel="nofollow" href="../https://www.facebook.com/tooplate" target="_parent">Tooplate</a></p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link"> 
                                   <a href="../#">Laboratuvar Sonuçları</a>
                                   <a href="../#">Hasta Hakları ve Sorumlulukları</a>
                                   <a href="../#">Kariyer</a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn"> 
                                  <a href="../#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>   
                    </div>
                    
               </div>
          </div>
     </footer>


     <!-- SCRIPTS -->
     <script src="../js/jquery.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src="../js/jquery.sticky.js"></script>
     <script src="../js/jquery.stellar.min.js"></script>
     <script src="../js/jquery.magnific-popup.min.js"></script>
     <script src="../js/magnific-popup-options.js"></script>
     <script src="../js/wow.min.js"></script>
     <script src="../js/smoothscroll.js"></script>
     <script src="../js/owl.carousel.min.js"></script>
     <script src="../js/custom.js"></script>

</body>
</html>