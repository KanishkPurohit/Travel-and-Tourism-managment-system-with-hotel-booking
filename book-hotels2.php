<?php
include('db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script> -->

<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="assets/home.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" />

  
</head>

<body>
  <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand logo" href="#">TRAVELSPHERE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Destinations
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <div class="maindv">
              <div class="subdv">
                <h5>NORTH INDIA</h5>
                <a href="">Rajasthan</a>
                <a href="">Himachal Pradesh</a>
                <a href="">Uttarakhand</a>
                <a class="moretext" href="">More. . .</a>
              </div>
              <div class="subdv">
                <h5>SOUTH INDIA</h5>

                <a href="">Kerela</a>
                <a href="">Karnataka</a>
                <a href="">Tamil Nadu</a>
                <a class="moretext" href="">More. . . </a>
              </div>
              <div class="subdv">
                <h5>EAST INDIA</h5>
                <a href="">Assam</a>
                <a href="">Nagaland</a>
                <a href="">Sikkim</a>
                <a class="moretext" href="">More. . . </a>
              </div>
              <div class="subdv">
                <h5>WEST INDIA</h5>
                <a href="">Goa</a>
                <a href="">Gujarat</a>
                <a href="">Maharastra</a>
                <a class="moretext" href="">More. . . </a>
              </div>
            </div>

          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" target="_blank" href="book-hotels.php">
            Hotels
          </a>
          <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <div class="maindv">
                <div class="subdv">
                   <h5>City Wise</h5>
                   <a href="">Agra Hotels</a>
                   <a href="">Jaipur Hotels</a>
                   <a href="">Udaipur Hotels</a>
                   <a class="moretext" href="">More. . .</a>
                </div>
                <div class="subdv">
                    <h5>Wildlife Resorts</h5>
                    <a href="">Kanha National Park</a>
                   <a href="">Corbett National Park</a>
                   <a href="">Ranthambore National Park</a>
                   <a class="moretext" href="">More. . . </a>
                </div>
                <div class="subdv">
                     <h5>Beach Resorts</h5>
                     <a href="">The Park Calangute</a>
                   <a href="">Neelam The Grand</a>
                   <a href="">Alor Holiday Resort</a>
                   <a class="moretext" href="">More. . . </a>
                </div>
                <div class="subdv ">
                    <h5>Luxury Hotels</h5>
                   <a href="">hyatt,Bangalore</a>
                   <a href="">Leela Palace,Udaipur</a>
                   <a href="">Taj Palace,Delhi</a>
                   <a class="moretext" href="">More. . . </a>
                </div>
              </div>
          
            </div> -->
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Packages
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <div class="maindv">
              <div class="subdv">
                <h5>NORTH INDIA</h5>
                <a href="">Rajasthan</a>
                <a href="">Himachal Pradesh</a>
                <a href="">Uttarakhand</a>
                <a href="">Kerala</a>
                <a class="moretext" href="">More. . .</a>
              </div>
              <div class="subdv">
                <h5>Holiday by Interest</h5>
                <a href="">Wildlife</a>
                <a href="">Adventure</a>
                <a href="">HoneyMoon</a>
                <a href="">Beaches</a>
                <a class="moretext" href="">More. . . </a>
              </div>
              <div class="subdv">
                <h5>Popular Tour Packages</h5>
                <a href="">Frozen River Trek</a>
                <a href="">Classical Inndian Tour</a>
                <a href="">Golden Triangle Tour</a>
                <a href="">Sikkim Darjeeling Tour</a>
                <a class="moretext" href="">More. . . </a>
              </div>
              <div class="subdv">
                <h5>Luxury Train Tour</h5>
                <a href="">Palace On Wheels</a>
                <a href="">Heritage On Wheels</a>
                <a href="">Maharaja Express</a>
                <a class="moretext" href="">More. . . </a>
              </div>
            </div>

          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact Us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="border: 1px solid #ff6612;">
            Log In
          </button> -->
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 mr-2"><a href="logout.php"> Log Out</a>
         
          </button>
        
      </form>
    </div>
  </nav>
  
  
  <!-- =---------------------------------------------- -->
  <div class="container">
    <div class="plans-section" id="rooms">
      <div class="container">
        <h3 class="title-w3-agileits title-black-wthree">Rooms And Rates</h3>
        <div class="priceing-table-main">
          <div class="col-md-3 price-grid">
            <div class="price-block agile">
              <div class="price-gd-top">
                <img src="images/r1.jpg" alt=" " class="img-responsive" />
                <h4>Deluxe Room</h4>
              </div>
              <div class="price-gd-bottom">
                <div class="price-list">
                  <ul>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>

                  </ul>
                </div>
                <div class="price-selet">
                  <h3><span>$</span>320</h3>
                  <a href="admin/reservation.php">Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 price-grid ">
            <div class="price-block agile">
              <div class="price-gd-top">
                <img src="images/r2.jpg" alt=" " class="img-responsive" />
                <h4>Luxury Room</h4>
              </div>
              <div class="price-gd-bottom">
                <div class="price-list">
                  <ul>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  </ul>
                </div>
                <div class="price-selet">
                  <h3><span>$</span>220</h3>
                  <a href="admin/reservation.php">Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 price-grid lost">
            <div class="price-block agile">
              <div class="price-gd-top">
                <img src="images/r3.jpg" alt=" " class="img-responsive" />
                <h4>Guest House</h4>
              </div>
              <div class="price-gd-bottom">
                <div class="price-list">
                  <ul>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  </ul>
                </div>
                <div class="price-selet">
                  <h3><span>$</span>180</h3>
                  <a href="admin/reservation.php">Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 price-grid wthree lost">
            <div class="price-block agile">
              <div class="price-gd-top ">
                <img src="images/r4.jpg" alt=" " class="img-responsive" />
                <h4>Single Room</h4>
              </div>
              <div class="price-gd-bottom">
                <div class="price-list">
                  <ul>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                    <li><i class="fa fa-star-o" aria-hidden="true"></i></li>
                  </ul>
                </div>
                <div class="price-selet">
                  <h3><span>$</span> 150</h3>
                  <a href="admin/reservation.php">Book Now</a>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ---------------------------- -->

  <footer id="contact" class="footer">

    <div class="container">

      <div class="row">


        <div class="footer-col">
          <h4>company</h4>
          <ul>
            <li><a href="#">about us</a></li>
            <li><a href="#">our services</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">affiliate program</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>get help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">customer care</a></li>
            <li><a href="#">Package status</a></li>
            <li><a href="#">payment options</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>Legal Policy</h4>
          <ul>
            <li><a href="#">Terms and conditions</a></li>
            <li><a href="#">disclaimer</a></li>
            <li><a href="#">privacy policy</a></li>
            <li><a href="#">share experience</a></li>
          </ul>
        </div>

        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"> <i class="fab fa-facebook-f"></i> </a>
            <a href="#"> <i class="fab fa-twitter"></i> </a>
            <a href="#"> <i class="fab fa-instagram"></i> </a>
            <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
          </div>

        </div>


      </div>

    </div>
  </footer>
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
</body>

</html>