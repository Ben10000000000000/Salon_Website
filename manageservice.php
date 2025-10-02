<?php
include_once('admin_header.php');
?>
<style>
    .table td, .table th {
        border-left: 1px solid black;
        border-right: 1px solid black;
    }
    .table-bordered {
        border: none;
    }
</style>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Manage Service</h2>
                        <p>home <span class="ti-angle-double-right"></span> Manage Service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<div class="container-fluid">
    <!-- Display success or error message -->
    <?php
    if (isset($_GET['msg'])) {
        echo "<div id='messageBox' class='alert alert-success text-center'>{$_GET['msg']}</div>";
    }
    ?>

    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table table-bordered border-dark">
                <tr class="text-center text-dark">
                    <th>SRNO</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                <?php
                $sno = 1;
                include('config2.php');
                $query = "SELECT * FROM `service_table`";
                $result = mysqli_query($conn, $query);
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr class="text-center text-dark">
                        <td><?php echo $sno; ?></td>
                        <td><img src="./img/photo/<?php echo $data['image']; ?>" alt="" height="100px"></td>
                        <td><?php echo $data['service_name']; ?></td>
                        <td><?php echo $data['description']; ?></td>
                        <td><?php echo $data['category_name']; ?></td>
                        <td><a href="update_service.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a></td>
                        <td><a href="delete_service.php?id=<?php echo $data["id"]; ?>&msg=Service deleted successfully!" class="btn btn-danger">Delete</a></td>
                    </tr>
                <?php
                    $sno++;
                }
                ?>
            </table>
        </div>
    </div>
</div>

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
