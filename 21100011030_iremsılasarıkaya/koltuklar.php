
<?php 
session_start();
$id = isset($_SESSION['username']) ? $_SESSION['id'] : "Bilgi bulunamadı.";
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Bilgi bulunamadı.";
$film1 = isset($_SESSION['film1']) ? $_SESSION['film1'] : "Bilgi bulunamadı.";
$saat1 = isset($_SESSION['saat1']) ? $_SESSION['saat1'] : "Bilgi bulunamadı.";
$tam = isset($_SESSION['tam']) ? $_SESSION['tam'] : "Bilgi bulunamadı.";

?>
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BİLET AL</title>
    <link rel="stylesheet" type="text/css" href="koltuk.css">
</head>
<body onload="koltuk();">
    <script src="koltuk.js"></script>
    <form action="biletAl.php" method="post">
    <section class="koltukSecimi" >
            <div class="koltuk-secim ">
                <div class="koltuklar  " style="height: 332px;">
                    <input name="__RequestVerificationToken" type="hidden" value="ZKQ6A2xg264tFAC2dO8-_J8IwTbGwJGYyJ50JNt4HpiepWkMSBk89nPJfPnfG8u8JulYQ6HfysoZG8Y9293ise6IPa41">
                          <div class="koltuk_sira">

                                                        <input type="submit"  class="koltuk_tek normal-koltuk " name="butonAdi" value="F1">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F2">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F3">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F4">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F5">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F6">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F7">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F8">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F9">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F10">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F11">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F12">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F13">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F14">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="F15">
                            </div>
                            <div class="koltuk_sira">

                                            <span class="koltuk_bos"></span>
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="E1">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="E2">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="E3">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="E4">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="E5">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="E6">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="E7">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="E8">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="E9">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="E10">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="E11">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="E12">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="E13">
                                            <span class="koltuk_bos"></span>
                            </div>
                            <div class="koltuk_sira">

                                            <span class="koltuk_bos"></span>
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="D1">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="D2">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="D3">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="D4">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="D5">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="D6">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="D7">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="D8">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="D9">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="D10">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="D11">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="D12">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="D13">
                                            <span class="koltuk_bos"></span>
                            </div>
                            <div class="koltuk_sira">

                                            <span class="koltuk_bos"></span>
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="C1">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="C2">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="C3">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="C4">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="C5">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="C6">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="C7">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="C8">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="C9">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="C10">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="C11">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="C12">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="C13">
                                            <span class="koltuk_bos"></span>
                            </div>
                            <div class="koltuk_sira">

                                            <span class="koltuk_bos"></span>
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="B1">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="B2">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="B3">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="B4">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="B5">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="B6">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="B7">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="B8">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="B9">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="B10">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="B11">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="B12">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="B13">
                                            <span class="koltuk_bos"></span>
                            </div>
                            <div class="koltuk_sira">

                                            <span class="koltuk_bos"></span>
                                            <span class="koltuk_bos"></span>
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="A1">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="A2">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="A3">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="A4">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="A5">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="A6">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="A7">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="A8">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="A9">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="A10">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="A11">
                                                        <input type="submit" class="koltuk_tek normal-koltuk " name="butonAdi" value="A12">
                                            <span class="koltuk_bos"></span>

                            </div>
                </div>

            </div>
            <h1 align="center">PERDE</h1>
            <h1><?php echo $seans ?></h1>
            </div>
        </section>
</body>
</html>


