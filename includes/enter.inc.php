<?php



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
