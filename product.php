<?php
// session_start();
// if (!isset($_SESSION["login"])) {
//   header("location:login.php");
//   exit;
// }
// require_once('../component/order.list.php');
// require_once('../component/order.php');
// require_once('../component/container.php')

?>




<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <!-- fonts style -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300&display=swap" rel="stylesheet">

  <!-- favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="ficture/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="ficture/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="ficture/favicon/favicon-16x16.png">
  <link rel="manifest" href="ficture/favicon/site.webmanifest">

  <!-- icon and font awesome-->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
  <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/fontawesome.min.css">
  <!-- my style css -->
  <link rel="stylesheet" href="../caffeshop/component/css/styleproduct.css">
  <!-- style fontawosem -->
  <link rel="stylesheet" href="../caffeshop/component/icon/css/style.css">
  <title>Caffeshop|Proudct</title>
</head>

<body class="product-body">

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <!-- head nav -->
  <div class="container head-product">
    <nav class="navbar navbar-light">
      <a class="navbar-brand " href="#">CaffeShop</a>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-list-ul"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-cog"></i></a></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-user"></i></a>
        </li>
      </ul>
    </nav>

    <!-- akhir navbar head-->
    <!-- left-menus -->

  </div>

  <!-- left-menus akahir -->
  <div class="left-menu justify-content-center">
    <div class="row ">
      <div class="col-2">
        <form action="apps.php" method="post"></form>
        <ul class="nav flex-column menu">
          <li class="nav-item">
            <a class="nav-link active" href="#">Seduh</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#box">box</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cemilan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Teh</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- menu -->
  <div class="menus">
    <div class="box">
      <div class="row justify-content-center">
        <div class="col-md">
          <nav class="nav">
            <a class="nav-link" href="#" name="box">All</a>
            <a class="nav-link" href="#" name="bali">Bali</a>
            <a class="nav-link" href="#" name="aceh">Aceh</a>
            <a class="nav-link" href="#" name="jawa">jawa</a>
          </nav>
          <div class="row">
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!-- akhir menu -->
  <!-- case -->
  <!-- akhir case -->
</body>

</html>