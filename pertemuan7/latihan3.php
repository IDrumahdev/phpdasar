<?php
        // cek apakah ada data atau tidak pada $_GET
        if(  !isset($_GET["nama"]) || !isset($_GET["img"]) || !isset($_GET["nohp"])|| !isset($_GET["id"])|| !isset($_GET["email"])  ){
            // redirect
            header("Location:latihan2.php");
            exit;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Wakif</title>
</head>
<body>
    <h1>Detail Data Wakif</h1>
    <ul>
            <li>
                <img src="img/<?= $_GET["img"]; ?>">
            </li>
            <li><?= $_GET["nama"]; ?></li>
            <li><?= $_GET["nohp"]; ?></li>
            <li><?= $_GET["id"]; ?></li>
            <li><?= $_GET["email"]; ?></li>
    </ul>

    <a href="latihan2.php">Kembali ke daftar wakif</a>
</body>
</html>