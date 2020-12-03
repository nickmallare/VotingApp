<?php
session_start();
require('../model/database.php');     
    global $db;
    $bidenCount = $db->prepare("SELECT count(*) from TrumpVsBiden
    WHERE Selection='Biden'");
    $bidenCount->execute();
    $bidenCount = $bidenCount->fetchColumn();

    $trumpCount = $db->prepare("SELECT count(*) from TrumpVsBiden
    WHERE Selection='Trump'");
    $trumpCount->execute();
    $trumpCount = $trumpCount->fetchColumn();


    $alcoholCount = $db->prepare("SELECT count(*) from AlcoholVsJuice
    WHERE Selection='Alcohol'");
    $alcoholCount->execute();
    $alcoholCount = $alcoholCount->fetchColumn();

    $juiceCount = $db->prepare("SELECT count(*) from AlcoholVsJuice
    WHERE Selection='Juice'");
    $juiceCount->execute();
    $juiceCount = $juiceCount->fetchColumn();

    
    $dogCount = $db->prepare("SELECT count(*) from DogVsCats
    WHERE Selection='Dog'");
    $dogCount->execute();
    $dogCount = $dogCount->fetchColumn();

    $catCount = $db->prepare("SELECT count(*) from DogVsCats
    WHERE Selection='cat'");
    $catCount->execute();
    $catCount = $catCount->fetchColumn();;


    $facebookCount = $db->prepare("SELECT count(*) from FacebookVsInstagram
    WHERE Selection='Facebook'");
    $facebookCount->execute();
    $facebookCount = $facebookCount->fetchColumn();;

    $instagramCount = $db->prepare("SELECT count(*) from FacebookVsInstagram
    WHERE Selection='Instagram'");
    $instagramCount->execute();
    $instagramCount = $instagramCount->fetchColumn();



    $rapCount = $db->prepare("SELECT count(*) from RapVsPop
    WHERE Selection='Rap'");
    $rapCount->execute();
    $rapCount = $rapCount->fetchColumn();

    $popCount = $db->prepare("SELECT count(*) from RapVsPop
    WHERE Selection='Pop'");
    $popCount->execute();
    $popCount = $popCount->fetchColumn();

    $iosCount = $db->prepare("SELECT count(*) from iOSVsAndroid
    WHERE Selection='iOS'");
    $iosCount->execute();
    $iosCount = $iosCount->fetchColumn();

    $androidCount = $db->prepare("SELECT count(*) from iOSVsAndroid
    WHERE Selection='Android'");
    $androidCount->execute();
    $androidCount = $androidCount->fetchColumn();



    echo json_encode(array("bidenCount"=>$bidenCount, "trumpCount"=>$trumpCount, 
    "alcoholCount"=>$alcoholCount, "juiceCount"=>$juiceCount, 
    "dogCount"=>$dogCount, "catCount"=>$catCount, "facebookCount"=>$facebookCount, 
    "instagramCount"=>$instagramCount, "rapCount"=>$rapCount, "popCount"=>$popCount, 
    "iosCount"=>$iosCount, "androidCount"=>$androidCount))


 ?>
