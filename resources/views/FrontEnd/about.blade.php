<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <!-- <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
  <meta name="description" content="" />
  <meta name="keywords" content="" />-->
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/css/owl.carousel.min.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/css/jquery.fancybox.min.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/fonts/icomoon/style.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/fonts/flaticon/font/flaticon.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/css/aos.css">
  <link rel="stylesheet" href="{{ asset('FrontEnd')}}/css/style.css">

  <title>Home ! </title>
</head>

<body>
  <div class="lines-wrap">
    <div class="lines-inner">
      <div class="lines"></div>
    </div>
  </div>
  <!-- END lines -->
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <nav class="site-nav mb-5">
    <div class="container">
      <div class="site-navigation">
        <a href="index.html" class="logo m-0">Events App <span class="text-primary">.</span></a>

        <ul class="js-clone-nav d-none d-lg-inline-block site-menu float-right">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a href="/about">About</a></li>
          <li><a href="/events">Events</a></li>
          <li><a href="/registre">Registre</a></li>
          <li><a href="/faq">FAQ</a></li>
          <li><a href="/contact">Contact us</a></li>
        </ul>

        <a href="#" class="burger ml-auto float-right site-menu-toggle js-menu-toggle d-inline-block d-lg-none light" data-toggle="collapse" data-target="#main-navbar">
          <span></span>
        </a>

      </div>
    </div>
  </nav>
  

  <div class="untree_co--hero" style="background-image: url('{{ asset('FrontEnd')}}/images/bg_1.jpg')">
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-lg-7">
          <div class="intro text-center">
            <h1 class="text-black" data-aos="fade-up" data-aos-delay="100">Event App About Us</h1>
            <div class="intro-desc" data-aos="fade-up" data-aos-delay="200"><p class="mb-4 text-black">You can achieve the same effect of the image background by visiting on <a href="https://duotone.shapefactory.co/" class="text-primary" target="_blank">this link</a>. Far far away, behind the word mountains, far from the countries Vokalia</p>

            </div>
          </div> <!-- /.intro -->
        </div> <!-- /.col-lg-7 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->

    <ul class="list-unstyled social">
      <li data-aos="fade-left" data-aos-delay="100"><a href="#"><span class="icon-instagram"></span></a></li>
      <li data-aos="fade-left" data-aos-delay="200"><a href="#"><span class="icon-twitter"></span></a></li>
      <li data-aos="fade-left" data-aos-delay="300"><a href="#"><span class="icon-facebook"></span></a></li>
    </ul>
    <!-- /.social -->
  </div> <!-- /.untree_co--hero -->


  <div class="untree_co-section">
    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <h3 class="heading">What is our Objectifs?</h3>
          <div class="excerpt">
            <p>Notre Projet a pour objectif de créer une interface web <span class="highlight">qui fait la gestione des événements .</span></p>
             <p> cette gestion se fait selon les horaires, les thèmes , les organisateurs et les catégories ciblés, sachant que chaque événement avant d’être publiée, il doit être approuvé par l’admin (web-master) qui a lui même le rôle de la gestion des catégories (suppression, modification, ajout)</p>
            <p class="mb-4"> après l’approbation l’organisateur recevra un email de confirmation (acceptation) de son événement et qui ‘il pourra le publier sinon il recevra un email d’annulation (refusion) </p>
          </div>

          <div class="row">
            <div class="col-lg-6 mb-4">
              <a  href="#" class="service-v2 d-flex align-items-center">
                <div class="wrap-icon">
                  <span class="icon-camera"></span>
                </div> <!-- /.wrap-icon -->
                <div class="contents">
                  <h3>Inspire Photograpy</h3>
                </div> <!-- /.service-contents -->
              </a> <!-- /.service-v2 -->
            </div>
            <div class="col-lg-6 mb-4">
              <a  href="#" class="service-v2 d-flex align-items-center">
                <div class="wrap-icon">
                  <span class="icon-search"></span>
                </div> <!-- /.wrap-icon -->
                <div class="contents">
                  <h3>Find it here</h3>
                </div> <!-- /.service-contents -->
              </a> <!-- /.service-v2 -->
            </div>

            <div class="col-lg-6 mb-4">
              <a  href="#" class="service-v2 d-flex align-items-center">
                <div class="wrap-icon">
                  <span class="icon-home"></span>
                </div> <!-- /.wrap-icon -->
                <div class="contents">
                  <h3>Inspire Photograpy</h3>
                </div> <!-- /.service-contents -->
              </a> <!-- /.service-v2 -->
            </div>
            <div class="col-lg-6 mb-4">
              <a  href="#" class="service-v2 d-flex align-items-center">
                <div class="wrap-icon">
                  <span class="icon-paper-plane"></span>
                </div> <!-- /.wrap-icon -->
                <div class="contents">
                  <h3>Fly Your Dreams</h3>
                </div> <!-- /.service-contents -->
              </a> <!-- /.service-v2 -->
            </div>
          </div>

        </div> <!-- /.col-lg-6 -->
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="0">
          <img src="{{ asset('FrontEnd')}}/images/about_2.jpg" alt="Image" class="img-fluid">
        </div> <!-- /.col-lg-6 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div> <!-- /.untree_co-section -->


  <div class="untree_co-section feature">
    <div class="container">
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-5 mx-auto">
          <h3>Help Us by Sharing Our Works</h3>
          <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>


          <p>
            <strong class="d-block text-black">Carl Anderson</strong>
            <span>Co-Founder & CEO</span>
          </p>
        </div> <!-- /.col-lg-6 -->
        <div class="col-lg-6">
          <img src="{{ asset('FrontEnd')}}/images/about_1.jpg" alt="Image" class="img-fluid">
        </div> <!-- /.col-lg-4 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
  </div> <!-- /.feature -->

  <div class="site-footer">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 mx-auto text-center">
          <h2 class="mb-4">Join Us</h2>
        </div> <!-- /.col-lg-7 -->
      </div> <!-- /.row -->
      <div class="row">
        <div class="col-lg-4">
          <div class="widget">
            <h3>Contact</h3>
            <address>43 Raymouth Rd. Baltemoer, London 3910</address>
            <ul class="list-unstyled links">
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="tel://11234567890">+1(123)-456-7890</a></li>
              <li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Sources</h3>
            <ul class="list-unstyled float-left links">
              <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li>
              <li><a href="#">Vision</a></li>
              <li><a href="#">Mission</a></li>
              <li><a href="#">Terms</a></li>
              <li><a href="#">Privacy</a></li>
            </ul>
            <ul class="list-unstyled float-left links">
              <li><a href="#">Partners</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">Careers</a></li>
              <li><a href="#">Blog</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Creative</a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Links</h3>
            <ul class="list-unstyled links">
              <li><a href="#">Our Vision</a></li>
              <li><a href="#">About us</a></li>
              <li><a href="#">Contact us</a></li>
            </ul>

            <ul class="list-unstyled social">
              <li><a href="#"><span class="icon-instagram"></span></a></li>
              <li><a href="#"><span class="icon-twitter"></span></a></li>
              <li><a href="#"><span class="icon-facebook"></span></a></li>
              <li><a href="#"><span class="icon-linkedin"></span></a></li>
              <li><a href="#"><span class="icon-pinterest"></span></a></li>
              <li><a href="#"><span class="icon-dribbble"></span></a></li>
            </ul>
          </div> <!-- /.widget -->
        </div> <!-- /.col-lg-4 -->
      </div> <!-- /.row -->
      <div class="row mt-5">
        <div class="col-12 text-center">
          <p class="small mb-0">&copy; 2020. All Rights Reserved. Design by <a href="https://untree.co/" target="_blank" class="text-primary"><strong>Untree.co</strong></a></p>
          <p class="small">
            <span class="mx-2">Twitter <a href="https://twitter.com/untree_co">@Untree_co</a></span>
            <span>&bullet;</span>
            <span class="mx-2">Facebook <a href="https://web.facebook.com/Untree.co">@Untree.co</a></span>
          </p>

        </div>
      </div>
    </div> <!-- /.container -->
  </div> <!-- /.site-footer -->

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
  <script src="{{ asset('FrontEnd')}}/js/jquery-3.4.1.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/popper.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/bootstrap.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/owl.carousel.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/jquery.animateNumber.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/jquery.waypoints.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/jquery.fancybox.min.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/aos.js"></script>
  <script src="{{ asset('FrontEnd')}}/js/custom.js"></script>

</body>

</html>
