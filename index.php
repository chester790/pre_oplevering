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

<body>
  <div class="hero_area">
    <div class="hero_bg_box">
      <img src="\Pre\images\header.jpg" style="object-fit:cover;max-height:1000px"alt="">
      <!-- <img src="https://pre-print-mail.nl/cmsPPM/wp-content/uploads/2017/02/pre-mail-advies-slider010.jpg" alt=""> -->
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
            <!--<a class="navbar-brand " href="index.html"> Finter </a>-->
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
                <!-- <form class="form-inline justify-content-center">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form> -->
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto">
                  <div class="detail-box">
                    <h1>
                      Voor al jouw print- en drukwerk
                    </h1>
                    <p>
                      Vraag een offerte aan of <a href="callto:036-76 00 776">bel ons</a> voor meer informatie.
                    </p>
                    <div class="btn-box">
                      <a href="offerte-aanvraag.php" class="btn1">
                        Offerte aanvraag
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto">
                  <div class="detail-box">
                    <h1>
                      Mediavariëteit
                    </h1>
                    <p>
                      Van dun tot dik papier, reliëfpapier, polyesther, enveloppen en nog veel meer.
                      <br>
                      En dit alles geproduceerd vanuit onze locatie in Almere.
                    </p>
                    <div class="btn-box">
                      <a href="contact.php" class="btn1">
                        Contacteer ons
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-lg-10 col-md-11 mx-auto">
                  <div class="detail-box">
                    <h1>
                      Personaliseer al uw drukwerk
                    </h1>
                    <p>
                      Wij drukken jouw <b>drukwerk</b> gepersonaliseerd of met unieke codes, barcodes, teksten of zelfs unieke afbeeldingen
                    </p>
                    <div class="btn-box">
                      <a href="contact.php" class="btn1">
                        Contacteer ons
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Vorige</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Volgende</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center ">
        <h2 class="">
        Diensten
        </h2>
      </div>
      <div class="service_container">
        <div class="carousel-wrap ">
          <div class="service_owl-carousel owl-carousel">
            <div class="item">
              <div class="box ">
                <div class="img-box">
                  <i class="fa fa-print fa-4x" aria-hidden="true"></i>
                </div>
                <div class="detail-box">
                  <h5>
                    Drukwerk
                  </h5>
                  <p>
                    We gebruiken geavanceerde technieken voor de hoogste afdruk kwaliteit. Tevens kunnen we iedere afdruk personaliseren ongeacht de oplage.
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box ">
                <div class="img-box">
                <i class="fa fa-envelope-o fa-4x" aria-hidden="true"></i>
                </div>
                <div class="detail-box">
                  <h5>
                    Direct mail
                  </h5>
                  <p>
                    Direct mail is een snelle en effectieve communicatievorm met als doel respons. Het voordeel is dat het mailstuk gericht is op een vooraf geselecteerde doelgroep, waardoor het uiterst effectief is in het verkoopproces.
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box ">
                <div class="img-box">
                  <i class="fa fa-cubes fa-4x" aria-hidden="true"></i>
                </div>
                <div class="detail-box">
                  <h5>
                    Verpakken
                  </h5>
                  <p>
                    Het uitbesteden van verpakkingswerkzaamheden levert je veel voordelen op als. Je bespaart veel tijd en krijgt een betrouwbare en kwalitatieve service.
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box ">
                <div class="img-box">
                  <i class="fa fa-truck fa-4x" aria-hidden="true"></i>
                </div>
                <div class="detail-box">
                  <h5>
                    Post of Pakket
                  </h5>
                  <p>
                    Keuze uit diverse vervoerders en verstuur uw post of pakket wereldwijd op basis van de meest voordelige voorwaarden met alle gemak van de wereld! 
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="box ">
                <div class="img-box">
                  <i class="fa fa-check-circle-o fa-4x" aria-hidden="true"></i>
                </div>
                <div class="detail-box">
                  <h5>
                    Fulfilment
                  </h5>
                  <p>
                    Wij ontzorgen jou volledig door het beheren van jouw voorraad, het samenvoegen en verpakken van producten en het verzenden met de meest passende verzendpartij. Zodat jij je kan concentreren op jouw eigen werk en wij regelen de rest!
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="service.php">
          Lees meer
        </a>
      </div>
    </div>
  </section>

  <!-- service section ends -->

  <!-- about section -->

  <section class="about_section">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2">
            <div class="heading_container">
              <h2 class="">
                Over ons
              </h2>
            </div>
            <p class="detail_p_mt">
              Wij zijn Pré Print + Mail, een drukkerij gevestigd in Almere.
              Al vele jaren helpen wij onze klanten met het printen, afwerken en verzenden van al hun drukwerk. Je zult merken dat onze lijnen kort zijn, we snel schakelen en flexibel zijn. Ons doel is dan ook dat we er persoonlijk voor zorgen dat u 100% tevreden bent en ontzorgd wordt.
            </p>
            <a href="about.php" class="">
              Lees meer
            </a>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box ">
            <!-- <img src="images/print-machine.jpg" class="box_img" alt="about img" style="width:100%"> -->
            <img src="images/aboutus.jpg" class="box_img" alt="about img" style="width:100%">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- about section ends -->

