<?php
include_once('header.php');
?>

<style>
    .container1 {
        border: 10px solid black;
    }

    .design {
        padding-top: 20px;
        padding-bottom: 20px;
        padding-right: 400px;
        padding-left: 400px;
    }

    .alert {
        display: block;
    }

    .alert-hidden {
        display: none;
    }
</style>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>SIGN-IN</h2>
                        <p>home <span class="ti-angle-double-right"></span>about us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<br>
<div class="container container1">

    <!-- Success/Error Message Display -->
    <?php
    if (isset($_GET['msg'])) {
        echo "<div id='messageBox' class='alert alert-success text-center'>{$_GET['msg']}</div>";
    }
    ?>
    
    <div class="row bg-dark">
        <div class="col-md-3 bg-white"></div>
        <div class="col-md text-center">
            <h1 class="text-white">REGISTERATION FORM</h1>
        </div>
        <div class="col-md-3 bg-white"></div>
    </div>
    <br>

    <div class="row">
        <div class="col text-center">
            <img src="img/images.png" alt="" width="100px" height="100px">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form method="post">

                <div class="form-group">
                    <label for="name"><b class="text-dark">NAME:</b></label>
                    <input type="text" name="name" id="name" class="form-control border-dark" placeholder="enter full name " required>
                </div>

                <div class="form-group">
                    <label for="email"><b class="text-dark">EMAIL:</b></label>
                    <input type="email" name="email" id="email" class="form-control border-dark" placeholder="enter email address" required>
                </div>

                <div class="form-group">
                    <label for="mob"><b class="text-dark">MOB:</b></label>
                    <input type="number" name="mob" id="mob" class="form-control border-dark" placeholder="enter phone number" required>
                </div>

                <div class="form-group">
                    <label for="password"><b class="text-dark">PASSWORD:</b></label>
                    <input type="password" name="password" id="password" class="form-control border-dark" placeholder="enter password" required>
                    <input type="checkbox" id="togglePassword"> Show Password
                </div>

                <div class="design">
                    <button type="submit" name="Submit" class="btn btn-danger form-control mb-3">REGISTER</button>
                    <br>
                    <a href="login.php" class="btn btn-primary form-control">Login</a>
                </div>

            </form>
        </div>
    </div>
    <br>

</div>

<?php

include('config.php');
if (isset($_REQUEST['Submit'])) {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $mob = $_REQUEST['mob'];
    $password = md5($_REQUEST['password']);
    $dup_email = mysqli_query($conn, "SELECT * FROM `register_table` WHERE email='$email'");
    if (mysqli_num_rows($dup_email)) {
        echo "<script>window.location.assign('register.php?msg=Email already exists')</script>";
    } else {
        $query = "INSERT INTO `register_table`(`name`, `email`, `mob`, `password`) VALUES ('$name','$email','$mob','$password')";
        $result = mysqli_query($conn, $query);
        if ($result > 0) {
            $email = $_REQUEST["email"];
            $password = md5($_REQUEST["password"]);
            include('config.php');
            $query = "SELECT * FROM `register_table` WHERE `email`='$email'";
            $result = mysqli_query($conn, $query);
            if ($data = mysqli_fetch_array($result)) {
                if ($password == $data['password']) {
                    $_SESSION["email"] = $data["email"];
                    $_SESSION["id"] = $data["id"];
                    echo "<script>window.location.assign('home.php?msg=registersuccessful!')</script>";
                } else {
                    echo "<script>window.location.assign('login.php?msg=Incorrect password')</script>";
                }
            } else {
                echo "<script>window.location.assign('login.php?msg=Please try again')</script>";
            }
        }
    }
}

?>

<script>
    // Wait for the page to fully load before attempting to hide the message
    window.onload = function () {
        setTimeout(() => {
            const messageBox = document.getElementById('messageBox');
            if (messageBox) {
                messageBox.classList.add('alert-hidden');
            }
        }, 3000); // Hide message after 3 seconds
    };
</script>

<?php
include_once('footer.php');
?>
