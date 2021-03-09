<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/header&footer.css">
    <title>Grand Giveaways</title>
  </head>
  <body>

    <?php include('templates/header.php') ?>

    <div class="mainarea">
      <div class="pageheader" style="background-color:#222222;">
        <div class="pageheaderoverlay"></div>
        <div class="pageheaderinfo">
          <p class="pagetitle">Register</p>
        </div>
      </div>


    <div class="center">
        <div class="pagearea">
          <div class="loginBox">
            <i class="loginBoxHeader material-icons">account_circle</i>
            <form id="loginForm" action="includes/signup.inc.php" method="post">
              <input class="loginInputText" type="text" name="name" placeholder="Name">
              <input class="loginInputText" type="text" name="email" placeholder="Email">
              <input class="loginInputText" type="text" name="uid" placeholder="Username">
              <input class="loginInputText" type="password" name="pwd" placeholder="Password">
              <input class="loginInputText" type="password" name="pwdrepeat" placeholder="Repeat password">
              <input class="loginInputSubmit" type="submit" name="submit" value="Register">
            </form>
            <a href="login.php"><p class="switchLoginMethod">Already a user? Login here.</p></a>
          </div>
        </div>
    </div>


    <?php include('templates/footer.php') ?>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.9.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.9.2/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-database.js"></script>


<script src="js/login.js" type="text/javascript"></script>

  </body>
</html>
