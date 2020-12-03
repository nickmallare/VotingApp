<?php

require('database.php');
function getUserID(){
    global $db;
    return $db->lastInsertId();
}
?>
