
<?php
session_start();

if (!isset($_SESSION["email"])) {
    echo '<script>
         window.location.href = "register.php";
    
    </script>';
    exit();
}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hipstyle</title>
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
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/gijgo.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/all.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
     <style>
        .btn{
            margin:24px;
        }
    </style> 
</head>

<body>
     <!-- ::header part start:: -->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="home.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="about.php">About</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="category.php">Our Services</a>
                                </li>
    
                        
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle text-white" href="blog.php" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                        <a class="dropdown-item" href="team.php">team</a>
                                        <a class="dropdown-item" href="price.php">price</a>
                                        <a class="dropdown-item" href="seebookingdetail.php">View Appointment</a>
                                
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link text-white" href="contact.php">Contact</a>
                                </li>

                                
                               <?php 
                               if(isset($_SESSION["email"])){
                                    ?>
                                 <li class="nav-item">
                                <a  class="btn btn-danger" href="logout.php">Logout</a> 
                                </li>
                              <?php 
                               }
                              else{
                               ?>
                               <li class="nav-item">
                                <a  class="btn btn-info" href="register.php">SIGN-IN</a>
                                </li>
                                 <!-- <li class="nav-item">
                                <a  class="btn btn-danger" href="login.php">Login</a> 
                                </li> -->

                              <?php
                              }
                               
                               ?>


                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>



<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
              <h1 class="text-white">RELATED SERVICES</h1>
              <p>home <span class="ti-angle-double-right"></span>SERVICE</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->



 <!-- Service part start-->
 <section class="service_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-lg-6 col-sm-10">
                    <div class="section_tittle">
                        <img src="img/section_tittle_icon.png" alt="icon">
                        <h2>Service Expectation</h2>
                        <p>Good morning forth gathering doesn't god gathering man and had moveth there dry sixth
                            dominion
                            rule divided behold after had he did not move .</p>
                    </div>
                </div>
            </div>
            
<div class="row g-4 ms-2">
<?php

$category_name=$_REQUEST['category_name'];
include('config.php');
$query="SELECT * FROM `service_table` WHERE category_name='$category_name'";
$result= mysqli_query($conn,$query);


while($data = mysqli_fetch_array($result)){
    ?>

<div class="card shadow-lg p-2  mb-5 bg-body-tertiary rounded mx-3 mt-5"  style="width: 22rem;">
  <img src="./admin/img/photo/<?php echo $data['image'];?>" class="card-img-top" alt="..." height=300px>
  <div class="card-body">
    <h5 class="card-title"><?php echo $data['service_name'];?></h5>
    <p class="card-text"><?php echo $data['description'];?></p>
    <a href="appointment.php?service_name=<?php echo $data['service_name'];?>" class="btn btn-primary">BOOKING</a>
  </div>
</div>





<?php
    }
?>

</div>







        </div>
    </section>
    <!-- Service part end-->

    <!--::review_part start::-->
    <section class="review_part gray_bg section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="client_review_part owl-carousel">
                        <div class="client_review_single">
                            <img src="img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <div class="client_img">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text media-body">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <div class="client_img">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <div class="client_img">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <div class="client_img">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::review_part end::-->


    <?php

include_once('footer.php');


?>