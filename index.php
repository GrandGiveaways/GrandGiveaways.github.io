<?php
  session_start();
  $title = "Grand Giveaways";
?>

<?php
  $_GET['trans']=true;
  require_once 'templates/header.php';
?>

<section id="front" class="hp_front">
  <div class="center">
    <h1 class="hp_front_title">
        Welcome to Grand Giveaways.
    </h1>
    <h2 class="hp_front_subtitle">
      A platform to win big prizes
      <br>
      from your favorite influencers.
    </h2>
  </div>
</section>

<section id="about" class="hp_body">
  <div class="center">

  </div>
</section>

<section id="influencers" class="hp_body">
  <div class="center">

  </div>
</section>

<section id="users" class="hp_body">
  <div class="center">

  </div>
</section>

<?php
  require_once 'templates/footer.php';
?>
