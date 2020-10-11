<?php
ini_set('display_errors',1);
require_once('inc/cookie_check.inc.php');
require_once('inc/dbh.inc.php');

$sql = "
    DELETE FROM session 
    WHERE cookievalue = '$mycookie'; 
";

 $q = $db->prepare($sql);
 $q->execute();
//alter websession cookie wird uberschrieben
 setcookie('websession','', 1);// name, leere value damit es loescht , 1=zeitvalue;
 header('Location:index.php');

?>