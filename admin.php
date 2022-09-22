<?php
  include("connection.php");
  session_start();
  if (!isset($_SESSION['is_logged'])) {
    header("location: admin_login.php");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <title>Admin DashBoard</title>
  </head>
  <body>
    <b class=""><a href="insert_product.php" class="nav-link text-light bg-info">Insert Products</a></b>
    <b class=""><a href="view_products.php" class="nav-link text-light bg-info">View Products</a></b>
    <b class=""><a href="view_customer.php" class="nav-link text-light bg-info">List Users</a></b>
    <form class="" method="post">
      <div class="text-center">
      <button name="logout" class="btn btn-primary">Log Out</button>
    </div>
    </form>

      <?php
        if(isset($_POST['logout'])) {
          session_destroy();
          header("location: admin_login.php");
        }?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
  </body>
