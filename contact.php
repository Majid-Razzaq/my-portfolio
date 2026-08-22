<?php

    include("connection.php");
    $page = 'contact';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <title><?php $title = 'Contact'; ?></title> 

</head>

<body>
   <!-- Header -->
<?php  include 'Header.php';?>
<!-- End here -->

    <!-- inner banner -->
    <section class="inner-banner py-5">
        <div class="w3l-breadcrumb py-lg-5">
            <div class="container pt-4 pb-sm-4">
                <ul class="breadcrumbs-custom-path mt-2">
                <h4 class="inner-text-title font-weight-bold pt-sm-5 pt-4 text-danger"><li style="font-weight: bold;font-size: 25px;">Contact Us</li></h4>
                    <li><a href="index.php">Home</a></li>
                    <li class="active" style="color:white;Font-weight:bold;"><i class="fas fa-angle-right mx-2"></i>Contact Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //inner banner -->

    <!-- contact -->
    <section class="w3l-contact py-5" id="contact">
        <div class="container py-lg-5 py-4">
            <div class="title-heading-w3 text-center mb-sm-5 mb-4">
                <h5 class="title-small">Get In Touch</h5>
                <h3 class="title-style">Contact Me</h3>
            </div>
            <div class="row contact-block">
                <div class="col-md-6 contact-left pe-lg-5">
                    <h3 class="mb-sm-4 mb-3">Contact Info</h3>
                    <p class="cont-para mb-sm-5 mb-4">I enjoy discussing new projects and design challenges. Please
                        share as
                        much info, as possible so
                        we can get the most out of our first catch-up.</p>
                    <div class="cont-details">
                        <p><i class="fas fa-map-marker-alt"></i>Karachi , Pakistan.</p>
                        <p><i class="fas fa-phone-alt"></i><a href="tel:+92222682821">+92-222-682821</a></p>
                        <p><i class="fas fa-envelope-open-text"></i><a href="mailto:example@mail.com"
                                class="mail">abdulmajid22770@mail.com</a></p>
                    </div>
                    <h4 class="mb-3 mt-5">Follow Me</h4>
                    <ul class="social-icons-contact">
                        <li>
                            <a href="#twitter">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#linkedinin">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#github">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#instagram">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 contact-right mt-md-0 mt-5 ps-lg-0">
                    <form method="post" class="signin-form form-contact">
                        <div class="input-grids">
                            <input type="text" name="name" id="name" placeholder="Your Name*"
                                class="contact-input" required="" />
                            <input type="email" name="sender" id="sendaer" placeholder="Your Email*"
                                class="contact-input" required="" />
                            <input type="text" name="sub" id="sub" placeholder="Subject*"
                                class="contact-input" required="" />
                            <!-- <input type="text" name="web" id="w3lWebsite" placeholder="Website URL*"
                                class="contact-input" required="" /> -->
                            </div>
                        <div class="form-input">
                            <textarea name="msg" id="msg" placeholder="Type your message here*"
                                required=""></textarea>
                        </div>


                        
                    <!-- <input class="btn btn-style" id="submit" name="btn" value="Send Message"> -->
                        <?php
                            if(isset($_POST['btn']))
                            {
                                // Email recieving from user
                                // $to    = "abdulmajid22770@gmail.com"; 
                                $name  = $_POST['name'];
                                $sender = $_POST['sender'];
                                $subject  = $_POST['sub'];
                                $message   = $_POST['msg'];

                               // $message = wordwrap($message, 70);
 
                                // mail($to,$subject,$message,$sender,"From: $sender\n");

                                // Email sending to user as a reply
                                // $to1    = $_POST["sender"]; 
                                // $name1  = $_POST['name'];
                                // $sender1 = "abdulmajid22770@gmail.com";
                                // $subject1  = "www.abdulmajid.com";
                                // $message1   = "Email receive we will get back to you soon!";

                                // if(mail($to1,$subject1,$message1,$sender1))
                                //  {
                                

                                $query = "insert into contact(username,email,subject,message)
                                values('$name','$sender','$subject','$message')";
                                $run = mysqli_query($con,$query);

                                if($run > 0)
                                {
                                    echo "<meta http-equiv='refresh' content='0'>";
                                   echo " <script>alert('Your Message has been sent!')</script>";
                                }
                                else
                                {
                                    echo"<script>alert('Failed! Try Again..')</script>";
                                }

                                }
                                // else
                                // {
                                //     echo"<script>alert('main Sending Failed! Try Again..')</script>";
                                // }

                                
                            // }
                        ?>
                       
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- map -->
    <div class="map-iframe">
        <iframe
            src="        https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d748.1452325378004!2d67.26706572916895!3d24.88523941558932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3314c87c53467%3A0xfebabcabc3249359!2sJam%20Kando%20Bin%20Qasim%20Town%2C%20Karachi%2C%20Karachi%20City%2C%20Sindh%2C%20Pakistan!5e1!3m2!1sen!2s!4v1654355868459!5m2!1sen!2s"
            width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
    </div>
    <!-- //contact -->

<!-- Footer Start -->
<?php  include 'Footer.php';?>
<!-- End Here -->

    <!-- bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap -->
 
<!-- Js Links -->
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/lightbox-plus-jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/theme-change.js"></script>
<!-- End here -->

 <!-- Js scripts -->
   

    <!-- common jquery plugin -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- //common jquery plugin -->

    <!-- libhtbox -->
    <script src="assets/js/lightbox-plus-jquery.min.js"></script>
    <!-- libhtbox -->

    <!-- testimonials owlcarousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-two').owlCarousel({
                loop: true,
                margin: 30,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false
                    }
                }
            })
        })
    </script>
    <!-- //script for Testimonials-->

    <!-- theme switch js (light and dark)-->
    <script src="assets/js/theme-change.js"></script>
    <!-- //theme switch js (light and dark)-->

    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function () {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });

        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function () {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function () {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function () {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });
    </script>
    <!-- //MENU-JS -->

    <!-- Get email -->
       <script>
       const name    = document.getElementById('name');
       const sender  = document.getElementById('sender');
       const subject = document.getElementById('sub');
       const message = document.getElementById('msg'); 
       const submit = document.getElementsByClassName('form-contact')[0]; 

       submit.addEventListener('submit',(e)=>{
        e.preventDefault();
        console.log("CLicked");
       });
       
    //    Email Code Here
    Email.send({
    SecureToken : "84237e68-c947-4ec8-a456-983ac513d736",
    To : 'abdulmajid22770@gmail.com',
    From : "abdulmajid22770@gmail.com",
    Subject : "Testing Email",
    Body : "And this is the body"
    }).then(
    message => alert(message)
    );

       </script> 
    <!-- Get email -->


    <!-- //Js scripts -->
</body>

</html>