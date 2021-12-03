<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--favicon  -->
    <link rel="apple-touch-icon" sizes="180x180" href="ficture/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="ficture/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="ficture/favicon/favicon-16x16.png">
    <link rel="manifest" href="ficture/favicon/site.webmanifest">
    <!-- Gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/TextPlugin.min.js"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- fonts style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">

    <!-- icon and font awesome-->

    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/solid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <link rel="stylesheet" href="../fontawesome-free-5.15.4-web/css/fontawesome.min.css">
    <!-- my style css -->
    <link rel="stylesheet" href="../caffeshop/component/css/style.css" <?= filemtime("../css/style.css") ?>>
    <!-- gsap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.1.1/gsap.min.js"></script>
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <title>CaffeRolles|Galery</title>
</head>


<body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- navabar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/caffeshop/">CaffeRolles</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="/caffeshop/"><img src="../caffeshop/ficture/logo/coffee.png" alt="">home</a>
                    <a class="nav-link" href="../caffeshop/galery.php">galeri</a>
                    <a class="nav-link" href="../caffeshop/product1.php">product</a>
                    <a class="nav-link" href="../caffeshop/about.php">about</a>
                    <!-- <a class="nav-icon" href="#"><i class="fas fa-shopping-cart juxti"></i></a> -->
                </div>
            </div>
        </div>
    </nav>
    <div class="title-galery mb-3">
        <h4>reminder gallery</h4>
    </div>
    <!-- akhir navbar -->
    <!-- galery pelanggan -->
    <div class="container costumer">
        <h4>Costumer</h4>
        <div class="row">
            <div class="col">
                <div class="row mt-3 mb-5">

                    <img src="../caffeshop/ficture/galery/member/istockphoto-1284603827-170667a.jpg" alt="" srcset="">
                    <img src="../caffeshop/ficture/galery/member/istockphoto-1310122465-170667a.jpg" alt="" srcset="">
                    <img src="../caffeshop/ficture/galery/member/istockphoto-1342211480-170667a.jpg" alt="" srcset="">
                    <img src="../caffeshop/ficture/galery/member/istockphoto-816833592-170667a.jpg" alt="" srcset="">

                </div>
            </div>
        </div>
    </div>
    <!-- akhir galery pelanggan -->
    <!-- gelery tempat -->
    <div class="container tempat" data-aos="fade-up" data-aos-offset="100" data-aos-delay="45" data-aos-duration="1000">
        <h4>The Pleace</h4>
        <div class="row">
            <div class="col">
                <div class="row lg-4 mt-3 mb-5">
                    <img src="../caffeshop/ficture/galery/tempat/abstract-blur-coffee-shop.jpg" alt="" srcset="">
                    <img src="../caffeshop/ficture/galery/tempat/jonas-jacobsson-1iTKoFJvJ6E-unsplash.jpg" alt="" srcset="">
                    <img src="../caffeshop/ficture/galery/tempat/kris-atomic-3b2tADGAWnU-unsplash.jpg" alt="" srcset="">
                    <img src="../caffeshop/ficture/galery/tempat/nafinia-putra-Kwdp-0pok-I-unsplash.jpg" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
    <!--  akhir galery tempat -->
    <!-- galery Baritsa -->
    <div class="container barista" data-aos="fade-right" data-aos-offset="100" data-aos-delay="45" data-aos-duration="1000">
        <h4>Barista</h4>
        <div class="row">
            <div class="col">
                <div class="row mt-3 mb-5">
                    <img src="../caffeshop/ficture/galery/barista/istockphoto-1286796686-170667a.jpg" alt="" srcset="">
                    <img src="../caffeshop/ficture/galery/barista/istockphoto-842948570-170667a.jpg" alt="" srcset="">
                    <img src="../caffeshop/ficture/galery/barista/smiling-young-cook-uniform-pointing.jpg" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
    <!-- akhir galery baritsa -->
    <!-- bawah -->
    <div class="botton">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="row">
                    <div class="col fitur">
                        <h4>Firtur</h4>
                        <nav class="nav nav-boton">
                            <li class="nav-item">
                                <a href="/about.php">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="/product1.php">Product</a>
                            </li>
                            <li class="nav-item">
                                <a href="/galery.php">Galery</a>
                            </li>
                        </nav>
                    </div>
                    <div class="col kontak">
                        <h4>kontak</h4>
                        <ul>
                            <li class="nav-item"><i class="fas fa-home"></i><span>Jln.lancar jaya</span></li>
                            <li class="nav-item"><i class="fas fa-phone-alt"></i><span>0818192712119</span></li>
                            <li class="nav-item"><i class="far fa-envelope"></i><span>caferoles@mail.com</span></li>
                        </ul>
                    </div>
                    <div class="col item">
                        <h4>About</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat perferendis dolores velit eveniet, asperiores harum aliquam praesentium iure quos aut, animi ad illum.</p>
                    </div>
                    <div class="col social">
                        <h4>Social media</h4>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram"></i>
                            <span>instagram</span>
                        </a>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-facebook"></i>
                            <span>Facebook</span>
                        </a>
                        <a href="#" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-whatsapp"></i>
                            <span>whatsapp</span>
                        </a>
                    </div>
                </div>
                <i class="fa fa-copyright" aria-hidden="true">Kelompok 2</i>
            </div>
            <!-- akhir nav bawah -->
            <!-- gsap -->
            <script>
                gsap.from(".costumer", {
                    duration: 1,
                    x: -50,
                    opacity: 0,
                    delay: 0.5
                });
            </script>
            <!-- aos -->
            s <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>

</body>

</html>