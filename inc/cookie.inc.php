<?php

  $userid = $result[0]['userid'];
  $cookievalue = sha1('sakasaka1234IOIOI'.$userid.date("mdHi"));
  $sql = "
   INSERT INTO session (id , userid, cookievalue)
   VALUES (NULL, '$userid', '$cookievalue');
  ";
    
    $q = $db->prepare($sql);
    $q->execute();
    
    setcookie('websession', $cookievalue);


?>