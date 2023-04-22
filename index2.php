<?php
include('db.php');
session_start();  
 if(!isset($_SESSION["id"]))  
 {  
      header("location:index.php");  
 }  
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>TRAVELSPHERE</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resort Inn Responsive , Smartphone Compatible web template , Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link rel="stylesheet" href="css/jquery-ui.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>

<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> -->
<!-- ------------------my inks -->

<link rel="stylesheet" href="assets/home.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<!--//fonts-->
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand logo" href="#">TRAVELSPHERE</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#"
              >Home <span class="sr-only">(current)</span></a
            >
          </li>
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
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
            <a
              class="nav-link dropdown-toggle" target="_blank"

              href="book-hotels2.php"
              
            >
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
            <a
              class="nav-link dropdown-toggle"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
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
    
    
        
    <hr/>
    <!-- ------------------------------------------------------------------------------- -->
    <div class="box">
      <div class="left-box">
        <div
          id="carouselExampleIndicators"
          class="carousel carousel1 slide"
          data-ride="carousel"
        >
          <ol class="carousel-indicators">
            <li
              data-target="#carouselExampleIndicators"
              data-slide-to="0"
              class="active"
            ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <a href=""
                ><img
                  class="imagec d-block w-100"
                  src="images/agra.jpg"
                  alt="First slide"
              /></a>
              <div class="carousel-caption d-none d-sm-block">
                <h1>Golden Traingle Tour</h1>
                <p>6 Nights -7 Days</p>
              </div>
            </div>
            <div class="carousel-item">
              <a href="">
                <img
                  class="imagec d-block w-100"
                  src="images/adikailsah.jpg"
                  alt="Second slide"
              /></a>
              <div class="carousel-caption d-none d-sm-block">
                <h1>Adi Kailash Trek</h1>
                <p>6 Nights-7 Days</p>
              </div>
            </div>
            <div class="carousel-item">
              <a href=""
                ><img
                  class="imagec d-block w-100"
                  src="images/chardham.jpg"
                  alt="Third slide"
              /></a>
              <div class="carousel-caption d-none d-sm-block">
                <h1>Chardham Yatra</h1>
                <p>11 Nights-12 Days</p>
              </div>
            </div>
            <div class="carousel-item">
              <a href=""
                ><img
                  class="imagec d-block w-100"
                  src="images/laddhak.jpg"
                  alt="fourth slide"
              /></a>
              <div class="carousel-caption d-none d-sm-block">
                <h1>Frozen River Trek</h1>
                <p>12 Nights-13 Days</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="right-box">
        <div class="box2">
          <h1>
            Let us plan you a <br />
            perfect <span class="autoinput"></span>
          </h1>
          <p>Personalised, well-crafted tour packages for best experiences.</p>

          <div class="box3">
            <div class="package">
              <div class="text">
                <div class="pack">
                  <h3>Wildlife</h3>
                  <br />
                  <p>20+ Packages</p>
                </div>

                <img
                  src="images/wildlife.svg"
                  alt=""
                  style="width: 40px; height: 40px; float: right"
                />
              </div>
              <div class="photoes">
                <a href=""><img src="images/zebra.jpg" alt="" /></a>
              </div>
            </div>
            <div class="package">
              <div class="text">
                <div class="pack">
                  <h3>Heritage</h3>
                  <br />
                  <p>20+ Packages</p>
                </div>

                <img
                  src="images/heritage.svg"
                  alt=""
                  style="width: 40px; height: 40px; float: right"
                />
              </div>
              <div class="photoes">
                <a href=""><img src="images/heritage.jpg" alt="" /></a>
              </div>
            </div>
            <div class="package">
              <div class="text">
                <div class="pack">
                  <h3>Trekking</h3>
                  <br />
                  <p>20+ Packages</p>
                </div>

                <img
                  src="images/trekking.svg"
                  alt=""
                  style="width: 40px; height: 40px; float: right"
                />
              </div>
              <div class="photoes">
                <a href=""> <img src="images/trekking.jpg" alt="" /></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<hr>
    <!-- --------------------------------------------------------------------------------------------- -->
