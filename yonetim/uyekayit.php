<!DOCTYPE html>
<html>
<head>
    <title>Üye Kayıt</title>
    <meta charset="utf-8">
      <!-- yönlendirme -->
<meta http-equiv="refresh" content="5;URL=index.php">
<!-- yönlendirme -->
    </head>
    <body>
        <font face="arial">
     <center>
          <?php 

include("vtbaglan.php"); //vtbaglan.php sayfasındaki tüm kodları bu sayfaya çağırdık

if($_POST)
     $kadi = $_POST['kadi'];
     $adsoyad = $_POST['adsoyad'];
     $mail = $_POST['mail'];
     $sifre = $_POST['sifre'];
     $kod = $_POST['kod'];
     $kayittarihi = date('d.m.Y');
     $ipadresi = $_SERVER["REMOTE_ADDR"];

      if($kod == "ecb0")
      {
     
     if($ekle=mysqli_query($baglanti,"INSERT INTO kullanicilar(kadi,adsoyad,mail,sifre,kayittarihi,ipadresi) VALUES('$kadi','$adsoyad','$mail','$sifre','$kayittarihi','$ipadresi')"))
     
     {
          echo 'Başarıyla Üye Oldunuz. <br> <a href="index.php">Giriş Sayfasına Dön</a>';
          
          }
          else 
          {
               echo 'Hata! Üye Olamadınız. <br> <a href="index.php">Giriş Sayfasına Dön</a>';
               }

          } else {

            echo '<br><br> <h2>Hastanenin size verdiği hesap oluşturabilme<br>yetki kodunu yanış girdiniz.</h2> <br>';
          }
               

 ?>
 <!-- Geri sayım -->
<script>
var i=5; //Geri sayımın başlıyacağı süre
function saydir()
{
i--;
var eleman= document.getElementById("gerisayim");
 eleman.innerHTML=i+" saniye sonra giriş sayfasına yönlendirileceksiniz.";
}
setInterval("saydir()",1000);
</script>



<div id="gerisayim"></div>

<!-- Geri sayım  -->
    </center>
    </font>
        </body>
</html> 