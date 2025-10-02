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
                        <p>home <span class="ti-angle-double-right"></span> Add category</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<div class="container container1">
    <!-- Display success or error message -->
    <?php
    if (isset($_GET['msg'])) {
        echo "<div id='messageBox' class='alert alert-success text-center'>{$_GET['msg']}</div>";
    }
    ?>

    <div class="row mt-3">
        <table class="table table-bordered border-dark">
            <tr class="text-center text-dark">
                <th>SRNO</th>
                <th>Message</th>
                <th>Name</th>
                <th>Email</th>
                <th>MOB</th>
                <th>Delete</th>
            </tr>

            <?php
            $srno = 1;
            include('config2.php');
            $query = "SELECT * FROM `contact_table`";
            $result = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_array($result)) {
            ?>
                <tr class="text-center text-dark">
                    <td><?php echo $srno; ?></td>
                    <td><?php echo $data['Message']; ?></td>
                    <td><?php echo $data['Name']; ?></td>
                    <td><?php echo $data['Email']; ?></td>
                    <td><?php echo $data['MOB']; ?></td>
                    <td><a href="delete_contact.php?id=<?php echo $data['id']; ?>&msg=Contact deleted successfully!" class="btn btn-danger">Delete</a></td>
                </tr>
            <?php
                $srno++;
            }
            ?>
        </table>
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
