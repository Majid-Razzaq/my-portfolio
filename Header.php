<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>

    <!-- Css Links -->
    <link rel="stylesheet" href="css/style-starter.css?v=<?php echo time(); ?>">
    <!-- End Here -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 <!-- FontAwesome CDN -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
                            <a class="nav-link <?php if($page=='home'){ echo 'active';} ?>" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#myIntro">My Intro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if($page=='contact'){echo 'active';} ?>" href="contact.php">Contact</a>
                        </li>
                    </ul>
                    <form action="#search" method="GET" class="d-flex search-header">
                        <input class="form-control" type="search" placeholder="Enter Keyword..." aria-label="Search"
                            required>
                        <button class="btn btn-style" type="submit">Search</button>
                    </form>
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
 
</body>
</html>