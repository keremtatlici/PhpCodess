<?php
//////////////////////////////////////////////////////////////////////
/*
// Değişken Tanımlama

$degisken = "merhaba";
$php      = "selam";
echo $degisken; 
*/
//////////////////////////////////////////////////////////////////////7
/* echo " <form action='kayit.php' method='post'>
Adınız ve Soyadınız :
<input type='text' name='adsoyad' />
<br><br>
Yaşınız :
<input type='text' name='yas'/>
<input type='submit' value='Kaydet' />

</form> 
";
*/
///////////////////////////////////////////////////////////////////////////////////////
/*
echo " <form action='kayit2.php' method='get'>
Adınız ve Soyadınız :
<input type='text' name='adsoyad' />
<br><br>
Yaşınız :
<input type='text' name='yas'/>
<input type='submit' value='Kaydet' />

</form>";

*/
//////////////////////////////////////////////////////////////////////////////////////////
/*
echo " <form action='kayit3.php' method='post'> 
Kullanıcı adınız : 
<input type='text' name='kullanici' />
Şifreniz : 
<input type='password' name='sifre' />
<br><br>
<input type='submit' value='Giris Yap' />
</form>
";
*/
//////////////////////////////////////////////////////////////////////////////////////////
/*
date_default_timezone_set('Europe/Istanbul');

$tarih = date("d-m-Y");
$saat  = date("H:i:s:u");
$varmi = date("I");

	echo $tarih;
	echo "<br>";
	echo $saat;
	echo"<br>";
	echo $varmi;
*/
/////////////////////////////////////////////////////////////////////////////////////////////

/*

$simdikizaman = time();//Şimdiki zamanı saniye verdi
$dogum        = mktime(0,0,0,12,15,1998);//doğum saniyesi

$cikart		  = $simdikizaman-$dogum;
$gunbul		  = $cikart / (60*60*24);
$gun 		  = floor($gunbul);

echo $gun;

*/
////////////////////////////////////////////////////////////////////////////////////
/*

include_once "menu.php";// hata olsada gösterir
require_once "menu.php";// hata olursa göstermez

echo "<br><br><br>Burası Anasayfa";
*/
////////////////////////////////////////////////////////////////////////////////////
/*
Function muzik(){
	
	echo "Rock,Metal,Caz,Pop,Rap";
}

muzik();
echo "<br>";
Function topla($ilk,$son){
	$topla=$ilk+$son;
	echo "Sonuç : $topla";
}
topla(1,2);
*/
////////////////////////////////////////////////////////////////////////////////////
/*
$mesaj ="<script>alert('Uyarı mesajı!')</script>";

echo $mesaj;
*/
////////////////////////////////////////////////////////////////////////////////////////////
/*
echo "<form action='yolla.php' method='post' enctype='multipart/form-data'>
<input type='file' name='dosya'>
<input type='submit' value='Yolla Gitsin..'>
</form>
 ";
*/
//////////////////////////////////////////////////////////////////////////////////////////////
/*
$ders			="md5 nasıl çalışır";

$sifrele		=md5($ders);

echo $sifrele;
*/
/////////////////////////////////////////////////////////////////////////////////////////////7











?>


