<?php
include_once('header.php');

?>
    



    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>OUR SERVICES</h2>
                            <p>home <span class="ti-angle-double-right"></span>about us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


<section class="service_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-lg-6 col-sm-10">
                    <div class="section_tittle">
                        <img src="img/section_tittle_icon.png" alt="icon">
                        <h2>Service Expectation</h2>
                        <p>Good morning forth gathering doesn't god gathering man and had moveth there dry sixth
                            dominion
                            rule divided behold after had he did not move .</p>
                    </div>
                </div>
            </div>
            
<div class="row g-4 ms-2">
<?php
$sno=1;
include('config.php');
$query="SELECT * FROM `categories`";
$result= mysqli_query($conn,$query);


while($data = mysqli_fetch_array($result)){
    ?>


<div class="card shadow-lg p-2  mb-5 bg-body-tertiary rounded mx-3 mt-5"  style="width: 22rem;">
<img src="./admin/img/photo/<?php echo $data['image'];?>" class="card-img-top" alt="..." height=350px>
  <div class="card-body pt-3">
    <h5 class="card-title"><?php echo $data['name'];?></h5>
    <p class="card-text"><?php echo $data['description'];?></p>
    <a href="service.php?category_name=<?php echo $data['name'];?>"class="btn btn-primary mt-2">NOW MORE</a>
  </div>
</div>

<?php
    }
?>

</div>







        </div>
    </section>








<?php
include_once('footer.php');



?>