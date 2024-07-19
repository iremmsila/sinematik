<?php 
session_start();

$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Bilgi bulunamadı.";
$film1 = isset($_SESSION['film1']) ? $_SESSION['film1'] : "Bilgi bulunamadı.";
$id = isset($_SESSION['username']) ? $_SESSION['id'] : "Bilgi bulunamadı.";
?>

<?php
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM seanslar where id=1");
$sql1->execute();
$seans1 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM seanslar where id=2");
$sql1->execute();
$seans2 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM seanslar where id=3");
$sql1->execute();
$seans3 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM seanslar where id=4");
$sql1->execute();
$seans4 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM seanslar where id=5");
$sql1->execute();
$seans5 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM seanslar where id=6");
$sql1->execute();
$seans6 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM seanslar where id=7");
$sql1->execute();
$seans7 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM seanslar where id=8");
$sql1->execute();
$seans8 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<?php
require_once "baglan.php";
$sql1 = $db->prepare("SELECT * FROM seanslar where id=9");
$sql1->execute();
$seans9 = $sql1->fetch(PDO::FETCH_ASSOC)
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="seans.css">
</head>
<body>
	<div class="yn_cinemaList" style="display: block;">
                <div class="yn_header">
                    <h2> Seanslar ve Salonlar</h2>
                </div>
            <!--    <div class="yn_date__container">



<button class="yn_date__left">

    <img src="https://b6s54eznn8xq.merlincdn.net/Content/site/img/left-arrow.svg">
</button>
    <div class="yn_date" id="yn_dateList">

                <a class="yn_active" name="date" id="date-0" value="2023-12-13" data-date="2023-12-13" data-datestr="13 Aralık Çarşamba">
                    <h3>13 Aralık Çarşamba</h3>
<span>
                            Bugün
                        </span>


                </a>
                <a class="" name="date" id="date-1" value="2023-12-14" data-date="2023-12-14" data-datestr="14 Aralık Perşembe">
                    <h3>14 Aralık Perşembe</h3>
<span>
                            Yarın
                        </span>


                </a>
                <a class="" name="date" id="date-2" value="2023-12-15" data-date="2023-12-15" data-datestr="15 Aralık Cuma">
                    <h3>15 Aralık Cuma</h3>


                </a>
                <a class="" name="date" id="date-3" value="2023-12-16" data-date="2023-12-16" data-datestr="16 Aralık Cumartesi">
                    <h3>16 Aralık Cumartesi</h3>
<span>
                            Hafta Sonu
                        </span>


                </a>
                <a class="" name="date" id="date-4" value="2023-12-17" data-date="2023-12-17" data-datestr="17 Aralık Pazar">
                    <h3>17 Aralık Pazar</h3>
<span>
                            Hafta Sonu
                        </span>


                </a>


    </div>-->


