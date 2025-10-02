
<?php
include_once('header.php');
?>

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
              <h2>Book Appointment</h2>
              <p>home <span class="ti-angle-double-right"></span>Appointment</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
<br>

<!--::regervation_part start::-->

<div class="container container1 ">
<?php
    if (isset($_GET['msg'])) {
        echo "<div id='messageBox' class='alert alert-success'>{$_GET['msg']}</div>";
    }
    ?>

    <div class="row">
        <div class="col-md text-center"><h1><u class="text-dark">Book Appointment</u></h1></div>
    </div>
    
    <div class="row mt-5">
        <div class="col-md-6 col1">
            <img src="img/about_us_3.png" alt="">
        </div>

        <div class="col-md">
            <form method="post">
                <div class="form-group">
                    <label for="name">NAME:</label>
                    <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="mob">MOB:</label>
                    <input type="tel" pattern="[0-9]{10}"  id="mob" name="mob" placeholder="Enter your mobile number" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="date">date:</label>
                    <input type="date" id="date" name="date" placeholder="enter the todays date" class="form-control" required>
                </div>

    <div class="form-group">
                    <label for="time">Timing:</label>
                  <input type="time" class="form-control " name="time" id="time" required>
</div>
                
<div class="form-group mt-3">

<textarea class="form-control " name="message" id="message" placeholder='Enter Message'  cols="30" rows="3" required></textarea>
</div>



              <button type="submit" class="btn btn-danger px-2 py-2" name="Submit">Book Appointment</button>
              <button type="reset" class="btn btn-danger  px-4 py-2">Reset Appointment</button>
                 
              
</div>




            </form>

        </div>
        <div class="row">
            <div class="col-md-9"></div>
            <div class="col-md">
    
        <a href="seebookingdetail.php" class="btn btn-danger  mt-5 mb-4 ">SEE Booking </a>
</div>

</div>
</div>

    




    <!--::regervation_part end::-->


    <?php
    if(isset($_REQUEST['Submit'])){
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $mob = $_REQUEST['mob'];
        $date = $_REQUEST['date'];
        $service = $_REQUEST['service_name'];
        $timing = $_REQUEST['time'];
        $message = $_REQUEST['message'];
         $user_id = $_SESSION['id'];
        

        include('config.php');
        $query = "INSERT INTO `appointment_table`( `name`, `email`, `mobile number`, `date`, `select_service`, `select_time`, `message`, `user_id`) VALUES ('$name','$email','$mob','$date','$service','$timing','$message','$user_id')";
        $result = mysqli_query($conn,$query);
        if ($result) {
            // Redirect with success message
            echo "<script>window.location.assign('appointment.php?msg=thankyouforbooking ')</script>";
        } else {
            // Redirect with error message
            echo "<script>window.location.assign('appointment.php?msg=youmakeabigmistake. Please try again.')</script>";
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
include_once('footer.php');
?>