<div class="container-fluid">
  <div class="env">
    <div class="texts">
      <h3>Top Trending India Holiday Destinations</h5>
    </div>
    <div class="sliderr">
      <div class="boxes">
        <figure><img src="images/new/rajesthan.jpg" alt="">
        <div class="overlayy"></div>
      <div class="button"><a href="">View Packages</a></div>
      </figure>
        <div class="details">
         <h5>Rajasthan</h5>
         <p>80 Tour Packages</p>
        </div>
      </div>
      <div class="boxes">
        <figure><img src="images/new/goa.jpg" alt="">
        <div class="overlayy"></div>
      <div class="button"><a href="">View Packages</a></div>
      </figure>
        <div class="details">
         <h5>Goa</h5>
         <p>20 Tour Pacakges</p>
        </div>
      </div>
      <div class="boxes">
        <figure><img src="images/new/kerala.jpg" alt="">
        <div class="overlayy"></div>
      <div class="button"><a href="">View Packages</a></div>
      </figure>
        <div class="details">
         <h5>Kerala</h5>
         <p>50 Tour Packages</p>
        </div>
      </div>
      <div class="boxes">
       <figure><img src="images/new/uttrakhand.jpg" alt="">
      <div class="overlayy"></div>
    <div class="button"><a href="">View Packages</a></div>
    </figure>
       <div class="details">
         <h5>Uttarakhand</h5>
         <p>30 Tour Packages</p>
       </div> 
      </div>
      <div class="boxes">
       <figure><img src="images/new/gujrat.jpg" alt="">
      <div class="overlayy"></div>
    <div class="button"><a href="">View Packages</a></div>
    </figure>
       <div class="details">
        <h5>Gujrat</h5>
        <p>40 Tour Packages</p>
       </div> 
      </div>
    </div>

  </div>
  <hr>
<!-- ----------------------- -->
  <div class="env">
    <div class="texts">
      <h3>Trending Tour Packages</h5>
    </div>
    <div class="sliderr">
      <div class="boxes">
        <figure><img src="images/new2/red fort.jpg" alt="">
        <div class="overlayy"></div>
      <div class="button"><a href="">View Packages</a></div>
      </figure>
        <div class="details">
         <h5>Classical India Tour</h5>
         <p>12 Nights - 13Days</p>
        </div>
      </div>
      <div class="boxes">
        <figure><img src="images/new2/tiger.jpg" alt="">
        <div class="overlayy"></div>
      <div class="button"><a href="">View Packages</a></div>
      </figure>
        <div class="details">
         <h5>Classsical Safari Tour <br>in Ranthambore</h5>
         <p>4 Nights - 5 Days</p>
        </div>
      </div>
      <div class="boxes">
        
        <figure><img src="images/new2/temple.jpg" alt="">
        <div class="overlayy"></div>
      <div class="button"><a href="">View Packages</a></div>
      </figure>
        <div class="details">
         <h5>Temple Tour South India</h5>
         <p>12 Nights - 13Days</p>
        </div>
      </div>
      <div class="boxes">
       <figure><img src="images/new2/waterfall.jpg" alt="">
      <div class="overlayy"></div>
    <div class="button"><a href="">View Packages</a></div>
    </figure>
       <div class="details">
         <h5>Best of Waterfalls</h5>
         <p>4 Nights - 5 Days</p>
       </div> 
      </div>
      <div class="boxes">
       <figure><img src="images/new2/adiyogi2.jpg" alt="">
      <div class="overlayy"></div>
    <div class="button"><a href="">View Packages</a></div>
    </figure>
       <div class="details">
        <h5>Divine Adiyogi</h5>
        <p>4 Nights - 5 Days</p>
       </div> 
      </div>
    </div>

  </div>
<hr>

<div class="env env2">
  <div class="texts">
    <h3>Themes You Can Explore</h5>
  </div>
   
  <div class="sliderr">
     <div class="boxes2">
       <figure><img src="images/new3/tiger.svg" alt=""></figure>
       <span> WILDLIFE </span>      

     </div>
     <div class="boxes2">
       <figure><img src="images/new3/pilgrimage.svg" alt=""></figure>
       <span> PILGRIMAGE </span>      

     </div>
     <div class="boxes2">
       <figure><img src="images/new3/hillstation.svg" alt=""></figure>
       <span> HILLSTATION </span>

     </div>
     <div class="boxes2">
       <figure><img src="images/new3/heritage.svg" alt=""></figure>
       <span> HERITAGE </span>

     </div>
     <div class="boxes2">
       <figure><img src="images/new3/beach.svg" alt=""></figure>
       <span> BEACH </span>

     </div>
     <div class="boxes2">
       <figure><img src="images/new3/advemture.svg" alt=""></figure>
       <span> ADVENTURE </span>

     </div>

  </div>

