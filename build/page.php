<?php
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/header&footer.css">



    <title>Grand Giveaways</title>
  </head>
  <body>

    <?php include('templates/header.php') ?>


    <div class="mainarea">
      <div class="pageheader" style="background-image: url('stuff/iphone 1.jpg');">
        <div class="pageheaderoverlay"></div>
        <div class="pageheaderinfo">
          <p class="pagetitle">The iPhone 11 256GB + AirPods & Charging Pad Giveaway</p>
          <p class="pagecaption">Enter for Your Chance to Win an iPhone 11 256GB, AirPods, and a Special Edition Belkin Wireless Charging Pad</p>
        </div>
      </div>



    <div class="center">
        <div class="pagearea">
          <!-- description -->
          <div class="leftdesc">
              <div class="descauthor">
                <img src="stuff/MKBHD Profile Pic.jpg" class="descimg">
                <div class="descpersondetails">
                  <p class="cardtitle">Marques Brownlee</p>
                  <p class="cardpersonname" style="font-style:italic;">Tech Influencer and Reviewer</p>
                </div>
              </div>


             <div>
              <img class= "pic" src= "stuff/Apple.jpg">
              <p class="desctitles">Description</p>
              <p class="desctext" style="margin-bottom:15px;">Winter is finally upon us, which means it's time to cuddle up on the couch and get your hibernate on. During these frigid months, there's nothing better than binging all of your favorite tv shows on a sleek new streaming device — especially when it doesn't cost you a dime. Enter now for your chance to win a brand new streaming device (Apple TV, Roku, you name it!) AND a year's subscription to any streaming service your heart desires (Hulu, Netflix, Showtime, Disney+, the choice is yours!) for the ultimate binge-athon.</p>

              <ul>
                <li class="desctext">Enjoy a year-long subscription to the streaming service of your choice — including, but not limited to: Netflix, Hulu, HBO, Showtime, Disney+, and more</li>
                <li class="desctext">Stream all your favorites on a brand-new media player of your choosing — including, but not limited to: Apple TV, Roku, Amazon Fire Stick, Google ChromeCast, and more</li>
              </ul>
            </div>
         </div>

          <div class="rightdesc">

            <div class="emailform" id="emailformdiv">
              <form id="emailformform">
                <div class="emailaddress">
                  <div class="emailiconformdiv"><img src="stuff/emailicon.png" class="emailiconform"></div>
                  <input type="email" name="address" placeholder=" Please Enter Your Email" class="emailinputform" id="email">
                </div>
                <br>
                <button type="submit" class="sub-btn">Submit</button>
              </form>
            </div>
            <p id="congrats">Congrats!</p>

<!-- Changes -->
          <div class="container">
             <img id="youtubeButton" class="SMicons" src="stuff/yt.png" onclick="moreEntries('youtubeButton');">
             <img id="facebookButton" class="SMicons" src="stuff/facebook.png" onclick="moreEntries('facebookButton');">
             <img id="instagramButton" class="SMicons" src="stuff/instagram.png" onclick="moreEntries('instagramButton');">
             <img id="twitterButton" class="SMicons" src="stuff/twitter.png" onclick="moreEntries('twitterButton');">
             <img id="tiktokButton" class="SMicons" src="stuff/tiktok.png" onclick="moreEntries('tiktokButton');">
          </div>


            <div class="entries">
              <hr>
             <p class="entriesText"><span id="numberOfEntries">11</span> Entries Remaining<p>
              <hr>
            </div>

            <div class="container">
              <h5>
               <img src="stuff/clock.png" class="clock">
               <span>Ending in 2 months</span>
             </h5>
            </div>


            <div class="trustdiv">
              <img src="stuff/badge.png" class="badgeimg">
              <p class="trusttitle">Trusted source</p>
              <p class="trusttext">We take pride in curating the latest and greatest creative technology products around the globe. We personally research and hand-pick each product to ensure it meets our standards.</p>
            </div>

            <p class="termtitles">Terms</p>
            <p class="termtext">Streaming services and media players are not affiliated with this contest. This promotion is in no way sponsored, endorsed or administered by, or associated with, Facebook. You are providing your information to StackCommerce, Inc. and not to Facebook.</p>
          </div>






          <!-- Other Giveaways -->
          <div class="additionalgiveaway">

            <p class="additionaltitle">Additional</p>

            <!-- Marques Brownlee -->
            <a href="page.html">
            <div class="cardscaled">
                <img src="stuff/Apple.jpg" class="cardimgscaled">
                <div class="cardpersondiv">
                  <img src="stuff/MKBHD Profile Pic.jpg" class="cardpersonimg">
                </div>
                <div class="carddetails">
                  <p class="cardtitle"> The iPhone 11 256GB + AirPods & Charging Pad Giveaway
                  </p>
                  <p class="cardpersonname"> Marques Brownlee</p>
                </div>
              </div>
          </a>

          <!-- Pence -->
           <div class="cardscaled">
              <img src="stuff/img.jpg" class="cardimgscaled">
              <div class="cardpersondiv">
                <img src="stuff/person.jpg" class="cardpersonimg">
              </div>
              <div class="carddetails">
                <p class="cardtitle">HBO Now, Apple TV+, Hulu, & Disney+</p>
                <p class="cardpersonname">Mike Pence</p>
              </div>
            </div>

        <!-- Ramsay -->
         <div class="cardscaled">
            <img src="stuff/Knives by GR.jpg" class="cardimgscaled">
            <div class="cardpersondiv">
              <img src="stuff/Ramsay.jpg" class="cardpersonimg">
            </div>
            <div class="carddetails">
              <p class="cardtitle">Gordon Ramsay by Royal Doulton® 6-Piece Knife Block Set</p>
              <p class="cardpersonname">Gordon Ramsay</p>
            </div>
          </div>

        </div>

        </div>
    </div>


      <?php include('templates/footer.php') ?>







<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.9.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.9.2/firebase-analytics.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.9.1/firebase-database.js"></script>

 <script type="text/javascript" src="js/page.js"></script>


  </body>
</html>
