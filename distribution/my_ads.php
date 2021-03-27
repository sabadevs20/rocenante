<?php
// session_start();
// if (isset($_SESSION["username"])) {
//     $username = $_SESSION["username"];
//     session_write_close();
// } else {
    // since the username is not set in session, the user is not-logged-in
    // he is trying to access this page unauthorized
    // so let's clear all session variables and redirect him to index
//     session_unset();
//     session_write_close();
//     $url = "./index.php";
//     header("Location: $url");
// }

include 'db_connect.php';
session_start();
$_SESSION['user_id'];


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My profile</title>
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
                    <!-- Navbar link--><a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link" href="category.html">Category</a>
              </li>
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link active" href="detail.html">Detail</a>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pages" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                <div class="dropdown-menu mt-lg-3"><a class="dropdown-item" href="index.html">Home</a><a class="dropdown-item" href="category.html">Category</a><a class="dropdown-item" href="detail.html">Detail</a></div>
              </li>
              <li class="nav-item ml-lg-2 py-2 py-lg-0"><a class="btn btn-primary" href="#listingModal" data-toggle="modal">Add listing</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    
    <!-- Hero section-->
    <section class="hero d-flex align-items-end py-5 bg-cover bg-center" style="background: url(img/tool-detail-bg.jpg)">
      <div class="container index-forward py-5 py-lg-0">
        <div class="row align-items-end">
          <div class="col-lg-7 mb-4 mb-lg-0">
            <div class="media align-items-center"><img class="rounded-circle" src="img/tool-detail-thumb.jpg" alt="" width="80">
              <div class="media-body ml-3">
                <h1 class="text-white"><?php echo $_SESSION['user_name'];?></h1>
                <ul class="list-inline mb-0 text-small">
                  <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                  <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-5 text-lg-right">
            <ul class="list-inline mb-0">
              <li class="list-inline-item m-1"><a class="btn btn-primary" href="#"> <i class="fas fa-link mr-2"></i>History</a></li>
              <li class="list-inline-item m-1"><a class="btn btn-outline-light px-3" href="#" rel="tooltip" data-placement="top" title="Bookmark"><i class="fas fa-heart"></i></a></li>
              <li class="list-inline-item m-1"><a class="btn btn-outline-light px-3" href="#" rel="tooltip" data-toggle="modal" data-placement="top" title="Share" data-target="#shareModal"><i class="fas fa-reply"></i></a></li>
              <li class="list-inline-item m-1"><a class="btn btn-outline-light px-3" href="#" rel="tooltip" data-placement="top" title="Report"><i class="fas fa-info-circle"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--  Share modal -->
    <div class="modal fade" id="shareModal" tabindex="-1" role="dialog" aria-labelledby="shareModal" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0 p-3">
          <button class="close d-inline-block ml-auto px-1" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <div class="modal-header border-0 px-4 py-0">
            <h5 class="modal-title" id="exampleModalCenterTitle">Share this tool</h5>
          </div>
          <div class="modal-body px-4">
            <ul class="list-inline mb-0">
              <li class="list-inline-item mr-1 mb-1"><a class="social-link facebook" href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
              <li class="list-inline-item mr-1 mb-1"><a class="social-link twitter" href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
              <li class="list-inline-item mr-1 mb-1"><a class="social-link tumblr" href="#"><i class="fab fa-tumblr fa-fw"></i></a></li>
              <li class="list-inline-item mr-1 mb-1"><a class="social-link linkedin" href="#"><i class="fab fa-linkedin fa-fw"></i></a></li>
              <li class="list-inline-item mr-1 mb-1"><a class="social-link whatsapp" href="#"><i class="fab fa-whatsapp fa-fw"></i></a></li>
              <li class="list-inline-item mr-1 mb-1"><a class="social-link pinterest" href="#"><i class="fab fa-pinterest fa-fw"></i></a></li>
              <li class="list-inline-item mr-1 mb-1"><a class="social-link" href="#"><i class="far fa-envelope fa-fw"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <section class="py-5">
      <div class="container py-5">
        <div class="row">
          <div class="col-lg-8 mb-5 mb-lg-0">
            <!-- About-->
            
            <!-- Gallery-->
            <div class="card border-0 shadow-sm mb-4 mb-lg-5 p-2 p-lg-0">
              <div class="card-body p-lg-5">
                <h2 class="h3 mb-4">Your Ads so far</h2>
                <div class="rounded overflow-hidden mb-3">
                  <div class="owl-carousel tool-gallery-slider" data-slider-id="1"><a class="d-block" href="img/tool-gallery-1.jpg" data-lightbox="tool-gallery" title="Gallery item 1"><img class="img-fluid" src="img/tool-gallery-1.jpg" alt="..."></a><a class="d-block" href="img/tool-gallery-2.jpg" data-lightbox="tool-gallery" title="Gallery item 2"><img class="img-fluid" src="img/tool-gallery-2.jpg" alt="..."></a><a class="d-block" href="img/tool-gallery-3.jpg" data-lightbox="tool-gallery" title="Gallery item 3"><img class="img-fluid" src="img/tool-gallery-3.jpg" alt="..."></a><a class="d-block" href="img/tool-gallery-4.jpg" data-lightbox="tool-gallery" title="Gallery item 4"><img class="img-fluid" src="img/tool-gallery-4.jpg" alt="..."></a></div>
                </div>
                <div class="owl-thumbs row px-2" data-slider-id="1">
                  <div class="owl-thumb-item col-3 px-2"><img class="w-100" src="img/tool-gallery-1.jpg" alt="..."></div>
                  <div class="owl-thumb-item col-3 px-2"><img class="w-100" src="img/tool-gallery-2.jpg" alt="..."></div>
                  <div class="owl-thumb-item col-3 px-2"><img class="w-100" src="img/tool-gallery-3.jpg" alt="..."></div>
                  <div class="owl-thumb-item col-3 px-2"><img class="w-100" src="img/tool-gallery-4.jpg" alt="..."></div>
                </div>
              </div>
            </div>
           
            
            
            
          </div>
        </div>
      </div>
    </section>
    <!-- Related items-->
    <section class="pb-5">
      <div class="container pb-5">
        <header class="text-center mb-5">
          <h2>You May Also Be Interested In</h2>
        </header>
        <div class="row">
          <div class="col-lg-4 mb-4">
                <div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="#">
                    <div class="tool-thumb rounded-circle" href="#"><img class="img-fluid rounded-circle" src="img/tool-thumb-1.png" alt="..." width="40"></div>
                    <div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
                    <ul class="list-inline tool-rating mb-0">
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                    </ul>
                    <div class="overlay-content"><img class="img-fluid" src="img/tool-bg-1.jpg" alt="..."></div></a>
                  <div class="card-body p-4">
                    <h3 class="h5"> <a class="stretched-link reset-anchor" href="#">Curator</a></h3>
                    <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                  </div>
                </div>
          </div>
          <div class="col-lg-4 mb-4">
                <div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="#">
                    <div class="tool-thumb rounded-circle" href="#"><img class="img-fluid rounded-circle" src="img/tool-thumb-2.png" alt="..." width="40"></div>
                    <div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
                    <ul class="list-inline tool-rating mb-0">
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                    </ul>
                    <div class="overlay-content"><img class="img-fluid" src="img/tool-bg-2.jpg" alt="..."></div></a>
                  <div class="card-body p-4">
                    <h3 class="h5"> <a class="stretched-link reset-anchor" href="#">Elevatr</a></h3>
                    <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                  </div>
                </div>
          </div>
          <div class="col-lg-4 mb-4">
                <div class="card shadow-sm border-0 reset-anchor d-block hover-transition"><a class="d-block dark-overlay card-img-top overflow-hidden tool-trending" href="#">
                    <div class="tool-thumb rounded-circle" href="#"><img class="img-fluid rounded-circle" src="img/tool-thumb-3.png" alt="..." width="40"></div>
                    <div class="featured-badge" rel="tooltip" data-placement="top" title="Featured"><i class="fas fa-bolt"></i></div>
                    <ul class="list-inline tool-rating mb-0">
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                      <li class="list-inline-item m-0"><i class="fas fa-star text-white"></i></li>
                    </ul>
                    <div class="overlay-content"><img class="img-fluid" src="img/tool-bg-3.jpg" alt="..."></div></a>
                  <div class="card-body p-4">
                    <h3 class="h5"> <a class="stretched-link reset-anchor" href="#">Germ.io</a></h3>
                    <p class="text-muted text-small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                  </div>
                </div>
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