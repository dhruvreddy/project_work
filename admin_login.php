<?php

  include('connection.php');
  if (isset($_POST['button'])) {
    $admin_username=  $_POST['admin_username'];
    $admin_password=  $_POST['admin_password'];
      $sql=" select * from `admin` where `admin_username`='$admin_username' and `admin_password`='$admin_password'";
      $result=mysqli_query($conn,$sql);
      if (mysqli_num_rows($result)==1) {
        session_start();
        $_SESSION['is_logged']=$admin_username;
        header("location: admin.php");
      } else {
        echo "<script>alert('Incorrect Password')</script>";
      }
  }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <title>Admin Login</title>
  </head>
  <body>
    <form method="post">
    <div class="form-outline mb-4">
      <input type="text" id="admin_username" name="admin_username" class="form-control" placeholder="Username"/>
    </div>
    <div class="form-outline mb-4">
      <input type="password" id="admin_password" name="admin_password" class="form-control" placeholder="Password"/>
    </div>
    <button type="submit" name="button" class="btn btn-primary btn-block mb-4">Sign in</button>
    </form>
  </body>
</html>
