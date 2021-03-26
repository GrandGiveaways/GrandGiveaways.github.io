<?php

$title = "Social Media Array Generator";
require_once 'templates/page_header.php';

// urlencode()
// use ^ for links

$myarr = array();
$myarr[] = [
  "id" => "lin",
  "link" => "https://www.linkedin.com/in/ebfretz/"
];

echo serialize($myarr);

// Display
if (is_array($myarr) || is_object($myarr)) {
  foreach ($myarr as $mt) {
    echo "<div style='margin-bottom: 20px;'>";
    foreach ($mt as $arr_username => $arr_count) {
      echo "<div>" . $arr_username . ": " . $arr_count . "</div>";
    }
    echo "</div>";
  }
}

require_once 'templates/page_footer.php';
