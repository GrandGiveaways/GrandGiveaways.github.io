<?php
// check the user got to this page properly
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    // error handling below
    if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../register?error=emptyinput");
        exit();
    }

    if(invalidUid($username) !== false) {
        header("location: ../register?error=invalidUid");
        exit();
    }

    if(invalidEmail($email) !== false) {
        header("location: ../register?error=invalidEmail");
        exit();
    }

    if(pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../register?error=passwordsdontmatch");
        exit();
    }

    if(uidExists($conn, $username, $email) !== false) {
        header("location: ../register?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else {
    header("location: ../register");
    exit();
}
