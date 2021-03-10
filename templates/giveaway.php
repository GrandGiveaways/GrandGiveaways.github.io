<?php require_once 'templates/page_header.php'; ?>

<div class="g_left">
  <div class="g_author">
    <img class="g_author_image" src="tresources/<?php echo $authorimage ?>">
    <div class="g_author_details">
      <p class="g_author_name">Marques Brownlee</p>
      <p class="g_author_desc">Tech Influencer and Reviewer</p>
    </div>
  </div>
  <img class="g_image" src="tresources/<?php echo $gimage ?>">
  <div class="g_desc">
    <?php echo $gdesc; ?>
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
    <span class="g_expires_text">Ending in X days</span>
  </div>
</div>

<?php require_once 'templates/page_footer.php'; ?>
