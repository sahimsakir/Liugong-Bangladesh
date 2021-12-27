<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Career | Liugong Bangladesh</title>

    <link rel="shortcut icon" href="assets/images/liugong-logo-title.png" type="image/png">

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">

    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">
      

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
</div>
      
    
    <!-- ***** Preloader End ***** -->
    
    <!-- ***** Nav Bar Start***** -->

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><img src="assets/images/liugong-logo.png"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="/products">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/career">Career
                <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/contact">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- ***** Nav Bar End ***** -->

    <!-- Page Content -->
    <div class="page-heading header-text">
    <div class="heading-banner">
        <img src="{{asset('assets/images/banner/career-banner.jpg')}}" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Career Opportunity</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/job-liugong.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Job Title</h4>
              <p>Job Description.</p>
              <a href="#" class="filled-button">Read More</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/job-liugong.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Job Title</h4>
              <p>Job Description.</p>
              <a href="#" class="filled-button">Read More</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/job-liugong.jpg" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Job Title</h4>
              <p>Job Description.</p>
              <a href="#" class="filled-button">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    @extends('include-footer')
     

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
