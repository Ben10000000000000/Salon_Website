<?php
    $id = $_REQUEST["id"];
    
    include('config2.php');
    $query = "DELETE FROM `service_table` WHERE id='$id'";
    $result = mysqli_query($conn,$query);
    if($result>0){
        
        echo "<script>window.location.assign('manageservice.php?msg=deleteservicesuccessgfully')</script>";
    }
    else{
        echo "<script>window.location.assign('manageservice.php?msg=Try again')</script>";
    
    }
?>