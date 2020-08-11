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
          <p class="pagetitle">Login</p>
        </div>
      </div>


    <div class="center">
        <div class="pagearea">
          <div class="loginBox">
            <i class="loginBoxHeader material-icons">account_circle</i>
            <form id="loginForm">
              <input class="loginInputText" type="text" name="email" value="" placeholder="Email" id="emailValue">
              <input class="loginInputText" type="text" name="password" value="" placeholder="Password" id="passwordValue">
              <input class="loginInputSubmit" type="submit" onclick="login();" value="Login">
              <a href="register.php"><p class="switchLoginMethod">Don't have an account? Register here.</p></a>
            </form>
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
