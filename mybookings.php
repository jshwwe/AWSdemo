<!doctype html>
<?php 
include 'sessionchecker.php';
include 'dbconnect.php';

$db = new mysqli($host,$username,$password,$dbname);
$sqlquery = "SELECT * FROM bookings WHERE user = '". $_SESSION["username"] . "'";

$results = $db->query($sqlquery);


?>
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

    <section class="banner-section text-center background-bg" data-image-src="images/sports.png">
      
        <div class="overlay">
                        <div class="topbar">
                            <a href="main.php"> Home </a>
                            <a href="mybookings.php"> My Bookings </a>
                            <a href="php/logout.php"> Logout </a>
                        </div>
            <div class="padding">
                <div class="banner-contents">
                    <div class="inner-contents">
                        <div class="banner-logo">
                            <h2 class="banner-title">My Bookings</h2>
                        </div>

                        <h2 class="banner-sub-title">View and cancel your bookings</h2><!-- /.banner-title -->
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
                        <h2 class="section-title style-03 text-center"><span>Your Bookings</span></h2>
                    </div>
                    <div class="row">
                        <table class="table table-dark">
                                <tr>
                                  <th scope="col">No.</th>
                                  <th scope="col">Activity</th>
                                  <th scope="col">Venue</th> 
                                  <th scope="col">Date</th>
                                  <th scope="col">Time</th>
                                  <th scope="col">Cancel</th>
                                </tr>
                       <?php               
                                             $counter = 1;
                       while ($row = $results->fetch_assoc()){
                           
                           echo '<tr scope="row text-left">';
                           echo '<td>' . $counter . '</td>';
                           echo '<td>' . $row["activity"] . '</td>';
                           echo '<td>' . $row["venue"] . '</td>';
                           echo '<td>' . $row["date"] . '</td>';
                           echo '<td>' . $row["time"] . '</td>';
                           echo '<td>
                               <form action="php/cancel.php" method="get"><button class="btn" name="bookid" value="' . $row["bookingid"] .'"><i class="fa fa-close"></i></button>
                                  </form>
                            </td>';
                           echo '</tr>';
                               $counter++;
                           
                       }
                       ?>
                                                            
                        </table>
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
