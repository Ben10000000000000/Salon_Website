<?php
include('header.php');
?>

<style>
    .alert {
        display: block;
    }

    .alert-hidden {
        display: none;
    }
</style>
    <section class="banner_part">
        <div class="container">
        <?php
    if (isset($_GET['msg'])) {
        echo "<div id='messageBox' class='alert alert-success text-center'>{$_GET['msg']}</div>";
    }
    ?>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>Feel like home</h5>
                            <h1>Good Look Guaranteed</h1>
                            <p>Divide give Dominion wont deep he them seed thing open sixth beast don't yea very
                                it meat yielding for air in without one upon it without, his creepeth tree
                                gathering behold and, greater have given deep his</p>
                            <div class="banner_btn">
                                <a href="appointment.php" class="btn_1">Book Now</a>
                                <a href="contact.php" class="btn_2">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<!-- about part start-->
<section class="about_part">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-4 col-lg-6">
                    <div class="about_img ">
                        <img src="img/about_us_1.png" class="about_img_1" alt="">
                        <img src="img/about_us_2.png" class="about_img_2" alt="">
                        <img src="img/about_us_3.png" class="about_img_3" alt="">
                    </div>
                </div>
                <div class="col-md-7 offset-md-1 col-lg-3 offset-lg-1">
                    <div class="about_text">
                        <h5>About us</h5>
                        <h2>Connect with your dream style</h2>
                        <p>Seed spirit replenish cattle one moved air created. Them fill dont be fed isnt to he
                            shall god good spirit they are the. Hath Itself their second ifruitful a moving
                            their creature living every i replenish land and had hen lesser for their good
                            quality products</p>
                        <p>Seed spirit replenish cattle one moved air created. Them fill dont be fed isnt to he shall
                            god good spirit they are the. Hath Itself their second ifruitful a moving their creature
                            living every</p>
                        <a href="about.php" class="btn_3">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-fluid">
 <div class="row">
 <div class="col text-center">
<img src="img/section_tittle_icon.png" alt="icon">
    </div>
 </div>
 <br><br>


    <div class="row">
        <div class="col-md-4 bg-white"></div>
        <div class="col-md-4 text-center"><h1 class="text-white bg-dark">SALON INTERIOR IMAGES </h1></div>
    <div class="col-md-4 bg-white"></div>
</div>
<br><br><br><br>
<div class="row">
    <div class="col-md-4">
    <img src="admin/img/istockphoto-1856117770-612x612.jpg" class="card-img-top" alt="..." width="200px" height="400px">
   </div>
   <div class="col-md-4">
    <img src="admin/img/luxury-pink-beauty-care-salon-600nw-2319523823.webp" class="card-img-top" alt="..." width="200px" height="400px">
   </div>
   <div class="col-md-4">
    <img src="admin/img/360_F_433360513_EyYtlNaz3fCJU5UHaPhURBodPCwNIMVN.jpg" class="card-img-top" alt="..." width="200px" height="400px">
   </div>
</div>
<br>

   <div class="row">
    <div class="col-md-4">
    <img src="admin/img/istockphoto-1325440885-612x612.jpg" class="card-img-top" alt="..." width="200px" height="400px">
   </div>

   <div class="col-md-4">
    <img src="admin/img/istockphoto-1288801785-612x612.jpg" class="card-img-top" alt="..." width="200px" height="400px">
   </div>

   <div class="col-md-4">
    <img src="admin/img/360_F_602796134_sPM5fGEKATWlvcD7B4CB4fyCef9PojbL.jpg" class="card-img-top" alt="..." width="200px" height="400px">
   </div>
</div>
<br>


   <div class="row">
    <div class="col-md-4">
    <img src="admin/img/modern-beauty-salon-interior-design-spacious-featuring-white-chairs-round-mirrors-elegant-lighting-green-plant-accents-310929738.webp" class="card-img-top" alt="..." width="200px" height="400px">
   </div>
   <div class="col-md-4">
    <img src="admin/img/360_F_511140604_RnBU5DgEMOSOlB0Su85SVsCm7GZT94bU.jpg" class="card-img-top" alt="..." width="200px" height="400px">
   </div>
   <div class="col-md-4">
    <img src="admin/img/modern-bright-beauty-salon-hair-salon-interior-business-with-industrial-minimal-look-black-and-white-decoration-with-mirrors-chairstv-screen-and-m-2AXTPH8.jpg
    " class="card-img-top" alt="..." width="200px" height="400px">
   </div>
</div>

   
    </div>
   
    </div>
</div>



    <!-- about part end-->

    <!-- Service part start-->
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
            
