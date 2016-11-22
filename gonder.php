<?php 



$isim=$_POST['isim'];
$soyad=$_POST['soyad'];
$mail=$_POST['mail'];
$yorum=$_POST['yorum'];
$ziyaret=$_POST['ziyaret'];

$emailadresi="****@hotmail.com"; 
$emailkonusu="Site iletisim Formu"; 

if (empty($isim) or empty($soyad) or empty($mail) or empty($yorum)){ 
print ('Lütfen bütün alanlari eksiksiz olarak doldurunuz. <br>'); 
print('<a href="http://www.adresiniz.com/form.html">Form Sayfasina Geri Dön</a>'); 
}


else { 
$emailicerigi="
isim: $isim 
Soyad: $soyad 
E-Mail: $mail 
Yorum: $yorum
Ziyaret: $ziyaret"; 
if(mail($emailadresi,$emailkonusu,$emailicerigi)){
print ('E-Mailiniz basarili bir sekilde gönderilmistir. ilginize tesekkür ederiz...!!! <a href="http://www.adresiniz.com">Anasayfaya Geri Dön</a>'); 
}
} 

?>
