<?php
session_start();
require('database.php');
function insertRecord(){
    global $db;
    $age = $_POST["age"];
    $college = $_POST["college"];
    $major = $_POST["major"];

    $query = "INSERT INTO `user` (`UserID`, `Age`, `College`, `Major`) VALUES (NULL, '$age', '$college', '$major');";
    $result = $db->query($query);
    if(!$result){
        header("Location: /VotingApp");
        echo '<script>alert("Please Enter Valid Information!")</script>';
        
    }
    else{
        $_SESSION["UserID"] = $db->lastInsertId();
       header("Location: /VotingApp/vote");
    }
}
insertRecord();
include ('index.php');
?>