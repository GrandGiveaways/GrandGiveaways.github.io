<?php
require_once 'includes/dbh.inc.php';
require_once 'includes/gg.inc.php';

$title = "Giveaway Winner Generator";
require_once 'templates/page_header.php';

$giveaway = guidExists($conn, $_GET["id"]);
$entries = $giveaway->entries;

$entries_array = explode(",", $entries);
echo "<p>Winner: " . $entries_array[array_rand($entries_array)] . "</p>";

require_once 'templates/page_footer.php';
