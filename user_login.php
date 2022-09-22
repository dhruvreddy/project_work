<?php

  include('admin/connection.php');
  if (isset($_POST['button'])) {
    $customer_email=  $_POST['customer_email'];
    $customer_password=  $_POST['customer_password'];
      $sql=" select * from `customer` where `customer_email`='$customer_email' and `customer_password`='$customer_password'";
      $result=mysqli_query($conn,$sql);
      $count=mysqli_num_rows($result);
      $row=mysqli_fetch_assoc($result);
      if ($count>0) {
        session_start();
        $_SESSION['is_logged']=$customer_email;
        //echo $_SESSION['is_logged'];
        header("location: account.php");
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
    <title>Login</title>
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
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0"><img height="55" src="images/logo.png"/></span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="email" id="customer_email" name="customer_email" class="form-control form-control-lg" placeholder="Email"/>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="customer_password" name="customer_password" class="form-control form-control-lg" placeholder="Password"/>
                  </div>

                  <div class="pt-1 mb-4">
                    <button class="btn btn-dark btn-lg btn-block" type="submit" name="button">Login</button>
                  </div>

                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="user_signup.php"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
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