</div>
<form action="islem.php" method="post">
<div class="" id="divSeanceList">
        <div class="yn_cinema" itemprop="event" itemscope="" itemtype="https://schema.org/MovieTheater">
            <div class="yn_cinema_info">
                <div class="yn_cinema_info_title">
                    <h2 itemprop="location" class="yn_cinema_info_titleh2"><a title="title"><img src="blocation.png" alt="Adres">Acity Cinevizyon</a></h2>
                </div>
                <div class="yn_cinema_info_date">
                    <span>13 Aralık 2023</span>
                </div>
            </div>
                    <div class="yn_cinema_salon_info">
                        <div>
                            <h2>Salon 2</h2>
                            <span>Türkçe Dublaj</span>
                        </div>
                        <div>


                                    <button name="saat1" class=" " value="12:00" ><?php echo $seans1['saatler']; ?>
                                    </button>
                                    <button name="saat1" class=" " value="18:30" ><?php echo $seans5['saatler']; ?>
                                    </button>
                                    <button name="saat1" class=" " value="21:00" ><?php echo $seans1['saatler']; ?>
                                    </button>
                        </div>
            </div>

        </div>
       <div class="yn_cinema" itemprop="event" itemscope="" itemtype="https://schema.org/MovieTheater">
            <div class="yn_cinema_info">
                <div class="yn_cinema_info_title">
                    <h2 itemprop="location" class="yn_cinema_info_titleh2"><a title="title"><img src="blocation.png" alt="Adres">Büyülü Fener Bahçelievler Sineması</a></h2>
                </div>
                <div class="yn_cinema_info_date">
                    <span>13 Aralık 2023</span>
                </div>
            </div>
                    <div class="yn_cinema_salon_info">
                        <div>
                            <h2>Salon 3</h2>
                            <span>Türkçe Dublaj</span>
                        </div>
                        <div>

                                    <button name="saat1" class=" " value="12:00" ><?php echo $seans1['saatler']; ?>
                                    </button>
                                    <button name="saat1" class=" " value="15:00" ><?php echo $seans3['saatler']; ?>
                                    </button>
                                    <button name="saat1" class=" " value="18:30" ><?php echo $seans5['saatler']; ?>
                                    </button>
                        </div>
            </div>

        </div>
        <div class="yn_cinema" itemprop="event" itemscope="" itemtype="https://schema.org/MovieTheater">
            <div class="yn_cinema_info">
                <div class="yn_cinema_info_title">
                    <h2 itemprop="location" class="yn_cinema_info_titleh2"><a title="title"><img src="blocation.png" alt="Adres">Büyülü Fener Kızılay Sineması</a></h2>
                </div>
                <div class="yn_cinema_info_date">
                    <span>13 Aralık 2023</span>
                </div>
            </div>
                    <div class="yn_cinema_salon_info">
                        <div>
                            <h2>Salon 8</h2>
                            <span>Türkçe Altyazılı</span>
                        </div>
                        <div>
                                    <button name="saat1" class=" " value="18:30" ><?php echo $seans5['saatler']; ?>
                                    </button>
                                    <button name="saat1" class=" " value="20:45" ><?php echo $seans7['saatler']; ?>
                                    </button>
                                    <button name="saat1" class=" " value="21:20" ><?php echo $seans9['saatler']; ?>
                                    </button>
                        </div>
                    </div>
        </div>
        <div class="yn_cinema" itemprop="event" itemscope="" itemtype="https://schema.org/MovieTheater">
            <div class="yn_cinema_info">
                <div class="yn_cinema_info_title">
                    <h2 itemprop="location" class="yn_cinema_info_titleh2"><a title="title"><img src="blocation.png"alt="Adres">Nata Vega Prestige</a></h2>
                </div>
                <div class="yn_cinema_info_date">
                    <span>13 Aralık 2023</span>
                </div>
            </div>
                    <div class="yn_cinema_salon_info">
                        <div>
                            <h2>Salon 1</h2>
                            <span>Türkçe Dublaj</span>
                        </div>
                        <div>
                                   <button name="saat1" class=" " value="19:00" ><?php echo $seans6['saatler']; ?>
                                    </button>
                                    <button name="saat1" class=" " value="21:00" ><?php echo $seans8['saatler']; ?>
                                    </button>
                        </div>
                    </div>

        </div>
        <div class="yn_cinema" itemprop="event" itemscope="" itemtype="https://schema.org/MovieTheater">
            <div class="yn_cinema_info">
                <div class="yn_cinema_info_title">
                    <h2 itemprop="location" class="yn_cinema_info_titleh2"><a title="title"><img src="blocation.png" alt="Adres">Taurus Cinemarine</a></h2>
                </div>
                <div class="yn_cinema_info_date">
                    
                    <span>13 Aralık 2023</span>
                </div>
            </div>
                    <div class="yn_cinema_salon_info">
                        <div>
                            <h2>Salon 7</h2>
                            <span>Türkçe Dublaj</span>
                        </div>
                        <div>
                                    <button name="saat1" class=" " value="17:15" ><?php echo $seans4['saatler']; ?>
                                    </button>
                                    <button name="saat1" class=" " value="20:45" ><?php echo $seans7['saatler']; ?>
                                    </button>
                        </div>
                    </div>

        </div>
</div>
</div>
</form>
</body>
</html>