<?php include("includes/header.php"); ?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>My Account</li>
            </ul>
        </div>
        <div class="col-md-3">
            <?php include("includes/sidebar.php"); ?>
        </div>
        <div class="col-md-9">
            <div class="box">
                <h1 align="center"> Please confirm your payment </h1>
                <form action="confirm.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label> Invoice No: </label>
                        <input type="text" class="form-control" name="invoice_no" required>
                    </div>
                    <div class="form-group">
                        <label> Amount Sent: </label>
                        <input type="text" class="form-control" name="amount_sent" required>
                    </div>
                    <div class="form-group">
                        <label> Select Payment Method: </label>
                        <select name="payment_mode" class="form-control">
                            <option value=""> Select Payment Mode</option>
                            <option value=""> Back Code </option>
                            <option value=""> UBL / Omni Paisa </option>
                            <option value=""> Easy Paysa</option>
                            <option value=""> Western Union </option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label> Transaction/ Reference ID: </label>
                        <input type="text" class="form-control" name="ref_no" required>
                    </div>
                    <div class="form-group">
                        <label> Omni Paisa </label>
                        <input type="text" class="form-control" name="code" required>
                    </div>
                    <div class="form-group">
                        <label> Payment Date </label>
                        <input type="text" class="form-control" name="date" required>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-lg">
                            <i class="fa fa-user-md"></i> Confirm Payment
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("includes/footer.php"); ?>