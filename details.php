<?php include("includes/header.php"); ?>
<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Details</li>
            </ul>
        </div>
        <div class="col-md-3">
            <?php include("includes/sidebar.php"); ?>
        </div>
        <div class="col-md-9">
            <div id="productMain" class="row">
                <div class="col-sm-6">
                    <div id="mainImage">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol>
                            <!-- Carousel inner -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <center>
                                        <img class="img-responsive" src="admin_area/product_images/coz4.jpg" alt="Slider Img 1">
                                    </center>
                                </div>
                                <div class="item">
                                    <center>
                                        <img class="img-responsive" src="admin_area/product_images/coz4b.jpg" alt="Slider Img 2">
                                    </center>
                                </div>
                                <div class="item">
                                    <center>
                                        <img class="img-responsive" src="admin_area/product_images/coz4c.jpg" alt="Slider Img 3">
                                    </center>
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
                </div>
                <!--Quantity Input-->
                <div class="col-sm-6">
                    <div class="box">
                        <h1 class="text-center">Movel Cozinha</h1>
                        <form action="details.php" class="form-horizontal" method="post">
                            <div class="form-group">
                                <label for="" class="col-md-5 control-label">Product Quantity</label>
                                <div class="col-md-7">
                                    <select name="product_qty" id="" class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-5 control-label"></label>
                                <div class="col-md-7">
                                    <select name="product_size" class="form-control" id="">
                                        <option>Select a Size</option>
                                        <option>Small</option>
                                        <option>Medium</option>
                                        <option>Large</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                        <p class="price">$500</p>
                        <p class="text-center buttons">
                            <button class="btn btn-primary i fa fa-shopping-cart">Add to Cart</button>
                        </p>
                    </div>
                    <div class="row" id="thumbs">
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb">
                                <img src="admin_area/product_images/coz4.jpg" alt="product 1" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb">
                                <img src="admin_area/product_images/coz4b.jpg" alt="product 2" class="img-responsive">
                            </a>
                        </div>
                        <div class="col-xs-4">
                            <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb">
                                <img src="admin_area/product_images/coz4c.jpg" alt="product 3" class="img-responsive">
                            </a>
                        </div>
                    </div>
                </div>
                <!--End Quantity Input-->
            </div>
            <div class="box" id="details">
                <h4>Product Details</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum dolores
                    dolorum natus atque, sunt ut cumque dolore amet nulla dolorem
                    vitae sapiente ex fugit et molestiae voluptatibus quos? Dolor, modi.
                </p>
                <h4>Size</h4>
                <ul>
                    <li>Small</li>
                    <li>Medium</li>
                    <li>Large</li>
                </ul>
                <hr>
            </div>
            <div id="same-height-row">
                <div class="col-md-3 col-sm-6">
                    <div class="box same-height headline">
                        <h3 class="text-center">Products that you may love</h3>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 center-responsive">
                    <div class="product same-height">
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/bancomoda.jpg" alt="">
                        </a>
                        <div class="text">
                            <h3><a href="details.php">Estante Banheiro</a></h3>
                            <p class="price">$500</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 center-responsive">
                    <div class="product same-height">
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/bancomoda.jpg" alt="">
                        </a>
                        <div class="text">
                            <h3><a href="details.php">Estante Banheiro</a></h3>
                            <p class="price">$500</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 center-responsive">
                    <div class="product same-height">
                        <a href="details.php">
                            <img class="img-responsive" src="admin_area/product_images/bancomoda.jpg" alt="">
                        </a>
                        <div class="text">
                            <h3><a href="details.php">Estante Banheiro</a></h3>
                            <p class="price">$500</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>