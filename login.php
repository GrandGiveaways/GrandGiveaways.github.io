<?php

$title = "Login";
$page_title = "Login";

$content = <<< EOD
<div class="login_box">
  <i class="login_box_header material-icons">account_circle</i>
  <form action="includes/login.inc.php" method="post">
    <input class="login_input_text" type="text" name="uid" value="" placeholder="Email">
    <input class="login_input_text" type="password" name="pwd" value="" placeholder="Password">
    <input class="login_input_submit" type="submit" name="submit" value="Login">
    <a href="/register.php"><p class="switch_loginMethod">Don't have an account? Register here.</p></a>
  </form>
EOD;

$content = $content . htmlspecialchars('<?php if(isset($_GET["error"])) {
                    if ($_GET["error"] == "emptyimput") {
                        echo "<p>At least one field missing information</p>";
                    }
                    else if ($_GET["error"] == "wronglogin") {
                        echo "<p>Username/Email or password entered is incorrect</p>";
                    }

                } ?>') . "</div>";

include('templates/page.php');
