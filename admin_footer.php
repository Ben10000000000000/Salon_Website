<!-- footer part start-->
<footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-4 col-sm-6 col-lg-4">
                    <div class="single-footer-widget footer_1">
                        <h4>About Us</h4>
                        <p>Do you want to be even more successful? Learn to love learning and growth. 
                            The more effort you put into improving your skills, the bigger the payoff you
                             will get. Realize that things </p>
                        <p class="mt-3" >The more effort you put into improving your skills, the bigger the stil now</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <span class="ti-home"></span>
                            <h5>Los angeles, United States</h5>
                            <p>659, Rocky beach bullevard, santa monica, Rocky beach, USA.</p>
                        </div>
                        <div class="contact_info">
                            <span class="ti-headphone-alt"></span>
                            <h5>+44 6532 986 652</h5>
                            <p>Mon to Fri 9am to 6 pm.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-sm-8 col-lg-4">
                    <div class="single-footer-widget footer_3">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends The more effort you put into improving your skills, the bigger the payoff you will get realize that things.</p>
                        <div class="form-wrap" id="mc_embed_signup">
                            <form target="_blank"
                                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                method="get" class="form-inline">
                                <input class="form-control" name="EMAIL" placeholder="Your Email Address"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
                                    required="" type="email">
                                <button class="btn btn-default text-uppercase"><i class="ti-angle-right"></i></button>
                                <div style="position: absolute; left: -5000px;">
                                    <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value=""
                                        type="text">
                                </div>

                                <div class="info"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_part">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- contact js -->
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>
    <script src="js/contact.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('change', function () {
            // Toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
        });
    </script>
    
    <script>
    document.querySelector('form').addEventListener('submit', function(event) {
        var email = document.getElementById('email');
        var number = document.getElementById('number');
        
        // Email validation
        var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{3,}$/;
        if (!emailPattern.test(email.value)) {
            alert('Please enter a valid email address.');
            email.focus();
            event.preventDefault();
            return false;
        }

        // Phone number validation
        var numberPattern = /^[0-9]{10}$/;
        if (!numberPattern.test(number.value)) {
            alert('Please enter a valid 10-digit phone number.');
            number.focus();
            event.preventDefault();
            return false;
        }
        
        return true;
    });
</script>




</body>

</html>