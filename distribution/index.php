<?php
include "db_connect.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo $title_name;?></title>
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
        <div class="container"><a class="navbar-brand py-3 d-flex align-items-center" href="index.html"><img src="img/logo.svg" alt="" width="30"><span class="text-uppercase text-small font-weight-bold text-dark ml-2 mb-0">NyasaMart</span></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link active" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link" href="category.html">Category</a>
              </li>
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link" href="detail.html">Detail</a>
              </li>
             
              <li class="nav-item ml-lg-2 py-2 py-lg-0"><a class="btn btn-primary" href="register.php" >Post Ad</a></li>

              <li class="nav-item ml-lg-2 py-2 py-lg-0"><a class="btn btn-primary" href="login.php" >Login</a></li>
              
              
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!--  Modal -->
    <?php
    $logged=2;

    if($logged==1){
    ?>


<!-- <div class="modal fade" id="listingModal" tabindex="-1" role="dialog" aria-labelledby="listingModal" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header px-lg-5">
            <h5 class="modal-title" id="listingModalLabel">Add Listing</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
          </div>
          <div class="modal-body px-lg-5">
            <form action="#">
              <div class="row">
                <div class="form-group col-lg-6">
                  <label for="fullName">Full name</label>
                  <input class="form-control form-control-lg" id="fullName" type="text" name="fullname" placeholder="Your full name">
                </div>
                <div class="form-group col-lg-6">
                  <label for="email">Email Address</label>
                  <input class="form-control form-control-lg" id="email" type="email" name="email" placeholder="Your email address">
                </div>
                <div class="form-group col-lg-6">
                  <label for="fullName">Listing Type</label>
                  <select class="selectpicker" id="listingType" name="listing-type" data-style="bs-select-form-control" data-title="What do you want to add" data-width="100%" required>
                    <option value="tool">Tool</option>
                    <option value="resource">Resource</option>
                  </select>
                </div>
                <div class="form-group col-lg-6">
                  <label for="istingTitle">Listing title</label>
                  <input class="form-control form-control-lg" id="istingTitle" type="text" name="listing-title" placeholder="Title of your title">
                </div>
                <div class="form-group col-lg-6">
                  <label for="listingUrl">Listing URL</label>
                  <input class="form-control form-control-lg" id="listingUrl" type="text" name="listing-url" placeholder="Listing website url">
                </div>
                <div class="form-group col-lg-6">
                  <label for="listingCategory">Listing category</label>
                  <select class="selectpicker" id="listingCategory" name="listing-category" data-style="bs-select-form-control" data-title="Select listing category" data-width="100%" required>
                    <option value="">Marketing</option>
                    <option value="">Idea generation</option>
                    <option value="">Idea generation</option>
                    <option value="">Design</option>
                    <option value="">Naming</option>
                    <option value="">Domain names</option>
                    <option value="">Sales</option>
                    <option value="">Finance</option>
                    <option value="">Project management</option>
                    <option value="">Hosting</option>
                    <option value="">Social tools</option>
                  </select>
                </div>
                <div class="form-group col-lg-12">
                  <label for="listingDescription">Listing description</label>
                  <textarea class="form-control form-control-lg" id="listingDescription" name="listing-description" rows="5" placeholder="Add a small brief about your listing."></textarea>
                </div>
                <div class="form-group col-lg-6 mb-lg-0">
                  <label for="listingThumb">Listing thumbnail</label>
                  <input class="form-control form-control-lg-2" id="listingThumb" type="file" name="listing-thumb">
                </div>
                <div class="form-group col-lg-6 mb-lg-0">
                  <label for="listingCover">Listing cover</label>
                  <input class="form-control form-control-lg-2" id="listingCover" type="file" name="listing-cover">
                </div>
              </div>
            </form>
          </div>
          <div class="modal-footer justify-content-start px-lg-5">
            <button class="btn btn-primary" type="submit">Submit listing</button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </body>



<div class="modal fade" id="listingModal" tabindex="-1" role="dialog" aria-labelledby="listingModal" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header px-lg-5">
            <h5 class="modal-title" id="listingModalLabel">Register to post an ad</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
          </div>
          <div class="modal-body px-lg-5">
            <form action="#">
              <div class="row">
                <div class="form-group col-lg-6">
                  <label for="fullName">Your name</label>
                  <input class="form-control form-control-lg" id="fullName" type="text" name="fullname" placeholder="Your full name">
                </div>
                <div class="form-group col-lg-6">
                  <label for="email">Email Address</label>
                  <input class="form-control form-control-lg" id="email" type="email" name="email" placeholder="Your email address">
                </div>
               
                <div class="form-group col-lg-6">
                  <label for="istingTitle">Phone number</label>
                  <input class="form-control form-control-lg" id="istingTitle" type="text" name="listing-title" placeholder="Phone">
                </div>
                <div class="form-group col-lg-6">
                  <label for="listingUrl">Password</label>
                  <input class="form-control form-control-lg" id="listingUrl" type="password" name="listing-url" placeholder="Password">
                </div>
                
               
              </div>
            </form>
          </div>
          <div class="modal-footer justify-content-start px-lg-5">
            <button class="btn btn-primary" type="submit">Submit </button>
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <?php
      
    }
    ?>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="listingModal" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header px-lg-5">
            <h5 class="modal-title" id="listingModalLabel">Login</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
          </div>
          <div class="modal-body px-lg-5">
            <form action="login.php" method="post">
              <div class="row">
                <div class="form-group col-lg-6">
                  <label for="fullName">Email</label>
                  <input class="form-control form-control-lg" id="fullName" type="email" name="fullname" placeholder="email">
                </div>
                <div class="form-group col-lg-6">
                  <label for="email">Password</label>
                  <input class="form-control form-control-lg" id="email" type="password" name="email" placeholder="password">
                </div>
                <div class="form-group col-lg-6">
                  <h5>No account ?</h5>
                 <a href="register.php"><button class="btn btn-secondary" type="button" >Register</button></a>
                </div>
               
               
                
               
              </div>
            </form>
          </div>
          <div class="modal-footer justify-content-start px-lg-5">
            <button class="btn btn-primary" type="submit">Submit </button>
         
          </div>
        </div>
      </div>
    </div> -->
    <!-- Hero section-->
    <section class="hero-home py-5">
      <div class="container pt-5">
        <div class="row">
          <div class="col-lg-7 mx-auto text-center">
            <p class="h6 text-uppercase text-primary mb-3">Find good deals</p>
            <h3 class="mb-5"><?php echo $about;?></h3>
            <form class="p-2 rounded shadow-sm bg-white" action="#">
              <div class="input-group">
                <input class="form-control border-0 mr-2" type="search" placeholder="Search tools and resources...">
                <div class="input-group-append rounded">
                  <button class="btn btn-primary rounded" type="submit"><i class="fas fa-search"></i></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Features section-->
    <section class="py-5">
      <div class="container py-5">
        <div class="row text-center">
          <div class="col-lg-10 mx-auto">
            <div class="card border-0 shadow">
              <div class="card-body p-5">
                <div class="row">
                  <div class="col-lg-4 mb-4 mb-lg-0">
                        <svg class="svg-icon mb-3 text-primary svg-icon-big">
                          <use xlink:href="#list-details-1"> </use>
                        </svg>
                    <h2 class="h5">Create Account</h2>
                    <p class="text-muted text-small mb-0">Create an account with your name or business name.</p>
                  </div>
                  <div class="col-lg-4 mb-4 mb-lg-0">
                        <svg class="svg-icon mb-3 text-primary svg-icon-big">
                          <use xlink:href="#survey-1"> </use>
                        </svg>
                    <h2 class="h5">Post Ad</h2>
                    <p class="text-muted text-small mb-0">Post your goods or sevice description for your potential customer to see.</p>
                  </div>
                  <div class="col-lg-4">
                        <svg class="svg-icon mb-3 text-primary svg-icon-big">
                          <use xlink:href="#stack-1"> </use>
                        </svg>
                    <h2 class="h5">Done Deal</h2>
                    <p class="text-muted text-small mb-0">Get in touch with your customer, deal done!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Essential tools-->
    <section class="pb-5">
      <div class="container pb-5">
        <header>
          <h2 class="h3 mb-1">Trending ads</h2>
          <p class="text-muted text-small mb-5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
        </header>
        <div class="row text-center align-items-stretch">
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="card reset-anchor border-0 shadow h-100 hover-transition">
              <div class="card-body p-4 p-lg-5">
                <div class="essential-tool-img mb-4 mx-auto" style="background: url(img/tool-1.png)"></div>
                <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">HubSpot for startup</a></h3>
                <p class="text-small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 mb-4 mb-lg-0">
            <div class="card reset-anchor border-0 shadow h-100 hover-transition">
              <div class="card-body p-4 p-lg-5">
                <div class="essential-tool-img mb-4 mx-auto" style="background: url(img/tool-2.png)"></div>
                <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Embroker stratup Program</a></h3>
                <p class="text-small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card reset-anchor border-0 shadow h-100 hover-transition">
              <div class="card-body p-4 p-lg-5">
                <div class="essential-tool-img mb-4 mx-auto" style="background: url(img/tool-3.png)"></div>
                <h3 class="h5"> <a class="stretched-link reset-anchor" href="detail.html">Squadhelp</a></h3>
                <p class="text-small text-muted mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Categories section-->
    <section class="pb-5">
      <div class="container pb-5">
        <header class="text-center mb-5">
          <h2 class="mb-1">Explore our categories</h2>
          <p class="text-muted text-small">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</p>
        </header>
        <div class="row text-center">
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#stack-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Vehicles</a></h2>
                <?php 
                $sql= "SELECT * FROM `products` where category_id =1";
                $result=mysqli_query($conn,$sql);
                $count=mysqli_num_rows($result);

                
                ?>

                <p class="categories-item-number small mb-0"><?php echo $count ?></p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#pie-chart-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Mobile phones & Tablets</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#design-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Furniture</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#mental-health-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Appliances</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#bookmark-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Fashion & Beauty</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#checked-window-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Health</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#list-details-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Jobs</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 px-lg-2">
            <div class="categories-item card border-0 shadow mb-4 reset-anchor hover-transition">
              <div class="card-body px-4 py-5">
                    <svg class="svg-icon mb-3">
                      <use xlink:href="#sales-up-1"> </use>
                    </svg>
                <h2 class="h5"> <a class="stretched-link reset-anchor-inherit" href="#">Agriculture & Produce</a></h2>
                <p class="categories-item-number small mb-0">2 Items</p>
              </div>
            </div>
          </div>
          <div class="col-lg-12 text-center pt-4"><a class="btn btn-primary" href="#">Clothes, shoes & Accessories</a></div>
        </div>
      </div>
    </section>
   
    <!-- Newsletter section-->
    <section class="pb-5">
      <div class="container pb-5">
        <header class="text-center mb-5">
          <h2>Free tools to grow your startup</h2>
        </header>
        <div class="row">
          <div class="col-lg-7 mx-auto">
            <form class="p-2 rounded shadow-sm bg-white" action="#">
              <div class="input-group">
                <input class="form-control border-0 mr-2" type="email" placeholder="Enter your email address">
                <div class="input-group-append rounded">
                  <button class="btn btn-primary rounded" type="submit">Get started today</button>
                </div>
              </div>
            </form>
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
              <p class="mb-0 text-muted mb-0 text-small">&copy; 2021 All rights reserved.</p>
            </div>
            <div class="col-md-6 col-sm-6 text-md-right">
              <p class="mb-0 text-muted mb-0 text-small"><?php echo $developer; ?></p>
           
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