<?php
// Veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "kayit";

$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

if(isset($_POST['sil'])){
$silId= $_POST['silId'];


// SQL sorgusu ile kaydı silme
$sql = "DELETE FROM biletler WHERE id = $silId";

if ($conn->query($sql) === TRUE) {
    echo "Kayıt başarıyla silindi.";
    header('Refresh:0; biletler.php');
} else {
    echo "Hata oluştu: " . $conn->error;
}

// Bağlantıyı kapat
$conn->close();
}


?>
