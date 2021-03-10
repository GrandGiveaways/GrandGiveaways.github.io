    <div class="footer">
      <div class="center">
        <div class="footer_main">
          <div class="footer_main_login">
            <p class="footer_main_login_text">You've come to the right place. We can help you grow tremendously by setting up giveaways of your products and services for FREE!</p>
            <?php if (!isset($_SESSION["username"])): ?>
              <a class="footer_main_rs" href="/register">Register</a>
              <a class="footer_main_rs inverted" href="/login">Login</a>
            <?php endif; ?>
          </div>
          <ul class="footer_main_pages">
            <li>
              <span class="footer_main_pages_title">Pages</span>
              <ul>
                <?php
                $urls = array(
                  'Home' => '/',
                  'Influencers' => '/influencers',
                  'Users' => '/users',
                  'Login' => '/login',
                  'Register' => '/register',
                  'My Account' => '/account',
                  'About' => '/about'
                );
                foreach ($urls as $name => $url) {
                  echo '<li><a href="' . $url . '">' . $name .'</a></li>';
                }
                ?>
              </ul>
            </li>
            <li>
              <span class="footer_main_pages_title">Terms</span>
              <ul>
                <?php
                $urls = array(
                  'Terms' => '/terms',
                  'Privacy Policy' => '/privacy',
                  'Cookies Policy' => '/cookies',
                  'Disclosures' => '/disclosures'
                );
                foreach ($urls as $name => $url) {
                  echo '<li><a href="' . $url . '">' . $name .'</a></li>';
                }
                ?>
              </ul>
            </li>
        </div>
        <div class="footer_bottom">
          <img class="footer_logo" src="resources/logo_white.svg">
          <p class="footer_cr">© Grand Giveaways 2021</p>
        </div>
      </div>
    </div>
  </body>
</html>
