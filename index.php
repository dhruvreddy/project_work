<?php
  include("admin/connection.php");
  $sql="select * from `product`";
  $result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
        integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASKUp</title>
</head>

<body id="#home">
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img class="x" src="images/logo.png" width="75px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="products.php">PRODUCT</a></li>
                        <li><a href="about.php">ABOUT</a></li>
                        <li><a href="account.php">ACCOUNT</a></li>
                        <li><a href="user_login.php">LOG IN</a></li>

                    </ul>

                </nav>
                <!-- <a href="shoppingcart.php"><img src="images/cart.png" width="30px" height="30px"></a> -->
                <img src="images/menu.png" class="menuicon" onclick="menutoggle()">
            </div>

            <div class="row">
                <div class="col-2">
                    <h1>Masks that saves lives</h1>
                    <h3> Be a superhero – wear a mask </h3>
                    <p> MASKUP was created to provide a sustainable <br> eco-friendly, <br> fashionable alternative for
                        people
                        looking to keep their faces covered <br> while keeping the medical grade masks in the hands of
                        those
                        who need it most.
                        <br>

                        Let’s work towards a safer world, together.
                    </p>
                    <a href="products.php" class="btn">Explore now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/mask.jpg">
                </div>
            </div>
        </div>
    </div>
    <!------featured catagouries------->

    <div class="categories">
        <div class="small-conatiner"></div>
        <div class="row">
            <div class="col-3">
                <img src="images/home_main_1.jpg">

            </div>
            <div class="col-3">
                <img src="images/home_main_2.jpg">
            </div>
            <div class="col-3">
                <img src="images/home_main_3.jpg">
            </div>
        </div>
    </div>
    </div>
    <div class="small-container">
        <h2 class="title">Featured Product</h2>
    <?php
    while ($row=mysqli_fetch_assoc($result)) {
    $image_title_1 = $row['product_title'];
    $image_des_1 = $row['product_des'];
    $image_price_1 = $row['product_price'];
    $image_image_1 = $row['product_image'];
    ?>
        <div class="row">
            <div class="col-4 ">
                <a href="products.php"><img src="<?php echo $image_image_1 ?>"></a>
                <h4><?php echo $image_title_1 ?></h4>
                <p>₹ <?php echo $image_price_1 ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
            <!--<div class="col-4">
                <a href="productdetail.php"><img src="mask/m2.jpg"></a>
                <h4>Blooming haiku Cotton Mask</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>₹499</p>
            </div>
            <div class="col-4">
                <a href="productdetail.php"><img src="mask/m3.jpg"></a>
                <h4>Poker Face cotton mask</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>₹499</p>
            </div>
            <div class="col-4">
                <a href="productdetail.php"><img src="mask/m4.jpg"></a>
                <h4>Total Black cotton Mask</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>

                </div>
                <p>₹499</p> -->
            </div>
            <!------latest catagouries------->

            <div class="small-container">
                <h2 class="title"></h2>
                <div class="row">







                        <!-----offers------->

                        <div class="offer">
                            <div class="small-container">
                                <div class="row">
                                    <div class="col-2">
                                        <img class="offer_img"
                                            src="<?php echo $image_image_1 ?>">
                                    </div>
                                    <div class="col-2">
                                        <p>Exclusive on this store</p>
                                        <h1>HEART OF ROME COTTON MASK</h1>
                                        <p> PREMIUM 100% COTTON FABRIC <br>
                                            Double sided <br>

                                            MADE IN INDIA.</p>
                                        <small class="text-center">Our masks are constructed with 4 layers in total: 2 layers of tightly woven 100% cotton (outer and inner), plus 2 layers of 100% cotton liners in between for additional barrier</small>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!------testimonical------->
                        <div class="testimonial">
                            <div class="small-container">
                                <div class="row">
                                    <div class="col-3">

                                    </div>
                                    <div class="col-3">

                                    </div>

                                </div>

                            </div>
                        </div>

                        <!------brand------->
                        <div class="brand">
                            <div class="small-container">
                                <div class="row">



                                </div>
                            </div>
                        </div>
</body>
<!------footer------>
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
                <a href="index.php"><img class="y" src="images/logo.png" width="75px"></a>
                <p>Masks that saves lives</p>
            </div>
            <div class="footer-col-3">
                <h3>Useful link</h3>
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

<!-- <script>
    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if (MenuItems.style.maxHeight == '0px') {
            MenuItems.style.maxHeight = "200px";
        } else {
            MenuItems.style.maxHeight = "0px";

        }
    }
</script> -->



</html>
