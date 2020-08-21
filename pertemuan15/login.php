<?php

require 'functions.php';

    if(isset($_POST["login"])){
    
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);


            $result =   mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'" );
                // Cek Username 
            if ( mysqli_num_rows($result) === 1 ) {

                    // jika ada cek Password nya
                    $row = mysqli_fetch_assoc($result);
                        if(password_verify($password, $row["password"])) {
                            header("Location: index.php");
                            exit;
                        }
                }
                    // buat error = true
                    $error = true;

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <style>
            label {
                display: block;
            }
    </style>

</head>
<body>
    
    <h1>Halaman Login</h1>

    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / Passowrd Salah !.</p>
    <?php endif; ?>

    <form action="" method="post">

        <ul>
                <li>
                        <label for="username">Username :</label>
                        <input type="text" name="username" id="username" required>
                </li>

                <li>
                        <label for="password">Password: </label>
                        <input type="password" name="password" id="password" required>
                </li>
                
                <li>
                        <button type="submit" name="login">Login</button>
                </li>
        </ul>

    </form>
</body>
</html>