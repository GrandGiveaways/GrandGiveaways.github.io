<?php
  session_start();
  include('header.php');
?>

<div class="page_header">
  <div class="page_header_overlay"></div>
  <div class="page_header_info">
    <p class="page_header_title"><?php echo $page_title; ?></p>
    <p class="page_header_caption"><?php echo $page_caption; ?></p>
  </div>
</div>

<div class="center">
  <?php echo $content; ?>
</div>

<?php include('footer.php'); ?>
