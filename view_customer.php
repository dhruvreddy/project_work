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
    <title>View Customer Admin Panel</title>
  </head>
  <body>
    <?php
          $sql="select * from `customer`";
          $result=mysqli_query($conn,$sql);
          ?>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
          </tr>
        </thead>
        <?php while ($row=mysqli_fetch_assoc($result)) {
          $customer_name_n= $row['customer_name'];
          $customer_email_e= $row['customer_email'];
          $customer_phone_p= $row['customer_phone'];
          ?>
          <tbody>
            <tr>
              <th scope="row"></th>
              <td><?php echo $customer_name_n;?></td>
              <td><?php echo $customer_email_e;?></td>
              <td><?php echo $customer_phone_p;?></td>
            </tr>
          </tbody>
          <?php
        } ?>
      </table>
      <a href="admin.php" class="nav-link text-light bg-info">Go back</a>
  </body>
</html>
