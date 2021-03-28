<?php

if (isset($_POST["submit"])) {
    // username could also be an email in this case
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // error handling below
    if(emptyInputLogin($username, $pwd) !== false) {
      if
        header("location: ../login?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../login");
    exit();
}
