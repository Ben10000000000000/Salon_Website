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
              <h2>Manage Booking</h2>
              <p>home <span class="ti-angle-double-right"></span> Manage booking</p>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<!-- breadcrumb end-->
<br>

<div class="container-fluid">
    <!-- Display success or error message -->
    <?php
    if (isset($_GET['msg'])) {
        echo "<div id='messageBox' class='alert alert-success text-center'>{$_GET['msg']}</div>";
    }
    ?>

    <div class="row mt-3">
        <div class="col-md-12">
            <table class="table table-bordered border-dark w-100">
                <tr class="text-center text-dark">
                    <th>SRNO</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>MOB</th>
                    <th>DATE</th>
                    <th>SERVICE</th>
                    <th>TIMING</th>
                    <th>MESSAGE</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                <?php
                $sno = 1;
                include('config2.php');
                $query = "SELECT * FROM `appointment_table`";
                $result = mysqli_query($conn, $query);
                while ($data = mysqli_fetch_array($result)) {
                ?>
                    <tr class="text-center text-dark">
                        <td><?php echo $sno; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['mobile number']; ?></td>
                        <td><?php echo $data['date']; ?></td>
                        <td><?php echo $data['select_service']; ?></td>
                        <td><?php echo $data['select_time']; ?></td>
                        <td><?php echo $data['message']; ?></td>
                        <td><?php echo $data['status']; ?></td>

                        <td>
                            <?php
                            if ($data['status'] == "Pending") {
                            ?>
                                <a href="accept_booking.php?id=<?php echo $data['id']; ?>&status=Accept" class="btn btn-success">Accept</a>
                                <a href="decline_booking.php?id=<?php echo $data['id']; ?>&status=Decline" class="btn btn-danger">Decline</a>
                            <?php
                            } else {
                                echo "-";
                            }
                            ?>
                        </td>
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
