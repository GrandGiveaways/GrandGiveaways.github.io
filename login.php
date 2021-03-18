<?php
  $title = "Login";
  require_once 'templates/page_header.php';
?>

<div class="login_box">
  <i class="login_box_header material-icons">account_circle</i>
  <form action="includes/login.inc.php" method="post">
    <input class="login_input_text" type="text" name="uid" value="" placeholder="Email/Username">
    <input class="login_input_text" type="password" name="pwd" value="" placeholder="Password">
    <input class="login_input_submit" type="submit" name="submit" value="Login">
    <a href="/register"><p class="switch_login_method">Don't have an account? Register here.</p></a>
  </form>
  <?php
  if(isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p class='login_error_text'>At least one field missing information</p>";
    }
    else if ($_GET["error"] == "wronglogin") {
      echo "<p class='login_error_text'>Username/Email or password entered is incorrect</p>";
    }
  };
  ?>
</div>

<?php
  require_once 'templates/page_footer.php';
?>
