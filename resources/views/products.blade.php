<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Our Products | Liugong Bangladesh</title>

    @extends('include-header-css')
      

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->

    @extends('include-preloader')
      
    
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
    <div class="page-heading products-heading header-text">
      <div class="container">
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  @foreach ($category as $i)
                  <li data-filter=".{{$i->category_class}}">{{$i->category_name}}</li>
                  @endforeach
              </ul>
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
                        <a href="#"><img src="assets/images/product/excavator-002.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>915E EXCAVATOR</h4></a>
                          <p>Engine: Cummins 4BT3.9</p>
                          <p>Gross Power: 100 Hp</p>
                          <p>Digging Depth: 5,068 mm</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all excavator">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product/excavator-003.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>908E EXCAVATOR</h4></a>
                          <p>Engine: Yanmar 4TNV98-ZCSLY</p>
                          <p>Gross Power: 46.3 kW (62 hp)</p>
                          <p>Net Power: 44.5 kW (60 hp)</p>
                        </div>
                      </div>
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

                    <div class="col-lg-4 col-md-4 all wheel-loader">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product/wheel-loader-001.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>816C WHEEL LOADER</h4></a>
                          <p>Engine: Yunnei YN38GBZ1</p>
                          <p>Gross Power: 65 kW (87 hp / 88 ps)</p>
                          <p>Net Power: 61 kW (82 hp / 83 ps)</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all wheel-loader">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product/wheel-loader-002.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>835H WHEEL LOADER</h4></a>
                          <p>Engine: Cummins 6BTAA5.9-C130</p>
                          <p>Net Power: 97 kW (132 hp)</p>
                          <p>Operating Weight: 10,375 kg</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all wheel-loader">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product/wheel-loader-003.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>856H WHEEL LOADER</h4></a>
                          <p>Engine: Cummins 6LTAA9.3</p>
                          <p>Gross Power: 162 kW (217 hp / 220 ps)</p>
                          <p>Operating Weight: 17,250 kg</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-4 all dozer">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product/dozer-001.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>B160C BULLDOZER</h4></a>
                          <p>Engine: Weichai WD10G178E25</p>
                          <p>Gross Power: 131 kW (176 hp)</p>
                          <p>Net Power: 120 kW (163 hp)</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dozer">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product/dozer-002.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>B230S BULLDOZER</h4></a>
                          <p>Engine Power: 179 kW (240 hp /243 ps)</p>
                          <p>Blade Capacity: 8.4 m3</p>
                          <p>Operating Weight: 26,400 kg</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dozer">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product/dozer-003.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>B230 BULLDOZER</h4></a>
                          <p>Engine: ChongQing Cummins</p>
                          <p>Gross Power: 179 kW (243 hp)</p>
                          <p>Operating Weight: 24,540 kg</p>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-4 col-md-4 all motor-grader">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product/motor-grader-001.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>4140D MOTOR GRADER</h4></a>
                          <p>Engine: Cummins 6BTAA5.9-C160</p>
                          <p>Rated Power: 118 kW (158 hp / 160 ps)</p>
                          <p>Blade Width: 3,660 mm</p>
                        </div>
                      </div>
                    </div>      
                    <div class="col-lg-4 col-md-4 all motor-grader">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product/motor-grader-002.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>4180D MOTOR GRADER</h4></a>
                          <p>Engine: Cummins 6BTAA5.9-C190</p>
                          <p>Rated Power: 142 kW (190 hp / 193 ps)</p>
                          <p>Blade Width: 3,960 mm</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all motor-grader">
                      <div class="product-item">
                        <a href="#"><img src="assets/images/product/motor-grader-003.jpg" alt=""></a>
                        <div class="down-content">
                          <a href="#"><h4>4215D MOTOR GRADER</h4></a>
                          <p>Engine: Cummins 6LTAA9.3</p>
                          <p>Rated Power: 162 kW (220 hp)</p>
                          <p>Blade Width: 4,270 mm</p>
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
