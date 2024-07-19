<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>FİLM EKLE</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="background-image">
	<div class="login">
		<div class="login-screen">
			<div>
				<h2>FİLM EKLE</h2>
			</div>
			<form action="filmler.php" method="post">
				<div class="login-form">
				<div class="control-group">
					<input type="text" name="username" class="login-field" placeholder="film adı" id="login-name">
					<label class="login-field-icon fui-user" for="login-name"></label>
	            </div>
	            <div>
				<h2>FİLM AFİŞİ EKLE</h2>
			    </div>
				<div class="control-group">
					<form action="upload.php" method="post" enctype="multipart/form-data">
                       <input type="file" name="photo" accept="image/*">
                       <button href="filmler.php" name="giris" class="btn btn-primary btn-large btn-block" type="submit">YÜKLE</button>
                </form>
				</div>
			</div>
			</form>
		</div>
	</div>
</body>
</html>

<?php
/*
// Veritabanı bağlantısı
$servername = "your_server_name";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fotoğrafı al
$photo_name = $_FILES['photo']['name'];
$photo_data = file_get_contents($_FILES['photo']['tmp_name']);

// Veritabanına ekle
$sql = "INSERT INTO photos (photo_name, photo_data) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $photo_name, $photo_data);
$stmt->execute();
$stmt->close();

// Bağlantıyı kapat
$conn->close();

echo "Fotoğraf başarıyla yüklendi.";
*/
?>
