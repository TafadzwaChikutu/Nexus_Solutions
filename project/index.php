<?php
session_start();
$cart_count = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Trizalac</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/menu_sideslide.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">
	<link rel="stylesheet" href="css/addtocart.css"> 

  </head>
  <body>
      <div class="menu-wrap">
        <nav class="menu navbar">
          <div class="icon-list navbar-collapse">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#video-area">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#services">Services</a>
              </li>                             
              <li class="nav-item">
                <a class="nav-link" href="#portfolios">Our Works</a>
              </li>            
                <li class="nav-item">
                <a class="nav-link" href="#about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#blog">Previous Projects</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="#subscribe">Subscribe</a>
              </li>
			  <li>
				<a href="cart.php" class="cart-icon">
					<i class="lnr lnr-cart"></i> Cart (<?php echo $cart_count; ?>)
				</a>
			  </li>
            </ul>
          </div>
        </nav> 
        <button class="close-button" id="close-button"><i class="lnr lnr-cross"></i></button>
      </div>      
  	<!-- Header Section Start -->

    <header id="video-area" data-stellar-background-ratio="0.5">    
      <div id="block" data-vide-bg="video/video"></div>
      <div class="fixed-top">
          <div class="container">
            <div class="logo-menu">
              <a href="index.html" class="logo"><span class="lnr lnr-diamond"></span> TRIZALAC</a>
              <button class="menu-button" id="open-button"><i class="lnr lnr-menu"></i></button>
              			  
            </div>
          </div>
      </div>
      <div class="overlay overlay-2"></div>      
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-10">
            <div class="contents text-center">
              <h1 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Trizalac</h1>
              <p class="lead  wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms">Innovative sales & marketing solutions. The key to your business success.</p>
            </div>
          </div>
        </div> 
      </div>      
    </header>
	
    <!-- Header Section End --> 


    <!-- Services Section Start -->
    <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Our <span>Services</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s"></p>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon">
                <i class="lnr lnr-pencil"></i>
              </div>
              <h4>Sales & Marketing Training</h4>
              <p>Our Sales and Marketing Training service is geared towards empowering your team with the knowledge and skills needed to excel in a competitive marketplace.</p>
              <a href="php/addtocart.php" method ="POST" class="btn btn-common btn-rm" action="php/addtocart.php">Add to Ticket</a>
			</div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon">
                <i class="lnr lnr-cog"></i>
              </div>
              <h4>Impactful Merchandising Display</h4>
              <p>With our Impactful Merchandising Display service, we help you create visually captivating and strategically designed displays that grab attention and drive sales.</p>
               <a href="#" class="btn btn-common btn-rm" id="salesTrainingBtn">Add to Ticket</a>
			</div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon">
                <i class="lnr lnr-chart-bars"></i>
              </div>
              <h4>Marketing & Design</h4>
              <p>Our Marketing and Design service combines creativity with strategic thinking to deliver impactful marketing solutions. </p>
              <a href="single-post.html" class="btn btn-common btn-rm">Add to Ticket</a>
			</div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon">
                <i class="lnr lnr-layers"></i>
              </div>
              <h4>Branded Corporate Gifts & Promotional Items</h4>
              <p>Our Branded Corporate Gifts & Promotional Items service offers a wide range of customizable merchandise that helps you leave a lasting impression on clients, partners, and employees.</p>
              <a href="single-post.html" class="btn btn-common btn-rm">Add to Ticket</a>
			</div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="1s">
              <div class="icon">
                <i class="lnr lnr-tablet"></i>
              </div>
              <h4>Digital Marketing</h4>
              <p>Our Digital Marketing service is designed to help businesses thrive in the online world.</p>
			  <a href="#" class="btn btn-common btn-rm add-to-cart" 
       data-product-id="1" data-product-price="19.99">
       Add to Ticket
    </a>
			</div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="item-boxes wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon">
                <i class="lnr lnr-briefcase"></i>
              </div>
              <h4>Venue Sourcing & Contact Negotiations</h4>
              <p>Our Venue Sourcing & Contact Negotiations service takes the hassle out of finding the perfect venue for your event.</p>
			  <a href="single-post.html" class="btn btn-common btn-rm">Add to Ticket</a>
			</div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services Section End -->

   

    
    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Our <span>Works</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">

