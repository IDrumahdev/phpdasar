<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data POST</title>
</head>
<body>

<?php if(isset($_POST["submit"]) ) :?>

    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>

<?php endif; ?>
        <form action="" method="post">

            <li>
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama">
            </li>
        
            <li>
                    <button type="submit" name="submit">Kirim</button>   
            </li>
        </form>
</body>
</html>