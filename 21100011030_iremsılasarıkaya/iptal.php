
<?php 
require 'baglan.php';
?>

<?php
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Bilgi bulunamadı.";  ?>



<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>SİL</title>
      <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="background-image">

   <div class="login">
      <div class="login-screen">
         <div>
            <h2>Silinecek ID:</h2>
         </div>
         <form action="islem2.php" method="post">
            <div class="login-form">       
            <div class="control-group">
               <input type="number" name="silId" class="login-field" placeholder="yeni sifre" id="login-pass">
               <label class="login-field-icon fui-user" for="login-pass"></label>
            </div>
            <button href="islem2.php" name="sil" class="btn btn-primary btn-large btn-block">GÜNCELLE</button>
         </div>
         </form>
      </div>
   </div>
</body>
</html>

