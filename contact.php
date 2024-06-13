<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'session_security.php';

$env_file = file_get_contents('.env');

$env_vars = [];

$lines = explode("\n", $env_file);

foreach ($lines as $line) {
    if (empty($line) || strpos($line, '=') === false || strpos($line, '#') === 0) {
        continue;
    }

    list($key, $value) = explode('=', $line, 2);

    $env_vars[trim($key)] = trim($value);
}

$SMTPpassword = $env_vars['SMTPpassword'] ?? null;
$SMTPusername = $env_vars['SMTPusername'] ?? null;
$SMTPport = $env_vars['SMTPport'] ?? null;
$SMTPhost = $env_vars['SMTPhost'] ?? null;

ini_set('SMPT', $SMTPhost);
ini_set('smpt_port', $SMTPport);
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/logo_pre.png" type="image/x-icon">
  <title>Pré Print + Mail</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- theme css -->
  <link rel="stylesheet" type="text/css" href="css/stylemode.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link id="theme" href="css/light.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="https://pre-print-mail.nl/cmsPPM/wp-content/uploads/2017/02/pre-mail-advies-slider010.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div id="navbar" class="header_top">
        <div class="container-fluid header_top_container">

          <div class="contact_nav">
            <a href="callto:036 7600776">
              <i class="fa fa-phone" aria-hidden="true"></i>
              <span>
                Tel : +036 7600776
              </span>
            </a>
            <a href="#contact">
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <span>
                info@pre-print-mail.nl
              </span>
            </a>
            <div class="dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i style="font-size:20px" class="fa fa-user" aria-hidden="true"></i>
                <span>
                  Account
                </span>
              </a>
              <div class="dropdown-menu" aria-labelledby="userDropdown">
                <?php
                if (isset($_SESSION['email'])) {
                  echo '<a class="dropdown-item" href="profile.php">Profile</a>';
                  echo '<a class="dropdown-item" href="logout.php">Logout</a>';
                } else {
                  echo '<a class="dropdown-item" href="login.php">Login</a>';
                  echo '<a class="dropdown-item" href="register.php">Register</a>';
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <img style="max-width: 65px; max-height: 65px;" src="images/logo_pre_print.png" alt="logo" class="logo">  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.php">Diensten</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.php"> Over ons</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" target="_blank" href="https://www.pre-printshop.nl">Webshop</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>           
    <!-- end header section -->
  </div>

  <!-- contact section -->
  <section class="contact_section">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-5 mx-auto">
          <div class="center">
            <div class="box">
              <div class="img-box">
                <i class="fa fa-handshake-o fa-4x" aria-hidden="true"></i>
              </div>
              <div class="detail-box">
                <h5>
                Contact Informatie
                </h5>
                <p>
                  <a target="_blank" href="https://maps.app.goo.gl/aF6hkDTbtoYDKfV79">Operetteweg 37</a><br> 
                  <a target="_blank" href="https://maps.app.goo.gl/aF6hkDTbtoYDKfV79">1323VK Almere</a><br>
                  <a href="callto:036 7600776">036 7600776</a><br>
                  <a href="mailto:info@pre-print-mail.nl">Info@pre-print-mail.nl</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0 page">
            <div class="img-box">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4872.8151638369045!2d5.1839728123089985!3d52.36302914772246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c61132c6466b73%3A0x6e779fdd823208b8!2sPré%20Print%20%2B%20Mail!5e0!3m2!1snl!2snl!4v1717505272871!5m2!1snl!2snl"style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
      <div class="col-md-5 mx-auto">
          <div class="form_container">
            <div class="heading_container heading_center">
              <h2>Neem contact op!</h2>
            </div>
            <form action="contact.php" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col">
                  <input required name="name" type="text" class="form-control" placeholder="Uw naam" max="100" min="1" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="tel" name="phone" class="form-control" placeholder="Telefoon nummer" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input required type="email" name="email"class="form-control" placeholder="Email" max="80" min="1"/>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input required type="text" name="message" class="message-box form-control" placeholder="Bericht" max="400" min="1" />
                </div>
              </div>
              <div class ="form-row">
                <div class="form-group col">
                  <input type="file" name="file" id="fileInput" accept=".jpg, .jpeg, .png, .pdf"> 
                </div>
              </div>
              <div class="btn_box">
                <button type="submit" value="Uploaden">
                  Verstuur
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
    if(isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
      $uploadedFile = $_FILES['file']['tmp_name'];
      $fileName = $_FILES['file']['name'];
      
      $allowedExtensions = array('jpg', 'jpeg', 'png', 'pdf');
      $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);
      if(!in_array(strtolower($fileExtension), $allowedExtensions)) {
          die('Ongeldige bestandsextensie! Alleen .jpg, .jpeg, .png en .pdf bestanden zijn toegestaan.');
      }
      
      $uploadDirectory = '/pre/klant_bestanden/';
      
      $destination = $_SERVER['DOCUMENT_ROOT'] . $uploadDirectory . $fileName;

      // Controleer minimale afmetingen voor afbeeldingen
      if (in_array(strtolower($fileExtension), array('jpg', 'jpeg', 'png'))) {
          $imageInfo = getimagesize($uploadedFile);
          $minWidth = 1000; // Minimale breedte
          $minHeight = 1000; // Minimale hoogte
          if ($imageInfo[0] < $minWidth || $imageInfo[1] < $minHeight) {
              die('Afbeelding moet minimaal ' . $minWidth . 'x' . $minHeight . ' pixels zijn.');
          }
      }
      if(move_uploaded_file($uploadedFile, $destination)) {
          // echo 'Bestand succesvol geüpload!';
      } else {
          // echo 'Er is een probleem opgetreden bij het uploaden van het bestand.';
      }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = isset($_POST['name']) ? $_POST['name'] : '';
      $phoneNumber = isset($_POST['phone']) ? $_POST['phone'] : '';
      $email = isset($_POST['email']) ? $_POST['email'] : '';
      $message = isset($_POST['message']) ? $_POST['message'] : '';

  
      // Instantieer een nieuwe PHPMailer
      $mail = new PHPMailer(true);
  
      try {
          // SMTP-configuratie voor Gmail
          $mail->isSMTP();
          $mail->Host = $SMTPhost;
          $mail->SMTPAuth = true;
          $mail->Username = $SMTPusername; // Vervang dit in de .env met je Gmail-gebruikersnaam
          $mail->Password = $SMTPpassword; // Vervang dit in de .env met je Gmail-wachtwoord
          $mail->SMTPSecure = 'tls';
          $mail->Port = $SMTPport;

          // Afzender en ontvanger instellingen
          $mail->setFrom('studentinnovationtechnology@gmail.com', $name);
          $mail->addAddress('cbedrijf@gmail.com'); // Ontvanger
  
          // Email inhoud
          $mail->isHTML(false); // Stel in op true als je HTML-e-mails wilt verzenden
          $mail->Subject = 'Contactformulier ingevuld door ' . $name;
          $mail->Body = "Naam: $name\nTelefoonnummer: $phoneNumber\nE-mail: $email\nBericht:\n$message";
  
          // Verzend de e-mail
          $mail->send();
      } catch (Exception $e) {
          // echo 'Er is een probleem opgetreden bij het verzenden van uw bericht: ' . $mail->ErrorInfo;
      }
  }
  ?>
  <!-- end contact section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="row">
          <div class="col-md-3 ">
            <a class="navbar-brand" target="_blank" href="https://www.pre-printshop.nl">
              Pré Print + Mail
            </a>
          </div>
        </div>
      </div>
      <div class="info_bottom">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="">
              <h5>
                Handige linkjes
              </h5>
              <ul class="info_menu">
                <li>
                  <a href="index.html">
                    Home
                  </a>
                </li>
                <li>
                  <a href="service.html">
                    Diensten
                  </a>
                </li>
                <li>
                  <a href="about.html">
                    Over ons
                  </a>
                </li>
                <li>
                  <a href="contact.html">
                    Contact
                  </a>
                </li>
                <li  class="mb-0">
                  <a target="_blank" href="https://www.pre-printshop.nl">
                    Webshop
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="info_detail">
              <h5>
                Contact Informatie
              </h5>
              <ul class="info_menu">
                <li>
                  <a style="color: white;" target="_blank" href="https://maps.app.goo.gl/aF6hkDTbtoYDKfV79">Operetteweg 37</a> 
                </li>
                <li>
                  <a style="color: white;" target="_blank" href="https://maps.app.goo.gl/aF6hkDTbtoYDKfV79">1323VK Almere</a>
                </li>
                <li class="nav-item">
                  <a style="color: white;" href="callto:036 7600776">
                    036 7600776</a>
                </li>
                <li>
                  <a style="color: white;" href="mailto:info@pre-print-mail.nl">Info@pre-print-mail.nl</a>
                </li>
              </ul>
            </div>
          </div>
          <div style="text-align:center;" class="col-lg-4 col-md-6">
          <img style="border-radius: 20%;max-width: 200px; max-width: 200px;" src="images/Groter_Logo_pre.png" alt="logo">
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- end info_section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> <i><a href="index.php">Pré Print + Mail</a></i> | Alle Rechten Voorbehouden | Mede mogelijk gemaakt door <i><a href="#">Innovation Technology</a></i>	
      </p>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

  <!-- Scroll listener -->
  <script src="js/scrollListener.js"></script>
  <!--Theme Switcher -->
  <script src="js/stylemode.js"></script>
</body>

</html>