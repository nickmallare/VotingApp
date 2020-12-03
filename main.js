const selected = "15px solid green";
const notSelected = "15px solid #c24914";
var TrumpVsBiden = true;
var RapVsPop = true;
var AlcoholVsJuice = true;
var FacebookVsInstagram = true;
var DogVsCats = true;
var iOSVsAndroid = true;

window.onload = function () {
  //----Trump Vs Biden----
  //Biden Selected
  var imgOneLeft = document.getElementById("imgOneLeft");
  var imgOneRight = document.getElementById("imgOneRight");
  imgOneRight.addEventListener("click", function () {
    console.log(TrumpVsBiden);
    if (TrumpVsBiden) {
      imgOneRight.src =
        "https://assets.bwbx.io/images/users/iqjWHBFdfxIU/iZk6vKH1wQl8/v2/1000x-1.jpg";
      imgOneLeft.src =
        "https://www.washingtonian.com/wp-content/uploads/2017/12/trump.baby_-1500x1000.jpg";
      imgOneRight.style.border = selected;
      imgOneLeft.style.border = notSelected;
      CastVote("TrumpVsBiden", "Biden");
      TrumpVsBiden = false;
      completed();
    }
  });
  //Trump Selected
  imgOneLeft.addEventListener("click", function () {
    if (TrumpVsBiden) {
      imgOneRight.src = "https://i.imgflip.com/3x6uuu.jpg";
      imgOneLeft.src =
        "https://www.bostonherald.com/wp-content/uploads/2019/12/7df4761df0d74241815c607dcf30c5c8.jpg?w=686";
      imgOneLeft.style.border = selected;
      imgOneRight.style.border = notSelected;
      CastVote("TrumpVsBiden", "Trump");
      TrumpVsBiden = false;
      completed();
    }
  });

  //----Rap Vs Pop Music----
  //Rap Music Selected
  var imgTwoLeft = document.getElementById("imgTwoLeft");
  var imgTwoRight = document.getElementById("imgTwoRight");
  imgTwoLeft.addEventListener("click", function () {
    if (RapVsPop) {
      imgTwoRight.style.border = notSelected;
      imgTwoLeft.style.border = selected;
      imgTwoLeft.src = "https://memegenerator.net/img/instances/67792773.jpg";
      CastVote("RapVsPop", "Rap");
      RapVsPop = false;
      completed();
    }
  });
  //Pop Music Selected
  imgTwoRight.addEventListener("click", function () {
    if (RapVsPop) {
      imgTwoRight.style.border = selected;
      imgTwoLeft.style.border = notSelected;
      imgTwoRight.src =
        "https://media4.giphy.com/media/26hitOcGAO013OF3y/giphy_s.gif";
      CastVote("RapVsPop", "Pop");
      RapVsPop = false;
      completed();
    }
  });

  //----Alcohol Vs Juice----
  //Alcohol Selected
  var imgThreeLeft = document.getElementById("imgThreeLeft");
  imgThreeLeft.addEventListener("click", function () {
    if (AlcoholVsJuice) {
      imgThreeRight.style.border = notSelected;
      imgThreeLeft.style.border = selected;
      imgThreeLeft.src = "https://i.redd.it/8djhns8llyo41.jpg";
      CastVote("AlcoholVsJuice", "Alcohol");
      AlcoholVsJuice = false;
      completed();
    }
  });
  //Juice Selected
  var imgThreeRight = document.getElementById("imgThreeRight");
  imgThreeRight.addEventListener("click", function () {
    if (AlcoholVsJuice) {
      imgThreeRight.style.border = selected;
      imgThreeLeft.style.border = notSelected;
      CastVote("AlcoholVsJuice", "Juice");
      AlcoholVsJuice = false;
      completed();
    }
  });

  //----Facebook Vs Instagram----
  //Facebook Selected
  var imgFourLeft = document.getElementById("imgFourLeft");
  imgFourLeft.addEventListener("click", function () {
    if (FacebookVsInstagram) {
      imgFourRight.style.border = notSelected;
      imgFourLeft.style.border = selected;
      imgFourLeft.src =
        "https://www.adweek.com/wp-content/uploads/sites/2/2015/12/zuckerbergchina.jpg";
      CastVote("FacebookVsInstagram", "Facebook");
      FacebookVsInstagram = false;
      completed();
    }
  });
  //Instagram Selected
  var imgFourRight = document.getElementById("imgFourRight");
  imgFourRight.addEventListener("click", function () {
    if (FacebookVsInstagram) {
      imgFourRight.style.border = selected;
      imgFourLeft.style.border = notSelected;
      CastVote("FacebookVsInstagram", "Instagram");
      FacebookVsInstagram = false;
      completed();
    }
  });

  //----Dog Vs Cat----
  //Dog Selected
  var imgFiveLeft = document.getElementById("imgFiveLeft");
  imgFiveLeft.addEventListener("click", function () {
    if (DogVsCats) {
      imgFiveRight.style.border = notSelected;
      imgFiveLeft.style.border = selected;
      imgFiveLeft.src =
        "https://www.rover.com/blog/wp-content/uploads/2017/11/twenty20_b121f53e-e044-405a-b73c-8a50bf08681d-960x540.jpg";
      imgFiveRight.src =
        "https://media.wired.com/photos/5cdefb92b86e041493d389df/1:1/w_988,h_988,c_limit/Culture-Grumpy-Cat-487386121.jpg";
      CastVote("DogVsCats", "Dog");
      DogVsCats = false;
      completed();
    }
  });
  //Cat Selected
  var imgFiveRight = document.getElementById("imgFiveRight");
  imgFiveRight.addEventListener("click", function () {
    if (DogVsCats) {
      imgFiveRight.style.border = selected;
      imgFiveLeft.style.border = notSelected;
      imgFiveLeft.src =
        "https://pbs.twimg.com/profile_images/1002933519629389824/rMED8za4_400x400.jpg";
      imgFiveRight.src =
        "https://delavanlakesvet.com/images/uploads/general_images/smiling-cat-for-web.jpg";
      CastVote("DogVsCats", "Cat");
      DogVsCats = false;
      completed();
    }
  });

  //----iOS Vs Android----
  //iOS Selected
  var imgSixLeft = document.getElementById("imgSixLeft");
  imgSixLeft.addEventListener("click", function () {
    if (iOSVsAndroid) {
      imgSixRight.style.border = notSelected;
      imgSixLeft.style.border = selected;
      imgSixLeft.src =
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTkJFPboZnsWsVVejLbhnXvsD1p6c4MMlzUg&usqp=CAU";
      CastVote("iOSVsAndroid", "iOS");
      iOSVsAndroid = false;
      completed();
    }
  });
  //Android Selected
  var imgSixRight = document.getElementById("imgSixRight");
  imgSixRight.addEventListener("click", function () {
    if (iOSVsAndroid) {
      imgSixRight.style.border = selected;
      imgSixLeft.style.border = notSelected;
      imgSixRight.src =
        "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYU9xlkKlFhXoEqQQwx8cuR6HT_S8Llr9ZCA&usqp=CAU";
      CastVote("iOSVsAndroid", "Android");
      iOSVsAndroid = false;
      completed();
      
    }
  });
};