</div>
<hr>

<div class="env env3">
  <div class="texts">
    <h3>Themes You Can Explore</h5>
  </div>

  <div class="sliderr1">
    <div class="luxery">
      <figure><img src="images/new4/palace on wheels.webp" alt="">
        <span>Best Deals</span>
        <h3>PALACE ON WHEELS</h3>
        <div class="overlayy"></div>
      <div class="button"><a href="">View Packages</a></div>
    </div> 
    </figure>
    
    <div class="luxery">
      <figure><img src="images/new4/maharaja.webp" alt="">
        <span>Best Deals</span>
        <h3>MAHARAJA</h3>
        <div class="overlayy"></div>
      <div class="button"><a href="">View Packages</a></div>
    </div>
    </figure>
    <div class="luxery">
      <figure><img src="images/new4/golden chariot.webp" alt="">
        <span>Best Deals</span>
        <h3>GOLDEN CHARIOT</h3>
        <div class="overlayy"></div>
      <div class="button"><a href="">View Packages</a></div>
    </div>
    </figure>
    <div class="luxery">
      <figure><img src="images/new4/deccan odyssey.webp" alt="">
        <span>Best Deals</span>
        <h3>DECCAN ODYSSEY</h3>
        <div class="overlayy"></div>
      <div class="button"><a href="">View Packages</a></div>
    </div>
    </figure>
  </div>

  
</div>

</div>

<div class="conatiner-fluid mainbox">
  <div class="env4">
    <div class="leftcon">
      <figure><img src="images/new4/ganga aarti.jpg" alt=""></figure>
    </div>
    <div class="rightcon">
      <h2>About Incredible <span>INDIA . . .</span> </h2>
      <div class="para">
        <div class="paraleft">
          <p>Interesting and Intriguing, India offers incredible holiday experiences through its cultural, topography, and wildlife diversity. With these amazing and unique experiences, this south Asian country conveniently finds its way into the world tourism map as one of the finest destinations for a holistic vacation.</p>
          <p>India establishes its identity as the country of architectural masterpieces, making it an ideal travel destination to plan a heritage tour in the world. While Taj Mahal makes for the major draw on an India tour, there are a plethora of monuments and edifices in every India travel guide displaying the fine architecture and grandiose of different eras in the country.</p>
          <p>The diverse Indian topography adorned with the impressive Himalayas; long stretches of coastline; expansive hot, cold and white salt deserts; dense forests; alpine meadows and lakes; and scenic waterfalls pique the tourists’ interest.</p>
        </div>
        <div class="pararight">
          <p>Along with the best nature sightseeing tours, India offers an opportunity to visitors to have a little adventure of their own. The numerous spell-binding and less-trodden trails give trekking tour opportunities in South Asia unlike any other.</p>
          <p>India Tours offers a chance to explore its biodiversity in the country's many national parks and wildlife reserves. An enthralling experience entails in the India wildlife tour packages that take tourists to the habitats of Royal Bengal Tigers, one-horned rhinos, and snow leopards amongst many rare, endangered, and unique species of flora and fauna.</p>
        </div>
      </div>
    </div>
  </div>
  
</div>
<!-- contact us------------------ -->

<section class="contact-w3ls m-3 " id="contact">
	<div class="container m-auto">
		<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2 m-auto" data-aos="flip-left">
			<div class="contact-agileits">
				<h4>Contact Us</h4>
				<p class="contact-agile2">Sign Up For Our News Letters</p>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" id="phone" required >
							<p class="help-block"></p>
						
                    </div>
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>
						
                    </div>
                    
                    
                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">	
				</form>
				<?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
					
					
					if(mysqli_query($con,$sql))
					echo"";
					
				}
				?>
			</div>
		</div>
		
		<div class="clearfix"></div>
	</div>
</section>

   <!-- ---------------------------------------foooter---------------------- -->

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
 <!-- ----------------------------------------------------------------------------------- -->
 
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script>
      var typed = new Typed(".autoinput", {
        strings: ["Indian holiday.", "Tour.", "Travel Destination."],
        typeSpeed: 40,
        backSpeed: 40,
        loop: true,
      });
    </script>
    
</body>
</html>


