<?php

  include('admin/connection.php');
  if(isset($_POST['button'])) {
    $customer_name=  $_POST['customer_name'];
    $customer_email=  $_POST['customer_email'];
    $customer_password=  $_POST['customer_password'];
    $customer_phone=  $_POST['customer_phone'];
    $sql="  INSERT INTO `customer` (customer_name, customer_email, customer_password, customer_phone)
            VALUES ('$customer_name','$customer_email','$customer_password','$customer_phone')";
      $result=mysqli_query($conn,$sql);
      if ($result) {
        header("location: user_login.php");
      }
      // if (mysqli_num_rows($result)==1) {
      //   session_start();
      //   $_SESSION['is_logged']=$_username;
      //   header("location: admin.php");
      // } else {
      //   echo "<script>alert('Incorrect Password')</script>";
      // }
   }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <title>Signup</title>
  </head>
  <body>
    <section class="vh-100" style="background-color: #D3D3D3;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="images/girl_mask.jpg"
                alt="login form" height="85px" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0"><img src="images/logo.png" height="55"/></span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign Up</h5>

                  <div class="form-outline mb-4">
                    <input type="text" id="customer_name" name="customer_name" class="form-control form-control-lg" placeholder="Name"/>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" id="customer_email" name="customer_email" class="form-control form-control-lg" placeholder="Email"/>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="customer_password" name="customer_password" class="form-control form-control-lg" placeholder="Password"/>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="number" id="customer_phone" name="customer_phone" class="form-control form-control-lg" placeholder="Phone Number"/>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="button">Sign Up</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Already have an account? <a href="user_login.php"
                      style="color: #393f81;">Login here</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  </body>
</html>