function CastVote(category, selection) {
  $.ajax({
    url: "add_Vote.php",
    data: { selectedCategory: category, vote: selection },
    type: "post",
  });
}

function completed() {
  if (
    !TrumpVsBiden &&
    !RapVsPop &&
    !AlcoholVsJuice &&
    !FacebookVsInstagram &&
    !DogVsCats &&
    !iOSVsAndroid
  ) {
  displayVotes();
  }
  
}

function getTotalVotes(){
return new Promise((resolve, reject) => {
    $.ajax({
      url: "get_totals.php",
      type: "post",
      success: function (data) {
        resolve(data);
      },
      error: function (error) {
        reject(error);
      },
    });
  });
}

function displayVotes(){
    alert("Thanks for voting, press ok to view the total votes!");
    getTotalVotes()
      .then((data) =>{
          console.log(data)
          var totalVotesObj = JSON.parse(data);
          console.log(totalVotesObj.bidenCountTotal);
          $("#bidenCount").html(totalVotesObj.bidenCount + " votes");
          $("#trumpCount").html(totalVotesObj.trumpCount + " votes");
          $("#alcoholCount").html(totalVotesObj.alcoholCount + " votes");
          $("#juiceCount").html(totalVotesObj.juiceCount + " votes");
          $("#dogCount").html(totalVotesObj.dogCount + " votes");
          $("#catCount").html(totalVotesObj.catCount + " votes");
          $("#facebookCount").html(totalVotesObj.facebookCount + " votes");
          $("#instagramCount").html(totalVotesObj.instagramCount + " votes");
          $("#rapCount").html(totalVotesObj.rapCount + " votes");
          $("#popCount").html(totalVotesObj.popCount + " votes");
          $("#iOSCount").html(totalVotesObj.iosCount + " votes");
          $("#androidCount").html(totalVotesObj.androidCount + " votes");
      })
}

// echo json_encode(array("bidenCount"=>$bidenCount, "trumpCount"=>$trumpCount, 
// "alcoholCount"=>$alcoholCount, "juiceCount"=>$juiceCount, 
// "dogCount"=>$dogCount, "catCount"=>$catCount, "facebookCount"=>$facebookCount, 
// "instagramCount"=>$instagramCount, "rapCount"=>$rapCount, "popCount"=>$popCount, 
// "iosCount"=>$iosCount, "androidCount"=>$androidCount))

