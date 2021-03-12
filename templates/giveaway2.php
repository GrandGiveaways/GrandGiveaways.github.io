<?php
  require_once 'includes/dbh.inc.php';
  require_once 'includes/gg.inc.php';
  require_once 'includes/inf.inc.php';
  $giveaway = guidExists($conn, $id);
  $author = infuidExists($conn, $giveaway->author, $giveaway->author);

  $title = $giveaway->title;
  $caption = $giveaway->caption;
  $banner = $giveaway->banner;

  require_once 'templates/page_header.php';
?>

<?php if ($giveaway): ?>

<div class="g_left">
  <div class="g_author">
    <img class="g_author_image" src="resources/giveaways/authors/<?php echo $author->username; ?>.jpg">
    <div class="g_author_details">
      <p class="g_author_name"><?php echo $author->name; ?></p>
      <p class="g_author_desc"><?php echo $author->description; ?></p>
    </div>
  </div>
  <img class="g_image" src="resources/giveaways/images/<?php echo $giveaway->image ?>">
  <div class="g_desc">
    <?php echo $giveaway->description; ?>
  </div>
</div>

<div class="g_right">
  <div class="g_entries">
    <?php
      if (isset($_SESSION["username"])) {
        require_once 'includes/entry_types.inc.php';
        foreach ($entry_types as $type) {
          echo '<div class="g_entries_row">';
          echo '<img class="g_entries_icon" src="resources/' . $type->icon . '">';
          echo '<span class="g_entries_name">' . $type->name . '</span>';
          echo '<button class="g_entries_button">+' . $type->entry_count . '</button>';
          echo '</div>';
        }
      } else {
        echo "<p>meowdodo</p>";
      }
    ?>
  </div>
  <div class="g_expires">
    <img class="g_expires_icon" src="resources/clock.svg">
    <span class="g_expires_text">Ending in <?php
      $earlier = new DateTime($giveaway->release_date);
      $later = new DateTime($giveaway->expiration_date);
      $diff = $later->diff($earlier)->format("%a");
      echo $diff;
    ?> days</span>
  </div>
</div>

<?php else: ?>

<p>:(</p>

<?php endif; ?>

<?php require_once 'templates/page_footer.php'; ?>