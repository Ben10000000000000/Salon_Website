<?php
include_once('admin_header.php');
?>

<?php
$id=$_REQUEST['id'];
include('config2.php');
$query="SELECT * FROM `service_table` WHERE id='$id'";
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
<div class="col-md">
    <form method="post"  enctype="multipart/form-data">

    <input type="hidden" value="<?php echo $data["id"];?>" name="id">
    <input type="hidden" value="<?php echo $data["image"];  ?>" name="olding">
    <img src="img/photo/<?php echo $data["image"]; ?>" height="100px" width="100px">
    
    <div class="form-group">
    <label for="service"><b class="text-secondary">NAME:</b></label>
    <input type="text" class="form-control" id="service" name="service" value="<?php echo $data['service_name'];?>"  required>
    </div>


    <div class="mt-3">
    <label for="image">IMAGE:</label>
    <input type="file" class="form-control" id="image" name="image" value="<?php echo $data['image'];?>">
    
    </div>
    
    <div class="form-group mt-5">
    <label for="description"><b class="text-secondary">DESCRIPTION:</b></label>
    <textarea class="form-control " name="description1" id="description" type="text"  cols="30" rows="6" required><?php echo $data["description"];?></textarea>
    </div>
    
                  <button type="submit" class="btn btn-secondary px-2 py-2" name="Submit">UPDATESERVICE</button>
                  <button type="Reset" class="btn btn-secondary  px-4 py-2">RESETSERVICE</button>
    </form>
    <br>
          </div>
     </div>
</div>
    
    
    <?php
        if(isset($_REQUEST['Submit'])){
          include('config2.php');
           $id = $_REQUEST["id"];
            $servicename = $_REQUEST['service'];
            $description = $_REQUEST['description1'];
            


            if($_FILES["image"]["name"]){
              $fn = $_FILES["image"]["name"];
              $tmp_name = $_FILES["image"]["tmp_name"];
              $new_name = rand().$fn;
              move_uploaded_file($tmp_name,"img/photo/".$new_name);
          }
          else{
              $new_name = $_REQUEST["olding"];
          }
           
            $query = "UPDATE `service_table` SET `service_name`='$servicename ',`image`='$new_name',`description`='$description' WHERE id='$id'";
            $result = mysqli_query($conn,$query);
            if($result>0){
                    
                   echo "<script>window.location.assign('manageservice.php?msg=updateservicesucessfully')</script>";
            }
            else{
                    
                    echo "<script>window.location.assign('manageservice.php?msg=Try Again')</script>";
            }
        }
    ?>
    
    <br>
<?php
include_once('admin_footer.php');
?> 