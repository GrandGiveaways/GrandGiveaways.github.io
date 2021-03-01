<?php
    include_once 'header.php'
?>
<section class="signup-form">
    <h2>Sign Up</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full name...">
        <input type="text" name="email" placeholder="Email...">
        <input type="text" name="uid" placeholder="Username...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat password...">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php
    if(isset($_GET["error"])) {
        if ($_GET["error"] == "emptyimput") {
            echo "<p>At least one field missing information</p>";
        }
        else if ($_GET["error"] == "invalidUid") {
            echo "<p>Choose a proper username</p>";
        }
        else if ($_GET["error"] == "invalidEmail") {
            echo "<p>The email you entered is of invalid format</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords don't match</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again</p>";
        }
        else if ($_GET["error"] == "usernametaken") {
            echo "<p>Username already taken. Choose another username.</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p>Thank you for signing up to Grand Giveaway!</p>";
        }
    }
    ?>
</section>



<?php
    include_once 'footer.php'
?>