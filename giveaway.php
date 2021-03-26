<?php
  require_once 'includes/dbh.inc.php';
  require_once 'includes/gg.inc.php';
  require_once 'includes/inf.inc.php';
  $id = $_GET["id"];
  $giveaway = guidExists($conn, $id);
  $author = infuidExists($conn, $giveaway->author);

  $title = $giveaway->title;
  $caption = $giveaway->caption;
  $banner = $giveaway->banner;

  $now = new DateTime();
  $g_release = new DateTime($giveaway->release_date);
  $g_expiration = new DateTime($giveaway->expiration_date);
  $g_passed = $g_expiration < $now;

  require_once 'templates/page_header.php';
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
  <?php if (!$g_passed): ?>
  <div class="g_entries">
    <?php
    if (isset($_SESSION["username"])) {
      require_once 'includes/entry_types.inc.php';

      foreach ($entry_types as $entry_type) {
        $c_type = $social_media_types[$entry_type->id];
        echo '<div class="g_entries_row">';
        echo '<img class="g_entries_icon" src="/resources/' . $c_type->icon . '">';
        echo '<span class="g_entries_name">' . $c_type->name . '</span>';
        echo '<form action="/includes/enter.inc.php" method="post" style="display: contents">';
        echo '<input type="hidden" name="id_entry" value="' . $entry_type->id . '">';
        echo '<input type="hidden" name="id_giveaway" value="' . $giveaway->id . '">';
        echo '<input class="g_entries_button" type="submit" name="submit" value="+' . $c_type->entry_count . '">';
        echo '</form>';
        echo '</div>';
      }
    } else {
      echo "<p class='g_entries_login_message'>Please <a href='/login'>login</a> or <a href='/register'>register</a> to enter</p>";
    }
    ?>
  </div>
  <?php endif; ?>
  <div class="g_expires">
    <img class="g_expires_icon" src="/resources/clock.svg">
    <span class="g_expires_text">
      <?php
      if (!$g_passed) {
        $diff = $g_expiration->diff($now);
        echo "Ending in " . $diff->format("%a") . " days";
      } else {
        echo "Already passed";
      }
      ?>
    </span>
  </div>
</div>

<?php else: ?>

<p>:(</p>

<?php endif; ?>

<?php require_once 'templates/page_footer.php'; ?>
