<?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 'empty_fields') {
            echo '<p class="error">Please fill in both username and password fields.</p>';
        } elseif ($error == 'invalid_email') {
            echo '<p class="error">Invalid username format. Please enter a valid email address.</p>';
        } elseif ($error == 'invalid_email or password') {
            echo '<p class="error">Incorrect email or password. Please try again.</p>';
        }
    }
    ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./global.css" />
    <link rel="stylesheet" href="./styles.css" />
    <link rel="stylesheet" href="./responsive.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Cabin:ital,wght@0,700;1,700&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Chela One:wght@400&display=swap"
    />
  </head>
  <body>
  <script>
        function showError(message) {
            alert(message);
        }
      </script>
    <div class="log-in">
    <div class="menu">
      <a class="logo" href="/index"> </a>
      <div class="menu-items">
      <a class="home" href="../index.html">Home</a>
      <a class="home" href="/">My City</a>
      <a class="home" href="../Citadel/citadel.html">Heritage</a>
      <a class="home" href="../CV/index.html">CV</a>
      <a class="home" href="../api/index.html">My interests</a>
      <a class="home" href="../Contact/index.php">Contact</a>
        </div>
        <div class="account-buttons">
          <a class="log-in" href="../login2/index.php">
            <b class="explore-the-world">Log In</b>
          </a>
        <a class="sign-u" href="/">
          <b class="explore-the-world">Sign Up</b>
        </a>
      </div>
      <div id="mobile-menu-icon">
        <svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
      </div>
    </div>


    <section class="login-details-wrapper">
      <div class="login-details">
        <b class="log-in-to-container">
          <p class="log-in-to">Log In to Your</p>
          <p class="account">Account</p>
        </b>
        <form action="process_login.php" method="post">
          <div class="input-fields">
           <div class="inputname">
            <div class="rectangle1"></div>
            <div class="email-address">EMAIL ADDRESS</div>
            <input
            name="username"
            class="inputname-child"
            placeholder="johndoe@example.com"
            type="text"
            />
          </div>
          <div class="inputname-copy-3">
            <div class="rectangle1"></div>
            <div class="password">PASSWORD</div>
                <input
                name="password"
                class="inputname-child"
                placeholder="*********"
                type="password"
              />
          </div>
          <button type="submit" class="btn-prytemplate-2">
            <div class="btn-prytemplate-2-child"></div>
            <div class="proceed">PROCEED</div>
          </button>
        </form>
      </div>
    </section>
  </div>
</div>
  <script src="main.js"></script>
  </body>
</html>