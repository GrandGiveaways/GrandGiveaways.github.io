<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="/style.css">
  </head>
  <body>



    <div class="header <?php if (isset($_GET['trans'])) { if ($_GET['trans'] === true) { echo "trans"; } } ?>">
      <div class="header_left">
        <img class="header_logo" src="/resources/logo_white.svg">
      </div>
      <div class="header_right">
        <?php
        if (isset($_SESSION["username"])) {
          echo "<a href='includes/logout.inc.php' class='header_user'>Hi " . $_SESSION["username"] . "!</a>";
        } else {
          echo <<< EOD
          <ul class="header_menu">
            <li class="header_menu_item"><a href="/" class="header_menu_item_a">Home</a></li>
            <li class="header_menu_item"><a href="/influencers.php" class="header_menu_item_a">Influencers</a></li>
            <li class="header_menu_item"><a href="/users.php" class="header_menu_item_a">Users</a></li>
            <li class="header_menu_item"><a href="/login.php" class="header_menu_item_a">Log in</a></li>
          </ul>
          <a href="/register.php" class="header_register">Register</a>
          EOD;
        }
        ?>
      </div>
    </div>
