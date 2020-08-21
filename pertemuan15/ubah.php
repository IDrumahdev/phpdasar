<?php
require 'functions.php';

//  ambil data di URL
$id = $_GET["id"];

// Query data wakif berdasarkan id nya
$wakif = query("SELECT * FROM wakif WHERE id = $id")[0];

// cek apakah tombol submit sudah di klik apa belum
if(isset($_POST["submit"])){

        if(ubah($_POST) > 0 ) {
            echo    "
                        <script>
                            alert('Data Berhasil diubah');
                            document.location.href = 'index.php'
                        </script>
                    ";
        } else {
            echo "                       
                    <script>
                        alert('Data Gagal diubah');
                        document.location.href = 'index.php'
                    </script>
                ";
        }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Wakif</title>
</head>
<body>
    
    <h1>Ubah Data Wakif</h1>

    <form action="" method="post" enctype="multipart/form-data">
    
        <ul>
                    <input type="hidden" name="id" id="id" value="<?= $wakif["id"]; ?>">
                    <input type="hidden" name="gambarLama" id="gambarLama" value="<?= $wakif["gambar"]; ?>">
                <li>
                        <label for="idwakif">Code :</label>
                        <input type="text" name="idwakif" id="idwakif" required value="<?= $wakif["idwakif"]; ?>">
                </li>

                <li>
                        <label for="nama">Nama:</label>
                        <input type="text" name="nama" id="nama" required value="<?= $wakif["nama"]; ?>">
                </li>

                <li>
                    <label for="email">email:</label>
                    <input type="email" name="email" id="email" required value="<?= $wakif["email"]; ?>">
                </li>

                <li>
                    <label for="nohp">No.HP</label>
                    <input type="text" name="nohp" id="nohp" required value="<?= $wakif["nohp"]; ?>">
                </li>
        
                <li>
                    <label for="gambar">Gambar:</label><br>
                    <img src="img/<?= $wakif["gambar"]; ?>" width="50px"><br>
                    <input type="file" name="gambar" id="gambar" required>
                    
                </li>

                <li>
                        <button type="submit" name="submit">Ubah Data</button>
                </li>
        </ul>
    
    

    </form>

</body>
</html>