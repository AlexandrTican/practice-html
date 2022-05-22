<header class="header_menu">
  <a href="../html/guide.php">Guide</a>
  <a href="../html/adv_mech.php">Advanced mechanics</a>
  <a href="../html/faq.php">FAQ</a>
  <a href="../html/trivia.php">Trivia</a>
  <?php
  session_start();
  if ($_SESSION['activeUser'] && $_SESSION['activeUser'] != '') {
    echo '<a href="../html/php/logout.php">Log Out</a>';
  } else {
    echo '<a href="../html/login.php">Login</a>';
  }
  ?>
</header>