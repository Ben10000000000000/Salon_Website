<?php
include_once('admin_header.php');
?>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Team Member</h2>
                        <p>home <span class="ti-angle-double-right"></span> Add category</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->
<div class="container">
    <div class="row">
        <div class="col-md">
            <!-- Display success or error message -->
            <?php
            if (isset($_GET['msg'])) {
                echo "<div id='messageBox' class='alert alert-success text-center'>{$_GET['msg']}</div>";
            }
            ?>

            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name"><b class="text-dark">NAME</b></label>
                    <input type="text" name="name" id="name" class="form-control border-dark" required>
                </div>

                <div class="form-group">
                    <label for="image"><b class="text-dark">IMAGE</b></label>
                    <input type="file" name="image" id="image" class="form-control border-dark" required>
                </div>

                <div class="form-group">
                    <label for="mob"><b class="text-dark">MOBILE NUMBER</b></label>
                    <input class="form-control border-dark" name="mob" id="number" type="tel" pattern="[0-9]{10}" required>
                </div>

                <div class="form-group">
                    <label for="address"><b class="text-dark">ADDRESS</b></label>
                    <input type="text" name="address" id="address" class="form-control border-dark" required>
                </div>

                <div class="form-group">
                    <label for="email"><b class="text-dark">EMAIL</b></label>
                    <input type="email" name="email" id="email" class="form-control border-dark" required>
                </div>

                <div class="form-group">
                    <label for="profession"><b class="text-dark">PROFESSION</b></label>
                    <input type="text" name="profession" id="profession" class="form-control border-dark" required>
                </div>

                <div class="form-group">
                    <label for="date"><b class="text-dark">JOINING DATE</b></label>
                    <input type="date" name="date" id="date" class="form-control border-dark" required>
                </div>

                <button type="submit" class="btn btn-secondary px-4 py-3 mx-3" name="Submit">Submit</button>
                <button type="reset" class="btn btn-secondary px-4 py-3">Reset</button>
            </form>
        </div>
    </div>
</div>
<br>

<?php
if (isset($_REQUEST['Submit'])) {
    $name = $_REQUEST['name'];
    $fn = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $new_name = rand() . $fn;
    $mobilenumber = $_REQUEST['mob'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];
    $profession = $_REQUEST['profession'];
    $date = $_REQUEST['date'];

    include('config2.php');
    move_uploaded_file($tmp_name, "./img/photo/" . $new_name);
    $query = "INSERT INTO `team_member`(`name`, `image`, `mobile number`, `address`, `email`, `profession`, `joining date`) 
              VALUES ('$name', '$new_name', '$mobilenumber', '$address', '$email', '$profession', '$date')";

    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<script>window.location.assign('teammember.php?msg=Team member added successfully!')</script>";
    } else {
        echo "<script>window.location.assign('teammember.php?msg=Error! Please try again.')</script>";
    }
}
?>

<?php
include_once('admin_footer.php');
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
