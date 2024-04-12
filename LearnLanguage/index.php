<?php
// Start session
session_start();

// Function to check if user is logged in
function is_logged_in() {
    return isset($_SESSION['user_id']) && isset($_SESSION['email']);
}

// Redirect user to login page if not logged in
function redirect_if_not_logged_in() {
    if (!is_logged_in()) {
        header("Location: ../view/login.php"); // Redirect to your login page
        exit();
    }
}

// Check if user is not logged in, then redirect to login page
redirect_if_not_logged_in();
?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>EDUCA online language learning app</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>
  

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>Educa</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                      <li class="scroll-to-section"><a href="../view/courses.php">Courses</a></li>
                      <li class="scroll-to-section"><a href="../view/progress_report.php">Check progress</a></li>    
                      <li class="scroll-to-section"><a href="..\view\forum.php">Engagement</a></li>    <!-- ***** for community engagement ***** -->
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-banner">
            <div class="item item-1">
              <div class="header-text">
                <span class="category">Our Courses</span>
                <h2>With Scholar Teachers, Everything Is Easier</h2>
                <p>Educa is a language learning website, that helps unleash your inner multilinguals!</p>
                <div class="buttons">
                      <!-- ***** will delete this  ***** -->

                  <div class="main-button">
                    <a href="#">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> What's Scholar?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-2">
              <div class="header-text">
                <span class="category">Best Result</span>
                <h2>Get the best result out of your effort</h2>
                <p> What are you waiting for? go ahead and explore.</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> What's the best result?</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="item item-3">
              <div class="header-text">
                <span class="category">Online Learning</span>
                <h2>Online Learning helps you save the time</h2>
                <p>You make it work for you, you take lessons at your own convienent</p>
                <div class="buttons">
                  <div class="main-button">
                    <a href="#">Request Demo</a>
                  </div>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-play"></i> What's Online Course?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="services section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="./assets/images/service-01.png" alt="online degrees">
            </div>
            <div class="main-content">
              <h4>Courses</h4>
              <p>There are free courses tailored to your needs</p>
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-02.png" alt="short courses">
            </div>
            <div class="main-content">
              <h4>Short Courses</h4>
              <p>You can take short interractive courses that you will enjoy. </p>
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="service-item">
            <div class="icon">
              <img src="assets/images/service-03.png" alt="web experts">
            </div>
            <div class="main-content">
              <h4>Experts</h4>
              <p>There are videos from experts explaining concept for easy understable</p>
              <div class="main-button">
                <a href="#">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section about-us">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-1">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Where shall we begin?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                   <p>Head to register now to be part of our community and take the assement test.</p>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How do we work together?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>We can work together by engaging; you can send us an email with your questions and experts will answer them.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Why EDUCA is the best?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                   <p>There are more than one languages that you can learn from, most languages are free and engaging. Also we have had possitive feedbacks from our past students.</p>
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Do we get the best support?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p>There are experts to assest you each step of the way; all you have to do is to engage with us.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>About Us</h6>
            <h2>What make us the best academy online?</h2>
            <p>There are more than one languages that you can learn from, most languages are free and engaging. Also we have had possitive feedbacks from our past students.</p>
            <div class="main-button">
              <a href="#">Discover More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="section courses" id="courses" >
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Latest Courses</h6>
            <h2>Latest Courses</h2>
          </div>
        </div>
      </div>
      <ul class="event_filter">
        <li>
          <a class="is_active" href="#!" data-filter="*"></a>
        </li>
        <li>
          <a href="#!" data-filter=".design"></a>
        </li>
        <li>
          <a href="#!" data-filter=".development"></a>
        </li>
        <li>
          <a href="#!" data-filter=".wordpress"></a>
        </li>
      </ul>
      <div class="row event_box">
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-01.jpg" alt=""></a>
              <span class="category">GA</span>
              <span class="price"><h6><em>$</em>160</h6></span>
            </div>
            <div class="down-content">
              <span class="author"> Bob Sowah</span>
              <h4>Learn GA</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6  development">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-02.jpg" alt=""></a>
              <span class="category">Ukrainian</span>
              <span class="price"><h6><em>$</em>340</h6></span>
            </div>
            <div class="down-content">
              <span class="author">Marie Doh</span>
              <h4>Tips for learning Ukrainian</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 design wordpress">
          <div class="events_item">
            <div class="thumb">
              <a href="#"><img src="assets/images/course-03.jpg" alt=""></a>
              <span class="category">Spanish</span>
              <span class="price"><h6><em>$</em>640</h6></span>
            </div>
            <div class="down-content">
              <span class="author">David Hutson</span>
              <h4>Learn Spanish</h4>
            </div>
          </div>
        </div>
        
          
       
      </div>
    </div>
  </section>

  <div class="section fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="150" data-speed="1000"></h2>
                   <p class="count-text ">Happy Students</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                  <p class="count-text ">Course Hours</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="50" data-speed="1000"></h2>
                  <p class="count-text ">Employed Students</p>
                </div>
              </div>
              <div class="col-lg-3 col-md-6">
                <div class="counter end">
                  <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                  <p class="count-text ">Years Experience</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="team section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/avatar1.jpg" alt="">
              <span class="category">UX Teacher</span>
              <h4>Sophia Rose</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/member-02.jpg" alt="">
              <span class="category">Student</span>
              <h4>Berekuso Rihanna</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/avatar3.jpg" alt="">
              <span class="category">Graduate Student</span>
              <h4>David Sampa</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="team-member">
            <div class="main-content">
              <img src="assets/images/member-04.jpg" alt="">
              <span class="category">Digital Animator</span>
              <h4>Kasoa Star</h4>
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

  <div class="section testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="owl-carousel owl-testimonials">
            <div class="item">
              <p>“I really enjoyed learning through EDUCA the interractive videos are very nice.”</p>
              <div class="author">
                <img src="assets/images/avatar1.jpg" alt="">
                <span class="category">Student</span>
                <h4>Sofia Rose</h4>
              </div>
            </div>
            <div class="item">
              <p>“The experts were very responsive; they were very quik with reponses”</p>
              <div class="author">
                <img src="assets/images/testimonial-author.jpg" alt="">
                <span class="category">UI Expert</span>
                <h4>Berekuso Rihanna</h4>
              </div>
            </div>
            <div class="item">
              <p>“EDUCA is free website that has many courses, i am now fluent in TWI! .”</p>
              <div class="author">
                <img src="assets/images/avatar3.jpg" alt="">
                <span class="category">Digital Animator</span>
                <h4>Bruce Wayne</h4>
                </h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 align-self-center">
          <div class="section-heading">
            <h6>TESTIMONIALS</h6>
            <h2>What they say about us?</h2>
            <p>
              We are free language learning website that gives you access to all the languages that are available for learning
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="section events" id="events">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Schedule</h6>
            <h2>Upcoming Events</h2>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/hausa.jpeg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Hausa</span>
                    <h4>Sentence contruction</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>16 Feb 2030</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>5 Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>$120</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/spanish.png" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Spanish</span>
                    <h4> Learn Spanish</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>24 Nov 2027</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>12 Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>$320</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-3">
                <div class="image">
                  <img src="assets/images/yoruba.jpeg" alt="">
                </div>
              </div>
              <div class="col-lg-9">
                <ul>
                  <li>
                    <span class="category">Full Stack</span>
                    <h4>Yoruba</h4>
                  </li>
                  <li>
                    <span>Date:</span>
                    <h6>12 Dec 2024</h6>
                  </li>
                  <li>
                    <span>Duration:</span>
                    <h6>48 Hours</h6>
                  </li>
                  <li>
                    <span>Price:</span>
                    <h6>$440</h6>
                  </li>
                </ul>
                <a href="#"><i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="contact-us section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6  align-self-center">
          <div class="section-heading">
            <h6>Contact Us</h6>
            <h2>Feel free to contact us anytime</h2>
            <p>Thank you for choosing our website. We provide you best learning Experience at absolutely 100% free of charge. You may support us by sharing our website to your friends.</p>
            <div class="special-offer">
              <span class="offer">off<br><em>50%</em></span>
              <h6>Valide: <em>24 April 2036</em></h6>
              <h4>Special Offer <em>50%</em> OFF!</h4>
              <a href="#"><i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="contact-us-content">
            <form id="contact-form" action="..\view\send_email.php" method="post">
              <div class="row">
                <div class="col-lg-12">
                  <fieldset>
                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                  </fieldset>
                </div>
                <div class="col-lg-12">
                  <fieldset>
                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                  </fieldset>

                </div>
                <div class="col-lg-12">
                    <fieldset>
                      <input type="text" id="language" name="language"  placeholder="Language"required>
                    </fieldset>

                <div class="col-lg-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                  </fieldset>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2036 EDUCA Organization. All rights reserved. &nbsp;&nbsp;&nbsp; Design: <a href="https://templatemo.com" rel="nofollow" target="_blank">EDUCA</a></p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/counter.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>