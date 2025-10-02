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
              <h2>Contact Us</h2>
              <p>home <span class="ti-angle-double-right"></span>Contact us</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- breadcrumb start-->

  <section class="contact-section section_padding container1">
    <div class="container">

    <?php
    if (isset($_GET['msg'])) {
        echo "<div id='messageBox' class='alert alert-success'>{$_GET['msg']}</div>";
    }
    ?>
      <div class="d-none d-sm-block mb-5 pb-4">
        <div id="map" ></div>
        <script>
          function initMap() {
            var uluru = {
              lat: -25.363,
              lng: 131.044
            };
            var grayStyles = [{
                featureType: "all",
                stylers: [{
                    saturation: -90
                  },
                  {
                    lightness: 50
                  }
                ]
              },
              {
                elementType: 'labels.text.fill',
                stylers: [{
                  color: '#ccdee9'
                }]
              }
            ];
            var map = new google.maps.Map(document.getElementById('map'), {
              center: {
                lat: -31.197,
                lng: 150.744
              },
              zoom: 9,
              styles: grayStyles,
              scrollwheel: false
            });
          }
        </script>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3408.6378307763916!2d75.58841197506091!3d31.313753657322124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5a4c6fae8ba9%3A0xd49b2f292eb27999!2sO7%20Services!5e0!3m2!1spa!2sin!4v1720698074857!5m2!1spa!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
        </iframe>

      </div>


      <div class="row ">
        <div class="col-12">
          <h2 class="contact-title">Get in Touch</h2>
        </div>
        <div class="col-lg-8">
    
        <form method="post">
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <textarea class="form-control" name="message" id="message" placeholder="Enter Message" cols="30" rows="9" required></textarea>
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" required>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'" placeholder="Enter email address" required>
            </div>
        </div>

        <div class="col-12">
            <div class="form-group">
                <input class="form-control" name="mob" id="number" type="tel" pattern="[0-9]{10}" placeholder="Enter your Number" required>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-danger px-2 py-2" name="Send">Send Message</button>
    <button type="reset" class="btn btn-danger px-4 py-2">Reset</button>
</form>


        





          <div class="col-lg-4">
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>Buttonwood, California.</h3>
              <p>Rosemead, CA 91770</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
              <h3>00 (440) 9865 562</h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3>support@colorlib.com</h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   


  <?php
    if(isset($_REQUEST['Send'])){
        $message = $_REQUEST['message'];
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $mobilenumber = $_REQUEST['mob'];
        include('config.php');
        $query = "INSERT INTO `contact_table`(`Message`, `Name`, `Email`, `MOB`) VALUES ('$message','$name',' $email','$mobilenumber')";
        $result = mysqli_query($conn,$query);
        if ($result) {
          // Redirect with success message
          echo "<script>window.location.assign('contact.php?msg=yourcontactdetailsuucessfullyadded!')</script>";
      } else {
          // Redirect with error message
          echo "<script>window.location.assign('contact.php?msg=Failed to add category. Please try again.')</script>";
      }
  }
  ?>
  
  <script>
      // Automatically hide the message after 3 seconds
      setTimeout(() => {
          const messageBox = document.getElementById('messageBox');
          if (messageBox) {
              messageBox.style.display = 'none';
          }
      }, 3000);
  </script>  
?>

















  <?php

include_once('footer.php');


?>
