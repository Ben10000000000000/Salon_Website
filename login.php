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

    /* .alert {
        display: none;
    } */
</style>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>LOGIN</h2>
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
        <div class="col-md-4 bg-white"></div>
        <div class="col-md text-center">
            <h1 class="text-white">LOGIN FORM</h1>
        </div>
        <div class="col-md-4 bg-white"></div>
    </div>

    <div class="row">
        <div class="col text-center">
            <img src="img/5087579.png" alt="" width="200px" height="200px">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form method="post">
                <div class="form-group">
                    <label for="email"><b class="text-dark">EMAIL:</b></label>
                    <input type="email" name="email" id="email" class="form-control border-dark" placeholder="Enter email address" required>
                </div>

                <div class="form-group">
                    <label for="password"><b class="text-dark">PASSWORD:</b></label>
                    <input type="password" name="password" id="password" class="form-control border-dark" placeholder="Enter password" required>
                    <input type="checkbox" id="togglePassword"> Show Password
                </div>

                <div class="design">
                    <button type="submit" name="Submit" class="btn btn-danger form-control mb-3">LOGIN</button>
                    <br>
                    <a href="register.php" class="btn btn-primary form-control">REGISTRATION</a>
                </div>
            </form>
        </div>
    </div>
    <br>

</div>

<?php
if (isset($_REQUEST['Submit'])) {
    $email = $_REQUEST["email"];
    $password = md5($_REQUEST["password"]);
    include('config.php');
    $query = "SELECT * FROM `register_table` WHERE `email`='$email'";
    $result = mysqli_query($conn, $query);
    if ($data = mysqli_fetch_array($result)) {
        if ($password == $data['password']) {
            $_SESSION["email"] = $data["email"];
            $_SESSION["id"] = $data["id"];
            echo "<script>window.location.assign('home.php?msg=Login successful!')</script>";
        } else {
            echo "<script>window.location.assign('login.php?msg=Incorrect password. Please try again.')</script>";
        }
    } else {
        echo "<script>window.location.assign('login.php?msg=Email not found. Please try again.')</script>";
    }
}
?>

<script>
    // Automatically hide the message after 3 seconds
    setTimeout(() => {
        const messageBox = document.getElementById('messageBox');
        if (messageBox) {
            messageBox.style.display = 'none';
        }
    }, 3000);
</script>

<?php
include_once('footer.php');
?>
