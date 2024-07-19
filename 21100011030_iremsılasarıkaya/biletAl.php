<?php require 'baglan.php'; ?>

<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Bilgi bulunamadı."; 
$film1 = isset($_SESSION['film1']) ? $_SESSION['film1'] : "Bilgi bulunamadı.";
$saat1 = isset($_SESSION['saat1']) ? $_SESSION['saat1'] : "Bilgi bulunamadı.";
$tam = isset($_SESSION['tam']) ? $_SESSION['tam'] : "Bilgi bulunamadı.";
$id = isset($_SESSION['username']) ? $_SESSION['id'] : "Bilgi bulunamadı.";

// Butondan gelen veriyi al
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["butonAdi"])) {
        $butonAdi = test_input($_POST["butonAdi"]);
    }
}






// Formdan gelen verileri kontrol etmek için yardımcı bir fonksiyon
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<?php 
$sorgu = $db->prepare('INSERT INTO biletler SET kullanici = ?, film_Adi=?, seans=?, koltuk=?, fiyat=?');
    $ekle = $sorgu->execute([
        $username,$film1,$saat1,$butonAdi,$tam]);
    if($ekle){
        header('Location biletler.php');
    }
    else{
        echo "bir hata oluştu";

} ?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buton İsim Göster</title>
    <link rel="stylesheet" href="styleSec.css" />
</head>
<body>
<form action="biletler.php">
<div class="container">
    <div class="row">
        <div class="col-md-offset-1 col-md-10">
            <div class="panel">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-sm-3 col-xs-12">
                            <h4 class="title">Biletler </h4>
                        </div>
                    </div>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table">
                        <thead>
                            <tbody>
                            <tr>
                                <th>kullanıcı adı</th>
                                <th>film adı</th>
                                <th>seans</th>
                                <th>koltuk numarası</th>
                                <th>fiyat</th>
                            </tr>
                        </thead>
                        <tr>
                                <td><?php echo $username; ?></td>
                                <td><?php echo $film1; ?></td>
                                <td><?php echo $saat1; ?></td>
                                <td><?php echo $butonAdi; ?></td>
                                <td><?php echo $tam; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <button href="biletler.php" name="onayla" class="btn btn-primary btn-large btn-block">ONAYLA</button>
</div>
</form>

</body>
</html>

<?php 

$sql = "SELECT * FROM biletler";
$result = $db->query($sql);

$db->close();
?>
