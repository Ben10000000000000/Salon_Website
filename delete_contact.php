<?php
    $id = $_REQUEST["id"];
    
    include('config2.php');
    $query = "DELETE FROM `contact_table` WHERE id='$id'";
    $result = mysqli_query($conn,$query);
    if($result>0){
        
        echo "<script>window.location.assign('managecontact.php?msg=deletecontactsucessfully')</script>";
    }
    else{
        echo "<script>window.location.assign('managecontact.php?msg=Try again')</script>";
    
    }
?>