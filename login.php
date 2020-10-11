<?php
require_once("cookie_check.php");
if(is_logged_in()) {
    header('Location:profil.php');
}

ini_set('display_errors',1);
include('static/include_header.inc.php');
require_once('inc/dbh.inc.php');

$errors = "";

if($_POST){
    require_once('inc/dbh.inc.php');

    $username = $_POST["username"];
    $pass = $_POST["pass"];
    $hash = sha1($pass);
    
    $sql = "SELECT userid FROM user WHERE username = '$username' AND hash = '$hash';";
    $q = $db->prepare($sql);
    // TODO AMadeus: Herausfinden, wie PDO::bindParam() hier hilft.
    $q->execute();
    $result = $q->fetchAll();
    
    echo count($result);
    if(count($result) == 1) {
        require('inc/cookie.inc.php');
        header("Location: profil.php");

    }

    else{
        $errors .="Benutzername oder Passwort falsch";
    }
}

?>
<h2>Login</h2>
<p><?php echo $errors;?></p>
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST">
  <label>username<input type="text" name="username"></label>
  <label>password<input type="password" name="pass"></label>
  <label><input type="submit" value="Login">
</form>

<?php
include('static/include_footer.inc.php');
 ?>