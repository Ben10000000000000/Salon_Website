<?php
    $id = $_REQUEST["id"];
    
    include('config2.php');
    $query = "DELETE FROM `register_table` WHERE id='$id'";
    $result = mysqli_query($conn,$query);
    if($result>0){
        
        echo "<script>window.location.assign('manageuser.php?msg=deleteusersuccessfully')</script>";
    }
    else{
        echo "<script>window.location.assign('manageuser.php?msg=Try again')</script>";
    
    }
?>