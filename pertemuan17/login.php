<?php
session_start();

require 'functions.php';


// cek dulu cookie nya
    if ( isset($_COOKIE['id']) && isset($_COOKIE['key'])){

        $id = $_COOKIE['id'];
        $key = $_COOKIE['key'];

        // ambil username berdasarkan idnya
            $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
                $row = mysqli_fetch_assoc($result);

                // cek cookie dan username
                    if ( $key === hash('sha256',$row['username']) ){
                        $_SESSION['login']= true;
                    }

    }

if( isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

    if(isset($_POST["login"])){
    
        $username = htmlspecialchars($_POST["username"]);
        $password = htmlspecialchars($_POST["password"]);


            $result =   mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'" );
                // Cek Username 
            if ( mysqli_num_rows($result) === 1 ) {

                    // jika ada cek Password nya
                    $row = mysqli_fetch_assoc($result);
                        if(password_verify($password, $row["password"])) {

                            // set dulu session nya.
                            $_SESSION["login"] = true;

                            // cek Remember Me
                                if( isset($_POST["remember"])){
                                    // buat cookie
                                    // ambil user id dan username
                                    setcookie('id',$row["id"], time()+60);
                                    setcookie('key',hash('sha256',$row["username"]), time()+60);
                                }

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
    <title>Halaman Login by WPU</title>

    <style>
            label {
                display: block;
            }
    </style>

</head>
<body>
    
    <h1>Halaman Login by WPU</h1>

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
                        <input type="checkbox" name="remember" id="remember">
                        <label for="remember">Remember Me</label>
                </li>
                
                <li>
                        <button type="submit" name="login">Login</button>
                </li>
        </ul>

    </form>
</body>
</html>