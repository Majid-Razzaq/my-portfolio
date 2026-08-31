<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="icon" href="images/Majid_logo.png" type="images/Majid_logo2.png">
    <link rel="icon" href="images/Majid_logo2.png">

    <!-- Css Links -->
    <link rel="stylesheet" href="css/style-starter.css?v=<?php echo time(); ?>">
    <!-- End Here -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Bootstrap Jquery links -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- FontAwesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500&display=swap" rel="stylesheet">
    <style>

</style>

<style>
    .nav-item {
        display: inline;
        position: relative;
        margin-right: 10px;
    }

    .nav-link {
        text-decoration: none;
        color: #dc3545; 
        transition: color 0.3s;
        position: relative;
    }

    .nav-link::before {
        content: "";
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        bottom:-20%;
        left: 50%;
        background-color: #dc3545; 
        transform: translateX(-50%); 
        transition: width 0.3s ease, transform 0.3s ease;
    }

    .nav-item:hover .nav-link::before {
        width: 100%;
    }
</style>


    </style>
</head>
<body>

 <!-- header -->
 <header id="site-header" class="fixed-top">
        <div class="container ">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="" href="index.php" >
                <img src="images/Majid_logo.png"  alt="" height="100%" width="150px" style="margin-left:-40px">        
                <!-- <i class="fas fa-bold"></i>. -->
                </a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll">
                        <li class="nav-item">
                            <a class="nav-link font h5 <?php if($page=='home'){ echo 'active';} ?>" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font h5" href="#myIntro">Intro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font h5" href="#education">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font h5" href="#skills">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font h5" href="#projects">Projects</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font h5" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link font h5" href="contact.php">Contact</a>
                        </li>
                      
                    </ul>
                   
           
                   <!-- <form action="#search" method="GET" class="d-flex search-header">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search"
                            required>
                        <button class="btn btn-style font" type="submit">Search</button>
                    </form>-->
                </div>
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                        
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!-- //header -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function() {
            // Add a click event listener to all the navigation links
            $('.nav-link').click(function() {
                // Remove the "active" class from all links
                $('.nav-link').removeClass('active');
                // Add the "active" class to the clicked link
                $(this).addClass('active');
            });
        });
</script>

 
</body>
</html>