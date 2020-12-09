<?php
include ("vtbaglan.php");
session_start(); //oturum açma işlemini başlatıyoruz
$kadi=$_POST['kadi'];  //formdan gelen veriyi değişkene atıyoruz
$sifre=$_POST['sifre']; //formdan gelen veriyi değişkene atıyoruz
$getir= mysqli_query($baglanti, "SELECT * FROM kullanicilar WHERE kadi='$kadi' and sifre='$sifre'"); //sql sorgusunu yapıyoruz

if($satir = mysqli_fetch_array($getir)) //eğer kullanıcı adı ve şifre doğru yazılmışsa
{
$_SESSION["login"]="true";
$_SESSION["user"]=$kadi;
$_SESSION["pass"]=$sifre;
header("location:giris.php");
}
else
{
echo "Kullanıcı adı veya şifre yada ikiside hatalı. <br> Giriş sayfasına yönlendiriliyorsunuz.";	
header ("refresh:2 ; url=index.php");
}

?>