<?php
$conn = mysqli_connect("localhost","root","","service");
if(!$conn){
  echo mysqli_error($conn);
}
?>