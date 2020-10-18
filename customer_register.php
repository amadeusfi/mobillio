
<?php
include("includes/header.php");
?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Register</li>
            </ul>
        </div>
        <!-- col-md-3 -->
        <div class="col-md-3">
            <?php include("includes/sidebar.php"); ?>
        </div>
        <!-- end col-md-3 -->
        <div class="col-md-9">
            <div class="box">
                <div class="box-header">
                    <center>
                        <h2>Register a new Account</h2>
                        
                    </center>

                    <form action="customer_register.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" class="form-control" name="c_name" required>
                        </div>
                        <div class="form-group">
                            <label>your Email</label>
                            <input type="text" class="form-control" name="c_name" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="c_pass" required>
                        </div>
                        <div class="form-group">
                            <label>Country</label>
                            <input type="password" class="form-control" name="c_country" required>
                        </div>
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="password" class="form-control" name="c_city" required>
                        </div>
                        <div class="form-group">
                            <label>Your Contact</label>
                            <input type="password" class="form-control" name="c_contact" required>
                        </div>
                        <div class="form-group">
                            <label>Adress</label>
                            <input type="password" class="form-control" name="c_adress" required>
                        </div>
                        <div class="form-group">
                            <label>Profile Picture</label>
                            <input type="file" class="form-control form-height-custom" name="c_image" required>
                        </div>
                        
                        
                        <div class="text-center">
                            <button type="submit" name="register" class="btn btn-primary">
                                <i class="fa fa-thumbs-up"></i> Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include("includes/footer.php");
?>
<?php
include("includes/footer.php");
?>