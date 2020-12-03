<?php
session_start();
require('../model/database.php');

if (isset($_POST['selectedCategory']) && !empty($_POST['selectedCategory'])) {

    $category = $_POST['selectedCategory'];
    $vote = $_POST['vote'];
    $UserID = $_SESSION["UserID"];
    switch ($category) {
        case 'TrumpVsBiden':
            $query = "INSERT INTO TrumpVsBiden VALUES ('$UserID', '$vote');";
            break;
        case 'AlcoholVsJuice':
            $query = "INSERT INTO AlcoholVsJuice VALUES ('$UserID', '$vote');";
            break;
        case 'DogVsCats':
            $query = "INSERT INTO DogVsCats VALUES ('$UserID', '$vote');";
            break;
        case 'FacebookVsInstagram':
            $query = "INSERT INTO FacebookVsInstagram VALUES ('$UserID', '$vote');";
            break;
        case 'iOSVsAndroid':
            $query = "INSERT INTO iOSVsAndroid VALUES ('$UserID', '$vote');";
            break;
        case 'RapVsPop':
            $query = "INSERT INTO RapVsPop VALUES ('$UserID', '$vote');";
            break;
    }
    echo $query;
    global $db;
    $result = $db->query($query);
    if (!$result) {
        echo '<script>alert("An error occured while adding your information, please try again!")</script>';
        exit;
    } else {
        echo '<script>alert("YEA BABY!")</script>';
    }
}