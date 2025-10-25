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
                            <h2>Team Member</h2>
                            <p>home <span class="ti-angle-double-right"></span>Team</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    
    <!-- breadcrumb start-->
     <div class="container">
        <div class="row mt-3">
            <div class="col text-center">
            <img src="img/section_tittle_icon.png" alt="icon">
            </div>
</div>
        <div class="row mt-3">
        <div class="col text-center">
        <h2>Meet Our Artist</h2>
</div>
</div>
<div class="row mt-3">
<div class="col text-center">
<p>Start your day with a fresh look. Experience the confidence of a perfect cut at our men's salon. From classic styles to modern trends, our expert barbers ensure you leave looking your best. Step in, relax, and enjoy a grooming experience tailored just for you .</p>
        </div>
        </div>

<div class="row">
           
<?php
include('config.php');
$query="SELECT * FROM `team_member`";
$result= mysqli_query($conn,$query);


while($data = mysqli_fetch_array($result)){
    ?>
<div class="card shadow-lg p-2  mb-5 bg-body-tertiary rounded mx-3 mt-5"  style="width: 22rem;">
<img src="./admin/img/photo/<?php echo $data['image'];?>" class="card-img-top" alt="..." height=300px >
  <div class="card-body mx-2 ">
    <h5 class="card-title"><?php echo $data['name'];?></h5>
    <p class="card-text"><?php echo $data['profession'];?></p>
    <div class="social_icon text-left mt-3 ">
    <a href="#" class="mx-1"> <i class="ti-facebook"></i> </a>
    <a href="#" class="mx-1"  > <i class="ti-twitter-alt"></i> </a>
    <a href="#" class="mx-1" > <i class="ti-instagram"></i> </a>
    <a href="#" class="mx-1"> <i class="ti-skype"></i> </a>
    </div>
    
  </div>
</div>
<?php
    }
?>




        </div>
     </div>



    <!--::review_part start::-->
    <section class="review_part gray_bg section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="client_review_part owl-carousel">
                        <div class="client_review_single">
                            <img src="img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <div class="client_img">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text media-body">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <div class="client_img">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <div class="client_img">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                        <div class="client_review_single">
                            <img src="img/Quote.png" class="Quote" alt="quote">
                            <div class="client_review_text">
                                <p>Also made from. Give may saying meat there from heaven it lights face had is gathered
                                    god dea earth light for life may itself shall whales made they're blessed whales
                                    also made from give
                                    may saying meat. There from heaven it lights face had amazing place</p>
                            </div>
                            <div class="client_img">
                                <img src="img/client/client_1.png" alt="">
                            </div>
                            <h4>Mosan Cameron, <span>Executive of fedex</span></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::review_part end::-->










<?php
include_once('footer.php');
?>