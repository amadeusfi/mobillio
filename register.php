<?php
  if(isset($_COOKIE['websession'])) header('Location:profil.php');

    include('static/include_header.inc.php');
    include_once('inc/dbh.inc.php');

if($_POST) {
  $username = $_POST['username'];
  $mail = $_POST['mail'];
  $pass = $_POST['pass'];
  $pass2 = $_POST['pass2'];
  $error = '';
 //Validierung bis Z 14
  if(strlen($username) < 6) $error .= 'Benutzername zu kurz';
  if(strlen($pass) <4) $error .= 'pass zu kurz';
  if($pass != $pass2) $error .= "Passwortbestätigung falsch";
  
  if($error == '') {
    // \o/ wir können speichern
    $dsn = 'mysql:dbname=webday;host=localhost';
    $dbuser = 'root';
    $dbpassword = 'root';
    
    $hash = sha1($pass);
    $sql = "
        INSERT INTO user (userid, username, email, regdate, hash)
        VALUES (NULL, '$username', '$mail', NULL, '$hash');
        ";
    $db = new PDO($dsn, $dbuser, $dbpassword) or die('pdo error');
    $q = $db->prepare($sql);
    $r = $q->execute();
    }
} 
?>
<h2>Registrierung</h2>
<p class="error">
  <?=$error?>
</p>
<form action="<?=$_SERVER['SCRIPT_NAME']?>" method="POST">
  <label>username<input type="text" name="username"></label>
  <label>mail<input type="text" name="mail"></label>
  <label>password<input type="password" name="pass"></label>
  Please write the password again
  <label>password<input type="password" name="pass2"></label>
  <input type="submit" value="Login" name="reg">
</form>

<?php
include('static/include_footer.inc.php');
 ?>