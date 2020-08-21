<?php
session_start();
if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
// memanggil file function
require 'functions.php';



// memanggil finction query.
$wakifs = query("SELECT * FROM wakif");

// jika cari di klik
if( isset($_POST["cari"]) ) {
    $wakifs = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>

    <a href="logout.php">Logout</a>
    
        <h1>Daftar Wakif</h1>

        <a href="tambah.php">Tambah Data Wakif</a>
        <br>
        <br>

<form action="" method="post">

    <input type="text" name="keyword" id="keyword" size="40" autofocus placeholder="Masukan keyword pencarian.." autocomplate="off">
    <button type="submit" name="cari">Cari</button>

</form>
<br><br>
        <table border="1" cellpadding="10" cellspacing="0">

            <tr>
                    <th>No.</th>
                    <th>Aksi</th>
                    <th>Gambar</th>
                    <th>Code</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No.HP</th>
            
            </tr>

            <?php  $i=1; ?>
            <?php foreach ($wakifs as $row ) : ?>
            <tr>
                    <td><?= $i ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> | 
                        <a href="hapus?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin');">Hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                    <td><?= $row["idwakif"]?></td>
                    <td><?= $row["nama"]?></td>
                    <td><?= $row["email"]?></td>
                    <td><?= $row["nohp"]?></td>
            
            
            </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        
        </table>


</body>
</html>