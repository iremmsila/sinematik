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
        header('Refresh:0; index-.php');
    }
    else{
        echo "bir hata oluştu";
    }

   }
}

   if(isset($_POST['giris'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

     if(!$username)
   {
    echo 'Lütfen adınızı giriniz';
   }
   elseif(!$password)
   {
    echo "Lütfen şifrenizi giriniz";
   }
   else{
    $kullanici_sor = $db->prepare('SELECT * FROM kullanicilar WHERE adi =? && parola=?');
    $kullanici_sor->execute([$username,$password]);
   }
   $say = $kullanici_sor->rowCount();
   if($say==1){
    $_SESSION['username']=$username;
    $_SESSION['id']=$id;
    echo "basarıyla giriş yaptınız!";
    header('Location: menu.php');
   }
   else{
    echo"bir hata oluştu";
   }
   }

   if(isset($_POST['film1'])){
    $film1= $_POST['film1'];

    $kullanici_sor = $db->prepare('SELECT * FROM filmler WHERE film_adi =?');
    $kullanici_sor->execute([$film1]);

    $say = $kullanici_sor->rowCount();
    if($say==1)
    {
        $_SESSION['film1']=$film1;
        echo "basarili";
        header('Refresh:0; seansSec.php');
    }
    else{
        echo "HATA";
    }
}


    if(isset($_POST['saat1'])){
    $saat1= $_POST['saat1'];

    $kullanici_sor = $db->prepare('SELECT * FROM seanslar WHERE saatler =?');
    $kullanici_sor->execute([$saat1]);

    $say = $kullanici_sor->rowCount();
    if($say==1)
    {
        $_SESSION['saat1']=$saat1;
        echo "basarili";
        header('Refresh:0; yetiskinGenc.php');
    }
    else{
        echo "HATA";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Radio button değerini al
    if (isset($_POST["tam"])) {
        $tam = $_POST["tam"];
        $_SESSION['tam']=$tam;
        echo "Seçilen cinsiyet: " . $tam;
        header('Refresh:0; koltuklar.php');
    }
}



 
?>