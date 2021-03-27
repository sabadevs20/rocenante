<?php 
include 'db_connect.php';
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Directory | Bootstrap 4 listing template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,700&amp;display=swap">
    <!-- Owl carousel2-->
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="vendor/owl.carousel2/assets/owl.theme.default.min.css">
    <!-- Bootstrap Select-->
    <link rel="stylesheet" href="vendor/bootstrap-select/css/bootstrap-select.min.css">
    <!-- Lightbox-->
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 py-lg-2">
        <div class="container"><a class="navbar-brand py-3 d-flex align-items-center" href="index.html"><img src="img/logo.svg" alt="" width="30"><span class="text-uppercase text-small font-weight-bold text-dark ml-2 mb-0">Listings</span></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
          

                <?php if (isset($_SESSION['user_name']))  { ?>
                <!-- Navbar link--><a class="nav-link" href="home.php">Home</a>
                <?php } else { ?>
            <!-- Navbar link--><a class="nav-link" href="index.php">Home</a>
                <?php } ?>
                                
              </li>
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link" href="category.php">Browse</a>
              </li>
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link" href="my_ads.php">My Ads</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu mt-lg-3"><a class="dropdown-item" href="index.html">Home</a><a class="dropdown-item" href="category.html">Category</a><a class="dropdown-item" href="detail.html">Detail</a></div>
              </li>
              <li class="nav-item ml-lg-2 py-2 py-lg-0"><a class="btn btn-primary" href="#listingModal" data-toggle="modal">Sell</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  
    <section class="py-5">
      <div class="container py-5">
        <div class="row">
          <!-- Filter-->
          <div class="col-lg-3 order-2 order-lg-1">
            <h2 class="h3 mb-4 pb-1">Filter</h2>
            <form action="#">
              <div class="card border-0 shadow-sm mb-4 p-2">
                <div class="card-body">
                  <h2 class="h5 mb-4">Choose category</h2>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheck1" type="checkbox" checked>
                    <label class="custom-control-label" for="customCheck1">Appliances</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheck2" type="checkbox" checked>
                    <label class="custom-control-label" for="customCheck2">Vehicles</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheck3" type="checkbox">
                    <label class="custom-control-label" for="customCheck3">Property & Real Estate</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheck4" type="checkbox">
                    <label class="custom-control-label" for="customCheck4">Fashion & beauty</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                    <label class="custom-control-label" for="customCheck5">Electronics & Computers</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheck6" type="checkbox">
                    <label class="custom-control-label" for="customCheck6">Phones & Tablets</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheck7" type="checkbox">
                    <label class="custom-control-label" for="customCheck7">Clothes, Shoes & Accessories</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheck8" type="checkbox">
                    <label class="custom-control-label" for="customCheck8">Agriculture & produce</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheck9" type="checkbox">
                    <label class="custom-control-label" for="customCheck9">Jobs & Services</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheck10" type="checkbox">
                    <label class="custom-control-label" for="customCheck10">Health</label>
                  </div>
                 
                
                  
                 
                </div>
              </div>
              <div class="card border-0 shadow-sm mb-4 p-2">
                <div class="card-body">
                  <h2 class="h5 mb-4">Choose tag</h2>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheckbox1" type="checkbox">
                    <label class="custom-control-label" for="customCheckbox1">Brand New</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheckbox2" type="checkbox">
                    <label class="custom-control-label" for="customCheckbox2">Used</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheckbox3" type="checkbox">
                    <label class="custom-control-label" for="customCheckbox3">Refurbished</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheckbox4" type="checkbox">
                    <label class="custom-control-label" for="customCheckbox4">Mint condition</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheckbox5" type="checkbox">
                    <label class="custom-control-label" for="customCheckbox5">Fresh</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheckbox6" type="checkbox">
                    <label class="custom-control-label" for="customCheckbox6">bulk</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-2">
                    <input class="custom-control-input" id="customCheckbox7" type="checkbox">
                    <label class="custom-control-label" for="customCheckbox7">Warranty</label>
                  </div>
                </div>
              </div>
              <button class="btn btn-primary btn-block" type="submit"> <i class="fas fa-search mr-2 small"></i>Search</button>
            </form>
          </div>
          <!-- Listing-->
          <div class="col-lg-9 mb-5 mb-lg-0 order-1 order-lg-2">
            <!-- Listing sorting-->
            <div class="row mb-4 align-items-center">
              <div class="col-md-7">
                <ul class="list-inline mb-0">
                  <li class="list-inline-item my-1 my-lg-0">
                    <select class="selectpicker" name="sort" data-style="btn btn-light shadow-xs bg-white border" data-title="Sort By" data-width="180">
                      <option value="alphapitcally">Alphapitcally</option>
                      <option value="latest">Latest</option>
                      <option value="top-rated">Top rated</option>
                      <option value="random">Random</option>
                    </select>
                  </li>
                  <li class="list-inline-item my-1 my-lg-0">
                    <select class="selectpicker" name="type" data-style="btn btn-light shadow-xs bg-white border" data-width="180">
                      <option value="tools">Tools</option>
                      <option value="resources">Resources</option>
                    </select>
                  </li>
                </ul>
              </div>
              <div class="col-md-5 text-md-right">
                <p class="h6 mb-0 p-3 p-md-0">Show 8 results</p>
              </div>
            </div>
            <!-- Listing items-->
            <div class="row mb-4">
              <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
                        <div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="img/tool-thumb-1.png" alt="..." width="40"></div>
                        <div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
                        <ul class="list-inline tool-rating mb-0">
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                        </ul>
                        <div class="overlay-content"><img class="img-fluid" src="img/cat-tool-bg-1.jpg" alt="..."></div></a>
                      <div class="card-body p-4">
                        <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Curator</a></h3>
                        <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                      </div>
                    </div>
              </div>
              <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
                        <div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="img/tool-thumb-2.png" alt="..." width="40"></div>
                        <div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
                        <ul class="list-inline tool-rating mb-0">
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                        </ul>
                        <div class="overlay-content"><img class="img-fluid" src="img/cat-tool-bg-2.jpg" alt="..."></div></a>
                      <div class="card-body p-4">
                        <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Elevatr</a></h3>
                        <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                      </div>
                    </div>
              </div>
              <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
                        <div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="img/tool-thumb-3.png" alt="..." width="40"></div>
                        <div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
                        <ul class="list-inline tool-rating mb-0">
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                        </ul>
                        <div class="overlay-content"><img class="img-fluid" src="img/cat-tool-bg-3.jpg" alt="..."></div></a>
                      <div class="card-body p-4">
                        <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Germ.io</a></h3>
                        <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                      </div>
                    </div>
              </div>
              <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
                        <div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="img/tool-thumb-4.jpg" alt="..." width="40"></div>
                        <div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
                        <ul class="list-inline tool-rating mb-0">
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                        </ul>
                        <div class="overlay-content"><img class="img-fluid" src="img/cat-tool-bg-4.jpg" alt="..."></div></a>
                      <div class="card-body p-4">
                        <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">MailChimp</a></h3>
                        <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                      </div>
                    </div>
              </div>
              <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
                        <div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="img/tool-thumb-5.jpg" alt="..." width="40"></div>
                        <div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
                        <ul class="list-inline tool-rating mb-0">
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                        </ul>
                        <div class="overlay-content"><img class="img-fluid" src="img/cat-tool-bg-5.jpg" alt="..."></div></a>
                      <div class="card-body p-4">
                        <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">GrowthHackers</a></h3>
                        <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                      </div>
                    </div>
              </div>
              <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
                        <div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="img/tool-thumb-6.png" alt="..." width="40"></div>
                        <div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
                        <ul class="list-inline tool-rating mb-0">
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                        </ul>
                        <div class="overlay-content"><img class="img-fluid" src="img/cat-tool-bg-6.jpg" alt="..."></div></a>
                      <div class="card-body p-4">
                        <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Revue</a></h3>
                        <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                      </div>
                    </div>
              </div>
              <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
                        <div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="img/tool-thumb-7.png" alt="..." width="40"></div>
                        <div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
                        <ul class="list-inline tool-rating mb-0">
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                        </ul>
                        <div class="overlay-content"><img class="img-fluid" src="img/cat-tool-bg-7.jpg" alt="..."></div></a>
                      <div class="card-body p-4">
                        <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Sumo</a></h3>
                        <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                      </div>
                    </div>
              </div>
              <div class="col-lg-6 mb-4">
                    <div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="detail.html">
                        <div class="tool-thumb rounded-circle" href="detail.html"><img class="img-fluid rounded-circle" src="img/tool-thumb-8.png" alt="..." width="40"></div>
                        <div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
                        <ul class="list-inline tool-rating mb-0">
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                          <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                        </ul>
                        <div class="overlay-content"><img class="img-fluid" src="img/cat-tool-bg-8.jpg" alt="..."></div></a>
                      <div class="card-body p-4">
                        <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Viral Loops</a></h3>
                        <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                      </div>
                    </div>
              </div>
            </div>
            <!-- Pagination-->
            <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-end mb-0">
                <li class="page-item mx-1"><a class="page-link rounded border-0 shadow-sm px-3" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                <li class="page-item mx-1 active"><a class="page-link rounded border-0 shadow-sm px-3" href="#">1</a></li>
                <li class="page-item mx-1"><a class="page-link rounded border-0 shadow-sm px-3" href="#">2</a></li>
                <li class="page-item mx-1"><a class="page-link rounded border-0 shadow-sm px-3" href="#">3</a></li>
                <li class="page-item mx-1"><a class="page-link rounded border-0 shadow-sm px-3" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section>
    <footer style="background: #111;">
      <div class="container py-4">
        <div class="row py-5">
          <div class="col-md-4 col-sm-12 mb-3 mb-md-0">
            <div class="d-flex align-items-center mb-3"><img src="img/logo-footer.svg" alt="" width="30"><span class="text-uppercase text-small font-weight-bold text-white ml-2">Listings</span></div>
            <p class="text-muted text-small font-weight-light mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            <ul class="list-inline mb-0 text-white">
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-twitter"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-pinterest"></i></a></li>
              <li class="list-inline-item"><a class="reset-anchor text-small" href="#"><i class="fab fa-linkedin"></i></a></li>
            </ul>
          </div>
          <div class="col-md-4 col-sm-6 mb-3 mb-md-0">
            <h6 class="pt-2 text-white">Useful links</h6>
            <div class="d-flex flex-wrap">
              <ul class="list-unstyled text-muted mb-0 mb-3 mr-4">
                <li><a class="reset-anchor text-small" href="#">Tools</a></li>
                <li><a class="reset-anchor text-small" href="#">Resources</a></li>
                <li><a class="reset-anchor text-small" href="#">About us</a></li>
                <li><a class="reset-anchor text-small" href="#">Write to us</a></li>
              </ul>
              <ul class="list-unstyled text-muted mb-0">
                <li><a class="reset-anchor text-small" href="#">Privacy Policy </a></li>
                <li><a class="reset-anchor text-small" href="#">Cookie Policy</a></li>
                <li><a class="reset-anchor text-small" href="#">Terms of Service</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mb-3 mb-md-0">
            <h6 class="pt-2 text-white">Newsletter</h6>
            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
            <form action="">
              <div class="input-group">
                <input class="form-control bg-none border-dark text-white" type="email" placeholder="Type your email address">
                <div class="input-group-append">
                  <button class="btn btn-light" type="submit"><i class="fas fa-paper-plane"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="copyrights py-4" style="background: #0e0e0e">
        <div class="container">
          <div class="row text-center">
            <div class="col-md-6 text-lg-left mb-2 mb-md-0">
              <p class="mb-0 text-muted mb-0 text-small">&copy; 2020 All rights reserved.</p>
            </div>
            <div class="col-md-6 col-sm-6 text-md-right">
              <p class="mb-0 text-muted mb-0 text-small">Template designed by <a class="reset-anchor text-primary" href="https://bootstraptemple.com/p/listings">Bootstrap Temple</a>.</p>
              <!-- If you want to remove the backlink, please purchase the Attribution-Free License.-->
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js"></script>
    <script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script>
    <script src="vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="js/bootstrap-filestyle.min.js"></script>
    <script src="js/front.js"></script>
    <script>
      // ------------------------------------------------------- //
      //   Inject SVG Sprite - 
      //   see more here 
      //   https://css-tricks.com/ajaxing-svg-sprite/
      // ------------------------------------------------------ //
      function injectSvgSprite(path) {
      
          var ajax = new XMLHttpRequest();
          ajax.open("GET", path, true);
          ajax.send();
          ajax.onload = function(e) {
          var div = document.createElement("div");
          div.className = 'd-none';
          div.innerHTML = ajax.responseText;
          document.body.insertBefore(div, document.body.childNodes[0]);
          }
      }
      // this is set to BootstrapTemple website as you cannot 
      // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
      // while using file:// protocol
      // pls don't forget to change to your domain :)
      injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg'); 
      
    </script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>