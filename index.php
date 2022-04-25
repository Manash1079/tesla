<?php
if (isset($_GET['success'])) {
  $showAlert = true;
  if ($_GET['success'] == 'true') {
    $success = $_GET['success'];
  } else {
    $success = false;
  }

  $alertMsg = $_GET['alert'];
} else {
  $showAlert = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./assets/style.css">
  <title>Tesla</title>
</head>

<body>
  <div class="main">
    <div class="formBox">
      <div class="buttonBox">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">
          LogIn
        </button>
        <button type="button" class="toggle-btn" onclick="register()">
          Register
        </button>
      </div>

      <?php if ($showAlert) { ?>
        <?php $color = $success ? "green" : "red"; ?>
        <h3 style="text-align:center; color: <?php echo $color; ?>">
          <?php echo $alertMsg; ?>
        </h3>
      <?php } ?>

      <form id="logIn" action="./components/_loginhandler.php" class="inputGroup" autocomplete="off" method="POST">
        <input type="text" class="inputField" placeholder="Email" name="email" required />
        <input type="password" class="inputField" placeholder="Password" name="password" required />
        <input type="checkbox" class="checkBox" />
        <span>Remember Password</span>
        <button type="submit" class="submit-btn">LogIn</button>
      </form>
      <form id="register" action="./components/_signuphandler.php" class="inputGroup" autocomplete="off" method="POST">
        <input type="text" class="inputField" placeholder="Name" name="name" required />
        <input type="email" class="inputField" placeholder="Email" name="email" required />
        <input type="password" class="inputField" placeholder="Password" name="password" required />
        <input type="password" class="inputField" placeholder="Confirm Password" name="cpassword" required />
        <input type="checkbox" class="checkBox" required />
        <span>I agree to the TnC</span>
        <button type="submit" class="submit-btn">Register</button>
      </form>
    </div>
  </div>
  <script>
    var logIn = document.getElementById("logIn");
    var registr = document.getElementById("register");
    var btn = document.getElementById("btn");

    function register() {
      logIn.style.left = "-400px";
      registr.style.left = "50px";
      btn.style.left = "110px";
    }

    function login() {
      logIn.style.left = "50px";
      registr.style.left = "450px";
      btn.style.left = "0px";
    }
  </script>
</body>

</html>