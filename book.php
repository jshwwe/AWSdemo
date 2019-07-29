<!doctype html>
<?php
include 'dbconnect.php';
include 'sessionchecker.php';

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
    
    <!--icon library-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script> -->

    <script src="assets/js/modernizr-2.8.3.min.js"></script>

</head>


<body>

    <section class="banner-section text-center background-bg" data-image-src="images/grass.jpeg">
      
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
                            <h2 class="banner-title">Book a venue</h2>
                        </div>

                        <h2 class="banner-sub-title">schedule a day for sports!</h2><!-- /.banner-title -->
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
                <h2 class="section-title style-03 text-center"><span>Choose a slot</span></h2>
            </div>
                    <form method="POST" action="php/confirmbook.php">
                    <table class="table text-center">
                        <th>Activity</th>
                        <th>Location</th>
                        <th>Date</th>
                        <th>Time</th>
                        
                        <tr>
                            <td>
                                <select class="select2-dropdown--above" name="activity" required="">
                                    <option value="" selected disabled hidden>Choose activity</option>
                                    <option value="Badminton">Badminton</option>
                                    <option value="Futsal">Futsal</option>
                                    <option value="Basketball">Basketball</option>
                                    <option value="Table Tennis">Table Tennis</option>
                                    <option value="Tennis">Tennis</option>
                                  </select>
                               
                            </td>
                            <td>
                                <select name="venue" required>
                                    <option value="" selected disabled hidden>Choose location</option>
                              <option value="Singtel Recreation Center">Singtel Recreation Center</option>
                              <option value="Singtel Recreation Center">Kallang Sports Hub</option>
                              <option value="Singtel Recreation Center">Tampines Hub</option>
                                </select>
                            </td>
                            <td>
                               <input type="date" name="date" value="<?php echo date('Y-m-d'); ?>">
                            </td>
                            <td>
                               <input type="time" name="time" step="3600"
                                min="09:00" max="18:00" value="09:00" required>
                            </td>

                        </tr>
                    </table>
                        <div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Confirm
						</button>
					</div>
                    </form>
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