Trizalac core focus is to provide innovative project & event solutions to the industry,<br>
whether into product,event or services. Our Goal is to provide the insight and<br>
experience to undertake & translate your company’s vision into a holistic approach.</p>
        </div>
        <div class="row">          
          <div class="col-md-12">
            <!-- Portfolio Controller/Buttons -->
            <div class="controls text-center wow fadeInUp" data-wow-delay=".6s">
              <a class="control mixitup-control-active btn btn-common" data-filter="all">
                All 
              </a>
              <a class="control btn btn-common" data-filter=".marketing">
                Training  
              </a>
              <a class="control btn btn-common" data-filter=".planning">
                Team Builiding
              </a>
              <a class="control btn btn-common" data-filter=".research">
                Online Conferences  
              </a>
            </div>
            <!-- Portfolio Controller/Buttons Ends-->          

            <!-- Portfolio Recent Projects -->
            <div id="portfolio" class="row wow fadeInUp" data-wow-delay="0.8s">
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing planning">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="img/portfolio/img1.jpg">
                      <img src="img/portfolio/img1.jpg" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix planning">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="img/portfolio/img2.jpg">
                      <img src="img/portfolio/img2.jpg" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix research">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="img/portfolio/img3.jpg">
                      <img src="img/portfolio/img3.jpg" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing research">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="img/portfolio/img4.jpg">
                      <img src="img/portfolio/img4.jpg" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix marketing planning">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="img/portfolio/img5.jpg">
                      <img src="img/portfolio/img5.jpg" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
              <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mix planning research">
                <div class="portfolio-item">
                  <div class="shot-item">
                    <a class="overlay lightbox" href="img/portfolio/img6.jpg">
                      <img src="img/portfolio/img6.jpg" alt="" />  
                      <i class="lnr lnr-plus-circle item-icon"></i>
                    </a>
                  </div>               
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 

   

    

    <!-- testimonial Section Start -->
    <div id="testimonial" class="section">
      <div class="container">
		<div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">About <span>Us</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Trizalac core focus is to provide innovative project and event solutions to the industry, whether into product, event or services. <br>Our Goal is to provide the insight and experience to undertake and translate your company’s vision into a holistic approach.</p>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-10 wow fadeInRight" data-wow-delay="0.2s">
            <div class="touch-slider owl-carousel owl-theme">
              <div class="testimonial-item">
                <img src="img/testimonial/Nalita.png" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>I am a visionary leader that continuously researches the industry,its technologies together with its content trends. <br>My key ability is to able to sustain & manage the business while concurrently anticipating where the industry is heading and innovating accordingly .</p>
                  <h3>Nelita</h3>
                  <span>CEO & Founder</span>
                </div>
              </div>
              
            </div>
          </div>
        </div>        
      </div>
    </div>
    <!-- testimonial Section Start -->

    

    <!-- Blog Section -->
    <section id="blog" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Previous <span>Projects</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">Our management consulting services focus on our clients' most critical issues and opportunities: strategy, marketing, organization, operations, technology, transformation, digital, advanced analytics, corporate finance, mergers & acquisitions and sustainability across all industries and geographies. <br>We bring deep, functional expertise, but are known for our holistic perspective: we capture value across boundaries and between the silos of any organization. <br>We have proven a multiplier effect from optimizing the sum of the parts, not just the individual pieces.</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.3s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="img/blog/img1.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                <a href="#">Sale and Marketing Training Program</a>
                </h3>
                <div class="meta-tags">
                  <span class="date"><i class="lnr lnr-calendar-full"></i>on Mar 23, 2022</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                </div>
                <p>
                Trizalac developed and delivered a comprehensive sales and marketing training program for a pharmaceutical company... 
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.6s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="img/blog/img2.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text"> 
                <h3>
                  <a href="#">Healthcare Exhibition and Trade Show</a>
                </h3>
                <div class="meta-tags">
                  <span class="date"><i class="lnr lnr-calendar-full"></i>on Mar 29, 2022</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                </div>
                <p>
               Description: Trizalac organized and managed a large-scale healthcare exhibition and trade show on behalf of a medical equipment manufacturer... 
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>

          <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 blog-item">
            <!-- Blog Item Starts -->
            <div class="blog-item-wrapper wow fadeInUp" data-wow-delay="0.9s">
              <div class="blog-item-img">
                <a href="single-post.html">
                  <img src="img/blog/img3.jpg" alt="">
                </a>                
              </div>
              <div class="blog-item-text">    
                <h3>
                  <a href="#">Business Model Analysis and Restructuring</a>
                </h3>
                <div class="meta-tags">
                  <span class="date"><i class="lnr lnr-calendar-full"></i>on Mar 21, 2018</span>
                  <span class="comments"><a href="#"><i class="lnr lnr-bubble"></i> 24 Comments</a></span>
                </div>
                <p>
                 Description: Trizalac conducted a thorough analysis of a healthcare organization's business model and provided strategic recommendations for improvement... 
                </p>
                <a href="single-post.html" class="btn btn-common btn-rm">Read More</a>
              </div>
            </div>
            <!-- Blog Item Wrapper Ends-->
          </div>
        </div>
      </div>
    </section>
    <!-- blog Section End -->

    <!-- Contact Section Start -->
    <section id="contact" class="section">
  <div class="container">
    <div class="row justify-content-md-center">          
      <div class="col-md-9 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">            
        <div class="contact-block">
          <div class="section-header">          
            <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Contact <span>Us</span></h2>
            <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          </div>
          <form id="contactForm" method="post" action="send.php"> <!-- Updated action attribute to point to send.php -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                  <div class="help-block with-errors"></div>
                </div>                                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <input type="email" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email"> <!-- Updated name attribute to "email" -->
                  <div class="help-block with-errors"></div>
                </div> 
              </div>
               <div class="col-md-12">
                <div class="form-group">
                  <input type="text" placeholder="Subject" id="msg_subject" class="form-control" name="subject" required data-error="Please enter your subject"> <!-- Updated name attribute to "subject" -->
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group"> 
                  <textarea class="form-control" placeholder="Your Message" rows="11" name="message" data-error="Write your message" required></textarea> <!-- Updated name attribute to "message" -->
                  <div class="help-block with-errors"></div>
                </div>
                <div class="submit-button text-center">
                  <button class="btn btn-common" id="submit" type="submit">Send Message</button>
                  <div id="msgSubmit" class="h3 text-center hidden"></div> 
                  <div class="clearfix"></div> 
                </div>
              </div>
            </div>            
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

    <!-- Contact Section End -->

    <!-- Subcribe Section Start -->
    <div id="subscribe" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Subscribe <span>Newsletter</span></h2>
          <hr class="lines wow zoomIn" data-wow-delay="0.3s">
          <p class="section-subtitle wow fadeIn" data-wow-duration="1000ms" data-wow-delay="0.3s">Subscribe to get all latest news from us.</p>
        </div>
        <div class="row justify-content-md-center">
          <div class="col-md-8">
              <form class="text-center form-inline wow fadeInUp" data-wow-delay="0.3s">
                <input class="mb-20 form-control" name="email" placeholder="Your Email Address">
                <button class="sub_btn">subscribe</button>
              </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Subcribe Section End -->

    <!-- Footer Section Start -->
    <footer>          
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="social-icons wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="0.3s">
              <ul>
                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
              </ul>
            </div>
            <div class="site-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="0.3s">
              <p>2023 Trizalac. All Rights Reserved</p>
            </div>  
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="lnr lnr-arrow-up"></i>
    </a>

    <div id="loader">
      <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
      </div>
    </div>    

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/nivo-lightbox.js"></script>
    <script src="js/owl.carousel.min.js"></script>    
    <script src="js/jquery.stellar.min.js"></script>    
    <script src="js/jquery.nav.js"></script>    
    <script src="js/smooth-scroll.js"></script>    
    <script src="js/smooth-on-scroll.js"></script>    
    <script src="js/wow.js"></script>    
    <script src="js/menu.js"></script>
    <script src="js/jquery.vide.js"></script>
    <script src="js/jquery.counterup.min.js"></script>    
    <script src="js/jquery.magnific-popup.min.js"></script>    
    <script src="js/waypoints.min.js"></script>    
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>     
    <script src="js/main.js"></script>
    <script src="addtocart.js"></script>
	   <script>
document.addEventListener("DOMContentLoaded", function () {
    // Get references to the "Add to Ticket" buttons
    const salesTrainingBtn = document.getElementById("salesTrainingBtn");
    // Add a click event listener to each button
    salesTrainingBtn.addEventListener("click", function (e) {
        e.preventDefault(); // Prevent the default behavior of the anchor tag (e.g., navigating to a URL)
        alert("Sales & Marketing Training added to ticket."); // Display a message (you can customize this)
    });
    // Repeat for other buttons
});
</script>


  </body>
</html>