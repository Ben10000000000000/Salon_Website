<?php
session_start();
?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ADMIN PANEEL</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
  <style>  
    .container1{
        border:10px,solid,black;
    }
    .design{
     padding-right:400px;
     padding-left:400px;
    }
</style>

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
              <h2>Admin Login</h2>
              <p>home <span class="ti-angle-double-right"></span>Add service</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <div class="container container1">

<div class="row bg-dark">
    <div class="col-md-4 bg-white"></div>
   <div class="col-md text-center">
    <h1 class="text-white">LOGIN FORM</h1>
    </div>
    <div class="col-md-4 bg-white"></div>
    </div>

 <div class="row mt-3">
    <div class="col text-center">
        <img src="img/images (1).png" alt="" width="200px" height="200px">
    </div> 
  </div>

<div class="row">
    <div class="col">
<form method="post">
<div class="form-group">
<label for="email"><b class=text-dark>EMAIL:</b></label>
<input type="email" name="email" id="email" class="form-control border-dark" placeholder="enter email address" required>
</div>

<div class="form-group">
<label for="password"><b class=text-dark>PASSWORD:</b></label>
<input type="password" name="password" id="password" class="form-control border-dark" placeholder="enter password" required>
<input type="checkbox" id="togglePassword"> Show Password
</div>
<div  class="design">
<button type="submit" name="Submit" class="btn btn-danger form-control">LOGIN</button>

</div>

</div>
</div>
<br>
</form>
</div>
<br>


<?php
    if(isset($_REQUEST['Submit'])){
        $email = $_REQUEST["email"];
        $password = md5($_REQUEST["password"]);     
        include('config2.php');
        $query = "select * from `admin` where `email`='$email'";
        $result = mysqli_query($conn,$query);
        if($data =  mysqli_fetch_array($result)){
            // print_r($data);
              if($password == $data['password']){
                $_SESSION["email"] = $data["email"];
 
                echo "<script>window.location.assign('dashboard.php?msg=loginsucessfully')</script>";
                // create and store
              }
              else{
                echo "<script>window.location.assign('login2.php?msg=incorrectpassoword')</script>";
              }
        }
        else{
            echo "<script>window.location.assign('login2.php?msg=tryagin')</script>";
               
        }
    }
?>









  <?php

include_once('admin_footer.php');
?>