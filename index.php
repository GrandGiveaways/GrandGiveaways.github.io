<?php
  session_start();
  $title = "Grand Giveaways";

  $_GET['trans'] = true;
  require_once 'templates/header.php';

  require_once 'includes/dbh.inc.php';
  require_once 'includes/enter.inc.php';
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

<div class="center">
<?php
require_once 'includes/dbh.inc.php';
$sql = "SELECT * FROM Giveaways;";
if (!$result = $conn->query($sql)) {
  die ('There was an error running query[' . $conn->error . ']');
}
while ($row = $result->fetch_assoc()) {
  echo "<a href='g/" . $row["id"] . "'><div style='padding:40px;font-size:16px;border-radius:15px;background-color:#8000000d;margin:10px;width:100%;'>" . $row["title"] . "</div></a>";
}
?>
</div>

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
