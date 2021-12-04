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
    <title>CaffeRolles|Product</title>
</head>

<body>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- navabar  -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/caffeshop/"><img src="../caffeshop/ficture/logo/coffee.png" alt="logo"> CaffeRolles</a>
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
    <!-- nav acategory -->
    <ul class="nav justify-content-end category">
        <li class="nav-item prod-cate">
            <a class="nav-link" href="#box">
                <p class="text-secondary">
                    Coffe Box
                </p>
            </a>
        </li>
        <li class="nav-item prod-cate">
            <a class="nav-link" href="#noncoffe">
                <p class="text-secondary">Non Coffe</p>
            </a>
        </li>
        <li class="nav-item prod-cate">
            <a class="nav-link " href="#food">
                <p class="text-secondary">Food</p>
            </a>
        </li>
        <li class="nav-item prod-cate">
            <a class="nav-link" href="#coffedrink">
                <p class="text-secondary">
                    Coffe drink
                </p>
            </a>
        </li>
    </ul>
    <!-- akhir nav category -->
    <!-- Title  -->
    <div class="container buku-menus">
        <h3>Buku Menu</h3>
        <p>Berbagai macam makanan dan minuman sebagai pendamping secangkir kopi kamu.</p>
    </div>
    <!-- produck kategory Coffe Box -->
    <div class="container head">
        <h4 id="Box">Coffe Box</h4>
        <p>Sekarang kalian bisa dengan mudah menikmati coffee specialty dengan bermacam-macam karakter, aroma dan rasa dari berbagai daerah penghasil kopi di Indonesia yang tersedia di gerai-gerai coffeeroles terdekat:</p>
    </div>
    <div class="container product-box">
        <div class="row justify-content-center">
            <div class="col">
                <div class="row md-2 lg-3 mr-5">
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/coffe box/kerinci kayu aro hanoye.jpg" class="card-img-center" alt="coffie">
                            <div class="card-body">
                                <h5 class="card-title"> Kerinci kayi aro Haney </h5>
                                <article>kopi kerinci kayu aro honey yang memiliki citarasa dan aroma khas dari daerah kerinci dengan campuran madu saat pengolahan kopinya</article>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/coffe box/kerinci kayu aro natural.jpg" class="card-img-center" alt="coffie">
                            <div class="card-body">
                                <h5 class="card-title"> Kerinci kayi aro Natural </h5>
                                <article>kopi kerinci kayu aro natural yang memiliki citarasa natural dan aroma khas dari daerah kerinci</article>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/coffe box/kerinci kayu aro.jpg" class="card-img-center" alt="coffie">
                            <div class="card-body">
                                <h5 class="card-title"> Kerinci kayi aro </h5>
                                <article>kopi kerinci kayu aro yang memiliki citarasa dan aroma khas dari daerah kerinci</article>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/coffe box/solok selatan honey.jpg" class="card-img-center" alt="coffie">
                            <div class="card-body">
                                <h5 class="card-title"> Solok Selatan Honey </h5>
                                <article>kopi solo selatan yang memiliki citarasa dan aroma khas dari daerah solok dengan campuran madu dalam proses pembuatan kopinya</article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir category Coffe Box -->
    <!-- catergory coffe drink -->
    <div class="container drink-coffe" id="coffedrink">
        <h4>Coffe Drink</h4>
        <p>Coffeerolles adalah perusahaan kopi yang berpengalaman, mengklaim bahwa salah satu keahlian kami adalah menciptakan varian minuman berbasis kopi.</p>
    </div>
    <div class="container product-drink">
        <div class="row justify-content-center">
            <div class="col">
                <div class="row md-2 lg-3 mr-5">
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/coffe drink/Coffee_Toffee_-_Coffee_Drinks_02_-_Espresso_Based_02b_1x.jpg" class="card-img-center" alt="coffie">
                            <div class="card-body">
                                <h5 class="card-title"> Espresso Base </h5>
                                <article>Cappuccino • <br> Cafe Latte • <br> Creme Brullee Mocha Blast • <br> Black Coffee Nusantara Espresso</article>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/coffe drink/Coffee_Toffee_-_Coffee_Drinks_03_-_Es_Kopi_Susu_02c_1x.jpg" class="card-img-center" alt="coffie">
                            <div class="card-body">
                                <h5 class="card-title"> eskosu
                                    (traditional coffee) </h5>
                                <article>Malaka •<br> Arum Manis • <br> Dandang Gulo • <br> Eskosu Kumpeni • <br> Eskosu Kelapa</article>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/coffe drink/Coffee_Toffee_-_Coffee_Drinks_04_-_Manual_Brew_01c_1x.jpg" class="card-img-center" alt="coffie">
                            <div class="card-body">
                                <h5 class="card-title"> Manual Brew </h5>
                                <article>( Pour Over V60 | French Press ) Single Origin : Java Mocha, Mount Malabar, Bali Kintamani, Flores Bajawa, Toraja Kalosi, Aceh Gayo, Sumatra Linthong</article>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/coffe drink/Coffee_Toffee_-_Nitro_Coffee_02b_1x.jpg" class="card-img-center" alt="coffie">
                            <div class="card-body">
                                <h5 class="card-title"> Nitro Cold Brew </h5>
                                <article> Mild Nitro Coffee (Arabika Single Origin)
                                    Bold Nitro Coffee (House Blend)
                                    Brown Sugar Nitro Coffee</article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir category coffe drink -->
    <!-- category ice -->
    <div class="container ice">
        <h4>Ice Drink</h4>
        <p>Kemungkinan besar kamu akan datang ke Caffeerolles bersama orang - orang terdekatmu, apakah itu keluarga, anak, rekan kerja, atau teman komunitasmu. Dan kami menyadari bahwa sebagian dari mereka menginginkan adanya pilihan menu non-kopi. Oleh karena itu kami juga menyediakan berbagai macam non-coffee juga di gerai kami.
        </p>
    </div>
    <div class="container product-tea" id="noncoffe">
        <div class="row justify-content-center">
            <div class="col">
                <div class="row md-2 lg-3 mr-5">
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/non coffe/Tea_-_1_Green_tea_Blended_Cream_-_Strawberry_Blended_Tea_-_Blueberry_Blended_Tea_2x_1x.jpg" class="card-img-center" alt="coffie">
                            <div class="card-body">
                                <h5 class="card-title"> Tea </h5>
                                <article>Fruity Blended Tea • <br> Green Tea Latte • <br> Milk Tea • <br> Black Tea • <br> Black Tea Lemon • <br> Black Tea Lychee •</article>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/non coffe/Coffee_Toffee_-_Non_Coffee_Drinks_01_-_Chocolate_02c_1x.jpg" class="card-img-center" alt="coffie">
                            <div class="card-body">
                                <h5 class="card-title"> Chocolate </h5>
                                <article>Chocolate Grande • Chocolate Nutella • Caramello • <br> Chocomilk • <br> Hot Chocolate</article>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/non coffe/Coffee_Toffee_-_Non_Coffee_Drinks_03_-_Fruit_Punch_03b_1x.jpg" class="card-img-center" alt="coffie">
                            <div class="card-body">
                                <h5 class="card-title"> Fruite Punch </h5>
                                <article>I'm Manggo <br>
                                    Irish Lemonade <br>
                                    Lychee Punch</article>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/non coffe/Coffee_Toffee_-_Non_Coffee_Drinks_04_-_Smoothies_02b_1x.jpg" class="card-img-center" alt="coffie">
                            <div class="card-body">
                                <h5 class="card-title"> Smoothies</h5>
                                <article>
                                    Manggo Avocado Smoothies
                                    Manggo Madness Smoothies <br>
                                    Mix Berries Smoothies
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir category ice -->
    <!-- category Tea -->
    <div class="container food">
        <h4>FOOD AND SNACK</h4>
        <p> cafferollse juga menyediakan</p>
    </div>
    <div class="container product-food" id="food">
        <div class="row justify-content-center">
            <div class="col">
                <div class="row md-2 lg-3 mr-5">
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/food/Coffee_Toffee_-_Food_Snack_-_Main_Course_03b_1x.jpg" class="card-img-center" alt="coffie">
                            <div class="card-body">
                                <h5 class="card-title"> Main Course </h5>
                                <article>Chicken Cordon Bleu • Chicken Schnitzel • <br> Rebel Beef • <br> Square Pants Burger • <br> Club Sandwich • <br> Buttermilk Latte Sandwich • </article>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/food/Coffee_Toffee_-_Food_Snack_-_Pasta_03b_Spaghetti_Meatball_1x.jpg" class="card-img-center" alt="pasta">
                            <div class="card-body">
                                <h5 class="card-title"> Pasta</h5>
                                <article>Fettucinne Carbonara • Aglio Olio Con Tonno • Spagetti Bolognese • Spagetti Meat Ball • </article>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/food/Coffee_Toffee_-_Food_Snack_-_RiceBowl_04b_1x.jpg" class="card-img-center" alt="pasta">
                            <div class="card-body">
                                <h5 class="card-title"> Rice Bowl</h5>
                                <article>Fried Rice (Javanese|Red|Traditional)</article>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card ">
                            <img src="../caffeshop/product/food/Coffee_Toffee_-_Food_Snack_-_Snack_02b_Spring_Roll_1x.jpg" class="card-img-center float-left" alt="pasta">
                            <div class="card-body">
                                <h5 class="card-title"> Snack</h5>
                                <article>BBQ Chicken Wings• <br> Chicken Lolipop• <br> Crispy Chicked Skin •<br> Mozarella Cheese Stick • <br> Spring Roll • <br> Beef Samosa • <br> Banana Bites • </article>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="../caffeshop/product/food/Coffee_Toffee_-_Food_Snack_-_Traditional_01_1x.jpg" class="card-img-left" alt="traditonal">
                            <div class="card-body">
                                <h5 class="card-title"> Tradisional</h5>
                                <article>Classic Casava (Stemed|Fried) <br>Fried Tofu Chilly Soy Sauce</article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir category tea -->
    <div>
        <i class="fa fa-copyright" aria-hidden="true">2021</i>
    </div>
</body>

</html>