<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Category Add - LiuGong Bangladesh Admin</title>
        <link rel="shortcut icon" href="{{asset('assets/images/liugong-logo-title.png')}}" type="image/png">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>

    </head>
    <body class="sb-nav-fixed">
        
        @extends('admin.include-navbar')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Interface</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Users
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="user-list.html">User List</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">User Request</a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages & Items
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Pages
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="home-edit.html">Home</a>
                                            <a class="nav-link" href="about-us-edit.html">About Us</a>
                                            <a class="nav-link" href="our-products-edit.html">Our Products</a>
                                            <a class="nav-link" href="contact-us-edit.html">Contact Us</a>
                                            <a class="nav-link" href="career-edit.html">Career</a>
                                            <a class="nav-link" href="other-pages-edit.html">Other Pages</a>
                                            <a class="nav-link" href="add-new-page-edit.html">Add new Page</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Items
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="product-list.html">Products</a>
                                            <a class="nav-link" href="category-list.html">Categories</a>
                                            <a class="nav-link" href="links-list.html">Socail Links</a>
                                            <a class="nav-link" href="team-list.html">Team Member</a>
                                            <a class="nav-link" href="happy-client-list.html">Happy Client</a>
                                            <a class="nav-link" href="major-client-list.html">Major Client</a>
                                            <a class="nav-link" href="jobs-list.html">Jobs</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <!--<div class="sb-sidenav-menu-heading">Addons</div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>-->
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{$LoggedUserInfo['user_name']}}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-11">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-body">
                                        <form  action="{{ route('category.upload') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <h6>Name</h6>
                                                        <input class="form-control" id="inputName" name="inputName" type="text" />
                                                        <span style="color:red;">@error('inputName'){{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <h6>Slug</h6>
                                                        <input class="form-control" id="inputSlug" name="inputSlug" type="text" />
                                                        <span style="color:red;">@error('inputSlug'){{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <h6>Upload Image</h6>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="inputImage">
                                                    <!--<button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button>-->
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating">
                                                        <h6>Meta Title</h6>
                                                        <input class="form-control" id="metaTitle" name="inputMetaTitle" type="text" />
                                                        <span style="color:red;">@error('inputMetaTitle'){{$message}} @enderror</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <h6>Meta Keywords</h6>
                                                        <input class="form-control" id="metaKeyword" name="inputMetaKeyword" type="text" /> 
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <h6>Meta Description</h6>
                                                        <input class="form-control" id="metaDescription" name="inputMetaDescription" type="text" />
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="row mb-3">
                                                <div class="col-md-12">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <h6>Description</h6>
                                                       <textarea name="inputDescription" id="description"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <h6>Upload Banner</h6>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg" name="inputBanner" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                                                    <!--<button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button>-->
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid mb-2"><button class="btn btn-primary btn-block">Save</button></div>
                                                <div class="d-grid mb-2"><a class="btn btn-primary btn-block" href="/category-list">Back</a></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; LiuGong Bangladesh 2021</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
            <script>
                    CKEDITOR.replace( 'inputDescription' );
            </script>
         @extends('admin.include-footer-js')
    </body>
</html>
