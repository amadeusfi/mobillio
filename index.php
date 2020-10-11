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
                <button type="submit" name="search" value="search" class="btn btn-primary">
                  <i class="fa fa-search"></i>
                </button>
            </div>
          </form>
        </div>
        <!-- end collapse searchform clearfix -->

      </div>
      <!-- End Navbar collapse functionality -->
    </div>
  </div>
  <!-- End Navbar -->
  <script type="text/javascript" src="js/jquery-331.min.js"></script>


  <script type="text/javascript" src="js/bootstrap-337.min.js"></script>
</body>

</html>