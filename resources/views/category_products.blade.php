<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap')}}" rel="stylesheet">

    <title>@foreach ($category as $i)
            {{$i->category_meta_title}}
            @endforeach</title>

    <link rel="shortcut icon" href="{{asset('assets/images/liugong-logo-title.png')}}" type="image/png">

    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.4.1/css/all.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl.css')}}">

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
          <a class="navbar-brand" href="/"><img src="{{asset('assets/images/liugong-logo.png')}}"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/products">Our Products
                <span class="sr-only">(current)</span></a>
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
    <div class="page-heading header-text">
    <div class="heading-banner">
            @foreach ($category as $i)
            <img src="{{asset($i->category_banner)}}" alt="">
            @endforeach
        
      </div>
      <div class="container">
      </div>
    </div>


    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
            @foreach ($category as $i)
              <h2>{{$i->category_name}}</h2>
            @endforeach
            </div>
          </div>
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                @foreach($product as $i)
                    <div class="col-lg-4 col-md-4 all {{$i->product_class}}">
                      <div class="product-item">
                        <a href="#" data-toggle="modal" data-target="#noAnimModal0101"><img src="{{asset($i->product_image)}}" alt=""></a>
                        <div class="down-content">
                          <a href="#" data-toggle="modal" data-target="#noAnimModal0101"><h4>{{$i->product_name}}</h4></a>
                          <p>{!!$i->product_short_intro!!}</p>
                          
                        </div>
                      </div>
                    </div>
                    


                    <div class="modal fade" id="noAnimModal0101" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                            <div>
                                                <img alt="" class="img-fluid" src="{{asset($i->product_image)}}" />
                                            </div>
                                     </div>
                                
                                    <div class="col-lg-6">
                                        <div class="summary entry-summary">
                                            <h4 class="modal-title" id="noAnimModalLabel">{{$i->product_name}}</h4>
                                            <div class="review-num text-primary mb-2">
                                  Excavator
                                </div>
                                            <div class="pb-0 clearfix">
                                                <div title="Rated 3 out of 5" class="float-left">
                                                    <input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}" />
                                                </div>
                                            </div>
                                
                                            <p class="text-justify">
                                            {!!$i->product_details!!}
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <h4>Product Features</h4>
                                    {!!$i->product_features!!}
                                    </div>
                                    <div class="col-lg-12">
                                            <h4>Parameters</h4>
                                            {!!$i->product_parameters!!}
                                            <div class="catalog">
                                            <a href="{{asset($i->product_catalog)}}" class="filled-button">Download Catalog</a>
                                            </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                      <a href="/contact" class="btn btn-primary btn-sm">Get in Touch</a>
                      <a type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</a>
                    </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
                  @endforeach 


                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    @extends('include-footer')


    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>


    <!-- Additional Scripts -->
    <script src="{{asset('assets/js/custom.js')}}"></script>
    <script src="{{asset('assets/js/owl.js')}}"></script>
    <script src="{{asset('assets/js/slick.js')}}"></script>
    <script src="{{asset('assets/js/isotope.js')}}"></script>
    <script src="{{asset('assets/js/accordions.js')}}"></script>


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
