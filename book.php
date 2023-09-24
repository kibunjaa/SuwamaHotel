<?php
session_start();

//database connection
require_once('C:\xampp\htdocs\Suwama_Web\logics\dbconnection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta name="keywords" content="HTML,CSS,Menu,food,Suwama Hotel,JavaScript">
	  <meta name="author" content="Kibunja Franziska">
    <link media="screen and (max-width: 600px)">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="login.css">
     <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles  -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
   
    <title>SUWAMA WEBSITE</title>
</head>
<body>
        <nav class="navbar">
          <div class="navbar-container container">
              <input type="checkbox" name="" id="">
              <div class="hamburger-lines">
                  <span class="line line1"></span>
                  <span class="line line2"></span>
                  <span class="line line3"></span>
              </div>
              <ul class="menu-items">
                <li>
                      <a href="home.html">    
                          <span><i class="fa fa-home"></i> </span>                  
                          <span>Home</span>
                      </a>
                  </li>
                  <li>
            <a href="about.html">
            <span> <i class= "fa fa-user"></i></span>
            <span> About</span>
            </a>
          </li>
                  <li>
            <a href="menu.html">
            <span> <i class="fa fa-coffee"></i></span>
            <span> Menu</span>
            </a>
          </li>
                  <li>
            <a href="testimonies.html">
            <span> <i class= "fa fa-star-half-full"></i></span>
            <span> Ratings</span>
            </a>
          </li>
                  <li>
            <a href="login.html">
            <span> <i class= "fa fa-location-arrow"></i></span>
            <span> login</span>
            </a>
          </li>
              </ul>
          </div>
      </nav>

      <!-- book section -->
      <section class="book_section layout_padding">
        <div class="container">
          <div class="heading_container">
            <h2 style="color: aliceblue;"> Book A Table </h2>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form_container">
                <form action="logics/login.php" method="post">
                  <div>
                    <input type="text" class="form-control" placeholder="Your Name" />
                  </div>
                  <div>
                    <input type="tel" class="form-control" placeholder="Phone Number" />
                  </div>
                  <div>
                    <input type="email" class="form-control" placeholder="Your Email" />
                  </div>
                  <div>
                    <select class="form-control nice-select wide">
                      <option value="" disabled selected>How many persons? </option>
                      <option value="">2 </option>
                      <option value="">3 </option>
                      <option value="">4 </option>
                      <option value="">5 </option>
                      <option value="">6 </option>
                      <option value="">7 </option>
                      <option value="">8 </option>
                    </select>
                  </div>
                  <div>
                    <input type="date" class="form-control">
                  </div>
                  <div> 
                    <button class="btn_box" type="submit" name="add" width="100" class="btn btn-success">  Book Now
                       </button>
                   </div>
                 </form>
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end book section -->
      
      <!-- footer section -->
      <footer class="footer_section">
        <div class="container">
          <div class="row">
            <div class="col-md-4 footer-col">
              <div class="footer_contact">
                <h4>
                  Contact Us
                </h4>
                <div class="contact_link_box">
                  <a href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                      Location
                    </span>
                  </a>
                  <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                      Call +254 718243130
                    </span>
                  </a>
                  <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                      Suwama14@gmail.com
                    </span>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-4 footer-col">
              <div class="footer_detail">
                <a href="" class="footer-logo">
                  Suwama Delight Indian Restaurant
                </a>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                  Beatae magni consectetur totam quidem, deserunt accusamus, nihil optio itaque, 
                </p>
                <div class="footer_social">
                  <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
                  <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
                  <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
                  <a href="https://www.linkedin.com"><i class="fa fa-linkedin"></i></a>
                  <a href="https://www.snapchat.com"><i class="fa fa-snapchat"></i></a>
                  <a href="https://www.reddit.com"><i class="fa fa-reddit"></i></a>
                  <a href="https://www.whatsapp.com"><i class="fa fa-whatsapp"></i></a>
                  </div>
              </div>
            </div>
            <div class="col-md-4 footer-col">
              <h4>Opening Hours </h4>
              <p> Everyday </p>
              <p> 7.00 Am -12.00 Pm EAT </p>
            </div>
          </div>
          <div class="footer-info">
            <p>
              &copy; <span id="displayYear"></span> All Rights Reserved By Kibunja
            </p>
          </div>
        </div>
      </footer>
      <!-- footer section -->
      
</body>
</html>