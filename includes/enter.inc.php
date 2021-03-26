<?php

require_once "dbh.inc.php";
require_once "entry_types.inc.php";
require_once 'gg.inc.php';
require_once 'functions.inc.php';

$username = $_POST["username"];
$giveaway_id = $_POST["id_giveaway"];
$entry_id = $_POST["id_entry"];
$entry_type = $social_media_types[$entry_id];


////// USER /////////////////////////////////////

$user = uidExists($conn, $username);
$txx = unserialize($user["entries"]);

if ($txx == NULL || isset($txx[$giveaway_id]) == NULL) {
  $entries_array = array();
  foreach ($social_media_types as $key => $value) {
    $entries_array[$key] = false;
  }
  $entries_array[$entry_id] = true;

  if ($txx == NULL) {
    $txx = array();
  }
  $txx[$giveaway_id] = $entries_array;
} else {
  if ($txx[$giveaway_id][$entry_id] == true) {
    header("location: /g/" . $giveaway_id . "?error=dup");
  } else {
    $txx[$giveaway_id][$entry_id] = true;
  }
}

$txx = serialize($txx);
$sql = "UPDATE Users SET entries = '" . $txx . "' WHERE username = '" . $username . "'";
mysqli_query($conn, $sql);


////// GIVEAWAY //////////////////////////////////

$giveaway = guidExists($conn, $giveaway_id);
$txx = $giveaway->entries;
if ($txx == NULL) {
  $txx = $username;
} else {
  $txx = $txx . ", " . $username;
}

$sql = "UPDATE Giveaways SET entries = '" . $txx . "' WHERE id = '" . $giveaway_id . "'";
mysqli_query($conn, $sql);

header("location: /g/" . $giveaway_id);









// // Associative Array
// $users_arr = array("yssyogesh" => 2, "bsonarika" => 1, "vijay" => 11);
//
// // Serialize the Array
// $users_str = serialize($users_arr);
//
// // Insert record
// $sql = "INSERT INTO Giveaways (author, description, title, caption, release_date, expiration_date, entries) VALUES ('momo', 'Check this out boys', 'Amazing giveaway', 'The greatest giveaway of the 21st century', '2021-03-12', '2021-03-27', '" . $users_str . "');";
// mysqli_query($conn, $sql);
//
// // Read record
// $sql = mysqli_query($conn, "SELECT * FROM Giveaways");
// while($row = mysqli_fetch_assoc($sql)) {
  // // Unserialize
  // $arr_unserialize = unserialize($row['entries']);
  //
  // // Display
  // if (is_array($arr_unserialize) || is_object($arr_unserialize)) {
  //   foreach ($arr_unserialize as $arr_username => $arr_count) {
  //     echo "<div>" . $arr_username . ": " . $arr_count . "</div>";
  //   }
  // }
// }
