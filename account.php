<?php

  include("admin/connection.php");
  session_start();
  //echo $_SESSION['is_logged'];
  $login_real=$_SESSION['is_logged'];
  //echo $login_real;
  $sql="select customer_ID from `customer` where customer_email='$login_real'";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  $customer_ID_real=$row['customer_ID'];
  if(isset($_POST['button'])) {
    $home_address=  $_POST['home_address'];
    $postal_code=  $_POST['postal_code'];
    $state=  $_POST['state'];
    $city=  $_POST['city'];
    $s="  INSERT INTO `customer_address` (home_address, postal_code, state, city, customer_ID)
            VALUES ('$home_address','$postal_code','$state','$city', '$customer_ID_real')";
      $r=mysqli_query($conn,$s);
  }
    $q="select * from `customer` where customer_email='$login_real'";
    $q2="select * from `customer_address` where customer_ID='$customer_ID_real'";
    $res=mysqli_query($conn,$q);
    $res2=mysqli_query($conn,$q2);
    $row1=mysqli_fetch_assoc($res);
    $row2=mysqli_fetch_assoc($res2);

    $fetch_customer_name=$row1['customer_name'];
    $fetch_customer_email=$row1['customer_email'];
    $fetch_customer_phone=$row1['customer_phone'];

    $fetch_home_address=$row2['home_address'];
    $fetch_home_postal=$row2['postal_code'];
    $fetch_home_state=$row2['state'];
    $fetch_home_city=$row2['city'];

    // echo $fetch_customer_name;
    // echo $fetch_customer_email;
    // echo $fetch_customer_phone;
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
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
    <title>Account</title>
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
                        <li><form method="post"><button class="btn btn-dark btn-lg btn-block" type="submit" name="logout">Log Out</button></form></li>
                        <?php
                          if(isset($_POST['logout'])) {
                            session_destroy();
                            header("location: user_login.php");
                          }?>
                    </ul>

                </nav>
                <!-- <a href="shoppingcart.php"><img src="images/cart.png" width="30px" height="30px"></a> -->
                <img src="images/menu.png" class="menuicon" onclick="menutoggle()">
            </div>
          </div>
        </div>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Firstname</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Home Address</th>
      <th scope="col">Postal Code</th>
      <th scope="col">State</th>
      <th scope="col">City</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $fetch_customer_name; ?></td>
      <td><?php echo $fetch_customer_email; ?></td>
      <td><?php echo $fetch_customer_phone; ?></td>
      <td><?php echo $fetch_home_address; ?></td>
      <td><?php echo $fetch_home_postal; ?></td>
      <td><?php echo $fetch_home_state; ?></td>
      <td><?php echo $fetch_home_city; ?></td>
    </tr>
  </tbody>
</table>
  </body>
</html>
