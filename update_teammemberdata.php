<?php

include_once('admin_header.php');
?>

<?php
$id=$_REQUEST['id'];
include('config2.php');
$query="SELECT * FROM `team_member` WHERE id='$id'";
$result=mysqli_query($conn,$query);
if($data=mysqli_fetch_array($result)){
}

?>
<!-- breadcrumb start-->
 <section class="breadcrumb breadcrumb_bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="breadcrumb_iner text-center">
            <div class="breadcrumb_iner_item">
              <h2>Manage Booking</h2>
              <p>home <span class="ti-angle-double-right"></span>Manage booking</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->
<br>

<div class="container">
    <div class="row">
    <div class="col">
<form method="post" enctype="multipart/form-data" >
    <input type="hidden" value="<?php echo $data["id"];?>" name="id">
    <input type="hidden" value="<?php echo $data["image"];  ?>" name="olding">
    <img src="img/photo/<?php echo $data["image"]; ?>" height="100px" width="100px">

<div class="form-group">
<label for="name"><b class="text-dark">NAME</b></label>
<input type="text" name="name" id="name" class="form-control" value="<?php echo $data['name'];?>" required>
</div>

<div class="form-group">
<label for="image"><b class="text-dark">IMAGE</b></label>
<input type="file" name="image" id="image" class="form-control" value="<?php echo $data['image'];?>">
</div>

<div class="form-group">
  <label for="mob"><b class="text-dark">MOB:</b></label>
  <input class="form-control" name="mob" id="number" type="number" placeholder='Enter your Number' value="<?php echo $data["mobile number"];?>" >
  </div>



<div class="form-group">
<label for="address"><b class="text-dark">ADDRESS</b></label>
<input type="text" name="address" id="address" class="form-control" value="<?php echo $data['address'];?>" required>
</div>

<div class="form-group">
<label for="email"><b class="text-dark">EMAIL</b></label>
<input type="email" name="email" id="email" class="form-control" value="<?php echo $data['email'];?>" required>
</div>

<div class="form-group">
<label for="profession"><b class="text-dark">PROFESSION</b></label>
<input type="text" name="profession" id="profession" class="form-control" value="<?php echo $data['profession'];?>" required>
</div>

<div class="form-group">
<label for="date"><b class="text-dark">JOINING DATE</b></label>
<input type="date" name="date" id="date" class="form-control" value="<?php echo $data['joining date'];?>" required>
</div>

<button  type="submit" class="btn  btn-secondary px-4 py-3 mx-3" name="Submit">Submit</button>
<button type="submit" class="btn  btn-secondary px-4 py-3">Reset</button>
</form>
         </div>
    </div>
</div>
<br>


<?php
        if(isset($_REQUEST['Submit'])){
          include('config2.php');
           $id = $_REQUEST["id"];
            $name = $_REQUEST["name"];
            $mobilenumber=$_REQUEST['mob'];
            $address=$_REQUEST['address'];
            $email=$_REQUEST['email'];
            $profession=$_REQUEST['profession'];
            $date=$_REQUEST['date'];
            if($_FILES["image"]["name"]){
              $fn = $_FILES["image"]["name"];
              $tmp_name = $_FILES["image"]["tmp_name"];
              $new_name = rand().$fn;
              move_uploaded_file($tmp_name,"img/photo/".$new_name);
          }
          else{
              $new_name = $_REQUEST["olding"];
          }
           
            $query = "UPDATE `team_member` SET `name`='$name',`image`='$new_name',`mobile number`='$mobilenumber',`address`='$address',`email`='$email',`profession`='$profession',`joining date`='$date' WHERE id='$id'";
            $result = mysqli_query($conn,$query);
            if($result>0){
                    
                   echo "<script>window.location.assign('manageteammember.php?msg=dataupdatesucessfully')</script>";
            }
            else{
                    
                    echo "<script>window.location.assign('manageteammember.php?msg=Try Again')</script>";
            }
        }
    ?>
    
    <br>

    
    
    



















  <?php

include_once('admin_footer.php');


?>