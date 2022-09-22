<?php

  include('connection.php');
  session_start();
  if (!isset($_SESSION['is_logged'])) {
    header("location: admin_login.php");
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <title>View Products Admin Panel</title>
  </head>
  <body>
    <?php
          $sql="select * from `product`";
          $result=mysqli_query($conn,$sql);
          ?>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Description</th>
            <th scope="col">Price</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <?php while ($row=mysqli_fetch_assoc($result)) {
          $image_title_1 = $row['product_title'];
          $image_des_1 = $row['product_des'];
          $image_price_1 = $row['product_price'];
          $image_image_1 = $row['product_image'];
          ?>
          <tbody>
            <tr>
              <th scope="row"></th>
              <td><?php echo $image_title_1;?></td>
              <td><?php echo $image_des_1;?></td>
              <td><?php echo $image_price_1;?></td>
              <td><img src="<?php echo $image_image_1?>" /></td>
            </tr>
          </tbody>
          <?php
        } ?>
      </table>
      <a href="admin.php" class="nav-link text-light bg-info">Go back</a>
  </body>
</html>
