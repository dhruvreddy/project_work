<?php
  include('connection.php');
  session_start();
  if (!isset($_SESSION['is_logged'])) {
    header("location: admin_login.php");
  }
  if (isset($_POST['button'])) {
    $product_title=  $_POST['product_title'];
    $product_des=  $_POST['product_des'];
    $product_price=  $_POST['product_price'];
    $product_image=  $_POST['product_image'];
      $sql="  INSERT INTO `product` (product_title, product_des, product_price, product_image)
              VALUES ('$product_title','$product_des','$product_price','$product_image')";
      $result=mysqli_query($conn,$sql);
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <title>Insert Products Admin Panel</title>
  </head>
  <body>
      <h1>Insert Products Admin Panel</h1>
      <div class="">
        <form class="" method="post" enctype="multipart/form-data">
          <input type="text" name="product_title" placeholder="Product Title">
          <input type="text" name="product_des" placeholder="Product Description">
          <input type="text" name="product_price" placeholder="Product Price">
          <input type="text" name="product_image" placeholder="Product Image URL">
          <button type="submit" name="button">Submit</button>
        </form>
      </div>
      <div class="">
        <b class=""><a href="admin.php" class="nav-link text-light bg-info">Go back</a></b>
      </div>
  </body>
</html>
