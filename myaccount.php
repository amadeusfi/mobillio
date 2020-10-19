<?php include("includes/header.php"); ?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Minha Conta</li>
            </ul>
        </div>
        <div class="col-md-3">
            <?php include("includes/sidebarcostumer.php"); ?>
        </div>
        <div class="col-md-9">
            <div class="box">
            <?php
                if(isset($_GET['my_orders'])){
                    include("myorders.php");
                }
            ?>
            <?php
                if(isset($_GET['pay_offline'])){
                    include("payoffline.php");
                }
            ?>
            <?php
                if(isset($_GET['edit_account'])){
                    include("editaccount.php");
                }
            ?>
            <?php
                if(isset($_GET['change_pass'])){
                    include("changepass.php");
                }
            ?>
            <?php
                if(isset($_GET['delete_account'])){
                    include("deleteaccount.php");
                }
            ?>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>

            