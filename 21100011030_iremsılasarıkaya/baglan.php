<?php 

try {
   $db = new PDO("mysql:host=localhost; dbname=kayit", "root", "12345678");
   //echo "basarili bağlandı";
} catch (Exception $e) {
   echo $e->getMessage();
}
?>

