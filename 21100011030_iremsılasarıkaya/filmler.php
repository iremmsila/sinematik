<?php require_once "baglan.php"; ?>
<?php 
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Bilgi bulunamadı.";
$id = isset($_SESSION['username']) ? $_SESSION['id'] : "Bilgi bulunamadı.";

$sql1 = $db->prepare("SELECT * FROM filmler where id=1");
$sql1->execute();
$film1 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=2");
$sql1->execute();
$film2 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=3");
$sql1->execute();
$film3 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=4");
$sql1->execute();
$film4 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=5");
$sql1->execute();
$film5 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=6");
$sql1->execute();
$film6 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=7");
$sql1->execute();
$film7 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=8");
$sql1->execute();
$film8 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=9");
$sql1->execute();
$film9 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=10");
$sql1->execute();
$film10 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=11");
$sql1->execute();
$film11 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=12");
$sql1->execute();
$film12 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=13");
$sql1->execute();
$film13 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=14");
$sql1->execute();
$film14 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php 
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM filmler where id=15");
$sql1->execute();
$film15 = $sql1->fetch(PDO::FETCH_ASSOC)
?>

<html lang="tr"><head>
    
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="admin.css">
<title>
Vizyondaki Filmler</title>

</head>
<body >  
    <main>
<form action="islem.php" method="post">
<div class="dreadcrumb">
     <h1 title="Sinema">
        <img src="sinematikk.png">
    </h1>   
    </div>
    <div class="kategori">
        <div id="kategori__etkinlikler" class="kategori__etkinlikler">
                <ul>
                            <li>
                                <figure>
                                    <button name="film1" value="Napolyon" title="Napolyon"><img src="napolyon.jpg" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="Napolyon"><?php echo $film1['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="Murat Göğebakan: Kalbim Yaralı" title="Murat Göğebakan: Kalbim Yaralı"><img src="muratgögebakan.jpg" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="Murat Göğebakan: Kalbim Yaralı"><?php echo $film2['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="Oppenheimer" title="Oppenheimer"><img src="oppenheimer.jpg" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="Oppenheimer"><?php echo $film3['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="Ölümlü Dünya 2" title="Ölümlü Dünya 2"><img src="olumlu-dunya-2.jpg" ></button>
                                </figure>
                                <h3><a href=v title="Ölümlü Dünya 2"><?php echo $film4['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="Açlık Oyunları: Kuşların ve Yılanların Şarkısı" title="Açlık Oyunları: Kuşların ve Yılanların Şarkısı"><img src="aclik-oyunlari.jpg" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="Açlık Oyunları: Kuşların ve Yılanların Şarkısı"><?php echo $film5['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="The Marvels" title="The Marvels"><img src="the-marvels.jpg" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="The Marvels"><?php echo $film6['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="Kuru Otlar Üstüne" title="Kuru Otlar Üstüne"><img src="kuru-otlar-ustune.jpg" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="Kuru Otlar Üstüne"><?php echo $film7['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="Hayat" title="Hayat"><img src="hayat.jpg" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="Hayat"><?php echo $film8['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="Atatürk 1881 - 1919 (1. Film)" title="Atatürk 1881 - 1919 (1. Film)"><img src="ataturk.png" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="Atatürk 1881 - 1919 (1. Film)"><?php echo $film9['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="Maşa ile Koca Ayı: Sonsuz Eğlence" title="Maşa ile Koca Ayı: Sonsuz Eğlence"><img src="masa-ile-koca.jpg" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="Maşa ile Koca Ayı: Sonsuz Eğlence"><?php echo $film10['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="Aslan Hürkuş 3: Anka Adası" title="Aslan Hürkuş 3: Anka Adası"><img src="aslan-hurkus-3-anka-adasi.jpg" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="Aslan Hürkuş 3: Anka Adası"><?php echo $film11['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="Troller Hep Beraber" title="Troller Hep Beraber"><img src="troller.jpg" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="Troller Hep Beraber"><?php echo $film12['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="Kör Noktada" title="Kör Noktada"><img src="kor-noktada.jpg" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="Kör Noktada"><?php echo $film13['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="Freddy'nin Pizza Dükkanında Beş Gece" title="Freddy'nin Pizza Dükkanında Beş Gece"><img src="freddynin-pizza-dukkaninda.jpg" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="Freddy'nin Pizza Dükkanında Beş Gece"><?php echo $film14['film_adi']; ?></a></h3>


                            </li>
                            <li>
                                <figure>
                                    <button name="film1" value="Dilek" title="Dilek"><img src="dilek.jpg" ></button>
                                </figure>
                                <h3><a href="seansSec.php" title="Dilek"><?php echo $film15['film_adi']; ?></a></h3>


                            </li>
                            
                </ul>
        </div>

        <input type="hidden" id="categoryPage" value="1">
        <input type="hidden" id="categoryPageSize" value="25">
        <input type="hidden" id="categoryOrganizerType" value="Cinema">
        <input type="hidden" id="categoryListCount">
    </div>
</form>
</main>
</body>
</html>