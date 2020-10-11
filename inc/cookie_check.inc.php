<?php
        //immer wenn ich Eingelogt bin hab ich das
    ini_set('display_errors', 1);
    require_once('inc/dbh.inc.php');
  $mycookie = $_COOKIE["websession"];
  $sql = "
     SELECT userid FROM session 
     WHERE cookievalue = '$mycookie'
     ORDER BY id DESC 
     LIMIT 1; 
  ";

  $q = $db->prepare($sql);
  $q->execute();
  $result = $q->fetchAll();
    //ende
   if(count($result) == 1) {
       $current_user_id = $result[0][0];
    }

    else{
        header('Location: index.php');
    }

?>
