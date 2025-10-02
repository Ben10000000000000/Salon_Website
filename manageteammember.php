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
                        <h2>Manage Team Member</h2>
                        <p>home <span class="ti-angle-double-right"></span> Add category</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->

<div class="containerfluid mx-5">
    <div class="row mt-3">
        <div class="col-md-12">
            <!-- Display success or error message -->
            <?php
            if (isset($_GET['msg'])) {
                echo "<div id='messageBox' class='alert alert-success text-center'>{$_GET['msg']}</div>";
            }
            ?>

            <table class="table table-bordered border-dark w-100">
                <tr class="text-dark">
                    <th>SRNO</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Mobile Number</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Profession</th>
                    <th>Joining Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                <?php
                $srno = 1;
                include('config2.php');
                $query = "SELECT * FROM `team_member`";
                $result = mysqli_query($conn, $query);
                while ($data = mysqli_fetch_array($result)) {
                    ?>
                    <tr class="text-center text-dark">
                        <td><?php echo $srno; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><img src="./img/photo/<?php echo $data['image']; ?>" height="100px" width="100px"> </td>
                        <td><?php echo $data['mobile number']; ?></td>
                        <td><?php echo $data['address']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['profession']; ?></td>
                        <td><?php echo $data['joining date']; ?></td>
                        <td><a href="update_teammemberdata.php?id=<?php echo $data['id']; ?>" class="btn btn-success">Edit</a></td>
                        <td><a href="deleteteammember.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php
                    $srno++;
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

<?php
include_once('admin_footer.php');
?>
