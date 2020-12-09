



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Yönetim Paneli</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/ico.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
			<form class="login100-form validate-form" action="sifremiunuttumkontrol.php" method="post">
				<span class="login100-form-title p-b-37">
					<img src="images/logo.jpg" width="280px">
					<h4>Şifremi Unuttum</h4>
				</span>
				<center>
			


					<?php
						include("vtbaglan.php"); //vtbaglan.php sayfasındaki tüm kodları bu sayfaya çağırdık


						$kadi = $_POST['kadi'];
						$mail = $_POST['mail'];



						$sorgu= mysqli_query($baglanti,"SELECT * FROM kullanicilar WHERE kadi LIKE '$kadi' AND mail LIKE '$mail'");
						while($satir=mysqli_fetch_array($sorgu))
						{

							echo '<h5> Sn. '.$satir['adsoyad'].'<br> </h5>';
							echo '<h5> Şifreniz: <b>'.$satir['sifre'].'</b> <br> </h5>';

						}
						
								if($sorgu==0) { echo 'Yanlış giriş yaptınız. <br> Lütfen tekrar deneyin. <br><a href="sifremiunuttum.php">Geri git</a>'; }


					?>


					</center>
			
			

				
			</form>
				<center>
				    	<br>
				    		<a href="index.php" class="login100-form-btn">GİRİŞ YAP</a>
				    		<br>
				    		<a href="#">Desing by colorlib.com</a>
				</center>
		</div>
	</div>
	
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>