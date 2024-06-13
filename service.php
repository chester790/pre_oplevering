<?php
require 'session_security.php';
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

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center ">
        <h2 class="">
          Onze diensten
        </h2>
      </div>
      <div class="service_container page">
        <div class="row">
          <div class="col-md-4 col-sm-6 mx-auto">
            <div class="box">
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
              <div class="btn-box">
                <a href="">
                  Lees meer
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mx-auto">
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
              <div class="btn-box">
                <a href="">
                  Lees meer
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mx-auto">
            <div class="box">
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
              <div class="btn-box">
                <a href="">
                  Lees meer
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 col-sm-6 mx-auto">
            <div class="box">
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
              <div class="btn-box">
                <a href="">
                Lees meer
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 mx-auto">
            <div class="box">
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
              <div class="btn-box">
                <a href="">
                  Lees meer
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- service section ends -->

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
  <script src="js/stylemode.js"></script>

   <!-- Scroll listener -->
   <script src="js/scrollListener.js"></script>
  <!--Theme Switcher -->
  <script src="js/stylemode.js"></script>
</body>

</html>