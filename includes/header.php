<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobillio</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <div id="top" class="container-fluid">
        <div class="container">
            <div class="col-md-4 offer">
                <div class="navbar-collapse collapse left">
                    <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">procure</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
                <div class="collapse clearfix" id="search">
                    <form method="get" action="results.php" class="navbar-form">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="user_query" required>
                            <span class="input-group-btn">
                                <button type="submit" name="search" value="procure" class="btn btn-primary">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <a href="index.php">
                    <h1>Mobillio Movéis</h1>
                </a>
            </div>
            <div class="col-md-4">
                <ul class="menu">
                    <li><a href="checkout.php">Login</a></li>
                    <li><a href="customer_register.php">Register</a></li>
                    <li><a href="myaccount.php">My Account</a></li>
                    <li><a href="cart.php" class="btn navbar-btn btn-primary right">
                            <i class="fa fa-shopping-cart"></i>
                            <span> 4</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div id="navbar" class="navbar navbar-default">
        <div class="container-fluid center">
            <div class="navbar-collapse collapse" id="navigation">
                <div class="padding-nav center-block">
                    <ul class="nav navbar-nav">
                        <li><a href="shop.php"><img src="assets/icons/shop.png"></a></li>
                        <li><a href="kitchen.php"><img src="assets/icons/kitchen.png"></a></li>
                        <li><a href="kitchen.php"><img src="assets/icons/dinner.png"></a></li>
                        <li><a href="living.php"><img src="assets/icons/living.png"></a></li>
                        <li><a href="bed.php"><img src="assets/icons/bed.png"></a></li>
                        <li><a href="desk.php"><img src="assets/icons/desk.png"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>