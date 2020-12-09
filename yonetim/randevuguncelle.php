<!DOCTYPE html>
<html>
<head>
	<title></title>

	<!-- yönlendirme -->
<meta http-equiv="refresh" content="5;URL=randevulistele.php">
<!-- yönlendirme -->

</head>
<body>
		<font face="Arial" size="4">
	<center><br>
<?php
$guncelleeid= $_GET['id'];
	 
	$adsoyad = $_POST['adsoyad'];
	$telno = $_POST['telno'];
	$email = $_POST['email'];
	$randevutarih = $_POST['randevutarih'];
	$bolum = $_POST['bolum'];
	$mesaj = $_POST['mesaj'];
	$durum = $_POST['durum'];
	

include("vtbaglan.php"); //vtbaglan.php sayfasındaki tüm kodları bu sayfaya çağırdık

//güncelleme için SQL sorgumuzu yazıyoruz.
$sql = "UPDATE randevular SET adsoyad='$adsoyad',  telno='$telno', email='$email', randevutarih='$randevutarih',  bolum='$bolum',  mesaj='$mesaj',  durum='$durum'   WHERE id='$guncelleeid'";
 
//sorgumuzu çalıştırıyoruz
$sonuc= mysqli_query($baglanti,$sql);
if($sonuc>0) 
{ 

echo "Randevu Bilgileri Başarıyla güncellendi";
}
else
echo "Bir problem oluştu, verileri kontrol ediniz";
 
?>
<br>

<!-- Geri sayım -->
<script>
var i=5; //Geri sayımın başlıyacağı süre
function saydir()
{
i--;
var eleman= document.getElementById("gerisayim");
 eleman.innerHTML=i+" saniye sonra listeye yönlendirileceksiniz.";
}
setInterval("saydir()",1000);
</script>



<div id="gerisayim"></div>

<!-- Geri sayım  -->
<a href=randevulistele.php>Şimdi Git</a>

</center>
</font>

</body>
</html>