<div class="row">
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
    <!-- Service part end-->

    <!-- our_offer part start-->
    <section class="our_offer">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="single_offer_part">
                        <div class="single_offer">
                            <img src="img/offer_img_1.png" alt="offer_img_1">
                            <div class="hover_text">
                                <img src="img/icon/cutter.svg" alt="#">
                                <h2>Best Equipment</h2>
                                <p>Winged day grass creepeth us second signs</p>
                                <a href="#" class="offer_btn"><span class="flaticon-slim-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single_offer_part">
                        <div class="single_offer">
                            <img src="img/offer_img_2.png" alt="offer_img_1">
                            <div class="hover_text">
                                <img src="img/icon/cutter.svg" alt="#">
                                <h2>Best Price</h2>
                                <p>Winged day grass creepeth us second signs </p>
                                <a href="#" class="offer_btn"><span class="flaticon-slim-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single_offer_part">
                        <div class="single_offer">
                            <img src="img/offer_img_3.png" alt="offer_img_1">
                            <div class="hover_text">
                                <img src="img/icon/cutter.svg" alt="#">
                                <h2>Fitness Equipment</h2>
                                <p>Winged day grass creepeth us second signs</p>
                                <a href="#" class="offer_btn"><span class="flaticon-slim-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="single_offer_part">
                        <div class="single_offer">
                            <img src="img/offer_img_4.png" alt="offer_img_1">
                            <div class="hover_text">
                                <img src="img/icon/cutter.svg" alt="#">
                                <h2>Fitness Training</h2>
                                <p>Winged day grass creepeth us second signs</p>
                                <a href="#" class="offer_btn"><span class="flaticon-slim-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our_offer part end-->


    <!-- Service part start-->
    <section class="priceing_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-lg-6 col-sm-10">
                    <div class="section_tittle">
                        <img src="img/section_tittle_icon.png" alt="icon">
                        <h2>Pricing Plan</h2>
                        <p>Good morning forth gathering doesn't god gathering man and had moveth there dry sixth
                            dominion rule divided behold after had he did not move .</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="single_pricing_item">
                        <img src="img/pricing_img/pricing_img_1.png" alt="">
                        <div class="single_pricing_text">
                            <h5>Hair Cut</h5>
                            <h6>$5.00</h6>
                            <p>Their days lesser and every firmament</p>
                        </div>
                    </div>
                    <div class="single_pricing_item">
                        <img src="img/pricing_img/pricing_img_2.png" alt="">
                        <div class="single_pricing_text">
                            <h5>Hair Color</h5>
                            <h6>$6.00</h6>
                            <p>Their days lesser and every firmament</p>
                        </div>
                    </div>
                    <div class="single_pricing_item">
                        <img src="img/pricing_img/pricing_img_3.png" alt="">
                        <div class="single_pricing_text">
                            <h5>Hair Straight</h5>
                            <h6>$7.00</h6>
                            <p>Their days lesser and every firmament</p>
                        </div>
                    </div>
                    <div class="single_pricing_item">
                        <img src="img/pricing_img/pricing_img_4.png" alt="">
                        <div class="single_pricing_text">
                            <h5>Shampoo</h5>
                            <h6>$8.00</h6>
                            <p>Their days lesser and every firmament</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="single_pricing_item">
                        <img src="img/pricing_img/pricing_img_5.png" alt="">
                        <div class="single_pricing_text">
                            <h5>Hair Wash</h5>
                            <h6>$9.00</h6>
                            <p>Their days lesser and every firmament</p>
                        </div>
                    </div>
                    <div class="single_pricing_item">
                        <img src="img/pricing_img/pricing_img_6.png" alt="">
                        <div class="single_pricing_text">
                            <h5>Hair Shave</h5>
                            <h6>$10.00</h6>
                            <p>Their days lesser and every firmament</p>
                        </div>
                    </div>
                    <div class="single_pricing_item">
                        <img src="img/pricing_img/pricing_img_7.png" alt="">
                        <div class="single_pricing_text">
                            <h5>Men’s Facial</h5>
                            <h6>$11.00</h6>
                            <p>Their days lesser and every firmament</p>
                        </div>
                    </div>
                    <div class="single_pricing_item">
                        <img src="img/pricing_img/pricing_img_8.png" alt="">
                        <div class="single_pricing_text">
                            <h5>Wedding Style</h5>
                            <h6>$12.00</h6>
                            <p>Their days lesser and every firmament</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service part end-->


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
<img src="./admin/img/photo/<?php echo $data['image'];?>" class="card-img-top" alt="..." height=350px >
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
    
   

    <!-- blog part start-->
    <section class="blog_part service_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_tittle">
                        <img src="img/section_tittle_icon.png" alt="icon">
                        <h2>Latest Style News</h2>
                        <p>Good morning forth gathering doesn't god gathering man and had moveth there
                            dry sixth dominion rule divided behold after had he did not move .</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="single_service_part">
                        <img src="img/service/single_service_1.png" alt="">
                        <div class="single_service_text">
                            <p> <a href="blog.html">art, illustration</a> <span>|</span> March 30, 2019</p>
                            <h4> <a href="#">There our you divide itseld..</a></h4>
                            <p>Man moveth days wherein you're that made years he after us light let moved.</p>
                            <a href="category.php" class="btn_3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service_part">
                        <img src="img/service/single_service_2.png" alt="">
                        <div class="single_service_text">
                            <p> <a href="blog.html">art, illustration</a> <span>|</span> March 30, 2019</p>
                            <h4> <a href="#">One which won two divide..</a></h4>
                            <p>Man moveth days wherein you're that made years he after us light let moved.</p>
                            <a href="category.php" class="btn_3">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="single_service_part">
                        <img src="img/service/single_service_3.png" alt="">
                        <div class="single_service_text">
                            <p> <a href="blog.html">art, illustration</a> <span>|</span> March 30, 2019</p>
                            <h4> <a href="#">There our you divide itseld..</a></h4>
                            <p>Man moveth days wherein you're that made years he after us light let moved.</p>
                            <a href="category.php" class="btn_3">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog_part part end-->

    <script>
    // Automatically hide the message after 3 seconds
    setTimeout(() => {
        const messageBox = document.getElementById('messageBox');
        if (messageBox) {
            messageBox.classList.add('alert-hidden');
        }
    }, 3000);
</script>











<?php
include('footer.php');
?>