<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $text = $_POST['text'];
    
    $sql = "INSERT INTO `form`.`form` (`name`, `phone`, `email`, `feedback`, `dt`) VALUES ('$name', '$phone','$email', '$text', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>SurfingEthoes</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/fav.png" type="image/png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/modernizr.custom.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
<nav id="menu" class="navbar navbar-default navbar-fixed-top">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand page-scroll" href="#page-top"></i></a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#page-top" class="page-scroll">Home</a></li>
        <li><a href="videocall.html" class="page-scroll">Video call</a></li>
        <li><a href="status.html" class="page-scroll">Health  status</a></li>
        <li><a href="#contact" class="page-scroll">Contact us</a></li>
        
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="logo"><img src="logo.jpg" alt="logo"></div>
    <div class="container">
      <div class="row">
        <div class="intro-text">
          <h1>Surfing Ethoes</h1>
          <p>A way to appraise, a way to commune</p>
          <a href="#about" class="btn btn-custom btn-lg page-scroll">Learn More</a> </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="section-title text-center center">
      <h2>About us</h2>
      <hr>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-6"> <img src="social.jpg" class="img-responsive" alt=""> </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <p>As in today's life there are several devasting consequences of mental health which is due to the unawareness of mental health which we take quite lightly in our daily lifestyle . About 90% of worldwide suicides are committed by the peoples who are unaware of there critical mental health which can be prevented by taking some crucial effects which can be taken if they know the problem/by seeking help , so we are trying to make and video-call website which stands apart by also monitors the mental health of users and also provide solution on the basis of result of conducted-test . This website has an aim to provide the best user experience of video chat platform by additionally providing the mental health check-up/monitoring and giving our users the best advice on the basis of outcome of their tests <br><br>
          Our data-analysis of consequences of social media over peoples :  <a href="Database.html" target="_blank">CLICK HERE</a>
          </p>
          <a href="#portfolio" class="btn btn-default btn-lg page-scroll">Some health facts</a> </div>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Health +</h2>
      <hr>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".web">Cons</a></li>
            <li><a href="#" data-filter=".photography">Tips to overcome</a></li>
            <li><a href="#" data-filter=".product">Why choose us?</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg">  <a href="img/portfolio/fact1.jpg" title="Project Title"> 
              <div class="hover-text">
                <h4>#Facts</h4>
              </div>
              <img src="img/portfolio/fact1.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 product">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/fact10.png" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>#Facts</h4>
              </div>
              <img src="img/portfolio/fact10.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/fact2.png" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>#Facts</h4>
              </div>
              <img src="img/portfolio/fact2.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/fact3.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>#Facts</h4>
              </div>
              <img src="img/portfolio/fact3.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 product">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/fact11.png" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>#Facts</h4>
              </div>
              <img src="img/portfolio/fact11.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 photography">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/fact6.png" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>#Facts</h4>
              </div>
              <img src="img/portfolio/fact6.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 photography">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/fact7.png" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>#Facts</h4>
              </div>
              <img src="img/portfolio/fact7.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/fact4.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>#Facts</h4>
              </div>
              <img src="img/portfolio/fact4.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 product">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/fact12.png" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>#Facts</h4>
              </div>
              <img src="img/portfolio/fact12.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 photography">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/fact8.png" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>#Facts</h4>
              </div>
              <img src="img/portfolio/fact8.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 photography">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/fact9.jpg" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>#Facts</h4>
              </div>
              <img src="img/portfolio/fact9.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/fact5.png" title="Project Title" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>#Facts</h4>
              </div>
              <img src="img/portfolio/fact5.png" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<section class="contact" id="contact">
        <h1 class="text-center">Contact Us</h1>
        <?php
if($insert == true){
echo "<p class='submitMsg'>Thanks for submitting your form. We are happy to see your feedback!</p>";
}
?>
<form action="index.php" method="post">
<input class="form-input" type="text" name="name" id="name" placeholder="Enter Your name">
    <input class="form-input" type="text" name="phone" id="phone" placeholder="Enter Your Phone">
    <input class="form-input" type="email" name="email" id="email" placeholder="Enter Your email">
    <textarea class="form-input" name="text" id="text" cols="30" rows="10"
        placeholder="Support us by your feedback"></textarea>
    <button class="btn btn-sm btn-dark">Submit</button> 
</form>
        
       
</section>
<div id="footer">
  <div class="container text-center">
    <div class="fnav">
      <p>Copyright &copy; 2022. Designed by <a href="https://codelatte.org/" rel="nofollow">SurfingEthoes</a>.</p>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
