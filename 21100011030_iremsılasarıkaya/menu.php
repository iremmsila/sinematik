<?php 
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Bilgi bulunamadı.";
$id = isset($_SESSION['username']) ? $_SESSION['id'] : "Bilgi bulunamadı.";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		MENÜ
	</title>
	<link rel="stylesheet" type="text/css" href="menu.css">
</head>
<body class="background-image">


	<div class="login">
		<div>
				<h2>MENÜ</h2>
			</div>
		<div class="login-screen">
			
			<form class="login-screen" action="filmler.php" method="post">
				<div class="button" >
				<button href="filmler.php" name="vizyon" class="btn btn-primary btn-large btn-block"><h3> VİZYONDAKİ FİLMLER </h3></button>
			</div>
			</form>
			<form class="login-screen" action="yakinda.php" method="post">
			<div class="button" >
				<button href="yakinda.php" name="yakinda" class="btn btn-primary btn-large btn-block"><h3>VİZYONA GİRECEK FİLMLER</h3></button>
			</div>
			</form>
		</div>
	</div>
</form>

</body>
</html>