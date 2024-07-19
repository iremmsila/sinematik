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
				<h2>GİRİŞ YAP</h2>
			</div>
			<form action="islem.php" method="post">
				<div class="login-form">
				<div class="control-group">
					<input type="text" name="username" class="login-field" placeholder="kullanıcı adı" id="login-name">
					<label class="login-field-icon fui-user" for="login-name"></label>
				</div>
				<div class="control-group">
					<input type="password" name="password" class="login-field" placeholder="sifre" id="login-pass">
					<label class="login-field-icon fui-user" for="login-pass"></label>
				</div>
				<button href="filmler.php" name="giris" class="btn btn-primary btn-large btn-block">OTURUM AÇ</button>
				<a href="kayit.php" id="link">ÜYE OL</a>
				<a href="vizyondakiler.php" id="link">VİZYONDAKİ FİLMLER</a>
			</div>
			</form>
		</div>
	</div>
</body>
</html>