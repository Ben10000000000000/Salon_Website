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
              <h2>Manage Contact</h2>
              <p>home <span class="ti-angle-double-right"></span> Manage Contact</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- breadcrumb end-->
<br>

<div class="container container1">
    <div class="row mt-3">
        <!-- Display success or error message -->
        <?php
        if (isset($_GET['msg'])) {
            echo "<div id='messageBox' class='alert alert-success text-center'>{$_GET['msg']}</div>";
        }
        ?>

        <table class="table table-bordered border-dark">
            <tr class="text-center text-dark">
                <th>SRNO</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mob</th>
                <th>Password</th>
                <th>Delete</th>
            </tr>

            <?php
            $srno = 1;
            include('config2.php');
            $query = "SELECT * FROM `register_table`";
            $result = mysqli_query($conn, $query);
            while ($data = mysqli_fetch_array($result)) {
                ?>
                <tr class="text-center text-dark">
                    <td><?php echo $srno; ?></td>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['email']; ?></td>
                    <td><?php echo $data['mob']; ?></td>
                    <td><?php echo $data['password']; ?></td>
                    <td><a href="deleteuser.php?id=<?php echo $data['id']; ?>" class="btn btn-danger">Delete</a></td>
                </tr>
                <?php
                $srno++;
            }
            ?>
        </table>
    </div>
</div>
<br>

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
