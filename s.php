<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container">


<form method="post" >

<div class="form-group">
<label for="servicname">servicename:-</label>
<input type="text" class="form-control" id="servicname" name="service">
</div>


<div class="form-group">
<label for="description">description:-</label>
<input type="text" class="form-control" id="description" name="description1">
</div>

<button type="submit" name="Submit">Submit</button>
<button type="reset" >Reset</button>
</form>

</div>

<div class="container ">
     <div class="row mt-3">
                    <table class="table">
    <tr class="text-center  text-white">
        <th>SRNO</th>
        <th>SERVICE NAME </th>
        <th>DESCRIPTION</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    

    <?php
$sno=1;
include('stable.php');
$query="SELECT * FROM `service_table`";
$result= mysqli_query($conn,$query);
while($data = mysqli_fetch_array($result)){
    ?>
    <tr class="text-center text-white ">
        <td><?php echo $sno;?></td>
        <td><?php echo $data['service_name'];?></td>
        <td><?php echo $data['description'];?></td>
        <td><a href="" class="btn btn-warning">Edit</a></td>
        <td><a href="" class="btn btn-danger">Delete</a></td>
    </tr>
<?php
    $sno++;
    }
?>

                  </table>
         </div>
</div>
















<?php
    if(isset($_REQUEST['Submit'])){
        $servicename = $_REQUEST['service'];
        $descriptiontittle = $_REQUEST['description1'];
        include('stable.php');
        $query = "INSERT INTO `service_table`(`service_name`, `description`) VALUES ('$servicename','$descriptiontittle')";
        $result = mysqli_query($conn,$query);
        if($result>0){
                echo "data inserted successfully";
        }
        else{
                echo "Try again";
        }
    }
?>

<div class="row g-4 ms-2">
<?php
$sno=1;
include('stable.php');
$query="SELECT * FROM `service_table`";
$result= mysqli_query($conn,$query);


while($data = mysqli_fetch_array($result)){
    ?>


<div class="card ms-3 " style="width: 18rem;">
  <img src="img/offer_img_2.png" class="card-img-top mt-2" alt="...">
  <div class="card-body pt-3">
    <h5 class="card-title"><?php echo $data['service_name'];?></h5>
    <p class="card-text"><?php echo $data['description'];?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>






<?php
    }
?>

</div>





























</body>
</html>


