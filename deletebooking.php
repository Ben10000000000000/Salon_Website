<?php
    $id = $_REQUEST["id"];
    
    include('config2.php');
    $query = "DELETE FROM `appointment_table` WHERE id='$id'";
    $result = mysqli_query($conn,$query);
    if($result>0){
        
        echo "<script>window.location.assign('managebooking.php?msg=deletebookingsucessfully')</script>";
    }
    else{
        echo "<script>window.location.assign('managebooking.php?msg=Try again')</script>";
    
    }
?>