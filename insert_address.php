<?php
include("admin/connection.php");
session_start();
if (!isset($_SESSION['is_logged'])) {
  header("location: user_login.php");
}
//echo $_SESSION['is_logged'];
$login_real=$_SESSION['is_logged'];
//echo $login_real;
$sql="select customer_ID from `customer` where customer_email='$login_real'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$customer_ID_real=$row['customer_ID'];
//echo $customer_ID_real;
if(isset($_POST['button'])) {
  $home_address=  $_POST['home_address'];
  $postal_code=  $_POST['postal_code'];
  $state=  $_POST['state'];
  $city=  $_POST['city'];
  $s="  INSERT INTO `customer_address` (home_address, postal_code, state, city, customer_ID)
          VALUES ('$home_address','$postal_code','$state','$city', '$customer_ID_real')";
    $r=mysqli_query($conn,$s);
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
                        <li><a href="account.php">ACCOUNT</a></li>

                    </ul>

                </nav>

                <img src="images/menu.png" class="menuicon" onclick="menutoggle()">
            </div>
          </div>
        </div>


    <h2 style="text-align: center">Enter the details</h2>
    <form method="post">
  <div class="form-group">
    <input type="text" class="form-control" id="home_address" name="home_address" placeholder="Home Address">
  </div>
  <div class="form-group">
    <input type="number" class="form-control" id="postal_code" name="postal_code" placeholder="Postal Code">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="state" name="state" placeholder="State">
  </div>
  <div class="form-group">
    <input type="text" class="form-control" id="city" name="city" placeholder="City">
  </div>
  <button type="submit" name="button" class="btn btn-primary">Submit</button>
  <button type="submit" name="logout" class="btn btn-primary">Log Out</button>
</form>
  <?php
    if(isset($_POST['logout'])) {
      session_destroy();
      header("location: user_login.php");
    }?>
  </body>
</html>
