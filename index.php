<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mobillio Moveis</title>
  <link rel="stylesheet" href="styles/bootstrap-337.min.css">
  <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>
  <!--Top Nav -->
  <div id="top">
    <div class="container">
      <div class="col-md-6 offer">
        <a href="#" class="btn btn-success btn-sm">Welcome<a />
          <a href="checkout.php">Shop Cart Total Price is x</a>
      </div>
      <div>
        <ul class="menu">
          <li><a href="customer_register.php">Register</a></li>
          <li><a href="checkout.php">My account</a></li>
          <li><a href="cart.php">Go to cart</a></li>
          <li><a href="checkout.php">Login</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!--End Top Nav -->
  <!-- Begin Navbar -->
  <div id="navbar" class="navbar navbar-default">
    <div class="container">
      <!--title website-->
      <div class="navbar-header">
        <a href="index.php" class="navbar-brand home">
          <img src="images/logomobillio.png" alt="mobillio logo" class="hidden-xs">
          <img src="images/logomobillio_mobile.png" alt="mobillio logo" class="visible-xs">
        </a>
      </div>
      <!--Navbar Header / Search and HamburgerMenu when it is small-->
      <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
        <span class="sr-only">Toggle Navigation</span>
        <i class="fa fa-align-justify"></i>
      </button>
      <button class="navbar-toggle" data-toggle="collapse" data-target="#search">
        <span class="sr-only">Toggle Search</span>
        <i class="fa fa-search"></i>
      </button>
      <!-- End Navbar Header/ Search and HamburgerMenu when it is small-->

      <!-- Begin Navbar collapse functionality -->
      <div class="navbar-collapse collapse" id="navigation">
        <!--Begin Main Menu-->
        <div class="padding-nav">
          <!--Begin Navbar left-->
          <ul class="nav navbar-nav left">
            <li class="active">
              <a href="index.php">Home</a>
            </li>
            <li>
              <a href="shop.php">Shop</a>
            </li>
            <li>
              <a href="checkout.php">My Account</a>
            </li>
            <li>
              <a href="cart.php">Shopping Cart</a>
            </li>
            <li>
              <a href="contact.php">Contact Us</a>
            </li>
          </ul>
          <!--End Navbar left-->
        </div>
        <!--End Main Menu-->
        <a href="cart.php" class="btn navbar-btn btn-primary right">
          <i class="fa fa-shopping-cart"></i>
          <span>4 items in card</span>
        </a>
        <!-- begin navbar collapse right -->
        <div class="navbar-collapse collapse right">
          <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
            <span class="sr-only">Toggle Search</span>
            <i class="fa fa-search"></i>
          </button>

        </div>
        <!-- End navbar collapse right -->
        <!-- begin collapse searchform clearfix -->
        <div class="collapse clearfix" id="search">
          <form method="get" action="results.php" class="navbar-form">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="search" name="user_query" required>
              <!--  begin icon inside searchform  -->
              <span class="input-group-btn">
                <button type="submit" name="search" value="search" class="btn btn-primary">
                  <i class="fa fa-search"></i>
                </button>
              </span>
              <!-- end icon inside searchform  -->
            </div>
          </form>
        </div>
        <!-- end collapse searchform clearfix -->

      </div>
      <!-- End Navbar collapse functionality -->
    </div>
  </div>
  <!-- End Navbar -->
  <!-- Slider -->
  <div class="container" id="slider">
    <div class="col-md-12">
      <!-- Carousel slide start -->
      <div class="carousel slide" id="myCarousel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>
        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="admin_area/slides_images/bicicleta_2.jpg" alt="Slider Img 1">
          </div>
          <div class="item">
            <img src="admin_area/slides_images/cadmesbambini_1.jpg" alt="Slider Img 2">
          </div>
          <div class="item">
            <img src="admin_area/slides_images/cozinha_5.jpg" alt="Slider Img 3">
          </div>
          <div class="item">
            <img src="admin_area/slides_images/cozinhacor_1.jpg" alt="Slider Img 4">
          </div>
        </div>
        <!-- End Carousel inner -->
        <!-- Carousel left control -->
        <a href="#myCarousel" class="left carousel-control" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <!-- Carousel right control -->
        <a href="#myCarousel" class="right carousel-control" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    <!-- End Carousel slide -->
  </div>
  <!-- End Slider -->
  <!-- Advantages -->
  <div id="advantages">
    <div class="container">
      <div class="same-height-row">
        <div class="col-sm-4">
          <div class="box same-height">
            <!-- Icon -->
            <div class="icon">
              <i class="fa fa-heart"></i>
            </div>
            <!-- End Icon -->
            <h3><a href="#">We love our costumer</a></h3>
            <p>We know how to provide the best posible service ever</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="box same-height">
            <!-- Icon -->
            <div class="icon">
              <i class="fa fa-tag"></i>
            </div>
            <!-- End Icon -->
            <h3><a href="#">Best price</a></h3>
            <p>Comparte us, we have the best price and quality</p>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="box same-height">
            <!-- Icon -->
            <div class="icon">
              <i class="fa fa-thumbs-up"></i>
            </div>
            <!-- End Icon -->
            <h3><a href="#">100% original</a></h3>
            <p>We just offer you the best for your needs</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Advantages -->
  <!-- Hot -->
  <div id="hot">
    <div class="box">
      <div class="container">
        <div class="col-md-12">
          <h2>
            Our Latest Products
          </h2>
        </div>
      </div>
    </div>
  </div>
  <!-- End Hot -->
  <!-- Products -->
  <div id="content" class="container">
    <div class="row">
      <!-- col-sm-4 col-sm-6 single  -->
      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img class="img-responsive" src="admin_area/product_images/armabam.jpg" alt="Product 1">
          </a>
          <div class="text">
            <h3>
              <a href="details.php">
                Armario Bambini
              </a>
            </h3>
            <p class="price">$30</p>
            <p class="button">
              <a href="details.php" class="btn btn-default">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart">
                  Add To Cart
                </i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <!-- end col-sm-4 col-sm-6 single  -->
      <!-- col-sm-4 col-sm-6 single  -->
      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img class="img-responsive" src="admin_area/product_images/armabam.jpg" alt="Product 1">
          </a>
          <div class="text">
            <h3>
              <a href="details.php">
                Armario Bambini
              </a>
            </h3>
            <p class="price">$30</p>
            <p class="button">
              <a href="details.php" class="btn btn-default">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart">
                  Add To Cart
                </i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <!-- end col-sm-4 col-sm-6 single  -->
      <!-- col-sm-4 col-sm-6 single  -->
      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img class="img-responsive" src="admin_area/product_images/armabam.jpg" alt="Product 1">
          </a>
          <div class="text">
            <h3>
              <a href="details.php">
                Armario Bambini
              </a>
            </h3>
            <p class="price">$30</p>
            <p class="button">
              <a href="details.php" class="btn btn-default">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart">
                  Add To Cart
                </i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <!-- end col-sm-4 col-sm-6 single  -->
      <!-- col-sm-4 col-sm-6 single  -->
      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img class="img-responsive" src="admin_area/product_images/armabam.jpg" alt="Product 1">
          </a>
          <div class="text">
            <h3>
              <a href="details.php">
                Armario Bambini
              </a>
            </h3>
            <p class="price">$30</p>
            <p class="button">
              <a href="details.php" class="btn btn-default">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart">
                  Add To Cart
                </i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <!-- end col-sm-4 col-sm-6 single  -->
      <!-- col-sm-4 col-sm-6 single  -->
      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img class="img-responsive" src="admin_area/product_images/armabam.jpg" alt="Product 1">
          </a>
          <div class="text">
            <h3>
              <a href="details.php">
                Armario Bambini
              </a>
            </h3>
            <p class="price">$30</p>
            <p class="button">
              <a href="details.php" class="btn btn-default">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart">
                  Add To Cart
                </i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <!-- end col-sm-4 col-sm-6 single  -->
      <!-- col-sm-4 col-sm-6 single  -->
      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img class="img-responsive" src="admin_area/product_images/armabam.jpg" alt="Product 1">
          </a>
          <div class="text">
            <h3>
              <a href="details.php">
                Armario Bambini
              </a>
            </h3>
            <p class="price">$30</p>
            <p class="button">
              <a href="details.php" class="btn btn-default">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart">
                  Add To Cart
                </i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <!-- end col-sm-4 col-sm-6 single  -->
      <!-- col-sm-4 col-sm-6 single  -->
      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img class="img-responsive" src="admin_area/product_images/armabam.jpg" alt="Product 1">
          </a>
          <div class="text">
            <h3>
              <a href="details.php">
                Armario Bambini
              </a>
            </h3>
            <p class="price">$30</p>
            <p class="button">
              <a href="details.php" class="btn btn-default">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart">
                  Add To Cart
                </i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <!-- end col-sm-4 col-sm-6 single  -->
      <!-- col-sm-4 col-sm-6 single  -->
      <div class="col-sm-4 col-sm-6 single">
        <div class="product">
          <a href="details.php">
            <img class="img-responsive" src="admin_area/product_images/armabam.jpg" alt="Product 1">
          </a>
          <div class="text">
            <h3>
              <a href="details.php">
                Armario Bambini
              </a>
            </h3>
            <p class="price">$30</p>
            <p class="button">
              <a href="details.php" class="btn btn-default">View Details</a>
              <a href="details.php" class="btn btn-primary">
                <i class="fa fa-shopping-cart">
                  Add To Cart
                </i>
              </a>
            </p>
          </div>
        </div>
      </div>
      <!-- end col-sm-4 col-sm-6 single  -->
    </div>
  </div>

  <!-- End Products -->
  <!-- Footer -->
  <?php
  include("includes/footer.php"); 
  ?>
  <!-- End Footer -->



  <script type="text/javascript" src="js/jquery-331.min.js"></script>


  <script type="text/javascript" src="js/bootstrap-337.min.js"></script>
</body>

</html>