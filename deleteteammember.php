
<?php
    $id = $_REQUEST["id"];
    
    include('config2.php');
    $query = "DELETE FROM `team_member` WHERE id='$id'";
    $result = mysqli_query($conn,$query);
    if($result>0){
        
        echo "<script>window.location.assign('manageteammember.php?msg=deletedetailsucessfully')</script>";
    }
    else{
        echo "<script>window.location.assign('manageteammember.php?msg=Try again')</script>";
    
    }
?>