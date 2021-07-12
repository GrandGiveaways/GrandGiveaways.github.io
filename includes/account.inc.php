<?php

if (isset($_POST["submit"])) {
    session_start();
    
    $username = $_SESSION["username"];
    $name = $_POST["name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $loc_city = $_POST["loc_city"];
    $loc_country = $_POST["loc_country"];

    require_once 'dbh.inc.php';

    $sql = "UPDATE `Users` SET
          `name` = '$name',
          `gender` = '$gender',
          `dob` = '$dob',
          `loc_city` = '$loc_city',
          `loc_country` = '$loc_country'
    where username = '$username' ";
    mysqli_query($conn, $sql);
} else {
    header("location: ../login");
    exit();
}
