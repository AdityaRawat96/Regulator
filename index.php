<?php
if(!isset($_COOKIE["heldonid"]))
{
  ?>
  <!doctype html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description" content="HELDON, Heldon secure solutions, buy a new gas regulator, get new gas regulator at your home">
    <meta name="keyword" content="heldon, regulator, gas regulator, regulators, heldon regulator">
    <title>HELDON</title>

    <!--Favicon-->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!--Bootstrap-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--Youtube Video Popup-->
    <link rel="stylesheet" href="assets/plugins/videoPopup/videoPopup.css">

    <!--Animate Svg-->
    <link rel="stylesheet" href="assets/plugins/animateImg/demo.css">
    <link rel="stylesheet" href="assets/plugins/animateImg/demo-grid.css">

    <!--Map-->
    <link rel="stylesheet" href="assets/plugins/map/map-style.css">

    <!--Testimonials-->
    <link rel="stylesheet" href="assets/plugins/testimonial/testimonial.html">

    <!--Main Css-->
    <link rel="stylesheet" href="assets/css/custom.min.css">

    <!--Mobile Responsive-->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!--Scroll Animations-->
    <link rel="stylesheet" href="assets/plugins/waypoints/animate.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <style>
    #fpwdLink{
      color:white;
    }
    #fpwdLink:hover{
      color:yellow;
    }
    </style>
    <style media="screen">

    /* Hide HTML5 Up and Down arrows. */
    input[type="number"]::-webkit-outer-spin-button, input[type="number"]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    input[type="number"] {
      -moz-appearance: textfield;
    }
    </style>
    <script src="myscript.js"></script>

  </head>
  <body>
    <div class="nicescroll-box">
      <div class="wrap">
        <!--Preloader-->
        <div class="se-pre-con"></div>
        <!--Preloader-->

        <!--Navigation Bar-->
        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                <img class="lWhite" src="assets/images/logo_alt.png" style="height:80px;width:80px;">
                <img class="lBlack" src="assets/images/logo.png" style="height:60px;width:60px;">
              </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="navbar-right">
                <ul class="nav navbar-nav">
                  <li><a href="#home-section" class="active">Home</a></li>
                  <li><a href="#info-section">About</a></li>
                  <li><a href="#feature-section">Features</a></li>
                  <li><a href="#team-section">Products</a></li>
                  <li><a href="#testimonial-section">Testimonials</a></li>
                  <li><a href="#contact-section">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <!--Navigation Bar-->

        <!--Banner Section-->
        <section id="home-section" class="main-banner">
          <div class="bg-gradient">
            <div class="container">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <!--Banner Left-Text-->
                  <div class="banner-text">
                    <h1 class="big-text">Our Motive is to deliver best engineered regulators</h1>
                    <p class="content">We ensure customer satisfaction!</p>

                  </div>
                </div>
                <div class="col-md-5 col-sm-6 col-xs-12 pull-right">
                  <!--Login Div-->
                  <div class="loginDiv clearfix">
                    <h2 class="login-title">Enter credentials to login</h2>
                    <form autocomplete="off">
                      <div class="form-group" onclick="$('#loginError').css('display','none');">
                        <input class="form-control myInput" type="text" placeholder="Enter username" id="user" required>
                        <span class="input-icon"><i class="fa fa-user"></i></span>
                      </div>
                      <div class="form-group" onclick="$('#loginError').css('display','none');">
                        <input class="form-control myInput" type="password" placeholder="Enter password" id="pwd" required>
                        <span class="input-icon"><i class="fa fa-lock"></i></span>
                      </div>
                      <div class="form-group" style="display:none;" id="loginError">
                        <center>
                          <small style="color:red;"><strong>Invalid credentials!</strong></small>
                        </center>
                      </div>
                      <div class="form-group">
                        <span class="form-control myInput" style="color:white;"><small style="position:relative; top:12px;">Keep me logged in!</small></span>
                        <span class="input-icon"><input type="checkbox" id="remember"></i></span>
                      </div>
                      <div class="text-center">
                        <button type="button" onclick="loginFunction();">Continue</button>
                      </div>
                      <div class="form-group">
                        <span class="form-control myInput" style="color:white;"><a href="pages/php/forgotPassword.php" id="fpwdLink"><small style="position:relative; top:12px;">Forgot Password?</small></a></span>
                        <span class="input-icon"><i class="fas fa-question-circle"></i></span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Banner Section-->

        <!--Who we are Section-->
        <section id="info-section" class="sectionP60">
          <div class="container">
            <div class="col-md-5 col-sm-12 col-xs-12">
              <!--Section Heading-->
              <div class="heading animated fadeleft">
                <h1>Who we are?</h1>
                <span>W</span>
              </div>

              <div class="content animated fadeleft">
                <p>Our Regulators meet the best of market needs.We provide the finest quality of regulators to the clients.
                  Our production unit always keep testing the limits of regulators.
                  We ensure a good quality product. Each distributor makes sure that our clients get qood quality product in optimized cost.</p>
                  <p class="highlight-text">We are a Multilevel-Marketting(MLM) experts.</p>
                </div>
              </div>

              <!--Youtube Video Thumb-->
              <div class="col-md-6 col-md-offset-1 col-sm-8 col-sm-offset-0 col-xs-12">
                <div class="orange-div animated fadedown" style="animation-delay: .45s;"></div>

                <div class="video-thumb animated faderight">
                  <!--Youtube Video Link-->
                  <a class="videoPopup" href="https://youtu.be/cZ9g_fjt5rM">
                    <span class="play-icon"><i class="fa fa-play light"></i></span>
                  </a>
                  <!--Video Thumb Image-->
                  <img class="img-responsive" src="assets/images/new.jpg" alt="image">
                </div>
              </div>
            </div>
          </section>
          <!--Services Section-->

          <!--Our Features Section-->
          <section id="feature-section" class="bg-img">
            <div class="bgTColor sectionP60">
              <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                  <!--Section Heading-->
                  <div class="heading dark-bg text-center animated fadedown">
                    <h1>OUR Features</h1>
                    <span>O</span>
                  </div>

                  <div class="content animated fadeup">
                    <p class="white">The regulator is often the first component of a gas delivery system and the first opportunity for contaminants to enter the system.</p>
                    <p class="bold white">A product that significantly increases performance.</p>
                  </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12 sectionP40">

                  <!--Feature 1-->
                  <div class="col-md-3 col-sm-3 col-xs-12 p0">
                    <div class="feature animated fadein">
                      <div class="feature-icon">
                        <i class="fab fa-slack light"></i>
                      </div>
                      <h4 class="feature-title">Great Variety</h4>
                      <p class="feature-desc">We supply a comprehensive range of diffusion resistant gas pressure regulators.</p>
                    </div>
                  </div>

                  <!--Feature 2-->
                  <div class="col-md-3 col-sm-3 col-xs-12 p0">
                    <div class="feature animated fadein" style="animation-delay: .15s;">
                      <div class="feature-icon">
                        <i class="fa fa-align-left light"></i>
                      </div>
                      <h4 class="feature-title">High Performance</h4>
                      <p class="feature-desc">Our regulators give rapid response, also they contribute in applied innovations such as the integrated valve.</p>
                    </div>
                  </div>

                  <!--Feature 3-->
                  <div class="col-md-3 col-sm-3 col-xs-12 p0">
                    <div class="feature animated fadein" style="animation-delay: .3s;">
                      <div class="feature-icon">
                        <i class="fa fa-rupee light"></i>
                      </div>
                      <h4 class="feature-title">Save Money</h4>
                      <p class="feature-desc">We provide highly optimized regulators with no leakage and also with best valve quality.</p>
                    </div>
                  </div>

                  <!--Feature 4-->
                  <div class="col-md-3 col-sm-3 col-xs-12 p0">
                    <div class="feature animated fadein" style="animation-delay: .45s;">
                      <div class="feature-icon">
                        <i class="fa fa-hourglass-1 light"></i>
                      </div>
                      <h4 class="feature-title">Save Time</h4>
                      <p class="feature-desc">We provide new and good quality regulators in no time just on one click from your home.</p>
                    </div>
                  </div>

                  <!--Feature 5-->
                  <div class="col-md-3 col-sm-3 col-xs-12 p0">
                    <div class="feature animated fadein">
                      <div class="feature-icon">
                        <i class="fa fa-chart-line light"></i>
                      </div>
                      <h4 class="feature-title">High Compressors</h4>
                      <p class="feature-desc">Our regulators provide home and workshop environments to perform an assortment of jobs.</p>
                    </div>
                  </div>

                  <!--Feature 6-->
                  <div class="col-md-3 col-sm-3 col-xs-12 p0">
                    <div class="feature animated fadein" style="animation-delay: .15s;">
                      <div class="feature-icon">
                        <i class="fab fa-angellist light"></i>
                      </div>
                      <h4 class="feature-title">Easy Installation</h4>
                      <p class="feature-desc">We provide regulators with one step installation, So no more guides are required.</p>
                    </div>
                  </div>

                  <!--Feature 7-->
                  <div class="col-md-3 col-sm-3 col-xs-12 p0">
                    <div class="feature animated fadein" style="animation-delay: .3s;">
                      <div class="feature-icon">
                        <i class="fa fa-globe light"></i>
                      </div>
                      <h4 class="feature-title">Fully Compatible</h4>
                      <p class="feature-desc">Our regulators are fully campatible with all types of gas cylinders, whether its commercial or home use.</p>
                    </div>
                  </div>

                  <!--Feature 8-->
                  <div class="col-md-3 col-sm-3 col-xs-12 p0">
                    <div class="feature animated fadein" style="animation-delay: .45s;">
                      <div class="feature-icon">
                        <i class="far fa-heart light"></i>
                      </div>
                      <h4 class="feature-title">Safety First!</h4>
                      <p class="feature-desc">The components used in our regulators are of superior quality, To ensure there is no risk of leakage or faliure.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--Our Features Section-->

          <!--Reasons Section 1-->
          <section class="sectionP60" style="background: #fff;">
            <div class="container">

              <!--Laptop Image-->
              <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12">
                <img class="img-responsive animated bounce" src="assets/images/laptop-front.png" alt="image">
              </div>

              <div class="col-md-5 col-md-offset-0 col-sm-8 col-sm-offset-2 col-xs-12">

                <!--Section Heading-->
                <div class="heading animated faderight">
                  <h1>Reasons to choose us</h1>
                  <span>R</span>
                </div>

                <!--All Reasons-->
                <ul class="ul-style">
                  <li class="animated faderight">Our flexible pricing is built around our clients' needs.</li>
                  <li class="animated faderight">Our customer support service is always happy to help!</li>
                  <li class="animated faderight">Excellent product quality.</li>
                  <li class="animated faderight">Most products in stock.</li>
                  <li class="animated faderight">Same day delivery.</li>
                </ul>

              </div>
            </div>
          </section>
          <!--Reasons Section 1-->

          <!--Our Team Section-->
          <section id="team-section" class="bg-img">
            <div class="bgTColor sectionP60">
              <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                  <!--Section Heading-->
                  <div class="heading dark-bg text-center animated fadedown">
                    <h1>Our Products</h1>
                    <span>O</span>
                  </div>

                  <div class="content animated fadeup">
                    <p class="white">Gas regulators from HELDON include a broad range of single and multi-stage regulators to suit most fuel gas welding, cutting and heating processes, and compressed gas applications.</p>
                  </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 sectionP60 pb0">
                  <div class="row">
                    <div class="content">
                      <div class="grid">

                        <!--Team Member 1-->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="team-member animated fadeup">
                            <!--Member Image-->
                            <div class="pieces" style="background-image:url('assets/images/team/2b.png')" data-image-alt="assets/images/team/2b.png"></div>
                            <!--Member Name-->
                            <h3 class="member-name">REX regulator</h3>
                            <!--Member Designation-->
                            <span class="member-designation">Commercial</span>
                          </div>
                        </div>

                        <!--Team Member 2-->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="team-member animated fadeup" style="animation-delay: .15s">
                            <!--Member Image-->
                            <div class="pieces" style="background-image:url('assets/images/team/1b.png')" data-image-alt="assets/images/team/1b.png"></div>
                            <!--Member Name-->
                            <h3 class="member-name">Low pressure regulator</h3>
                            <!--Member Designation-->
                            <span class="member-designation">Home</span>
                          </div>
                        </div>

                        <!--Team Member 3-->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="team-member animated fadeup" style="animation-delay: .3s">
                            <!--Member Image-->
                            <div class="pieces" style="background-image:url('assets/images/team/3b.png')" data-image-alt="assets/images/team/3b.png"></div>
                            <!--Member Name-->
                            <h3 class="member-name">Basic regulator</h3>
                            <!--Member Designation-->
                            <span class="member-designation">Home</span>
                          </div>
                        </div>

                        <!--Team Member 4-->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                          <div class="team-member animated fadeup" style="animation-delay: .45s">
                            <!--Member Image-->
                            <div class="pieces" style="background-image:url('assets/images/team/4b.png')" data-image-alt="assets/images/team/4b.png"></div>
                            <!--Member Name-->
                            <h3 class="member-name">Regulator (300 BAR)</h3>
                            <!--Member Designation-->
                            <span class="member-designation">Commercial</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!--Testimonial Section-->
          <section id="testimonial-section" class="testimonial-bg">
            <div class="bg-color sectionP60">
              <div id="container-general" class="ready anim-section-features anim-section-desc anim-section-quote">

                <section id="section-quote">
                  <!--Section Heading-->
                  <div class="heading white-bg text-center animated fadedown">
                    <h1>What people say?</h1>
                    <span>W</span>
                  </div>

                  <!--Left Bubble Images-->
                  <div class="container-pe-quote left">
                    <div class="pp-quote li-quote-1" data-textquote="quote-text-1">
                      <div class="img animated bounce" style=""></div>
                    </div>

                    <div class="pp-quote li-quote-2" data-textquote="quote-text-2">
                      <div class="img animated bounce"></div>
                    </div>

                    <div class="pp-quote li-quote-3" data-textquote="quote-text-3">
                      <div class="img animated bounce"></div>
                    </div>

                    <div class="pp-quote li-quote-4 active" data-textquote="quote-text-4">
                      <div class="img animated bounce"></div>
                    </div>

                    <div class="pp-quote li-quote-5" data-textquote="quote-text-5">
                      <div class="img animated bounce"></div>
                    </div>

                    <div class="pp-quote li-quote-6" data-textquote="quote-text-6">
                      <div class="img animated bounce"></div>
                    </div>
                  </div>
                  <!--Left Bubble Images-->

                  <!--Center Testimonials-->
                  <div class="container-quote carousel-on">

                    <!--Testimonial 1-->
                    <div class="quote quote-text-3 hide-bottom" data-ppquote="li-quote-3">
                      <p>
                        'Fast Service!'
                      </p>
                      <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Nidhi Singh</div>
                      </div>
                    </div>

                    <!--Testimonial 2-->
                    <div class="quote quote-text-4 show" data-ppquote="li-quote-4">
                      <p>
                        'Nice Products!'
                      </p>
                      <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Pushkar Tripathi</div>
                      </div>
                    </div>

                    <!--Testimonial 3-->
                    <div class="quote hide-bottom quote-text-5" data-ppquote="li-quote-5">
                      <p>
                        'Good Product!'
                      </p>
                      <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Suresh Sharma</div>
                      </div>
                    </div>

                    <!--Testimonial 4-->
                    <div class="quote hide-bottom quote-text-6" data-ppquote="li-quote-6">
                      <p>
                        'Awesome Services!'
                      </p>
                      <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Gyan Rathi</div>
                      </div>
                    </div>

                    <!--Testimonial 5-->
                    <div class="quote hide-bottom quote-text-7" data-ppquote="li-quote-7">
                      <p>
                        'Good Product!'
                      </p>
                      <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Ankit Sharma</div>
                      </div>
                    </div>

                    <!--Testimonial 6-->
                    <div class="quote hide-bottom quote-text-8" data-ppquote="li-quote-8">
                      <p>
                        'Good Quality Products.'
                      </p>
                      <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Udit Singh</div>
                      </div>
                    </div>

                    <!--Testimonial 7-->
                    <div class="quote hide-bottom quote-text-9" data-ppquote="li-quote-9">
                      <p>
                        'Long lasting products!'
                      </p>
                      <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Krishna Bisht</div>
                      </div>
                    </div>

                    <!--Testimonial 8-->
                    <div class="quote hide-bottom quote-text-10" data-ppquote="li-quote-10">
                      <p>
                        'Acha regulator hai!'
                      </p>
                      <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Mohit Tiwari</div>
                      </div>
                    </div>

                    <!--Testimonial 9-->
                    <div class="quote hide-bottom quote-text-11" data-ppquote="li-quote-11">
                      <p>
                        'Nice One!'
                      </p>
                      <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Rajesh Koranga</div>
                      </div>
                    </div>

                    <!--Testimonial 10-->
                    <div class="quote hide-bottom quote-text-13" data-ppquote="li-quote-13">
                      <p>
                        'Low and Optimized cost.'
                      </p>
                      <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Anjali Thapa</div>
                      </div>
                    </div>

                    <!--Testimonial 11-->
                    <div class="quote quote-text-1 hide-bottom" data-ppquote="li-quote-1">
                      <p>
                        'Good Regulator!'
                      </p>
                      <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Pooja Mehra</div>
                      </div>
                    </div>
                    <!--Testimonial 12-->
                    <div class="quote quote-text-2 hide-bottom" data-ppquote="li-quote-2">
                      <p>
                        'Good Quality Product!'
                      </p>
                      <div class="container-info">
                        <div class="pp"></div>
                        <div class="name">Surav Phulera</div>
                      </div>
                    </div>
                  </div>

                  <!--Right Bubble Images-->
                  <div class="container-pe-quote right">
                    <div class="pp-quote li-quote-7" data-textquote="quote-text-7">
                      <div class="img animated bounce"></div>
                    </div>

                    <div class="pp-quote li-quote-8" data-textquote="quote-text-8">
                      <div class="img animated bounce"></div>
                    </div>

                    <div class="pp-quote li-quote-9" data-textquote="quote-text-9">
                      <div class="img animated bounce"></div>
                    </div>

                    <div class="pp-quote li-quote-10" data-textquote="quote-text-10">
                      <div class="img animated bounce"></div>
                    </div>

                    <div class="pp-quote li-quote-11" data-textquote="quote-text-11">
                      <div class="img animated bounce"></div>
                    </div>

                    <div class="pp-quote li-quote-13" data-textquote="quote-text-13">
                      <div class="img animated bounce"></div>
                    </div>
                  </div>

                </section>

              </div>
            </div>
          </section>

          <!--section-12-Google-Map-->
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe width="100%" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=Gali%20No.%202%2C%20Aram%20Ngr%2C%20Nabi%20Karim%2C%20New%20Delhi%2C%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
              </iframe>
              <a href="https://www.crocothemes.net"></a>
            </div>
            <style>
            .mapouter{
              position:relative;
              text-align:right;
              height:350px;
              width:100%;
            }
            .gmap_canvas {
              overflow:hidden;
              background:none!important;
              height:350px;
              width:100%;
            }
            </style>
          </div>
          <!--section-12-Google-Map-->


          <!-- Footer Section -->
          <section id="contact-section" class="footer footer-bg">
            <div class="bg-gradient-down sectionP60 pb0">
              <div class="container">
                <div class="col-md-7 col-sm-7 col-xs-12 pull-right resCont">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <!--Contact Form Heading-->
                    <div class="heading dark-bg animated faderight">
                      <h1>Get in touch.</h1>
                      <span>G</span>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                      <!--Contact Form-->
                      <form>
                        <div class="form-group col-sm-6 animated fadeup">
                          <input class="myInput" placeholder="Full Name" id="queryname" type="text" autocomplete="off" style="text-transform: capitalize" maxlength="30">
                          <span class="input-icon"><i class="fa fa-user"></i></span>
                          <small id="nameError" style="color:red; display:none; font-size:16px;">Please enter valid name.</small>
                        </div>
                        <div class="form-group col-sm-6 animated fadeup" style="animation-delay: .15s">
                          <input class="myInput" placeholder="Email Address" id="queryemail" type="text" autocomplete="off" maxlength="50">
                          <span class="input-icon"><i class="fas fa-envelope-open-text"></i></span>
                          <small id="emailError" style="color:red; display:none; font-size:16px;">Please enter valid email.</small>
                        </div>
                        <div class="form-group col-sm-6 animated fadeup"  style="animation-delay: .15s">
                          <input class="myInput" placeholder="Mobile or Telephone"id="querycontact" autocomplete="off" type="number" maxlength="10" oninput="javascript: if (this.which > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                          <span class="input-icon"><i class="fa fa-phone"></i></span>
                          <small id="contactError" style="color:red; display:none; font-size:16px;">Please enter valid contact.</small>
                        </div>
                        <div class="form-group col-sm-6 animated fadeup" style="animation-delay: .15s">
                          <input class="myInput" placeholder="Subject" id="querysubject" type="text" autocomplete="off"  maxlength="50">
                          <span class="input-icon"><i class="fa fa-puzzle-piece"></i></span>
                          <small id="subjectError" style="color:red; display:none; font-size:16px;">Please enter valid Subject.</small>
                        </div>
                        <div class="form-group col-sm-12 animated fadeup">
                          <textarea class="myInput" id="querymessage" placeholder="Type your message here..." name="" id="" autocomplete="off" cols="30" rows="4" maxlength="300"></textarea>
                          <span class="input-icon"><i class="fa fa-comments"></i></span>
                          <small id="messageError" style="color:red; display:none; font-size:16px;">Please enter valid Message.</small>
                        </div>

                        <div class="col-sm-12 animated fadeup" style="animation-delay: .15s">
                          <button class="btn orange-btn pull-right" onclick="queryInput();" id="queryBtn" type="button">Send Query</button>
                        </div>
                      </form>
                      <!--Testimonial 1-->
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-5 col-xs-12 border-right resCompany">
                  <div class="company-desc logoo animated fadeup">
                    <!--Footer Logo Image-->
                    <a href="#home-section"><img class="img-responsive" src="assets/images/logo_alt.png" style="height:100px;width:100px;"/></a>
                    <!-- Company Description-->
                  </div>

                  <!--Meet Us Part-->
                  <div class="meet-us animated fadeup">
                    <h3 class="foot-title">MEET US</h3>
                    <div class="content">
                      <p>Regd. Address A273, T/F, Gali No. 2, Aram Ngr, Nabi Karim, New Delhi, Near Qutub Road, Delhi-110055<br><strong>CIN: U52510DL2019PTC346042</strong></p>
                    </div>
                  </div>

                  <!--Contact Us Details-->
                  <div class="cont-us animated fadeup">
                    <h3 class="foot-title">Contact Us</h3>
                    <div><a class="hover" href="javascript:;">Mobile : +91-7372061500</a></div>
                    <div><a class="hover" href="javascript:;">Email : info@heldon.com</a></div>
                  </div>
                </div>

                <!--Copyright Text-->
                <div class="col-md-12 col-sm-12 col-xs-12 sectionP40">
                  <div class="copyright animated fadeup">
                    <p class="white">&copy; Copyright <script>document.write(new Date().getFullYear())</script> Heldon, all rights reserved.</p>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <script type="text/javascript" src="assets/js/jquery-2.1.1.js"></script>

      <!--bootstrap js-->
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>

      <!--Animae Js-->
      <script type="text/javascript" src="assets/js/anime.min.js"></script>

      <!--Custom | Nice Scroll Js-->
      <script type="text/javascript" src="assets/plugins/niceScroll/niceScroll.min.js"></script>

      <!--Youtube Video Popup Js-->
      <script type="text/javascript" src="assets/plugins/videoPopup/videoPopup.jquery.js"></script>

      <!--Convert Svg Image to Inline Svg Js-->
      <script type="text/javascript" src="assets/plugins/svgtoinline/jquery-svg-to-inline.js"></script>
      <!--Animate | Draw Svg-->
      <script type="text/javascript" src="assets/plugins/drawSvg/jquery.drawsvg.js"></script>

      <!--Our Team | Pieces Js-->
      <script type="text/javascript" src="assets/plugins/animateImg/imagesloaded.pkgd.min.js"></script>
      <script type="text/javascript" src="assets/plugins/animateImg/animateImg.js"></script>
      <script type="text/javascript" src="assets/plugins/animateImg/piecesanimate.js"></script>

      <!--Testimonials Js-->
      <script type="text/javascript" src="assets/plugins/testimonial/testimonial.js"></script>

      <!--Scroll Animations | Waypoints Js-->
      <script type="text/javascript" src="assets/plugins/waypoints/waypoint.js"></script>
      <script type="text/javascript" src="assets/plugins/waypoints/animation.js"></script>

      <!--Main | Common Js-->
      <script type="text/javascript" src="assets/js/main.js"></script>

    </body>
    </html>
    <?php
  }
  else
  {
    session_start();
    $_SESSION["id"]= $_COOKIE["heldonid"];

    ?>
    <script>window.open('pages/dashboard/dashboard.php','_self')</script>
    <?php
  }
  ?>
