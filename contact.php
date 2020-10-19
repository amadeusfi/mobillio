<?php
include("includes/header.php");
?>

<div id="content">
    <div class="container">
        <div class="col-md-12">
            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li>Contato</li>
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
                        <h2>Estamos as ordens</h2>
                        <p class="text-muted">
                            Se tiver alguma duvida não duvide em nos consultar <strong> 24/7 </strong>
                        </p>
                    </center>

                    <form action="contact.php" method="post">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Motivo</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label>Mensagem</label>
                            <textarea name="message" class="form-control"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" name="submit" class="btn btn-primary">
                                <i class="fa fa-envelope"></i> Enviar   
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