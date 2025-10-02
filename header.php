<?php
session_start();
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
                        <a class="navbar-brand" href="home.php"> <img src="img/logo.png" alt="logo"> </a>
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
    <!-- Header part end-->

    <!-- banner part start-->

    <!-- banner part start-->