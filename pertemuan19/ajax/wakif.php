<?php

require '../functions.php';

$keyword = $_GET["keyword"];

$query = "SELECT * FROM wakif WHERE 
                                            nama  LIKE '%$keyword%' OR
                                            email LIKE '%$keyword%' OR
                                            nohp  LIKE '%$keyword%'
                                            ";
$wakifs = query($query);

// var_dump($wakifs);

?>

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