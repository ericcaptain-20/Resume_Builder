<?php 
session_start();
include 'db_connect.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $mail=$_POST['email'];
    $message=$_POST['message'];

    $a = "INSERT INTO `feedback` (`f_name`,`f_phone`,`f_from`,`f_message`) VALUES ('$name','$phone','$mail','$message')";
    //var_dump($a);
    if (mysqli_query($con,$a)) {
        echo "<script>window.location.replace('thankyou2.html');</script>";
    }
}
 ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap');
      body{font-family: 'Montserrat', sans-serif !important;}
      </style>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Contact</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <style type="text/css">
         .send_btn:hover{
            cursor: pointer;
         }
      </style>
   </head>
   <!-- body -->
   <body class="main-layout position_head">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="home.html"><img src="images/logo.png" style="width:40%;height:40%;"alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="home.html">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about2.html">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="glasses2.html">Templates</a>
                              </li>
                            <!--  <li class="nav-item">
                                 <a class="nav-link" href="shop.html">Shop</a>
                              </li> -->
                              <li class="nav-item active">
                                 <a class="nav-link" href="#">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- contact section -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <form  class="main_form" method="post">
                     <div class="row">
                        <div class="col-md-12 ">
                           <h3>Contact Us</h3>
                        </div>
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Name" type="type" name="name"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Phone Number" type="type" name="phone"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Email" type="type" name="email">                          
                           </div>
                           <div class="col-md-12">
                              <input class="contactusmess" placeholder="Message" type="type" name="message">
                           </div>
                           <div class="col-md-12">
                              <input type="submit" class="send_btn" name="submit">
                           </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="map_section">
               <div id="map">
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end contact section -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <ul class="location_icon">
                        <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a><br>St. Thomas College</li>
                        <li><a href="tel:7306219037"><i class="fa fa-phone" aria-hidden="true"></i></a><br> +91 7306219037</li>
                        <li><a href="mailto:hephares500@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a><br> hephares@gmail.com</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2023 All Rights Reserved For HephaRes</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.min.js"></script>
      <script src="js/custom.js"></script>
      <script>
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 20,
             center: {lat: 10.5237, lng: 76.2188},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 10.5237, lng: 76.2188},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>