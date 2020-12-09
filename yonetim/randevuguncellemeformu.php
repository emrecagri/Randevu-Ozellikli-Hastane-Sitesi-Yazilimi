<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<font face="arial">
<center>



<?php

//güncellenecek ID'yi alıyoruz
$guncelleid=$_GET['id'];

include("vtbaglan.php"); //vtbaglan.php sayfasındaki tüm kodları bu sayfaya çağırdık

//select sorgusu ile ders tablosundan ilgili kaydı seçiyoruz
$sql="select * from randevular WHERE id=".$guncelleid;

//Sorgumuzu veritabanına gönderiyoruz.
$sonuc1= mysqli_query($baglanti,$sql);

//Sorgunun sonucunda dönen satır sayısına mysql_num_rows() fonksiyonu ile bakıyoruz
$satirsay=mysqli_num_rows($sonuc1);

if ($satirsay>0)
{
    $satir = mysqli_fetch_array($sonuc1);
    //Kayıt bulundu
    //Bu kısımda form içine veritabanında çekilen değerleri yazıyoruz.
echo '<form action="randevuguncelle.php?id='.$guncelleid.'" method="post" name="form">
		<table border="1" class="table-fill">
			<tr>
				<td colspan="2">
			<div align="center"><b>'.$guncelleid.' Nolu Randevu Güncelleme</b></div>
				</td>
			<tr>
                <td>Ad Soyad:</td>
                <td><input type="text" name="adsoyad" required="required"  value="'.$satir['adsoyad'].'"> </td>
            </tr>

            <tr>
                <td>Telefon Numarası:</td>
                <td><input type="text" name="telno"  required="required" value="'.$satir['telno'].'"> </td>
            </tr>



            <tr>
                <td>E-mail Adresi:</td>
                <td><input type="mail" name="email"  required="required" value="'.$satir['email'].'"> </td>
            </tr>


           
            <tr>
                <td>Randevu Tarihi:</td>
               <td><input type="date" name="randevutarih"  required="required" value="'.$satir['randevutarih'].'"> </td>
            </tr>


             <tr>
                <td>Alınan Bölüm:</td>
                <td><input type="text" name="bolum" required="required" value="'.$satir['bolum'].'"></td>
            </tr>  

             <tr>
                <td>Ek Mesaj:</td>
                <td><textarea name="mesaj" style="margin: 0px; width: 155px; height: 92px;">'.$satir['mesaj'].'</textarea></td>
            </tr> 

            <tr>
                <td>Durum:</td>
                <td><input type="text" name="durum" required="required" value="'.$satir['durum'].'"></td>
            </tr>  

			
<td colspan="2"><div align="right"> <a href=randevulistele.php>Listeye Dön</a> <input type="reset" value="Geri Al">&nbsp;&nbsp;<input type="submit" value="Güncelle" />&nbsp;</div></td>
</tr>
</table>
</form>';

 
} else {
//Kayıt bulunamadı
echo "Aranılan kayıt bulunamadı";
}
 
?>


</center>
</font>
</body>
</html>