<?php
include('admin_header.php');
?>

<section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
              <h2>Admin Dashboard</h2>
              <p>home <span class="ti-angle-double-right"></span>Add service</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<br>
<br>
<div class="text-center"><h1><b class="text-dark">welcome to admin dashboard</b></h1>
<img src="img/admin-icon-trendy-design-style-isolated-white-background-vector-simple-modern-flat-symbol-web-site-mobile-logo-app-135742404.webp" alt="" height="300px" >

</div>
<?php
include('config2.php');
?>


<div class="container mt-5">
<div class="row">
  <div class="col-md-4">
    <div class="card bg-warning text-white mb-4">
      <div class="card-body">Total Category
     <?php
     $query="SELECT * FROM `categories`";
     $result=mysqli_query($conn,$query);
     if($query= mysqli_num_rows($result)){
     echo '<h4 class="mb-0 text-white">'.$query.'</h4>';
     }
     else{
      echo '<h4 class="mb-0"> NO DATA</h4>';
     }
     ?>
     </div>
      <div class="card-footer d-flex align-center justify-content-between">
        <a class="small text-white stretched-link" href="managecategory.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>

</div>
</div>
</div>

<div class="col-md-4">
    <div class="card bg-primary text-white mb-4">
      <div class="card-body">Total Sub Category
      <?php
     $query="SELECT * FROM `service_table`";
     $result=mysqli_query($conn,$query);
     if($query= mysqli_num_rows($result)){
     echo '<h4 class="mb-0 text-white">'.$query.'</h4>';
     }
     else{
      echo '<h4 class="mb-0"> NO DATA</h4>';
     }
     ?>
      </div>
      <div class="card-footer d-flex align-center justify-content-between">
        <a class="small text-white stretched-link" href="manageservice.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>

</div>
</div>
</div>

<div class="col-md-4">
    <div class="card bg-info text-white mb-4">
      <div class="card-body">Total Booking
      <?php
     $query="SELECT * FROM `appointment_table`";
     $result=mysqli_query($conn,$query);
     if($query= mysqli_num_rows($result)){
     echo '<h4 class="mb-0 text-white">'.$query.'</h4>';
     }
     else{
      echo '<h4 class="mb-0"> NO DATA</h4>';
     }
     ?>
      </div>
      <div class="card-footer d-flex align-center justify-content-between">
        <a class="small text-white stretched-link" href="managebooking.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
</div>
</div>
</div>
  </div>

  <div class="row mt-5">
  <div class="col-md-4">
    <div class="card bg-danger text-white mb-4">
      <div class="card-body">Total User
      <?php
     $query="SELECT * FROM `register_table`";
     $result=mysqli_query($conn,$query);
     if($query= mysqli_num_rows($result)){
     echo '<h4 class="mb-0 text-white">'.$query.'</h4>';
     }
     else{
      echo '<h4 class="mb-0"> NO DATA</h4>';
     }
     ?>
      </div>
      <div class="card-footer d-flex align-center justify-content-between">
        <a class="small text-white stretched-link" href="manageuser.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>

</div>
</div>
</div>

<div class="col-md-4">
    <div class="card bg-dark text-white mb-4">
      <div class="card-body">total Team Member
      <?php
     $query="SELECT * FROM `team_member`";
     $result=mysqli_query($conn,$query);
     if($query= mysqli_num_rows($result)){
     echo '<h4 class="mb-0 text-white">'.$query.'</h4>';
     }
     else{
      echo '<h4 class="mb-0"> NO DATA</h4>';
     }
     ?>
      </div>
      <div class="card-footer d-flex align-center justify-content-between">
        <a class="small text-white stretched-link" href="manageteammember.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>

</div>
</div>
</div>

<div class="col-md-4">
    <div class="card bg-secondary text-white mb-4">
      <div class="card-body">Total Contact
      <?php
     $query="SELECT * FROM `contact_table`";
     $result=mysqli_query($conn,$query);
     if($query= mysqli_num_rows($result)){
     echo '<h4 class="mb-0 text-white">'.$query.'</h4>';
     }
     else{
      echo '<h4 class="mb-0"> NO DATA</h4>';
     }
     ?>
      </div>
      <div class="card-footer d-flex align-center justify-content-between">
        <a class="small text-white stretched-link" href="managecontact.php">View Details</a>
        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
</div>
</div>
</div>
  

</div>


</div>



<br>
<br>
<br>




<?php

include('admin_footer.php');
?>