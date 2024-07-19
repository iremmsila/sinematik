<?php 
ob_start();
session_start();
require 'baglan.php';

if(isset($_POST['kaydet'])){
   $username = $_POST['username'];
   $no = $_POST['numara'];
   $mail = $_POST['mail'];
   $password = $_POST['password'];

   if(!$username)
   {
    echo 'Lütfen adınızı giriniz';
   }
   elseif(!$no)
   {
    echo "Lütfen telefon numaranızı giriniz";
   }
   elseif(!$mail)
   {
    echo "Lütfen e-posta adresinizi giriniz";
   }
   elseif(!$password)
   {
    echo "Lütfen şifrenizi giriniz";
   }
   else{
    //veritabanı kayıt işlemi
    $sorgu = $db->prepare('INSERT INTO kullanicilar SET adi = ?, email=?, tel_no=?, parola=?');
    $ekle = $sorgu->execute([
        $username,$mail,$no,$password]);
    if($ekle){
        header('Refresh:0; menu.php');
    }
    else{
        echo "bir hata oluştu";
    }

   }
}
?>