<?php
  $title = "Register";
  require_once 'templates/page_header.php';
?>

<div class="login_box">
  <i class="login_box_header material-icons">account_circle</i>
  <form action="includes/signup.inc.php" method="post">
    <input class="login_input_text" type="text" name="name" placeholder="Name">
    <input class="login_input_text" type="text" name="email" placeholder="Email">
    <input class="login_input_text" type="text" name="uid" placeholder="Username">
    <input class="login_input_text" type="password" name="pwd" placeholder="Password">
    <input class="login_input_text" type="password" name="pwdrepeat" placeholder="Repeat password">
    <input class="login_input_submit" type="submit" name="submit" value="Register">
    <a href="/login.php"><p class="switch_login_method">Already a user? Login here.</p></a>
  </form>
  <?php
  if(isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p class='login_error_text'>At least one field missing information</p>";
    }
    else if ($_GET["error"] == "invalidUid") {
      echo "<p class='login_error_text'>Choose a proper username</p>";
    }
    else if ($_GET["error"] == "invalidEmail") {
      echo "<p class='login_error_text'>The email you entered is of invalid format</p>";
    }
    else if ($_GET["error"] == "passwordsdontmatch") {
      echo "<p class='login_error_text'>Passwords don't match</p>";
    }
    else if ($_GET["error"] == "stmtfailed") {
      echo "<p class='login_error_text'>Something went wrong, try again</p>";
    }
    else if ($_GET["error"] == "usernametaken") {
      echo "<p class='login_error_text'>Username already taken. Choose another username.</p>";
    }
    else if ($_GET["error"] == "none") {
      echo "<p class='login_error_text'>Thank you for signing up to Grand Giveaway!</p>";
    }
  }
  ?>
</div>

<?php
  require_once 'templates/page_footer.php';
?>
