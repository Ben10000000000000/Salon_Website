<?php
    $id = $_REQUEST["id"];
    
    include('config2.php');
    $query = "DELETE FROM `categories` WHERE id='$id'";
    $result = mysqli_query($conn,$query);
    if($result>0){
        
        echo "<script>window.location.assign('managecategory.php?msg=deletecategorysucessfully')</script>";
    }
    else{
        echo "<script>window.location.assign('managecategory.php?msg=Try again')</script>";
    
    }
?>