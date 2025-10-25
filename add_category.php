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
                        <h2>Add Category</h2>
                        <p>home <span class="ti-angle-double-right"></span> Add Category</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<div class="container container1">
    <br>
    
    <!-- Display success or error message -->
    <?php
    if (isset($_GET['msg'])) {
        echo "<div id='messageBox' class='alert alert-success'>{$_GET['msg']}</div>";
    }
    ?>
    
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="category"><b class="text-secondary text-dark">NAME:</b></label>
            <input type="text" class="form-control border-dark" id="category" name="category" required>
        </div>
        
        <div class="mt-3">
            <label for="image"><b class="text-dark">IMAGE:</b></label>
            <input type="file" class="form-control border-dark" id="image" name="image" required>
        </div>
        
        <div class="form-group mt-5">
            <label for="description"><b class="text-secondary text-dark">DESCRIPTION:</b></label>
            <textarea class="form-control border-dark" name="description1" id="description" cols="30" rows="6" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-secondary px-2 py-2" name="Submit">ADD CATEGORY</button>
        <button type="reset" class="btn btn-secondary px-4 py-2">Reset CATEGORY</button>
    </form>
    <br>
</div>

<?php
if (isset($_REQUEST['Submit'])) {
    $categoryname = $_REQUEST['category'];
    $fn = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $new_name = rand() . $fn;
    $description = $_REQUEST['description1'];
    
    include('config2.php');
    move_uploaded_file($tmp_name, "img/photo/" . $new_name);
    $query = "INSERT INTO `categories`(`name`, `image`, `description`) VALUES ('$categoryname','$new_name','$description')";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
        // Redirect with success message
        echo "<script>window.location.assign('add_category.php?msg=Category successfully added!')</script>";
    } else {
        // Redirect with error message
        echo "<script>window.location.assign('add_category.php?msg=Failed to add category. Please try again.')</script>";
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
include_once('admin_footer.php');
?>