<!-- client section -->
<!-- <section class="client_section layout_padding">
  <div class="container ">
    <div class="heading_container heading_center">
      <h2>
        Het team
      </h2>
      <hr>
    </div>
    <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Robert van Wijk
                  </h5>
                  <p>
                    Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                  </p>
                  <span>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Jeroen van Wijk
                  </h5>
                  <p>
                    Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                  </p>
                  <span>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/client.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Amber den Hartigh
                  </h5>
                  <p>
                    Editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by
                  </p>
                  <span>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
  
          </span>
          <span class="sr-only">Vorige</span>
        </a>
        <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
          <span>
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
          </span>
          <span class="sr-only">Volgende</span>
        </a>
      </div>
    </div>
  </div>
</section> -->
<!-- end client section -->

<!-- bedrijven section -->
<section class="client_section layout_padding">
  <div class="container ">
    <div class="heading_container heading_center">
      <h2>
        Pré Print + Mail is preferred supplier van:
      </h2>
      <hr>
    </div>
    <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel" style="height:150px;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/logo/asr.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    a.s.r.
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
        </div>
        <div class="carousel-item">
        <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
          <span>
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
          </span>
          <span class="sr-only">Vorige</span>
        </a>
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/logo/BE.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    TradeFairs.be
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
        </div>
        <div class="carousel-item">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/logo/BNL.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Betaalvereniging Nederland
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
        </div>
        <div class="carousel-item">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/logo/Brooke.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Brooke
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
        </div>
        <div class="carousel-item">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/logo/Deloitte.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Deloitte
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
        </div>
        <div class="carousel-item">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/logo/dT.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    de Toekomst
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
        </div>
        <div class="carousel-item">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/logo/NL.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    TradeFairs.nl
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
        </div>
        <div class="carousel-item">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/logo/PON.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    PON
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
        </div>
        <div class="carousel-item">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/logo/scildon.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    scildon
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
        </div>
        <div class="carousel-item">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/logo/trainers.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Extra trainers
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
        </div>
        <div class="carousel-item">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/logo/Tumult.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Tumult
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
        </div>
        <div class="carousel-item">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <span>
              <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
          <div class="row">
            <div class="col-lg-7 col-md-9 mx-auto">
              <div class="client_container ">
                <div class="img-box">
                  <img src="images/logo/Yards.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Yards
                  </h5>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </span>
            <span class="sr-only">Volgende</span>
          </a>
        </div>
    </div>
  </div>
</section>
<!-- end bedrijven section -->

<!-- team section -->
<section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Ons team
        </h2>
        <p>
          <!-- Wij zijn een hecht en goed samen werkend team. Wij zorgen ervoor dat uw drukwerk snel en goed wordt afgeleverd en dat u tevreden bent met het resultaat. -->
          Wij zijn trots op onze jarenlange ervaring in het leveren van topkwaliteit drukwerk. Of u nu op zoek bent naar offset of digitaal drukken, wij hebben de expertise in huis om u te helpen. Ons team van gepassioneerde professionals doet er alles aan om ervoor te zorgen dat uw drukwerk precies zo wordt geleverd als u het wilt. Wij zijn niet alleen experts in drukwerk, maar ook luisteraars. Door goed te luisteren naar uw wensen, kunnen wij het maximale halen uit onze drukkerij en uw drukwerk. Ons doel is om onze klanten tevreden te stellen door topkwaliteit te leveren en tegelijkertijd de meest persoonlijke service te bieden. Wij kijken er naar uit om met u samen te werken om uw visie tot leven te brengen met prachtig drukwerk.
        </p>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/bit/robert_bit.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Robert van Wijk
              </h5>
              <h6 class="">
                <a href="mailto:Robert@pre-print-mail.nl">Robert@pre-print-mail.nl</a><br>
                <a href="callto:036-7600774">036-7600774</a>
              </h6>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/bit/jeroen_bit.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Jeroen van Wijk
              </h5>
              <h6 class="">
                <a href="mailto:Jeroen@pre-print-mail.nl">Jeroen@pre-print-mail.nl</a><br>
                <a href="callto:036-7600775"> 036-7600775</a>
              </h6>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/bit/amber_bit.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Amber den Hartigh
              </h5>
              <h6 class="">
                <a href="mailto:amber@pre-print-mail.nl">Amber@pre-print-mail.nl</a><br>
                <a href="callto:036-7600776">036-7600776</a>
              </h6>
            </div>
          </div>
        </div>
        <!-- <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/t3.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Bart Tukker
              </h5>
              <h6 class="">
                Print & Order manager
              </h6>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <!-- end team section -->

  <!-- contact section -->
  <section id="contact" class="contact_section ">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-6 px-0">
          <div class="img-box ">
            <!-- <img src="images/handprinter.jpg" class="box_img" alt="about img" style="width:100%"> -->
            <img src="images/contactus.jpg" class="box_img" alt="about img" style="width:100%">
          </div>
        </div>
        <div class="col-md-5 mx-auto">
          <div class="form_container">
            <div class="heading_container heading_center">
              <h2>Neem contact op!</h2>
            </div>
            <form action="index.php" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group col">
                  <input required name="name" type="text" class="form-control" placeholder="Uw naam" max="100" min="1" />
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="tel" name="phone" class="form-control" placeholder="Telefoon nummer"/>
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
          echo 'Er is een probleem opgetreden bij het verzenden van uw bericht: ' . $mail->ErrorInfo;
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

  <!--Theme-->
  <script src="js/stylemode.js"></script>
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
  <script src="js/scrollListener.js"></script>
</body>


</html>