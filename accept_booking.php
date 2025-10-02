<?php
$id = $_REQUEST["id"];
$status = $_REQUEST["status"];
include("config2.php");
$query="UPDATE `appointment_table` SET `id`='$id ',`status`='$status' WHERE id='$id'";
$result = mysqli_query($conn,$query);
 
if($result>0){
                    
    echo "<script>window.location.assign('managebooking.php?msg=youacceptthebooking')</script>";
}
else{
     
     echo "<script>window.location.assign('managebooking.php?msg=yourbookingdecline')</script>";
}

?>

