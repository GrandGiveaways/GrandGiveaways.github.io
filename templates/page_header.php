<?php
  session_start();
  require_once 'templates/header.php';
?>

<div class="page_header" <?php if (isset($banner)) { echo 'style="background-image: url(/resources/giveaways/banners/' . $banner . ')"'; } ?>>
  <div class="center">
    <div class="page_header_overlay"></div>
    <div class="page_header_info">
      <p class="page_header_title"><?php echo $title; ?></p>
      <p class="page_header_caption"><?php echo $caption; ?></p>
    </div>
  </div>
</div>

<div class="page_content">
  <div class="center">
