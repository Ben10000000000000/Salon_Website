<?php

include_once('admin_header.php');

?>
 <!-- <style>
    .container1{
      background-color:lightyellow;
        border:50px,solid,black;
    }
 </style> -->


 <!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
              <h2>Add Service</h2>
              <p>home <span class="ti-angle-double-right"></span>Add service</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
<br>

<div class="container container1">
    

<br>
<form method="post"  enctype="multipart/form-data">

<div class="form-group">
<label for="service"><b class="text-secondary"><b class="text-dark">NAME:</b></label>
<input type="text" class="form-control border-dark" id="service" name="service" requied>
</div>

<div class="form-group border-dark">
<label for=" categoryid"><b class="text-dark">Select Category: </b></label>

<select class="form-select mb-3"  name="category" id="select"  class="form-control "  required> 
<option value="" selected>choose category</option>
  <?php
                include('config2.php');
                $query = "SELECT * FROM `categories`";
                $result = mysqli_query($conn,$query);
                while($data =mysqli_fetch_array($result)){
                    ?>
                    <option value="<?php echo $data['name']; ?>"><?php echo $data['name']; ?></option>
                    

                    <?php
                }
            ?>
            </select>
            </div>


<div class="mt-3">
<label for="image"><b class="text-dark">IMAGE:</b></label>
<input type="file" class="form-control border-dark" id="image" name="image" >
</div>

<div class="form-group mt-5">
<label for="description"><b class="text-dark">DESCRIPTION:</b></label>
<textarea class="form-control border-dark" name="description1" id="description" type="text"  cols="30" rows="6" required></textarea>

</div>

              <button type="submit" class="btn btn-secondary px-2 py-2" name="Submit">ADD SERVICE</button>
              <button type="Reset" class="btn btn-secondary  px-4 py-2">Reset SERVICE</button>
</form>
<br>
</div>


<?php
    if(isset($_REQUEST['Submit'])){
        $servicename = $_REQUEST['service'];
        $fn = $_FILES["image"]["name"];

        $tmp_name = $_FILES["image"]["tmp_name"];
        $new_name = rand().$fn;

        $description = $_REQUEST['description1'];
        $category = $_REQUEST['category'];
        include('config2.php');
        move_uploaded_file($tmp_name,"img/photo/".$new_name);
        $query = "INSERT INTO `service_table`( `service_name`, `image`, `description`,`category_name`) VALUES ('$servicename','$new_name','$description','$category')";
        $result = mysqli_query($conn,$query);
        if($result>0){
                 echo "data inserted successfully";
               echo "<script>window.location.assign('addservice.php?msg=addservicesucessfully')</script>";
        }
        else{
                 echo "Try again";
                // echo "<script>window.location.assign('addservice.php?msg=Try Again')</script>";
        }
    }
?>

<br>














<?php
include_once('admin_footer.php');
?>











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
        if($result>0){
                // echo "data inserted successfully";
                echo "<script>window.location.assign('appointment.php?msg=addbookingsucessfully')</script>";
        }
        else{
                // echo "Try again";
                echo "<script>window.location.assign('appointment.php?msg=Try Again')</script>";
        }
    }
?>











<br>





<?php
include_once('footer.php');
?>









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
                            <p>home <span class="ti-angle-double-right"></span>Add category</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->





    <div class="container container1">
    

    <br>
    <form method="post"  enctype="multipart/form-data">
    
    <div class="form-group">
    <label for="category"><b class="text-secondary"><b class="text-dark">NAME:</b></label>
    <input type="text" class="form-control border-dark" id="category" name=" category" required>
    </div>
    
    
   
    
    
    <div class="mt-3">
    <label for="image"><b class="text-dark">IMAGE:</b></label>
    <input type="file" class="form-control border-dark" id="image" name="image" required>
    </div>
    
    <div class="form-group mt-5">
    <label for="description"><b class="text-secondary"><b class="text-dark">DESCRIPTION:</b></label>
    <textarea class="form-control border-dark " name="description1" id="description" type="text"  cols="30" rows="6" required></textarea>
    <!-- <input type="text" class="form-control" id="description" name="description1"> -->
    </div>
    
                  <button type="submit" class="btn btn-secondary px-2 py-2" name="Submit">ADD CATEGORY</button>
                  <button type="Reset" class="btn btn-secondary  px-4 py-2">Reset CATEGORY</button>
    </form>
    <br>
    </div>
    
    
    <?php
        if(isset($_REQUEST['Submit'])){
            $categoryname = $_REQUEST['category'];
            $fn = $_FILES["image"]["name"];
    
            $tmp_name = $_FILES["image"]["tmp_name"];
            $new_name = rand().$fn;
    
            $description = $_REQUEST['description1'];
            include('config2.php');
            move_uploaded_file($tmp_name,"img/photo/".$new_name);
            $query = "INSERT INTO `categories`( `name`, `image`, `description`) VALUES ('$categoryname','$new_name ','$description')";
            $result = mysqli_query($conn,$query);
            if($result>0){
                     echo "data inserted successfully";
                   echo "<script>window.location.assign('add_category.php?msg=addservicesucessfully')</script>";
            }
            else{
                     echo "Try again";
                     echo "<script>window.location.assign('add_category.php?msg=Try Again')</script>";
            }
        }
    ?>
    
    <br>








<?php
include_once('admin_footer.php');
?>