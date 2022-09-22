<?php

  include('admin/connection.php');
  $sql="select * from `product`";
  $result=mysqli_query($conn,$sql);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css"
            integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
    <title></title>
  </head>
  <body>
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
                        <li><a href="user_login.php">ACCOUNT</a></li>

                    </ul>

                </nav>
                <a href="shoppingcart.php"><img src="images/cart.png" width="30px" height="30px"></a>
                <img src="images/menu.png" class="menuicon" onclick="menutoggle()">
            </div>
          </div>
        </div>
    <?php
    while ($row=mysqli_fetch_assoc($result)) {
    $image_title_1 = $row['product_title'];
    $image_des_1 = $row['product_des'];
    $image_price_1 = $row['product_price'];
    $image_image_1 = $row['product_image'];
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $image_image_1; ?>" alt="" width="70px" height="100px">

                    <div class="card-body">
                        <h5 class="card-title"><?php echo $image_title_1; ?></h5>
                        <p class="card-text">
                            Some quick example text to build on
                            the card title and make up the bulk
                            of the card's content.
                        </p>

                        <a href="#" class="btn btn-outline-primary btn-sm">
                            Card link
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div> <?php } ?>
            <!-- <div class="col-lg-6 mb-4">
                <div class="card">
                    <img class="card-img-top" src="" alt="">

                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">
                            Some quick example text to build on the
                            card title and make up the bulk of the
                            card's content.
                        </p>

                        <a href="#" class="btn btn-outline-primary btn-sm">
                            Card link
                        </a>
                        <a href="#" class="btn btn-outline-secondary btn-sm">
                            <i class="far fa-heart"></i></a>
                    </div>
                </div>
            </div> -->
        </div>
    </div>

  <!-- <div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>  -->
  </body>
</html>
