<?php
$kaynak			=$_FILES["dosya"]["tmp_name"];
$dosyaadi		=$_FILES["dosya"]["name"];
$yol			= "dosya";
$yeniad			=substr(md5(time()),0,30);
$uzanti			=substr($dosyaadi, -6);
$sonad			=$yeniad.$uzanti;


$yukle			=@move_uploaded_file($kaynak,$yol."/".$sonad);

if($yukle){
	echo"Dosya başarıyla yüklendi";
}else{
	echo "Dosya yüklenme başarısız";
}





?>