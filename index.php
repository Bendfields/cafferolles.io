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
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>CaffeRolles|Home</title>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- navabar -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/caffeshop/"><img src="../caffeshop/ficture/logo/coffee.png" alt="">CaffeRolles</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link" href="/caffeshop/">home</a>
                    <a class="nav-link" href="../caffeshop/galery.php">galeri</a>
                    <a class="nav-link" href="../caffeshop/product1.php">product</a>
                    <a class="nav-link" href="../caffeshop/about.php">about</a>
                    <!-- <a class="nav-icon" href="#"><i class="fas fa-shopping-cart juxti"></i></a> -->
                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->


    <!-- jumbotron crouser slide -->
    <div class="slide-all">

        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../caffeshop/ficture/galery/tempat/slide/new3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Galery</h5>
                        <p> <span> Kehangatan</span> yang tersimpan dalam secangkir kopi untuk kenangan <br> Dalam <span> Pahit dan Manisnya </span> keadaan</p>
                        <a href="/caffeshop/galery.php" class="btn btn-primary tombol">More</a>

                    </div>
                </div>
                <div class="carousel-item">
                    <img src="../caffeshop/ficture/galery/tempat/slide/product.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block product-cor">
                        <h5>Product</h5>
                        <p> <span> Pahit dan Manis </span> Tercampur dalam kehangatan <span> Secangkir Kopi</span> </p>
                        <a href="/caffeshop/product1.php" class="btn btn-primary tombol">More</a>
                    </div>
                </div>

            </div>
            <!-- <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button> -->
        </div>
    </div>


    <!-- akhir jumbotron -->



    <!-- container -->
    <div class="container">
        <!-- panel info -->
        <div class="row justify-content-center">
            <div class="col-10 panel-info " data-aos="fade-up" data-aos-offset="100" data-aos-delay="45" data-aos-duration="1000">
                <div class="row">
                    <div class="col-lg">
                        <img src="../caffeshop/ficture/info panel/clock.png" alt="clock" class="float-left">
                        <h4>open</h4>
                        <p>seni-jum'at 08.00-21.00</p>
                        <p class="open">sabtu-minggu 07.30-22.00</p>
                    </div>

                    <div class="col-lg">
                        <!-- <img src="../caffeshop/ficture/info panel/Screenshot_2021-09-23-17_105x109-removebg-preview.png" alt="whatsapp" class="float-left"> -->
                        <h4>kontak</h4>
                        <!-- <p>081-069684</p>
                        <p>caferoles@mail.com</p> -->
                        <li class="nav-item"><i class="fas fa-phone-alt"></i><span>0818192712119</span></li>
                        <li class="nav-item"><i class="far fa-envelope"></i><span>caferoles@mail.com</span></li>
                    </div>

                    <div class="col-lg">
                        <img src="../caffeshop/ficture/info panel/location-pin.png" alt="about" class="float-left">
                        <h4>location</h4>
                        <p>jl.selalu makmur dan tidak kendor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- kahir panel info -->

    <!-- info menu -->
    <div class="container title-cate">
        <h4>Category product</h4>
    </div>
    <section>
        <div class=" container product ">
            <div class="row ">
                <div class="col">
                    <div class="row md-2 mt-3">
                        <div class="col" data-aos="fade-left" data-aos-offset="100" data-aos-delay="20" data-aos-duration="1000">
                            <div class="card">
                                <img src="../caffeshop/product/non coffe/Hot_Black_Tea.jpg" class="card-img-center" alt="coffie">
                                <div class="card-body">
                                    <h5 class="card-title"> Non Coffe </h5>
                                    <a href="/caffeshop/product1.php#noncoffe" class="btn btn-primary tombol">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-left" data-aos-offset="100" data-aos-delay="45" data-aos-duration="1000">
                            <div class="card">
                                <img src="../caffeshop/product/food/Coffee_Toffee_-_Food_Snack_-_Main_Course_03b_1x.jpg" class="card-img-center food-img" alt="coffie">
                                <div class="card-body">
                                    <h5 class="card-title"> Food And Snack </h5>
                                    <a href="/caffeshop/product1.php#food" class="btn btn-primary tombol">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-left" data-aos-offset="100" data-aos-delay="60" data-aos-duration="1000">
                            <div class="card">
                                <img src="../caffeshop/product/coffe drink/Cafe_White_Chocolate.jpg" class="card-img-center" alt="coffie">
                                <div class="card-body">
                                    <h5 class="card-title"> Coffe drink </h5>
                                    <a href="/caffeshop/product1.php#coffedrink" class="btn btn-primary tombol">More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col" data-aos="fade-up" data-aos-offset="100" data-aos-delay="70" data-aos-duration="1000">
                            <div class="card ">
                                <img src="../caffeshop/product/coffe box/java ciwidey.jpg " class="card-img-top late " alt="coffie" ">
                                <div class=" card-body">
                                <h5 class="card-title">Coffe Box</h5>
                                <a href="/caffeshop/product1.php#box" class="btn btn-primary tombol">More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- akhir info menu -->


    <!-- galery -->
    <section>
        <div class="row justify-content-center">
            <div class="col galery">
                <div class="row">
                    <div class="col satu">
                        <img src="../caffeshop/ficture/galery/tempat/abstract-blur-coffee-shop.jpg" alt="blurcoffeshop">
                    </div>
                    <div class="col dua">
                        <img src="../caffeshop/ficture/galery/tempat/wooden-board-empty-table-top-blurred-background.jpg" alt="bluerbackground">
                    </div>
                    <div class="col text">
                        <h5>Galery</h5>
                        <p>Kami selalu menyimpan kenangan mu bersama kami</p>
                        <a href="../caffeshop/galery.php" class="btn btn-primary tombol"> more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir galery -->
    <!-- svg -->
    <div class="svg-up">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#f9d0af" fill-opacity="1" d="M0,288L60,293.3C120,299,240,309,360,293.3C480,277,600,235,720,202.7C840,171,960,149,1080,165.3C1200,181,1320,235,1380,261.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path>
        </svg>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f4a261" fill-opacity="0.5" d="M0,64L40,58.7C80,53,160,43,240,74.7C320,107,400,181,480,229.3C560,277,640,299,720,256C800,213,880,107,960,64C1040,21,1120,43,1200,74.7C1280,107,1360,149,1400,170.7L1440,192L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
    </svg>
    <!-- akhirsvg -->
    <!-- testimoni -->
    <section class="testimoni">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <h5>
                    "sebelum gelud ngops disini dulu karena sangat nyaman "
                </h5>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 justify-content-center d-flex">
                <figure class="figure">
                    <img src="../caffeshop/ficture/testimoni/han so hee.png" class="figure-img img-fluid rounded-circle" alt="testi 1">
                </figure>
                <figure class="figure">
                    <img src="../caffeshop/ficture/testimoni/mykey.jpg" class="figure-img img-fluid rounded-circle utama" alt="testi 2">
                    <figcaption class="figure-caption">
                        <h5>
                            maykey
                        </h5>
                        <p>king tokyo manji</p>
                    </figcaption>
                </figure>
                <figure class="figure">
                    <img src="../caffeshop/ficture/testimoni/Screenshot_2021-09-23-44_111x129.png" class="figure-img img-fluid rounded-circle" alt="testi 3">
                </figure>
            </div>
        </div>
        </div>
    </section>
    <!-- navbawah -->
    <div class="botton">
        <div class="row justify-content-center">
            <div class="col-md">
                <div class="row">
                    <div class="col fitur">
                        <h4>Firtur</h4>
                        <nav class="nav nav-boton">
                            <li class="nav-item">
                                <a href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">Product</a>
                            </li>
                            <li class="nav-item">
                                <a href="#">Galery</a>
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

            <!-- aos -->
            s <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
</body>

</html>