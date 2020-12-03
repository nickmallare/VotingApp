<?php 
session_start();
require('../model/database.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../styles/main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../main.js"></script>
</head>

<body>
    <div class="title">
        <h1>Trump or Biden?</h2>
    </div>
    <div class="row">
        <div class="left">
            <img id="imgOneLeft" src="https://d279m997dpfwgl.cloudfront.net/wp/2019/07/AP_19201004713022-1000x667.jpg">
            <h1 id="trumpCount"></h1>
        </div>

        <div class="right">
            <img id="imgOneRight" src="https://storage.googleapis.com/afs-prod/media/29e3a4c75ffe4ccca949a5f58819553b/800.jpeg">
            <h1 id="bidenCount"></h1>
        </div>
    </div>
    </div>

    <div class="title">
        <h1>Rap or Pop Music?</h1>
    </div>
    <div class="row">
        <div class="left">
            <img id="imgTwoLeft" src="https://image.freepik.com/free-vector/rap-neon-word-microphone-flame-outline_1262-11901.jpg">
            <h1 id="rapCount"></h1>
        </div>

        <div class="right">
            <img id="imgTwoRight" src="https://cdn.wallpapersafari.com/18/48/Zwru9Q.png">
        <h1 id="popCount"></h1>
        </div>
    </div>

    <div class="title">
        <h1>Alcohol or Juice?</h1>
    </div>
    <div class="row">
        <div class="left">
            <h1></h1>
            <img id="imgThreeLeft" src="https://post.healthline.com/wp-content/uploads/2017/11/beer-glass-bar-732x549-thumbnail.jpg">
            <h1 id="alcoholCount"></h1>
        </div>

        <div class="right">
            <h1></h1>
            <img id="imgThreeRight" src="https://ifu.site-ym.com/resource/resmgr/hphero/fruit_and_juice_main3.png">
            <h1 id="juiceCount"></h1>
        </div>
    </div>

    <div class="title">
        <h1>Facebook or Instagram?</h1>
    </div>
    <div class="row">
        <div class="left">
            <img id="imgFourLeft" src="https://www.facebook.com/images/fb_icon_325x325.png">
            <h1 id="facebookCount"></h1>
        </div>

        <div class="right">
            <img id="imgFourRight" src="https://www.net-aware.org.uk/siteassets/images-and-icons/application-icons/app-icons-instagram.png?w=585&scale=down">
            <h1 id="instagramCount"></h1>
        </div>
    </div>

    <div class="title">
        <h1>Dogs or Cats?</h1>
    </div>
    <div class="row">
        <div class="left">
            <img id="imgFiveLeft" src="https://image.pbs.org/bento3-prod/articles-pbs/Article%20Images/2020/08/e62df2fbf5_dog%20tales.jpg">
            <h1 id="dogCount"></h1>
        </div>

        <div class="right">
            <img id="imgFiveRight" src="https://api.time.com/wp-content/uploads/2015/02/cats.jpg">
            <h1 id="catCount"></h1>
        </div>
    </div>

    <div class="title">
        <h1>iOS or Android?</h1>
    </div>
    <div class="row">
        <div class="left">
            <img id="imgSixLeft" src="https://store.storeimages.cdn-apple.com/4982/as-images.apple.com/is/iphone11-select-2019-family?wid=882&amp;hei=1058&amp;fmt=jpeg&amp;qlt=80&amp;op_usm=0.5,0.5&amp;.v=1567022175704">
            <h1 id="iOSCount"></h1>
        </div>

        <div class="right">
            <img id="imgSixRight" src="https://images.samsung.com/us/smartphones/galaxy-note20/Configurator/001-Carousel/Mo/001-common-assets/001-note20series-productimage-mo-720.jpg">
            <h1 id="androidCount"></h1>
        </div>
    </div>

</body>

</html>