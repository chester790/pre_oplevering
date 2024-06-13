<?php
require 'registerExcecute.php';
require 'db.php';
?>
<html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Registratie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link rel="stylesheet" href="css/inlog.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style>
      .info-icon {
        position: relative;
        cursor: pointer;
      }
      .info-icon:hover .info-popup {
        display: block;
      }
      .info-popup {
        display: none;
        position: absolute;
        bottom: 25px;
        left: 50px;
        width: 200px;
        padding: 10px;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        color: #333;
        font-size: 14px;
      }
      .error {
        color: red;
        font-size: 14px;
      }
    </style>
  </head>
  <body>
    <div id="login">
      <form name='form-login' action="register.php" method="post" onsubmit="return validateForm()">
        <span class="fontawesome-envelope"></span>
        <input type="email" id="email" name="email" placeholder="Email">
  
        <span class="fontawesome-user"></span>
        <input type="text" id="username" name="username" placeholder="Username">
  
        <span class="fontawesome-lock"></span>
        <input type="password" id="pass" name="password" placeholder="Password">
        <div class="info-icon">
          <i class="fa fa-info-circle"></i>
          <div class="info-popup">
            Wachtwoord moet minimaal 1 hoofdletter, 1 kleine letter, 1 symbool en 1 getal bevatten.
          </div>
        </div>
        <br>
        <div id="password-error" class="error"></div>
  
        <input type="submit" value="Registreer">
        Heb je al een account? <a href="login.php">Login!</a>
      </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      registration($_POST['email'], $_POST['username'], $_POST['password'], $conn);
    }
    
    ?>
  
    <script>
      function validateForm() {
        const password = document.getElementById('pass').value;
        const errorDiv = document.getElementById('password-error');
        const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
  
        if (!regex.test(password)) {
          errorDiv.textContent = 'Wachtwoord moet minimaal 1 hoofdletter, 1 kleine letter, 1 symbool en 1 getal bevatten.';
          return false;
        }
  
        errorDiv.textContent = '';
        return true;
      }
    </script>
  </body>
</html>