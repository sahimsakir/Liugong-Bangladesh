<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Home | Liugong Bangladesh</title>

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
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/products">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/about">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/career">Career</a>
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
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <video autoplay muted loop id="bg-video">
            <source src="assets/images/liugong.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h2>TOUGH <em>WORLD</em>. TOUGH <em>EQUIPMENT</em>.</h2>
                <div class="main-button scroll-to-section">
                    <a href="/about" class="filled-button">See More</a>
                </div>
            </div>
          </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Categories</h2>
              <a href="/products">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          @foreach ($category as $i)
          <div class="col-md-2">
            <div class="product-item">
              <a href="/products/{{$i->category_class}}"><img src="{{$i->category_image}}" alt=""></a>
            </div>
              <div class="down-content">
                <a href="#"><h4>{{$i->category_name}}</h4></a>                
              </div>
          </div>
          @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About LiuGong Bangladesh</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>LiuGong is a leading construction equipment manufacturer.</h4>
              <p>LiuGong Bangladesh understands the market’s need for compact machines to mini Excavators, Standard boom excavators & long boom excavators that can do the work that is traditionally done by using manpower. LiuGong Role the Soil as a Tiger.</p>
              <ul class="featured-list">
                <li> </li>
                <li> </li>
                <li> </li>
                <li> </li>
                <li> </li>
              </ul>
              <a href="#" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/overview-liugong.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="social-links">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
                <h3>Our <em>Social</em> Links</h3>
                <div class="links">
                  <a href="https://www.facebook.com/liugongbm"><i class="fab fa-facebook"></i></a>
                  <a href="https://www.youtube.com/channel/UCOllrXwMeJ1iPb8KrlEzjrQ"><i class="fab fa-youtube"></i></a>
                </div>
                
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
