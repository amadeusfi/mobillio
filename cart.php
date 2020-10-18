<?php include("includes/header.php"); ?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Carrinho</li>
            </ul>
        </div>
        <div id="cart" class="col-md-9">
            <div class="box">
                <form action="cart.php" method="post" enctype="multipart/form-data">
                    <h1>Carrinho</h1>
                    <p class="text-muted">You currently have 3 item(s) in your cart</p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2">Produto</th>
                                    <th>Quantidade</th>
                                    <th>Preço por unidade</th>
                                    <th>Tamanho</th>
                                    <th colspan="1">Delete</th>
                                    <th colspan="2">Sub-Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <img src="admin_area/product_images/coz4.jpg" alt="Cozinha " class="img-responsive"></td>
                                    <td> <a href="#">Movel Cozinha</a></td>
                                    <td>2</td>
                                    <td>$500</td>
                                    <td>large</td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td> $100</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td> <img src="admin_area/product_images/est1.jpg" alt="est" class="img-responsive"></td>
                                    <td> <a href="#">Estante Sala</a></td>
                                    <td>2</td>
                                    <td>$500</td>
                                    <td>large</td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td> $100</td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td> <img src="admin_area/product_images/bancomoda.jpg" alt="ban" class="img-responsive"></td>
                                    <td> <a href="#">Comoda Banheiro</a></td>
                                    <td>2</td>
                                    <td>$500</td>
                                    <td>large</td>
                                    <td><input type="checkbox" name="remove[]"></td>
                                    <td> $100</td>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="5">Total</th>
                                    <th colspan="2">$100</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="box-footer">
                        <div class="pull-left">
                            <a href="" class="btn btn-default">
                                <i class="fa fa-chevron-left"></i> Mais Produtos
                            </a>
                        </div>
                        <div class="pull-right">
                            <button type="submit" name="update" value="Update Cart" class="btn btn-default">
                                <i class="fa fa-refresh"></i> Refrescar Carrinho
                            </button>
                            <a href="checkout.php" class="btn btn-primary">
                                Procced Checkout <i class="fa fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </form>
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
        <div class="col-md-3">
            <div id="order-summary" class="box">
                <div class="box-header">
                    <h3>Sumario de Pedidos</h3>
                </div>
                <p class="text-muted">
                    Shipping and additional costs are calculated based on value you have entered
                </p>
                <div class="table-responsive">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Seu Sub-total</td>
                                <th>$200</th>
                            </tr>
                            <tr>
                                <td>Envio</td>
                                <td>$0</td>
                            </tr>
                            <tr>
                                <td>Impostos</td>
                                <td>$0</ td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td>$200</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>
