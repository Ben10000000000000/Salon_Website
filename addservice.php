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
              <h2>Add Service</h2>
              <p>home <span class="ti-angle-double-right"></span> Add service</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- breadcrumb end -->

<br>

<div class="container container1">

    <?php
    // Display the success message if available
    if (isset($_GET['msg']) && $_GET['msg'] === 'addservicesuccess') {
        echo "<div id='messageBox' class='alert alert-success text-center'>Service successfully added!</div>";
    
    }
    ?>

    <br>
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="service"><b class="text-secondary"><b class="text-dark">NAME:</b></label>
            <input type="text" class="form-control border-dark" id="service" name="service" required>
        </div>

        <div class="form-group border-dark">
            <label for="categoryid"><b class="text-dark">Select Category: </b></label>
            <select class="form-select mb-3" name="category" id="select" class="form-control" required>
                <option value="" selected>Choose category</option>
                <?php
                include('config2.php');
                $query = "SELECT * FROM `categories`";
                $result = mysqli_query($conn, $query);
                while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <option value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?></option>
                    <?php
                }
                ?>
            </select>
        </div>

        <div class="mt-3">
            <label for="image"><b class="text-dark">IMAGE:</b></label>
            <input type="file" class="form-control border-dark" id="image" name="image">
        </div>

        <div class="form-group mt-5">
            <label for="description"><b class="text-dark">DESCRIPTION:</b></label>
            <textarea class="form-control border-dark" name="description1" id="description" type="text" cols="30" rows="6" required></textarea>
        </div>

        <button type="submit" class="btn btn-secondary px-2 py-2" name="Submit">ADD SERVICE</button>
        <button type="reset" class="btn btn-secondary px-4 py-2">Reset SERVICE</button>
    </form>
    <br>
</div>

<?php
if (isset($_REQUEST['Submit'])) {
    $servicename = $_REQUEST['service'];
    $fn = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];
    $new_name = rand() . $fn;
    $description = $_REQUEST['description1'];
    $category = $_REQUEST['category'];

    include('config2.php');
    move_uploaded_file($tmp_name, "img/photo/" . $new_name);
    $query = "INSERT INTO `service_table`(`service_name`, `image`, `description`, `category_name`) VALUES ('$servicename','$new_name','$description','$category')";
    $result = mysqli_query($conn, $query);

    if ($result > 0) {
        echo "<script>window.location.assign('addservice.php?msg=addservicesuccess');</script>";
    } else {
        echo '<div class="alert alert-danger text-center">Error: Unable to add service. Please try again.</div>';
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

<br>

<?php
include_once('admin_footer.php');
?>
