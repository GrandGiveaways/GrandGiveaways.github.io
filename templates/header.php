<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/style.css">
    <link rel="shortcut icon" type="image/svg" href="/resources/logo_red.svg">
    <!-- Google - Start -->
    <script data-ad-client="ca-pub-1314468233933209" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z35JC3QW68"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-Z35JC3QW68');
    </script>
    <!-- Google - End -->
    <?php echo $additional; ?>
  </head>

  <body>
    <div class="header<?php if (isset($_GET['trans'])) { if ($_GET['trans'] === true) { echo " trans"; } } ?>">
      <div class="header_left">
        <a href="/"><img class="header_logo" src="/resources/logo_white.svg"></a>
      </div>
      <div class="header_right">
        <div class="header_right_list">
          <?php
          if (isset($_SESSION["username"])) {
            echo "<p class='header_menu_item_a'>Hi " . $_SESSION["username"] . "!</p>";
            echo "<a href='/includes/logout.inc.php' class='header_menu_item_a'>Log Out</a>";
          } else {
            $urls = array(
              'Home' => '/',
              'Influencers' => '/influencers',
              'Users' => '/users',
              'Login' => '/login'
            );
            echo '<ul class="header_menu">';
            foreach ($urls as $name => $url) {
              echo '<li class="header_menu_item"><a class="header_menu_item_a" href="' . $url . '">' . $name . '</a></li>';
            }
            echo '</ul>';
            echo '<a href="/register.php" class="header_register">Register</a>';
          }
          ?>
        </div>
      </div>
    </div>
