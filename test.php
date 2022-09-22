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
    <title></title>
  </head>
  <body>
    <!-- <div class="container">
  <h2>Profile</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Home Address</th>
        <th>Postal Code</th>
        <th>State</th>
        <th>City</th>
      </tr>
    </thead>
    <tbody>
      <tr>
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
</div> -->
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
    <!-- <form method="post">
      <input type="text" name="home_address" placeholder="Home Address"/>
      <input type="number" name="postal_code" placeholder="Postal Code"/>
      <input type="text" name="state" placeholder="State"/>
      <input type="text" name="city" placeholder="City"/>
      <button type="submit" name="button">Submit</button>
    </form> -->
  </body>
</html>
