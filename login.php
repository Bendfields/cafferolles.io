<?php
session_start();


// cek cookie
if (isset($_COOKIE['id_user']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id_user'];
    $key = $_COOKIE['key'];

    $cek = mysqli_query($conn, "SELECT username FROM akun WHERE id_user = $id ");
    $row = mysqli_fetch_assoc($cek);

    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}
if (isset($_SESSION["login"])) {
    header("location:apps.php");
    exit;
}
include 'DbConnect.php';

// cek cookie

if (isset($_POST['login'])) {
    $username = $_POST['email'];
    $pas = $_POST['pass'];

    $cek = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$username'");

    if (mysqli_num_rows($cek) === 1) {

        $row = mysqli_fetch_assoc($cek);
        if (password_verify($pas, $row["pass"])) {
            // set sesion
            $_SESSION['login'] = true;

            if (isset($_POST['remember'])) {
                // buat cookie

                setcookie('itd', $row['id_user'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }
            header("location:product.php");
            exit();
        }
    }
    $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="ficture/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ficture/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="ficture/favicon/favicon-16x16.png">
    <link rel="manifest" href="ficture/favicon/site.webmanifest">
    <!-- style -->
    <link rel="stylesheet" href="../caffeshop/component/icon/css/all.css">
    <link rel="stylesheet" href="../caffeshop/component/css/style.css" <?= filemtime("../css/style.css") ?>>
    <title>Caffeshop|Login</title>

</head>

<body>
    <div class="login-page">
        <div class="login">
            <a href="./"><i class="fas fa-arrow-left icon"></i></a>
            <h2 class="login-title">Login</h2>
            <?php if (isset($error)) : ?>
                <p class="login-error">
                    Gagal Login, Mungkin Email atau Password Salah!
                </p>
            <?php endif; ?>
            <form action="" method="post">
                <ul>
                    <li class="form">
                        <label for="email">User name</label>
                        <input type="text" name="email" id="email" required />
                    </li>
                    <li class="form">
                        <label for="password">Password</label>
                        <input type="password" name="pass" id="pass" required />
                        <i class="fa fa-eye pass-icon" id="pass-icon" onclick="visible()"></i>
                    </li>
                    <li class="remember">
                        <input type="checkbox" name="remember" id="remember" />
                        <label for="remember">Remember me</label>
                    </li>
                    <li>
                        <input type="submit" name="login" class="button-light button-login" value="Login">
                    </li>
                    <li class="login-signup">
                        <p>Don't have an account? <a href="register.php">Sign Up</a></p>
                    </li>
                </ul>
            </form>
        </div>
    </div>

    <script src="../caffeshop/component/js/password.js"></script>

</body>

</html>