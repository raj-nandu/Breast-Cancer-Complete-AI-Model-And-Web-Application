<?php 
	session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Breast Cancer Detection</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">
    <style type="text/css">
        #first{
          width: 47%;
          float: left;
          background: #f1f1f1;
          height: 290px;
          font-size: 20px;
          border: 5px solid black;
          



        }
        #second{
          width: 47%;
          float: right;
          background: #f1f1f1;
          height: 290px;
          font-size: 20px;
          border: 5px solid black;


        }
        .tabs a{
          color: black;
          width: 100%;
        }
        .tabs{
          padding-top: 10px;
          padding-bottom: 10px;
          margin-right: 0;
          margin-left: 0;
        }
		  .box{
          width: 30%;
          height: 490px;
          margin:0 auto;
          margin-top: 50px;
          margin-right: 615px;
          text-align: center;
          border-radius: 10px;
          padding: 10px;
          border: 3px solid #5d1f19;
        }
        input[type="date"]{
        	width: 100;
        }
        section#account{
        	background-image: url('bg1.jpg');
          background-repeat: no-repeat;
          background-size: cover;
        }

        .forms{
        	background-color: transparent;
        	border: 2px solid #5d1f19;
        	color: black;
        	background: transparent !important;
        }
        .btn{
        	font-size: 18px;
          font-weight: 700;
          padding: 10px 10px;
          border-radius: 3px;
          color: white;
          border-color: #fed136;
          background-color: #fed136;
          font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
          text-transform: uppercase; }
          }
          .btn.focus, .btn:focus {
            color: white;
            border-color: #b48b01;
            background-color: #fec503; }
          .btn:hover {
            color: white;
            border-color: #f6bf01;
            background-color: #fec503; }
          .btn.active, .btn:active,
          .open > .btn.dropdown-toggle {
            color: white;
            border-color: #f6bf01;
            background-color: #fec503; }
          .btn.active.focus, .btn.active:focus, .btn.active:hover, .btn:active.focus, .btn:active:focus, .btn:active:hover,
          .open > .btn.dropdown-toggle.focus,
          .open > .btn.dropdown-toggle:focus,
          .open > .btn.dropdown-toggle:hover {
            color: white;
            border-color: #b48b01;
            background-color: #dcab01; }
          .btn.active, .btn:active,
          .open > .btn.dropdown-toggle {
            background-image: none; }
          .btn.disabled.focus, .btn.disabled:focus, .btn.disabled:hover, .btn[disabled].focus, .btn[disabled]:focus, .btn[disabled]:hover,
          fieldset[disabled] .btn.focus,
          fieldset[disabled] .btn:focus,
          fieldset[disabled] .btn:hover {
            border-color: #fed136;
            background-color: #fed136; }
          .btn .badge {
            color: #fed136;
            background-color: white; }

          
        #login{
          display: none;
          padding-top: 30%;
        }
        #s, #l{
          width: 100%;
          margin: 0;
          font-size: 22px;
          font-weight:400; 
          background: transparent;
          border-color: transparent;
          color:black;
          text-transform: uppercase;
          font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }
        section#account .con{
          color:black;
          font-size: 34px;
          font-style: italic;
          font-weight: 700;
          text-align: center;
          font-family: 'Droid Serif', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        }
        section#account .c3{
          color:black;
          text-align: center;
          font-size: 16px;
          font-weight: 400;
          font-style: italic;
          font-family: 'Droid Serif', 'Helvetica Neue', Helvetica, Arial, sans-serif;
          }
          #s123 button:focus{
          outline:0;
          }
        #h8, #h9{
          margin-bottom: 100px;
        }

        section h3.section-subheading{
          margin-bottom: 10px;
        }
    </style>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Breast Cancer Detection</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#account">Account</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Help Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">"There can be life after breast cancer.The prerequisite is early detection"<br><br>-Ann Jillian</div>
          <a class="btn btn js-scroll-trigger" href="#account">Tell Me More</a>
        </div>
      </div>
    </header>


   	<section id = "account">
      <div class="con">
        "Your Best Protection to cancer is Early Detection.Check Yourself to Protect Yourself."
        </div>
        <div class="c3">
          Signup/login with us to check yourself and join us in our fight against cancer.
        </div>
      <div class="box container" >
        <div class = "tabs row" id="s123">
          <div class="col-md-6">
            <button id = "s" >Sign Up</button> 
          </div>
          <div class="col-md-6">
            <button id = "l" >Log In</button> 
          </div>
        </div>
        <div class="type">
        	<?php 
        		if(isset($_SESSION['error_signup'])){
        			echo $_SESSION['error_signup'];
        			$_SESSION['error_signup'] = "";
        		}
        		if(isset($_SESSION['error_login'])){
              echo "Wrong username or password";
              $_SESSION['error_login'] = "";
            }
            if(isset($_SESSION['invalid'])){
              echo $_SESSION['invalid'];
        			$_SESSION['invalid'] = "";
        		}

        	?>
        	<div id = "signup">
            <form method="post" action="signup.php">
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="text" name="fname" class = "form-control forms" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" name="lname" class = "form-control forms" placeholder="Last Name">
                </div>
              </div>
              <div class="form-group">
                <input type="email" name="email" class = "form-control forms" placeholder="Email ID">
              </div>

              <div class="form-group">
                <label>Date Of Birth<br><input type="date" name="dob" class = "form-control forms" placeholder="Date Of Birth"></label>
              </div>
              <div class="form-group">
                <input type="text" name="age" class = "form-control forms" placeholder="Age">
              </div>
              <div class="form-group">
                <input type="text" name="username" class = "form-control forms" placeholder="Username">
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <input type="password" name="password" class = "form-control forms" placeholder="Password">
                </div>            
                <div class="form-group col-md-6">
                  <input type="password" name="password1" class = "form-control forms" placeholder="Re-Enter Password">
                </div>  
              </div>
              

                
              <div class="form-group">
                <button type="submit" class="btn btn-default">Sign Up</button>
              </div>              
            </form>
       		
        	</div>
        	<div id = "login">
        		<form method="post" action="login.php">
	              <div class="form-group col-md-12">
	                <input type="text" name="username" class = "form-control forms" placeholder="Username">
	              </div>
	              <div class="form-group col-md-12">
	                  <input type="password" name="password" class = "form-control forms" placeholder="Password">
	              </div>
	              <div class="form-group">
	                <button type="submit" class="btn btn-default">LogIn</button>
	              </div>
	            </form>
        	</div>
        </div>
      </div>
    </section>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Features</h2>
            <h3 class="section-subheading text-muted">Why Us?This features would let you know more about our software and web application.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-bullseye fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Accurate Results</h4>
            <p class="text-muted">The result reports generated are accurate and with the aim of confidence score as high as possible.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Available on Different Platforms</h4>
            <p class="text-muted">Available on all Android, Windows, OS X and other platforms</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Web Security</h4>
            <p class="text-muted">User account and details are secured and well-protected.</p>
          </div>
        </div><br><br>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-hand-peace-o fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Dual-input mode</h4>
            <p class="text-muted">Users can either insert patient details in the form of text input or upload an image.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-user fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">User-friendly</h4>
            <p class="text-muted">Easy to use and view results by users.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fa fa-circle fa-stack-2x text-primary"></i>
              <i class="fa fa-user-md fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Medical assurance </h4>
            <p class="text-muted">Serves as a double verfication/check application for medical professionals.</p>
          </div>
        </div>

      </div>
    </section>

    <!-- Help us -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Help Us</h2>
            <h3 class="section-subheading text-muted">Help Us, Help You</h3>
          </div>
        </div>
        <div id="first">
          <center><h2 class="section-heading">Donate Us</h2></center><br>
          <center><h3 class="section-subheading text-muted">Help Us by Donating Servers or money to host better servers on which we can train our AI model and predict more accurate results.For more information about it,contact us.</h3></center></b><br>
          <center><a class="btn btn js-scroll-trigger" id = "h8" href="#contact">Contact US</a></center>
          </div>
        <div id="second">
          <center><h2 class="section-heading">Datasets</h2></center><br>
          <center><h3 class="section-subheading text-muted">Help Us by Donating Datasets for training our AI model and as a result achieve maximum accuracy as possible.</h3></center><br>
          <center><a class="btn btn js-scroll-trigger" id = "h9" href="#contact">Contact US</a></center>
      </div>
        <div id="clear"></div>
      </div>
    </section>


    

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Our aim is to solve and tackle problems in one's life and use science and technology to overcome them and suggest innovative solutions to make the world better.  </h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
              <h4>Saurabh Makwana</h4>
              <p class="text-muted">Lead Designer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
              <h4>Raj Nandu</h4>
              <p class="text-muted">Lead Deep Learning Expert and Web Developer</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="img/team/3.jpg" alt="">
              <h4>Satyajeet Kamble</h4>
              <p class="text-muted">Deep Learning Expert</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>  
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Contact Us</h2>
            <h3 class="section-subheading text-muted">Get in touch with us and help us reach our aim and goals and make this world better .</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" method="post" action="contact.php" name="sentMessage" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" name = "name" type="text" placeholder="Your Name *" required data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" name = "email" type="email" placeholder="Your Email *" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" name = "phone" type="tel" placeholder="Your Phone *" required data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="organization" name = "organization" type="org" placeholder="Name of the Organization(if any) *" >
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" name = "message" placeholder="Your Message *" required data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <input id="sendMessageButton" class="btn btn" type="submit" value="Submit">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <!-- <script src="js/contact_me.js"></script> -->

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>
    <script type="text/javascript">
      $("#s").on('click', function() {
        $("#signup").css('display','block');
        $("#login").css('display','none');
      });
      $("#l").on('click', function() {
        $("#signup").css('display','none');
        $("#login").css('display','block');
      });
    </script>

  </body>

</html>
