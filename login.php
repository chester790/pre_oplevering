<?php
require 'loginExcecute.php';
require 'db.php';
?>
<html lang="en-US">
<head>
  <meta charset="utf-8">
    <title>Login</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700">
    <link rel="stylesheet" href="css/inlog.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>
    <div id="login">
      <form name='form-login' action="login.php" method="post">
        <span class="fontawesome-envelope"></span>
          <input required type="email" id="email" name="email" placeholder="Email" >
       
        <span class="fontawesome-lock"></span>
          <input required type="password" id="password" name="password" placeholder="Password">
        
        <input type="submit" value="Login">
        Nog geen account? <a href="register.php">Registreer!</a>
    </form>
    
    </div>
</body>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  login($_POST['email'], $_POST['password'], $conn);
}
?>
</html>