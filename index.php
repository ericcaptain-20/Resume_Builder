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
        echo "<script>window.location.replace('thankyou.html');</script>";
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
    <style type="text/css">
         .send_btn:hover{
            cursor: pointer;
         }
         *{
          margin: 0;
         }
      </style>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>HephaRes-Resume Builder</title>
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo" style="font-size:27px;font-weight:bolder;color:#03cafc;">
                              <img src="images/logo.png" height="40%" width="40%" /><!--Title Goes Here-->
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
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#templates">Templates</a>
                              </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="#tutorial">HowTo</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.php">Contact Us</a>
                              </li>
                              <li class="nav-item d_none login_btn">
                                 <style type="text/css">

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  /*box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: black;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .nav-link {background-color: black;}
</style>

<div class="dropdown">
  <a class="nav-link">Login</a>
  <div class="dropdown-content">
    <a href="login.php">User</a>
    <a href="login_admin.php">Admin</a>
    <a href="login_rec.php">Recruiter</a>
  </div>
</div>
                                 <!--
                                 <a class="nav-link" href="login.php">Login</a>
                              </li>  -->
                              <li class="nav-item d_none login_btn">
  <div class="dropdowns">
  <a class="nav-link">Register</a>
  <div class="dropdown-contents">
    <a href="register.php">User</a>
    <a href="register_rec.php">Recruiter</a>
  </div>
</div>

<style>

.dropdowns {
  position: relative;
  display: block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-contents {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 120px;
  /*box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-contents a {
     background: #03cafc;
     padding: 12px 16px;
     display: block;
     border-radius: 20px;
     color: #fff !important;
     margin: 0 10px;

}

/* Change color of dropdown links on hover */
.dropdown-contents a:hover {background-color: black;}

