<?php 
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Bilgi bulunamadı.";
$film1 = isset($_SESSION['film1']) ? $_SESSION['film1'] : "Bilgi bulunamadı.";
$saat1 = isset($_SESSION['saat1']) ? $_SESSION['saat1'] : "Bilgi bulunamadı.";
$id = isset($_SESSION['username']) ? $_SESSION['id'] : "Bilgi bulunamadı.";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="yetiskinGenc.css">
    <title></title>
</head>
<body>
   <!--Radio button-->
<form action="islem.php" method="post">
<div class="main">
<input type="radio" name="tam" value="240" class="check" id="radio1" checked/>
<label for="radio1">
  <div class="container">
    <div class="cRadioBtn">
      <div class="overlay"></div>
      <div class="drops xsDrop"></div>
      <div class="drops mdDrop"></div>
      <div class="drops lgDrop"></div>
    </div>
  </div>
  <h2>Yetiskin   240 TL</h2>
</label>
<input type="radio" name="tam" value="175" class="check" id="radio2" />
<label for="radio2">
  <div class="container">
    <div class="cRadioBtn">
      <div class="overlay"></div>
      <div class="drops xsDrop"></div>
      <div class="drops mdDrop"></div>
      <div class="drops lgDrop"></div>
    </div>
  </div>
  <h2>Genc   175 TL</h2>
</label>
</div>
<button class="btn btn-primary btn-large btn-block" type="submit">İlerle</button>
</form>
</body>
</html>





