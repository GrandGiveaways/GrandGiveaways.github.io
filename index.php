<?php
  session_start();
  $title = "Grand Giveaways";

  $_GET['trans'] = true;
  require_once 'templates/header.php';

  //require_once 'includes/dbh.inc.php';
  //require_once 'includes/enter.inc.php';
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
  <div class="arrow"></div>
</section>

<!--
<div class="center">
<?php
/*
require_once 'includes/dbh.inc.php';
$sql = "SELECT * FROM Giveaways;";
if (!$result = $conn->query($sql)) {
  die ('There was an error running query[' . $conn->error . ']');
}
while ($row = $result->fetch_assoc()) {
  echo "<a href='g/" . $row["id"] . "'><div style='padding:40px;font-size:16px;border-radius:15px;background-color:#8000000d;margin:10px;width:100%;'>" . $row["title"] . "</div></a>";
}
*/
?>
</div>
-->

<div id="hp_main">

  <section id="about" class="hp_body">
    <div class="center">
      <div class="homeinfo">
        <img class="giveawayImg" src="/resources/giveawayImg.jpg">
        <div class="heading">
          <h3><b>Who Are We?</b></h3>
        </div>
        <br>
        <div class="description">
          <p>We had an idea that sought to bring users and influencers together for the common good. We created a platform that allowed both parties to benefit from one another. We value the exciting opportunities that giveaways present for both parties.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="influencers" class="hp_body">
    <div class="center">
      <div class="homeinfo">
        <img class="influencerGif" src="/resources/Influencers.gif">
        <div class="heading">
          <h3><b>What We Do For Influencers</b></h3>
        </div>
        <br>
        <div class="description">
          <p>We know you love your followers, here at Grand Giveaway we provide a quick, simple, and reliable way for you to reward them while promoting your brand.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="users" class="hp_body">
    <div class="center">
      <div class="homeinfo">
        <img class="bouncingGift" src="/resources/bouncingGift.gif">
        <div class="heading">
          <h3><b>Support Your Favorite Creators and Win!</b></h3>
        </div>
        <br>
        <div class="description">
          <p>Who doesn’t like free stuff? With Grand Giveaway, we make it easier than ever for you to sign up for, and win, giveaways from your favorite influencers. To win prizes, you simply need to press “enter” and watch a short ad. All you need is your email and a few seconds to get started.</p>
        </div>
      </div>
    </div>
  </section>

</div>

<?php
  require_once 'templates/footer.php';
?>
