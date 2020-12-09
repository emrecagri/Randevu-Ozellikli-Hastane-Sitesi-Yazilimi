<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Üyeler</title>

<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

body {
  background-color: #a3a3a3;
  font-family: "Roboto", helvetica, arial, sans-serif;
  font-size: 16px;
  font-weight: 400;
  text-rendering: optimizeLegibility;
}

div.table-title {
   display: block;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
}

.table-title h3 {
   color: #fafafa;
   font-size: 30px;
   font-weight: 400;
   font-style:normal;
   font-family: "Roboto", helvetica, arial, sans-serif;
   text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
   text-transform:uppercase;
}


/*** Table Styles **/

.table-fill {
  background: white;
  border-radius:3px;
  border-collapse: collapse;
  height: 320px;
  margin: auto;
  max-width: 600px;
  padding:5px;
  width: 100%;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
  animation: float 5s infinite;
}
 
th {
  color:#ffffff;
  background:#1b1e24;
  border-bottom:4px solid #9ea7af;
  border-right: 1px solid #343a45;
  font-size:15px;
  font-weight: 100;
  padding:20px;
  text-align:left;
  text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  vertical-align:middle;
}

th:first-child {
  border-top-left-radius:3px;
}
 
th:last-child {
  border-top-right-radius:3px;
  border-right:none;
}
  
tr {
  border-top: 1px solid #C1C3D1;
  border-bottom-: 1px solid #C1C3D1;
  color: black;
  font-size:16px;
  font-weight:normal;
  text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
}
 
tr:hover td {
  background:#4E5066;
  color:#FFFFFF;
  border-top: 1px solid #22262e;
}
 
tr:first-child {
  border-top:none;
}

tr:last-child {
  border-bottom:none;
}
 
tr:nth-child(odd) td {
  background:#EBEBEB;
}
 
tr:nth-child(odd):hover td {
  background:#4E5066;
}

tr:last-child td:first-child {
  border-bottom-left-radius:3px;
}
 
tr:last-child td:last-child {
  border-bottom-right-radius:3px;
}
 
td {
  background:#FFFFFF;
  padding:5px;
  text-align:left;
  vertical-align:middle;
  font-weight:300;
  font-size:16px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid #C1C3D1;
}

td:last-child {
  border-right: 0px;
}

th.text-left {
  text-align: left;
}

th.text-center {
  text-align: center;
}

th.text-right {
  text-align: right;
}

td.text-left {
  text-align: left;
}

td.text-center {
  text-align: center;
}

td.text-right {
  text-align: right;
}
</style>

</head>

<body>

	<center>
		<br>
<a href="giris.php">Yönetim Paneline Dön</a>
<h2>Üyeler</h2>

<table border="1" class="table-fill">
<thead>
	<tr>
		<th><b>Kullanıcı Adı</b></th>
		<th><b>Ad Soyad</b></th>
		<th><b>E-Posta</b></th>
		<th><b>Şifre</b></th>
		<th><b>IP Adresi</b></th>
		<th><b>Kayıt Tarihi</b></th>
		<th><b>Güncelle</b></th>
		<th><b>Sil</b></th>
	</tr>
</thead>
	
<?php

include("vtbaglan.php"); //vtbaglan.php sayfasındaki tüm kodları bu sayfaya çağırdık





$sorgu= mysqli_query($baglanti,"select * from kullanicilar");
while($satir=mysqli_fetch_array($sorgu))
{
	echo '<tr>';
	echo '<td>'.$satir['kadi'].'</td>';
	echo '<td>'.$satir['adsoyad'].'</td>';
	echo '<td>'.$satir['mail'].'</td>';
	echo '<td>'.$satir['sifre'].'</td>';
	echo '<td>'.$satir['ipadresi'].'</td>';
	echo '<td>'.$satir['kayittarihi'].'</td>';
	echo '<td> <a href="uyeguncellemeformu.php?id='.$satir['id'].'" >Güncelle</a></td>';
	echo '<td> <a href="uyesil.php?id='.$satir['id'].'">Sil</a> </td>';
	echo '<tr>';	
}

?>
</table>

</center>

</body>
</html>