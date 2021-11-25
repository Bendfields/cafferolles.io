<?php
session_start();
//Include file koneksi ke database
include "DbConnect.php";

if (isset($_POST['submit'])) {
    if (register($_POST) > 0) {
        echo "<script>
                alert('user baru berhasil ditambahkan')
                </script>";
    } else {
        echo mysqli_error($conn);
    }
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
    <!-- style css -->
    <link rel="stylesheet" href="../caffeshop/component/css/style.css">
    <link rel="stylesheet" href="../caffeshop/component/icon/css/all.css">
    <title>CaffeShop|Register</title>
</head>

<body>
    <div class="login-page">
        <div class="register">
            <a href="login.php"><i class="fas fa-arrow-left icon"></i></a>
            <h2 class="login-title">Register</h2>
            <form action="" method="post">
                <div class="form">
                    <label for="user">User Name</label>
                    <input type="text" name="user" id="user" class="form-control" placeholder="User name" />
                </div>
                <div class="form">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" class="form-control" placeholder="email" />
                </div>
                <div class="form">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Password" />
                    <i class="fa fa-eye pass-icon" id="pass-icon" onclick="visible()"></i>
                </div>
                <div class="form">
                    <label for="confirm">Confirm Password</label>
                    <input type="password" name="confirm" id="confirm" class="form-control" placeholder="Password" />
                    <i class="fa fa-eye pass-icon" id="pass-icon" onclick="visible()"></i>
                </div>

                <button type="submit" name="submit" class="button-light button-daftar">Daftar</button>

            </form>
            <script src="../caffeshop/component/js/password.js"></script>
        </div>
    </div>
</body>

</html>