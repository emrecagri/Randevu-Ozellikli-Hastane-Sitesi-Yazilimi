<?php
session_start();
unset($_SESSION['login']);
echo " Başarıyla çıkış yapıldı. <br> Giriş sayfasına yönlendiriliyorsunuz.";
header ("refresh:2 ; url=index.php");
?>