<?php
  session_start();
  include('header.php');
?>

<div class="page_header">
  <div class="center">
    <div class="page_header_overlay"></div>
    <div class="page_header_info">
      <p class="page_header_title"><?php echo $page_title; ?></p>
      <p class="page_header_caption"><?php echo $page_caption; ?></p>
    </div>
  </div>
</div>

<div class="page_content">
  <div class="center">
    <?php echo $content; ?>
  </div>
</div>

<?php include('footer.php'); ?>
