<div id="v2_navbar">
  <img src="/stuff/logo_white.svg" id="v2_header_logo">
  <?php
    if (isset($_SESSION["name"])) {
        echo "<p>Hello there " . $_SESSION["name"] . "</p>";
    } else {
      echo "<p>:(</p>";
    }
    ?>
</div>