/* Show the dropdown menu on hover */
.dropdowns:hover .dropdown-contents {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdowns:hover .nav-link{background-color: black;}

   </style>
       
                                 <!--
                                 <a class="nav-link" href="register.php">Register</a>
                              -->
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
<section class="banner_main">
<!--Background Video-->

<div class="expand">
<h2>
<span class="b1">H</span><span class="b-1">ighlight</span>
<span class="b2">E</span><span class="b-2">xperienced</span>
<span class="b3">P</span><span class="b-3">erfect</span>
<span class="b4">H</span><span class="b-4">onest</span>
<span class="b5">A</span><span class="b-5">nd</span>
<span class="b6">R</span><span class="b-6">esume</span>
<span class="b7">E</span><span class="b-7">mitting</span>
<span class="b8">S</span><span class="b-8">ource</span>
</h2> 
</div>
</section>
<style>
section
{
font-family: sans-serif;
display: flex;
justify-content: center;
align-items: center;
min-height: 90vh;
}

h2
{
   margin: 0;
   padding-bottom: 5%;
   font-size: 38px;
   font-weight: bolder;
   text-transform: uppercase;
}
h2 span
{
   display: inline-flex;
   color: #03cafc;
}
h2 span:nth-child(even)
{
   overflow: hidden;
   transition: ease-in-out 0.5s;
   color: black;
   border-bottom: 4px solid #03cafc;
   letter-spacing: -3rem;
 
}
h2:hover span:nth-child(even)
{
   letter-spacing: 0;
}
h2:hover span:nth-child(2)
{
   transition-delay: 0s;
}
h2:hover span:nth-child(4)
{
   transition-delay: 0.5s;
}
h2:hover span:nth-child(6)
{
   transition-delay: 1s;
}
h2:hover span:nth-child(8)
{
   transition-delay: 1.5s;
}
h2:hover span:nth-child(10)
{
   transition-delay: 2s;
}
h2:hover span:nth-child(12)
{
   transition-delay: 2.5s;
}
h2:hover span:nth-child(14)
{
   transition-delay: 3s;
}
h2:hover span:nth-child(16)
{
   transition-delay: 3.5s;
}


   </style>
<!--Background Video-->

      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/b3.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>1. Pick Your Template</h2>
                     <p>Don't sabotage your job search before it has even begun. Choose from our ATS-friendly, hand-crafted resume templates and a wizard that guides you through every step of the process. Explore our Rare Template Collection & customize according to your creative minds.</p>
                  </div>
         
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->

            <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/b1.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>2.Customize Your Layout</h2>
                     <p>Make the resume template truly your own. Customize the layout based on your experience level and fill in your resume information,and see your resume changes dynamically in real time. You’ll get advice on which one to pick depending on your industry, seniority level, and the kind of company you’re applying to.</p>
                  </div>
                  
               </div>
            </div>
         </div>
      </div>
      <!-- about section -->

      <!-- about section -->
      <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/b2.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>3. Hit The Download</h2>
                     <p>And yes, it's free! We don't hit you with a payprompt once you've completed your resume in the basic account.If you use any of our premium features, the software will let you know about it, which contains whole different level of premium Templates.</p>
                  </div>
                </div>    
            </div>
         <a class="read_more" style="margin-left: 38%;" href="Generate/index.php">Create My Resume</a> 
         </div>

      </div>
      <!-- about section -->
  
      <!-- Template section -->
      <div class="glasses" id="templates">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Explore Our Templates</h2>
                     <p>Pick one of our free resume templates, fill it out, and land that dream job! Create and download your professional resume in less than 5 minutes.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure ><img src="images/res1.png" alt="#" height="500px"></figure>
                     <h3 class="resume_name">Cascade</h3>
                     <a class="read_more" href="Generate/index.php" style="margin-top: 5px !important; margin-bottom: 15px !important;">Edit</a>
                  </div>
               </div>

               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/res2.png" alt="#"/></figure>
                     <h3 class="resume_name">Professional</h3>
                     <a class="read_more" href="Generate1/index.php" style="margin-top: 5px !important;margin-bottom: 15px !important;">Edit</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/res3.png" alt="#"/></figure>
                     <h3 class="resume_name">Classic</h3>
                     <a class="read_more" href="Generate1/index.php" style="margin-top: 5px !important;margin-bottom: 15px !important;">Edit</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <figure><img src="images/res4.png" alt="#"/></figure>
                     <h3 class="resume_name">Modern</h3>
                     <a class="read_more" href="Generate/index.php" style="margin-top: 5px !important;margin-bottom: 15px !important;">Edit</a>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="glasses.html">Show More</a>
               </div>
            </div> 
         </div>
      </div>
    <div id="tutorial" class="shop">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="images/Owl.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <h2>New To Our Website ?</h2>
                        <p style="padding-top: 10px;">Don't Worry, We'll take you to a tour on showig how to access our website and get toknow all tools and templates required for the working</p>
                        <a class="read_more" href="#" style="margin-top: 10px;">Play Video</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      
      <!-- end section -->
      <!-- clients section -->
      <div class="clients">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <p>FAQs</p>
                     <h2>Resume Builder-FAQs</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide clients_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h2 style="font-size:30px;font-weight:bolder;">Eric Cole</h2>
                                          <h4 style="font-weight:bolder;font-size:25px;"><q>Why should I use a resume builder?</q></h4>
                                          <p>With a resume builder, you don’t have to worry about the nitty gritty of resume creation, like font selection, layout, formatting, etc. All you have to do is pick a resume template, fill it in, and then you’re ready to start applying for jobs!.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                         <h2 style="font-size:30px;font-weight:bolder;">David ColeMan</h2>
                                          <h4 style="font-weight:bolder;font-size:25px;"><q>Is this a completely free resume builder?</q></h4>
                                          <p>Yes, HephaRes is a 100% free resume builder.If you’re on a budget, you can use it to create your resume completely free of charge. And no, unlike some other resume builders out there, we don’t hit you with a paywall once you’ve completed your resume. You're in control!</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="clients_box">
                                          <figure><img src="images/our.png" alt="#"/></figure>
                                          <h2 style="font-size:30px;font-weight:bolder;">Greg Steward</h2>
                                          <h4 style="font-weight:bolder;font-size:25px;"><q>What should a resume include?</</q></h4>
                                          <p><p>The must-have contents in your resume include the following sections:<br>.Work Experience & Educational Background.Contact Information & Resume Objective</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class='fa fa-angle-left'></i>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class='fa fa-angle-right'></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end clients section -->
      <!-- contact section -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" method="post">
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
                           <button class="send_btn" name="submit">Send</button>
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
                        <p>© 2023 All Rights Reserved. Design by<a href="https://html.design/"> Our HephaRes Team</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
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

