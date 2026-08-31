<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<!-- footer -->
<footer class="footer-w3ls text-center py-5" >
        <div class="container pt-4">
            <div class="mx-auto" style="max-width:600px;">
                <a class="" href="index.php" >
                <img src="images/Majid_logo2.png"  alt="" height="100%" width="150px" style="margin-left:-40px">        
                <!-- <i class="fas fa-bold"></i>. -->
                </a>
                <p class="mt-4 text-white font">Thank you for visiting my portfolio! I specialize in web and app designing and development, with a focus on delivering high-quality results that meet my clients unique needs.</p>
                <div class="social-icons-main mt-4 pb-3">
                    <ul class="social-icons3">
                        <li>
                            <a href="https://www.facebook.com/majid.razzaq.1217">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/MajidRa88584103">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/abdul-majid-621ba3201">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://github.com/Majid-Razzaq">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://instagram.com/majid_abdulrazzaq?igshid=ZGUzMzM3NWJiOQ==">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                      <li>
                        <a target=”_blank” href="https://ko-fi.com/abdulmajid#paypalModal">
                            <i><img src="images/ko_fi.png"  alt="" height="30px" width="30px">        
</i>
                        </a>
                    </li>

                    </ul>
                </div>
            </div>
            <!-- copyright -->
            <p class="copy-right-w3 text-white mt-5 pt-4 font">© <?php $year = date("Y"); echo $year; ?> Biodata. All rights reserved | Design by
                <a href="#"> Abdul Majid</a>
            </p>
        </div>
    </footer>
    <!-- //footer -->
 <!-- Js scripts -->
    <!-- move top -->
    <button class="top_btn" onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>

<script src='https://storage.ko-fi.com/cdn/scripts/overlay-widget.js'></script>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- //move top -->

</body>
</html> 