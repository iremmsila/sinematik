<?php require_once "kayit.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>


	<?php 

$sqlQuery = $dbConnection->prepare("SELECT * FROM kullanicilar");
	$sqlQuery->execute();
	$user = $sqlQuery->fetch(PDO::FETCH_ASSOC);

	echo $user['adi'];

	 ?>



</body>
</html>