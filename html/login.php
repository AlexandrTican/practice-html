<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Login form</title>
  <link rel="stylesheet" href="css/main.css" />
  <link rel="stylesheet" href="css/auth.css" />
</head>

<body>

  <header class="header_menu">
    <a href="../html/guide.php">Guide</a>
    <a href="../html/adv_mech.php">Advanced mechanics</a>
    <a href="../html/faq.php">FAQ</a>
    <a href="../html/trivia.php">Trivia</a>
  </header>

  <div class="container" id="container">

    <!--Sign up form-->
    <div class="form-container sign-up-container">
      <form method="post" id="signUpF">
        <h1>Sign up</h1>
        <p style="color:red" id="signUpErr"></p>
        <input type="text" placeholder="Name" name="uName" />
        <input type="email" placeholder="Email" name="uEmail" />
        <input type="password" placeholder="Password" name="uPass1" />
        <input type="password" placeholder="ConfirmPassword" name="uPass2" />
        <button>Sign Up</button>
      </form>
    </div>

    <!--Log in form-->
    <div class="form-container sign-in-container">
      <form method="post" id="logInF">
        <h1>Log in</h1>
        <p style="color:red" id="logInErr"></p>
        <input type="email" placeholder="Email" name="uEmail" />
        <input type="password" placeholder="Password" name="uPass" />
        <button>Sign In</button>
      </form>
    </div>

    <div class="overlay-container">
      <div class="overlay">
        <div class="overlay-panel overlay-left">
          <button class="ghost" id="signIn">Log in</button>
        </div>
        <div class="overlay-panel overlay-right">
          <button class="ghost" id="signUp">Sign Up</button>
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="javascript/login2.js"></script>
</body>

</html>