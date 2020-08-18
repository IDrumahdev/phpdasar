<?php
require 'functions.php';

$wakif = query("SELECT * FROM wakif");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
        <h1>Daftar Wakif</h1>

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
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                    <td><?= $i ?></td>
                    <td>
                        <a href="">Ubah</a> | 
                        <a href="">Hapus</a>
                    </td>
                    <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
                    <td><?= $row["idwakif"]?></td>
                    <td><?= $row["nama"]?></td>
                    <td><?= $row["email"]?></td>
                    <td><?= $row["nohp"]?></td>
            
            
            </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
        
        </table>


</body>
</html>