<?php
  require_once 'includes/dbh.inc.php';
  require_once 'includes/gg.inc.php';
  require_once 'includes/inf.inc.php';
  require_once 'includes/functions.inc.php';

  $giveaway = guidExists($conn, $_GET["id"]);
  $author = infuidExists($conn, $giveaway->author);

  $title = $giveaway->title;
  $caption = $giveaway->caption;
  $banner = $giveaway->banner;

  $now = new DateTime();
  $g_release = new DateTime($giveaway->release_date);
  $g_expiration = new DateTime($giveaway->expiration_date);

  require_once 'templates/page_header.php';

  $user = uidExists($conn, $_SESSION["username"]);
?>

<?php if ($giveaway): ?>

<div class="g_left">
  <div class="g_author">
    <img class="g_author_image" src="/resources/giveaways/authors/<?php echo $author->username; ?>.jpg">
    <div class="g_author_details">
      <p class="g_author_name"><?php echo $author->name; ?></p>
      <p class="g_author_desc"><?php echo $author->description; ?></p>
    </div>
  </div>
  <?php if ($giveaway->image): ?>
  <img class="g_image" src="/resources/giveaways/images/<?php echo $giveaway->image ?>">
  <?php endif; ?>
  <div class="g_desc">
    <?php echo $giveaway->description; ?>
  </div>
</div>

<div class="g_right">
  <?php if ($g_expiration > $now && $g_release < $now): ?>
  <div class="g_entries">
    <?php
    if ($user) {
      require_once 'includes/entry_types.inc.php';

      $c_entries = unserialize($user["entries"]);
      foreach ($entry_types as $entry_type) {
        $c_type = $social_media_types[$entry_type->id];
        $is_done = $c_entries[$giveaway->id][$entry_type->id] == true;
        echo '<div class="g_entries_row">';
        echo '<img class="g_entries_icon" src="/resources/' . $c_type->icon . '">';
        echo '<span class="g_entries_name">' . $c_type->name . '</span>';
        echo '<form action="/includes/enter.inc.php" method="post" style="display: contents">';
        echo '<input type="hidden" name="username" value="' . $_SESSION["username"] . '">';
        echo '<input type="hidden" name="id_entry" value="' . $entry_type->id . '">';
        echo '<input type="hidden" name="id_giveaway" value="' . $giveaway->id . '">';
        echo '<input class="g_entries_button" type="submit" name="submit" value="';

        if ($is_done) {
          echo '✔';
        } else {
          echo '+' . $c_type->entry_count;
        }

        echo '"';

        if ($entry_type->id != "def") {
          echo ' onClick="window.open(\'' . $entry_type->link . '\', \'_self\');"';
        }

        if ($is_done) {
          echo " disabled";
        }

        echo '>';
        echo '</form>';
        echo '</div>';
      }
    } else {
      $_SESSION['redirectURL'] = $_SERVER['REQUEST_URI'];
      echo "<p class='g_entries_login_message'>Please <a href='/login'>login</a> or <a href='/register'>register</a> to enter</p>";
    }
    ?>
  </div>
  <?php endif; ?>
  <div class="g_expires">
    <img class="g_expires_icon" src="/resources/clock.svg">
    <span id="countdown_text" class="g_expires_text">Ending in...</span>
      <?php
        echo '<script>var countDownDate = new Date("' . $giveaway->expiration_date . '").getTime(); var releaseDate = new Date("' . $giveaway->release_date . '").getTime();</script>';
        echo '<script type="text/javascript" src="/js/countdown.js"></script>';
      ?>
    <!-- </span> -->
  </div>
</div>

<?php else: ?>

<p>:(</p>

<?php endif; ?>

<?php require_once 'templates/page_footer.php'; ?>
