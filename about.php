<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="about_css.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <title>MASKUP</title>

</head>

<body>
    <!--Navigation bar-->
    <nav class="navbar navbar-expand-lg navbar-light stickytop" style="background-color: #3bb78f;
             background-image: linear-gradient(315deg, #3bb78f 0%, #0bab64 74%);">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php" style="font-family: 'Oswald', sans-serif;"><a
                    href="index.php"><img class="rounded" src="images/logo.png" width="75px"></a></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <!--<a class="nav-link aria-current=" page" href="#">ABOUT</a>-->

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">PRODUCT</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a class="nav-link" href="account.php">ACCOUNT</a>
                </span>
            </div>
        </div>
    </nav>

    <!--About-->
    <div class="abbanner">
        <img src="images/about3.png" width=100%>
        <p id="abtitle">About MaskUp</p>
    </div>
    <p id="abintro">
        We are a brand, driven by our desire to make great design available to everyone in a sustainable way.<br>
        Together we offer fashion, design and services, that enable people to be inspired and to express their own
        personal style, making it easier to live in a more circular way.
    </p>
    <div id="products">
        <div class="row">
            <div class="col-lg-6">
                <p id="abhistory">
                    MaskUp is a Indian fashion house headquartered in Bangalore. We currently design and manufacture
                    face masks with the latest filter technology.
                    We have great interest in a healthier fashion eco system and the value of craftsmanship. We work
                    with small yet highly skilled manufactures and ethically source the best materials in the market.
                </p>
            </div>
            <div class="col-lg-6">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/car1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/car2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="images/car3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

            <div class="row" id="sec">
                <div class="col-lg-6">
                    <img src="images/tech.jpg" width="80%">
                </div>
                <div class="col-lg-6 filter">
                    Our masks have been designed after continuous research and testing. The three layers, which include
                    a military grade carbon filter trap dust, particulate matter, virus and bacteria, ensuring safety.
                </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <p id="abhistory">
                        Our masks are made of cotton that is sourced from Gujarat. The best grade is cotton is used that
                        have been handpicked.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/cot4.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/cot2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="images/cot3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

                <p id="diff"><b>What makes us different:</b><br>

                    One of our main missions is to reduce clothing waste that ends up in landfills and, in order to
                    accomplish this goal, we very carefully source limited quantities of materials for every product
                    that leaves our studio (atelier).<br><br>
                    Furthermore, as a company we strive to limit overconsumption and that’s why ALL our products are
                    made to order. This conscious approach to production allows us to sell EVERY piece of clothing we
                    create.<br><br>
                    We believe in importance of creating a harmonious relationship, a seamless synergy, between
                    environmentally conscious practices and truly honoring our dressmakers, who’s skill and dedication
                    are weaved into the fabric of our brand.</p>

</body>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download our app</h3>
                <p>Download our MASKUP app for both iOS and Android! Whether you want to buy a Mask
                    or get info about covid - try our top rated application today. Sign up.</p>
                <div class="addlogo">
                    <img src="images/app-store.png">
                    <img src="images/play-store.png">
                </div>

            </div>


            <div class="footer-col-2">
                <a href="cadrt.php"><img class="y" src="images/1.png" width="75px"></a>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    repellat.</p>
            </div>
            <div class="footer-col-3" <h3> Useful link</h3>
                <ul>
                    <li>Coupons</li>
                    <li>blog post</li>
                    <li>return policy</li>
                    <li>join afficiancy</li>
                </ul>
            </div>
            <div class="footer-col-4">
                <h3>follow us</h3>
                <ul>
                    <li><a href="https://www.facebook.com">Facebook</a></li>
                    <li><a href="https://www.instagram.com">instagram</a></li>
                    <li>
                        <a href="https://www.twitter.com">Twitter</a>
                    </li>

                    <li><a href="https://www.youtube.com/search">You tube</a></li>
                </ul>
            </div>

        </div>
        <hr>
        <p class="copyright">copyright 2022 --- MASKUP</p>
    </div>
</div>

</html>
