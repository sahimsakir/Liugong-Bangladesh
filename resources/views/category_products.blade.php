<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{asset('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap')}}" rel="stylesheet">

    <title>Excavators | Liugong Bangladesh</title>

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
          <a class="navbar-brand" href="index.php"><img src="{{asset('assets/images/liugong-logo.png')}}"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="#">Our Products
                <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="career.php">Career</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- ***** Nav Bar End ***** -->

    <!-- Page Content -->
    <div class="page-heading excavators-heading header-text">
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
                    <div class="col-lg-4 col-md-4 all excavator">
                      <div class="product-item">
                        <a href="#" data-toggle="modal" data-target="#noAnimModal0101"><img src="assets/images/product/excavator-001.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#" data-toggle="modal" data-target="#noAnimModal0101"><h4>925E EXCAVATOR LONG REACH ARM</h4></a>
                          <p>Engine: Cummins 6BTAA5.9-C178-II</p>
                          <p>Standard Bucket Capacity: 0.4 m3</p>
                          <p>Operating Weight: 28,000 kg</p>
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
                                                <img alt="" class="img-fluid" src="assets/images/product/excavator-001.jpg" />
                                            </div>
                                     </div>
                                
                                    <div class="col-lg-6">
                                        <div class="summary entry-summary">
                                            <h4 class="modal-title" id="noAnimModalLabel">925E EXCAVATOR LONG REACH ARM</h4>
                                            <div class="review-num text-primary mb-2">
                                  Excavator
                                </div>
                                            <div class="pb-0 clearfix">
                                                <div title="Rated 3 out of 5" class="float-left">
                                                    <input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}" />
                                                </div>
                                            </div>
                                
                                            <p class="text-justify">
                                                text here
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <h4>Product Features</h4>
                                        <ul>
                                            <li>Unmatched performance driven by the Cummins engine maximizes torque output with more power and breakout force at lower engine speeds.</li>
                                            <li>Hydraulic request signals detect activity, decreasing and increasing engine speed as required. Power is supplied only as needed, achieving optimum fuel efficiency.</li>
                                            <li>Options for auxiliary hydraulic piping include bi-directional variable high flow line, an additional line for rotating attachments and also a single acting line. The quick coupler further ensures you get the most out of your machine by easily switching between a wide range of attachments to suit your needs.</li>
                                            <li>E series cab high-strength ROPS ensures operator protection meeting ISO 12117-2:2008 safety standard. Falling Object Protection System (FOPS) is optional.</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12">
                                            <h4>Parameters</h4>
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th>Model</th>
                                                    <th>925E EXCAVATOR LONG REACH ARM</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Emission Regulation</td>
                                                    <td>Tier 2 / Stage II</td>
                                                </tr>
                                                <tr>
                                                    <td>Manufacturer</td>
                                                    <td>Cummins</td>
                                                </tr>
                                                <tr>
                                                    <td>Model</td>
                                                    <td>6BTAA5.9-C178-II</td>
                                                </tr>
                                                <tr>
                                                    <td>Gross Power</td>
                                                    <td>133 kW ( 178 hp / 181 ps) @ 2,000 rpm</td>
                                                </tr>
                                                <tr>
                                                    <td>Net Power</td>
                                                    <td>125 kW ( 168 hp / 170 ps) @ 2,000 rpm</td>
                                                </tr>
                                                <tr>
                                                    <td>Peak Torque</td>
                                                    <td>708 N·m @ 1,500 rpm</td>
                                                </tr>
                                                <tr>
                                                    <td>Number of Cylinders</td>
                                                    <td>6</td>
                                                </tr>
                                                <tr>
                                                    <td>Displacement</td>
                                                    <td>5.9 L</td>
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                            <div class="catalog">
                                            <a href="assets/pdf/Excavator-925ELongArm.pdf" class="filled-button">Download Catalog</a>
                                            </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                      <a href="contact.php" class="btn btn-primary btn-sm">Get in Touch</a>
                      <a type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</a>
                    </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>



                    <div class="col-lg-4 col-md-4 all excavator">
                      <div class="product-item">
                      <a href="#" data-toggle="modal" data-target="#noAnimModal0102"><img src="assets/images/product/excavator-002.jpg" alt=""></a>
                        <div class="down-content">
                        <a href="#" data-toggle="modal" data-target="#noAnimModal0102"><h4>915E EXCAVATOR</h4></a>
                          <p>Engine: Cummins 4BT3.9</p>
                          <p>Standard Bucket capacity: 0.73 m³</p>
                          <p>Operating Weight: 13,800 kg</p>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="noAnimModal0102" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                            <div>
                                                <img alt="" class="img-fluid" src="assets/images/product/excavator-002.jpg" />
                                            </div>
                                     </div>
                                
                                    <div class="col-lg-6">
                                        <div class="summary entry-summary">
                                            <h4 class="modal-title" id="noAnimModalLabel">915E EXCAVATOR</h4>
                                            <div class="review-num text-primary mb-2">
                                  Excavator
                                </div>
                                            <div class="pb-0 clearfix">
                                                <div title="Rated 3 out of 5" class="float-left">
                                                    <input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}" />
                                                </div>
                                            </div>
                                
                                            <p class="text-justify">
                                                text here
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <h4>Product Features</h4>
                                        <ul>
                                            <li>Proven negative flow hydraulics have optimize the main control valve, improved the speed of front end cylinders, while cutting down the hydraulic system’s damper loss, leading to much better working efficiency. The pilot valves matching with the main control valve offer precise control.</li>
                                            <li>The 915E model is powered by the latest generation, low emission Cummins engine, with enhanced power output, improved breakout force and faster cycle times.</li>
                                            <li>The LiuGong E series excavator features 6 selectable working modes that optimize performance and fuel consumption to your specific conditions.</li>
                                            <li>Ergonomically designed cab for LiuGong E series excavator, with great visibility, expansive leg room, new multi-function LCD monitor, automatic air conditioner, large storage space, provide most comfortable working environment.</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12">
                                            <h4>Parameters</h4>
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th>Model</th>
                                                    <th>915E EXCAVATOR</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Emission Regulation</td>
                                                    <td>Tier 2 / Stage II</td>
                                                </tr>
                                                <tr>
                                                    <td>Manufacturer</td>
                                                    <td>Cummins</td>
                                                </tr>
                                                <tr>
                                                    <td>Model</td>
                                                    <td>4BT3.9</td>
                                                </tr>
                                                <tr>
                                                    <td>Gross Power</td>
                                                    <td>100 hp @ 2,000 rpm</td>
                                                </tr>
                                                <tr>
                                                    <td>Net Power</td>
                                                    <td>95 hp @ 2,000 rpm</td>
                                                </tr>
                                                <tr>
                                                    <td>Peak Torque</td>
                                                    <td>385 N·m @ 1,300 rpm</td>
                                                </tr>
                                                <tr>
                                                    <td>Number of Cylinders</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>Displacement</td>
                                                    <td>3.9 L</td>
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                            <div class="catalog">
                                            <a href="assets/pdf/Excavator-915E.pdf" class="filled-button">Download Catalog</a>
                                            </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                      <a href="contact.php" class="btn btn-primary btn-sm">Get in Touch</a>
                      <a type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</a>
                    </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>

                    <div class="col-lg-4 col-md-4 all excavator">
                      <div class="product-item">
                      <a href="#" data-toggle="modal" data-target="#noAnimModal0103"><img src="assets/images/product/excavator-003.jpg" alt=""></a>
                        <div class="down-content">
                        <a href="#" data-toggle="modal" data-target="#noAnimModal0103"><h4>908E EXCAVATOR</h4></a>
                          <p>Engine: Yanmar 4TNV98-ZCSLY</p>
                          <p>Standard Bucket capacity: 0.5 m³</p>
                          <p>Operating Weight: 7,150 kg</p>
                        </div>
                      </div>
                    </div>

                    <div class="modal fade" id="noAnimModal0103" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                        <div class="modal-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                            <div>
                                                <img alt="" class="img-fluid" src="assets/images/product/excavator-002.jpg" />
                                            </div>
                                     </div>
                                
                                    <div class="col-lg-6">
                                        <div class="summary entry-summary">
                                            <h4 class="modal-title" id="noAnimModalLabel">908E EXCAVATOR</h4>
                                            <div class="review-num text-primary mb-2">
                                  Excavator
                                </div>
                                            <div class="pb-0 clearfix">
                                                <div title="Rated 3 out of 5" class="float-left">
                                                    <input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}" />
                                                </div>
                                            </div>
                                
                                            <p class="text-justify">
                                                text here
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                    <h4>Product Features</h4>
                                        <ul>
                                            <li>Ergonomically designed cab and ergonomic placement of instruments. ROPS/ FOPS cabin available for you choice. Soundproofed cab with air conditioning and excellent visibility 360°.</li>
                                            <li>Reliable Yanmar engine. Reinforced D-shaped frame protects against damage and shock. Simple, proven and reliable negative flow hydraulic system. Boom anti-drift function, stabilizes boom for precise operations. Minimal kick-back in the swing for comfort, control and injury prevention.</li>
                                            <li>Easy engine access and good location of all lock. Air, fuel and hydraulic filters are accessible from ground level. New LCD display with important information for maintenance.</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12">
                                            <h4>Parameters</h4>
                                            <table class="table table-bordered text-center">
                                                <thead>
                                                <tr>
                                                    <th>Model</th>
                                                    <th>908E EXCAVATOR</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Emission Regulation</td>
                                                    <td>Tier 3 / Stage IIIA</td>
                                                </tr>
                                                <tr>
                                                    <td>Manufacturer</td>
                                                    <td>Yanmar</td>
                                                </tr>
                                                <tr>
                                                    <td>Model</td>
                                                    <td>4TNV98-ZCSLY</td>
                                                </tr>
                                                <tr>
                                                    <td>Gross Power</td>
                                                    <td>46.3 kW ( 62 hp ) @ 2200 rpm</td>
                                                </tr>
                                                <tr>
                                                    <td>Net Power</td>
                                                    <td>44.5 kW ( 168 hp / 170 ps) @ 2200 rpm</td>
                                                </tr>
                                                <tr>
                                                    <td>Peak Torque</td>
                                                    <td>245 Nm @ 1650 rpm</td>
                                                </tr>
                                                <tr>
                                                    <td>Number of Cylinders</td>
                                                    <td>4</td>
                                                </tr>
                                                <tr>
                                                    <td>Displacement</td>
                                                    <td>3.3 L</td>
                                                </tr>
                                                
                                                </tbody>
                                            </table>
                                            <div class="catalog">
                                            <a href="assets/pdf/Excavator-908E.pdf" class="filled-button">Download Catalog</a>
                                            </div>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                      <a href="contact.php" class="btn btn-primary btn-sm">Get in Touch</a>
                      <a type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</a>
                    </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>


                    <div class="col-lg-4 col-md-4 all excavator">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product/excavator-004.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>922E XD EXCAVATOR</h4></a>
                          <p>Engine: Cummins 6BT5.9</p>
                          <p>Gross Power: 46.3 kW (62 hp)</p>
                          <p>Operating Weight: 22,000 kg</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all excavator">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product/excavator-005.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>924E EXCAVATOR</h4></a>
                          <p>Engine: Cummins 6BT5.9</p>
                          <p>Gross Power: 110 kW (1482 hp)</p>
                          <p>Maximum Dig Depth: 11,910 mm</p>
                        </div>
                      </div>
                    </div>

                    
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
