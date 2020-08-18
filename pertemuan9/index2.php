<?php
// koneksi ke database
$conn = mysqli_connect("localhost","root","","phpdasar");

// ambil data dari table wakif
$result = mysqli_query($conn, "SELECT * FROM wakif");
if (!$result){
    echo mysqli_errno($conn);
}

// ambil (fetch) data wakif dari object result
// mysql_fetch_row()//mengembalikan array numberik
// mysqli_fetch_assoc()//mengembalikan array associativ -> key dan value
// mysqli_fetch_array()//mengembalikan array numberik dan array associativ -> data yang di tampilkan doble -> lebih berat.
// mysql_fetch_object()//mengembalikan array berbentuk object.

// $wakifs = mysqli_fetch_row($result);
// var_dump($wakifs[3]);

// $wakifs = mysqli_fetch_assoc($result);
// var_dump($wakifs["email"])

// $wakifs = mysqli_fetch_array($result);
// var_dump($wakifs["email"])
// var_dump($wakifs[3])

// $wakifs = mysqli_fetch_object($result);
// var_dump($wakifs->nama)

// while ($wakifs = mysqli_fetch_assoc($result)) {

//     var_dump($wakifs);
// }


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

            <?=  $i=1; ?>
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