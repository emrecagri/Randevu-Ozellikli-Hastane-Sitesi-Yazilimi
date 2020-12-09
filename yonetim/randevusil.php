<!DOCTYPE html>
<html>
<head>
	<title>Radevu Silme Sayfası</title>


<!-- yönlendirme -->
<meta http-equiv="refresh" content="5;URL=randevulistele.php">
<!-- yönlendirme -->

</head>
<body>
	<font face="Arial" size="4">
	<center><br>
<?php
 
$silinecekID= $_GET['id'];
 
include("vtbaglan.php"); //vtbaglan.php sayfasındaki tüm kodları bu sayfaya çağırdık
 
$sonuc=mysqli_query($baglanti,"DELETE from randevular  where id=".$silinecekID);
 
if($sonuc>0){
   echo $silinecekID." Nolu Randevu Başarıyla silindi";
 }
else
    echo "Bir sorun oluştu! Randevu silinemedi";
 
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