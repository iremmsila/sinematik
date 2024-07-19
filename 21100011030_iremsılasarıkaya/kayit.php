<?php 
require 'baglan.php';
?>


<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>GİRİŞ YAP</title>
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="background-image">

   <div class="login">
      <div class="login-screen">
         <div>
            <h2>ÜYE OL</h2>
         </div>
         <form action="islem.php" method="post">
            <div class="login-form">
            <div class="control-group">
               <input type="text" name="username" class="login-field" placeholder="kullanıcı adı" id="login-name">
               <label class="login-field-icon fui-user" for="login-name"></label>
            </div>
            <div class="control-group">
               <input type="text" name="numara" class="login-field" placeholder="telefon numarası" id="login-no">
               <label class="login-field-icon fui-user" for="login-surname"></label>
            </div>
            <div class="control-group">
               <input type="text" name="mail" class="login-field" placeholder="mail adresi" id="login-mail">
               <label class="login-field-icon fui-user" for="login-surname"></label>
            </div>
            <div class="control-group">
               <input type="password" name="password" class="login-field" placeholder="sifre" id="login-pass">
               <label class="login-field-icon fui-user" for="login-pass"></label>
            </div>
            <button href="islem.php" name="kaydet" class="btn btn-primary btn-large btn-block">ÜYE OL</button>
            <a href="index.php" id="link">GİRİŞ YAP</a>
         </div>
         </form>
      </div>
   </div>
</body>
</html>

