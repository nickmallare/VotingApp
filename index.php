<!--https://www.w3schools.com/css/tryit.asp?filename=trycss_forms-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="styles/login.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <?php
  session_start();
  require('model/database.php');
  if(isset($_POST['submit'])){
    echo $_POST['age'].'<br/>';
    echo $_POST['college'].'<br/>';
    echo $_POST['major'].'<br/>';
  }
  ?>


  <div id="container">

    <form action= "model/insert_User.php" method="POST">
      <h3>Please enter the following information</h3>
      
      <label for="age">Age</label>
      <input type="number" id="age" name="age" placeholder="Your age.." required>

      <label for="college">College</label>
      <input type="text" id="college" name="college" placeholder="Your College.." required>

      <label for="major">Major</label>
      <input type="text" id="major" name="major" placeholder="Your major.." required>



      <input type="submit" value="Submit">
    </form>
  </div>

</body>

</html>
