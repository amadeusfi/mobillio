<?php

require_once('inc/dbh.inc.php');

function is_logged_in(){

    $cookie = $_COOKIE['websession'];
    $sql = "SELECT * FROM session WHERE cookievalue = $cookie";
    $q = $db->prepare($sql);
    $q->execute();
    $result = $q->fetchAll();
    // true wenn Nur 1 ergebnis
    if(count($result) == 1 ) {
        return true;
    }
    else {
        return false;
    }
}

function get_user_id() {

    $cookie = $_COOKIE['websession'];
    $sql = "SELECT userid FROM session WHERE cookievalue = $cookie";
    $q = $db->prepare($sql);
    $q->execute();
    $result = $q->fetchAll();

    if(count($result) == 1 ) {
        return $id;
    }
    else {
        return 0;
    }

    ?>