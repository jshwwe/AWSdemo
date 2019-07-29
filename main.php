<?php
include 'sessionchecker.php';
?>

<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Homepage</title>
    <meta name="description" content="Sasha - Blogging HTML5 Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/icons/sports.png">

    <!-- Import Icon Packs -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/elegent-icons.css">

    <!-- Import External Scrpit CSS Files -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">

    <!-- Import Template CSS Files -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/themes.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="demo/demo.css">

       <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/util.css">
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script> -->

    <script src="assets/js/modernizr-2.8.3.min.js"></script>

</head>
<body>

    <section class="banner-section text-center background-bg" data-image-src="images/runner.jpeg">
        <div class="overlay">
                        <div class="topbar">
                            <a href="main.php"> Home </a>
                            <a href="mybookings.php"> My Bookings </a>
                            <?php 
                            if(!isset($_SESSION['username'])){
                                echo "<a href='index.html'> Log In </a>";
                            } else {
                                echo "<a href='main.php'> Log Out </a>";
                            }
                            ?>
                        </div>
            <div class="padding">
                <div class="banner-contents">
                    <div class="inner-contents">
                        <div class="banner-logo">
                            <?php 
                            if(!isset($_SESSION['username'])){
                                echo "<h2 class='banner-title'>Welcome! One click to book away! </h2>";
                            } else {
                                echo "<h2 class='banner-title'>Welcome " , "<span style='color:green;'>" ,$_SESSION['fullname'], "</span>","!</h2>";
                            }
                            ?>
                        </div>

                        <h2 class="banner-title">Stay Healthy with us!</h2><!-- /.banner-title -->
                        <h3 class="banner-sub-title">Book your sports facilities now!</h3><!-- /.banner-sub-title -->
                        <?php
                            if(!isset($_SESSION['username'])){
                                echo "<a href='index.html' class='btn purchase-btn'>Book now!</a>";
                            } else {
                                echo "<a href='book.php' class='btn purchase-btn'>Book now!</a>";
                            }
                        ?>
                    </div><!-- /.inner-content -->
                </div><!-- /.banner-contents -->
            </div><!-- /.padding -->
        </div><!-- /.overlay -->
    </section><!-- /.banner-section -->



    <section class="demo-contents text-center">
        <div class="wrapper-contents">

            <div class="padding">
                <div class="container">
                    <div class="details-top">
                        <h2 class="section-title style-03 text-center"><span>Our Facilities</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="images/badminton.jpg" alt="Thumb Image">
                                    <div class="item-hover">
                                    <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<a href='index.html' class='btn read-more'>Book Now!</a>";
                                    } else {
                                        echo "<a href='book.php?activity=badminton' class='btn read-more'>Book Now!</a>";
                                    }
                                    ?>
                                    </div>
                                </div>
                                <div class="item-details">
                                    <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<h3 class='item-title'><a href='index.html'>Badminton</a></h3>";
                                    } else {
                                        echo "<h3 class='item-title'><a href='book.php?activity=badminton'>Badminton</a></h3>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="images/futsal.jpg" alt="Thumb Image">
                                    <div class="item-hover">
                                    <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<a href='index.html' class='btn read-more'>Book Now!</a>";
                                    } else {
                                        echo "<a href='book.php?activity=futsal' class='btn read-more'>Book Now!</a>";
                                    }
                                    ?>                                    
                                    </div>
                                </div>
                                <div class="item-details">
                                <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<h3 class='item-title'><a href='index.html'>Futsal</a></h3>";
                                    } else {
                                        echo "<h3 class='item-title'><a href='book.php?activity=futsal'>Futsal</a></h3>";
                                    }
                                    ?>                                
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="images/basketball.jpg" alt="Thumb Image">
                                    <div class="item-hover">
                                    <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<a href='index.html' class='btn read-more'>Book Now!</a>";
                                    } else {
                                        echo "<h3 class='item-title'><a href='book.php?activity=basketball' class='btn read-more'>Book Now!</a></h3>";
                                    }
                                    ?>                                    
                                    </div>
                                </div>
                                <div class="item-details">
                                <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<h3 class='item-title'><a href='index.html'>Basketball</a></h3>";
                                    } else {
                                        echo "<h3 class='item-title'><a href='book.php?activity=basketball'>Basketball</a></h3>";
                                    }
                                    ?>                                 
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="images/tabletennis.jpg" alt="Thumb Image">
                                    <div class="item-hover">
                                    <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<a href='index.html' class='btn read-more'>Book Now!</a>";
                                    } else {
                                        echo "<h3 class='item-title'><a href='book.php?activity=tabletennis' class='btn read-more'>Book Now!</a></h3>";
                                    }
                                    ?>                                     
                                    </div>
                                </div>
                                <div class="item-details">
                                <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<h3 class='item-title'><a href='index.html'>Table Tennis</a></h3>";
                                    } else {
                                        echo "<h3 class='item-title'><a href='book.php?activity=tabletennis'>Table Tennis</a></h3>";
                                    }
                                    ?>                                   
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="item">
                                <div class="item-thumb">
                                    <img src="images/tennis.jpg" alt="Thumb Image">
                                    <div class="item-hover">
                                    <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<a href='index.html' class='btn read-more'>Book Now!</a>";
                                    } else {
                                        echo "<h3 class='item-title'><a href='book.php?activity=tennis' class='btn read-more'>Book Now!</a></h3>";
                                    }
                                    ?>                                     
                                    </div>
                                </div>
                                <div class="item-details">
                                <?php
                                    if(!isset($_SESSION['username'])){
                                        echo "<h3 class='item-title'><a href='index.html'>Tennis</a></h3>";
                                    } else {
                                        echo "<h3 class='item-title'><a href='book.php?activity=tennis'>Tennis</a></h3>";
                                    }
                                    ?>                                 
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


    <footer class="site-footer colophon">
        <div class="container">
            <div class="row">
    
                    <div class="copyright text-center">
                        © <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div><!-- /.copyright -->

               
            </div><!-- /.row -->
        </div><!-- /.container -->
    </footer><!-- /.site-footer -->


    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
