
<?php require_once "baglan.php";
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : "Bilgi bulunamadı.";  ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buton İsim Göster</title>
    <link rel="stylesheet" href="styleSec.css" />
</head>
<body>
<form action="islem.php">
<div>
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
                    <table border="1" class="table">
        <tr>
                                <th>bilet id</th>
                                <th>kullanıcı adı</th>
                                <th>film adı</th>
                                <th>seans</th>
                                <th>koltuk numarası</th>
                            </tr>

        

        <?php
        if ($db != null)
    {
        $sql = $db->prepare("SELECT * FROM biletler ");
        $sql->execute();

        


        while ($student = $sql->fetch(PDO::FETCH_ASSOC))
        {
            echo "<tr>";
                                    echo "<td>" . $student["id"] . "</td>";
                                    echo "<td>" . $student["kullanici"] . "</td>";
                                    echo "<td>" . $student["film_Adi"] . "</td>";
                                    echo "<td>" . $student["seans"] . "</td>";
                                    echo "<td>" . $student["koltuk"] . "</td>";
                                    echo "</tr>";
        }

           }                 
?>

 
       
    </table>

                </div>
            </div>
        </div>

    </div>
</div>

</form>

    
<form action="iptal.php">
<button href="iptal.php" name="sil" class="btn btn-primary btn-large btn-block">BİLET İPTAL</button>
</form>

<form action="exit.php">
<button href="exit.php" name="sil" class="btn btn-primary btn-large btn-block">ÇIKIŞ</button>
</form>
</div>



</body>
</html>
