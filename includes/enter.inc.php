<?php

require_once "dbh.inc.php";
require_once "entry_types.inc.php";

$giveaway_id = $_POST["id_giveaway"];
$entry_id = $_POST["id_entry"];
$entry_type = $entry_types[$entry_id];

$sql = mysqli_query($conn, "SELECT * FROM Giveaways WHERE id = '" . $giveaway_id . "'");
$row = mysqli_fetch_assoc($sql);
$txx = $row["entries"];
if (!$txx) {
  $txx = $_SESSION["username"];
} else {
  $txx = $txx . $_SESSION["username"];
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
//   // Unserialize
//   $arr_unserialize = unserialize($row['entries']);
//
//   // Display
//   if (is_array($arr_unserialize) || is_object($arr_unserialize)) {
//     foreach ($arr_unserialize as $arr_username => $arr_count) {
//       echo "<div>" . $arr_username . ": " . $arr_count . "</div>";
//     }
//   }
// }
