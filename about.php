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
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </header>    
    <!-- end header section -->
  </div>


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2">
            <div class="heading_container">
              <h1 class="">
                Over ons
              </h1>
              <h2>Onze kernwaarden</h2>
              <h3>Waar staan wij voor</h3>
            </div>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="img-box ">
            <img style="height: 100%;width: 100%;" src="images/small_group_tp.png" class="box_img" alt="about img">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2">
            <div class="heading_container">
              <h2 class="">
                1. Klantgericht
              </h2>
            </div>
            <p class="detail_p_mt">
              Wij staat voor persoonlijke en op maat gemaakte drukwerk oplossingen vanaf idee tot uitvoering. Ons flexibele team van experts biedt advies en ondersteuning, en streven naar heldere communicatie gedurende het hele proces. We passen ons graag aan uw specifieke wensen en behoeften aan. Kortom, we bieden een klantgerichte aanpak die u verzekert van een perfect eindresultaat waar u tevreden over bent.
            </p>
          </div>
        </div>
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2" style="text-align:center;">
            <i class="fa fa-users fa-5x" aria-hidden="true"></i>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2" style="text-align:center;">
            <i class="fa fa-handshake-o fa-5x" aria-hidden="true"></i>
          </div>
        </div>
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2">
            <div class="heading_container">
              <h2 class="">
                2. Betrouwbaar
              </h2>
            </div>
            <p class="detail_p_mt">
              Uw betrouwbare partner voor hoogwaardige printoplossingen. Met deskundige professionals en geavanceerde technologie bieden wij efficiënte productie, ongeacht de omvang van uw behoeften. Ons streven naar kwaliteit en klanttevredenheid zet ons apart. 
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2">
            <div class="heading_container">
              <h2 class="">
                3. Duurzaam
              </h2>
            </div>
            <p class="detail_p_mt">
              Wij hebben duurzaamheid hoog in het vaandel staan. We gebruiken onder andere duurzame materialen, letten op ons energieverbruik en streven naar een circulaire economie. We willen onze klanten helpen bij het maken van duurzame keuzes en bieden daarom verschillende duurzame producten aan.
            </p>
          </div>
        </div>
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2" style="text-align:center;">
            <i class="fa fa-leaf fa-5x" aria-hidden="true"></i>
          </div>
        </div>
      </div>
<!-- NEW ROWS-->
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2" style="text-align:center;">
            <i class="fa fa-bullhorn fa-5x" aria-hidden="true"></i>
          </div>
        </div>
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2">
            <div class="heading_container">
              <h2 class="">
                4. Enthousiast
              </h2>
            </div>
            <p class="detail_p_mt">
              Ons gepassioneerde team van professionals gaat voor het beste resultaat dat past bij jouw unieke wensen. Met onze brede expertise bieden we een scala aan diensten, van strategische adviezen tot praktische oplossingen. Laat ons jouw verwachtingen overtreffen en je helpen je doelen te bereiken.
            </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2">
            <div class="heading_container">
              <h2 class="">
                5. Transparant
              </h2>
            </div>
            <p class="detail_p_mt">
              We vinden transparantie belangrijk en streven naar open en eerlijke communicatie met klanten. We bieden duidelijke informatie over onze producten en diensten en tonen onze prestaties en beleid. Transparantie is de basis voor vertrouwen en respect in klantrelaties. We werken hard aan het verschaffen van informatie en inzicht op een transparante manier, over prijzen, voorwaarden en onze resultaten. Zo kunnen klanten ons vertrouwen en streven we naar een langdurige relatie met hen.
            </p>
          </div>
        </div>
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2" style="text-align:center">
            <i class="fa fa-eye fa-5x" aria-hidden="true"></i>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2" style="text-align:center">
            <i class="fa fa-diamond fa-5x" aria-hidden="true"></i>
          </div>
        </div>
        <div class="col-md-5 offset-md-1">
          <div class="detail-box pr-md-2">
            <div class="heading_container">
              <h2 class="">
                6. Kwaliteit
              </h2>
            </div>
            <p class="detail_p_mt">
              We zijn hier om je te ondersteunen en gebruiken geavanceerde machines en innovatieve technologieën om snel en nauwkeurig aan jouw wensen te voldoen. Efficiency en precisie zijn hierbij belangrijk. Met ons kun je zorgeloos werken aan je projecten en leveren wij de beste kwaliteit.
            </p>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- about section ends -->

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