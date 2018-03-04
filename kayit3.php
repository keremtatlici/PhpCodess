<?php
$kadi =$_POST["kullanici"];
$ksifre =$_POST["sifre"];


$vt_kullanici  =  "ibrahim";
$vt_sifre      =  "123";

if($kadi !=$vt_kullanici){
	echo"<script> alert('Kullanıcı adını yanlış girdiniz') </script>";
}else{
	
	if($ksifre != $vt_sifre){
		echo"<script> alert('Şifre Yanlış') </script>";
	}else{
		echo"Hoş Geldiniz, $vt_kullanici";
}
}









?>