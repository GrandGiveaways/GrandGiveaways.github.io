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
            <form action="includes/login.inc.php" method="post" id="loginForm">
              <input class="loginInputText" type="text" name="email" value="" placeholder="Email" id="emailValue">
              <input class="loginInputText" type="password" name="pwd" value="" placeholder="Password" id="passwordValue">
              <input class="loginInputSubmit" type="submit" name="submit" value="Login">
              <a href="register.php"><p class="switchLoginMethod">Don't have an account? Register here.</p></a>
            </form>
            <?php
                if(isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyimput") {
                        echo "<p>At least one field missing information</p>";
                    }
                    else if ($_GET["error"] == "wronglogin") {
                        echo "<p>Username/Email or password entered is incorrect</p>";
                    }

                }
                ?>
          </div>
        </div>
    </div>


    <?php include('templates/footer.php') ?>

  </body>
</html>
