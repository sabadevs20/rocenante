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

?>

		
    <!--<div class="page-content">Welcome <//?php echo $username;?></div>-->
    
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
                    <!-- Navbar link--><a class="nav-link active" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link" href="category.html">Category</a>
              </li>
              <li class="nav-item">
                    <!-- Navbar link--><a class="nav-link" href="detail.html">Detail</a>
              </li>
             
              <li class="nav-item ml-lg-2 py-2 py-lg-0"><a class="btn btn-primary" href="#listingModal" data-toggle="modal" >Post Ad</a></li>

              <li class="nav-item ml-lg-2 py-2 py-lg-0"><a class="btn btn-primary" href="logout.php" >Logout</a></li>
              
              
            </ul>
          </div>
        </div>
      </nav>
    </header>
 

      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header px-lg-5">
            <h5 class="modal-title" id="listingModalLabel">Product</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body px-lg-5">
            <form action="postad.php" method="POST">
              <div class="row">
                <div class="form-group col-lg-6">
                  <label for="fullName">Product name</label>
                  <input class="form-control form-control-lg" id="fullName" type="text" name="productname" placeholder="Your full name">
                </div>
                <div class="form-group col-lg-6">
                <?php
                echo"  <label for='listinglocation'>Location</label>";
                 echo" <select class='selectpicker' id='listinglocation' name='location' data-style='bs-select-form-control' data-title='Select location' data-width='100%' required>";
                 $sql="SELECT `city` FROM `tbl_cities`";
                 foreach($conn->query($sql) as $row){
                     echo"     <option value='$row[city]'>$row[city]</option>";
                 } 
                 echo "</select>";
                 
                
                  ?>
                </div>

      
   
               
                <div class="form-group col-lg-6">
                  <label for="istingTitle">Listing title</label>
                  <input class="form-control form-control-lg" id="istingTitle" type="text" name="title" placeholder="Title of your ad">
                </div>
                <div class="form-group col-lg-6">
                  <label for="listingUrl">Price</label>
                  <input class="form-control form-control-lg" id="listingUrl" type="text" name="price" placeholder="Listing website url">
                </div>
                <div class="form-group col-lg-6">
                  <label for="listingCategory">category</label>
                  <select class="selectpicker" id="listingCategory" name="category" data-style="bs-select-form-control" data-title="Select listing category" data-width="100%" required>
                    <option value="1">Vehicles</option>
                    <option value="2">Property</option>
                    <option value="3">Mobile Phone & Tablets</option>
                    <option value="4">Furniture</option>
                    <option value="6">Beauty & Fashion</option>
                    <option value="5">Appliances</option>
                    <option value="7">Health</option>
                    <option value="8">Jobs</option>
                    <option value="9">Agriculture & Produce</option>
                    >
                  </select>
                </div>
                <div class="form-group col-lg-12">
                  <label for="listingDescription">Product description</label>
                  <textarea class="form-control form-control-lg" id="listingDescription" name="description" rows="5" placeholder="Add a small brief about your listing."></textarea>
                </div>
                <div class="form-group col-lg-6 mb-lg-0">
                  <label for="listingThumb">Listing thumbnail</label>
                  <input class="form-control form-control-lg-2" id="listingThumb" type="file" name="listing-thumb">
                </div>
               
              </div>
              <div class="justify-content-start px-lg-5">
            <button class="btn btn-primary mt-4" type="submit">Submit listing</button>
          
          </div>
            </form>
          </div>
         
        </div>
      </div>
    </div>
  



   
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
