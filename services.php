<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="iCloud Technology - Services informatiques professionnels, solutions cloud, cybersécurité et infrastructure IT">
  <meta name="author" content="iCloud Technology">

  <title>Nos Services - iCloud Technology</title>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="plugins/icofont/icofont.min.css">
  <!-- Slick Slider CSS -->
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">

  <style>
    /* Custom styles for services page */
    .service-block {
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
      background: #fff;
    }
    .service-block:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
    }
    .service-block .content {
      padding: 25px;
    }
    .service-block .icon {
      font-size: 48px;
      color: var(--primary-color);
      margin-bottom: 20px;
    }
    .service-block h4 {
      font-size: 22px;
      font-weight: 600;
    }
    .service-block p {
      font-size: 15px;
      line-height: 1.6;
      color: #6F8BA4;
    }
    .service-image {
      height: 200px;
      width: 100%;
      object-fit: cover;
    }
    .page-title {
      position: relative;
      padding: 180px 0 120px;
      background: url('images/bg/server-room.jpg') no-repeat;
      background-size: cover;
      background-position: center center;
    }
    .page-title::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(45deg, rgba(0, 28, 67, 0.95) 0%, rgba(0, 28, 67, 0.8) 100%);
    }
    .cta-section {
      background: linear-gradient(to right, #2D3958, #1E2A45);
      padding: 80px 0;
      position: relative;
      overflow: hidden;
    }
    .cta-section::before {
      content: '';
      position: absolute;
      right: 0;
      top: 0;
      width: 40%;
      height: 100%;
      background: url('images/bg/cta-bg.png') no-repeat;
      background-size: cover;
      opacity: 0.1;
    }
  </style>
</head>

<body id="top">

<header>
  <div class="header-top-bar">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <ul class="top-bar-info list-inline-item pl-0 mb-0">
            <li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i>support@novena.com</a></li>
            <li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Ta-134/A, New York, USA </li>
          </ul>
        </div>
        <div class="col-lg-6">
          <div class="text-lg-right top-right-bar mt-2 mt-lg-0">
            <a href="tel:+23-345-67890" >
              <span>Call Now : </span>
              <span class="h4">823-4565-13456</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navigation" id="navbar">
    <div class="container">
      <a class="navbar-brand" href="index.html">
        <img src="images/logo.png" alt="" class="img-fluid">
      </a>

      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
        <span class="icofont-navigation-menu"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarmain">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
          <li class="nav-item"><a class="nav-link" href="service.html">Services</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department <i class="icofont-thin-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown02">
              <li><a class="dropdown-item" href="department.html">Departments</a></li>
              <li><a class="dropdown-item" href="department-single.html">Department Single</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="doctor.html" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown03">
              <li><a class="dropdown-item" href="doctor.html">Doctors</a></li>
              <li><a class="dropdown-item" href="doctor-single.html">Doctor Single</a></li>
              <li><a class="dropdown-item" href="appoinment.html">Appoinment</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="blog-sidebar.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog <i class="icofont-thin-down"></i></a>
            <ul class="dropdown-menu" aria-labelledby="dropdown05">
              <li><a class="dropdown-item" href="blog-sidebar.html">Blog with Sidebar</a></li>

              <li><a class="dropdown-item" href="blog-single.html">Blog Single</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="block text-center">
          <span class="text-white text-uppercase letter-spacing">Découvrez nos expertises</span>
          <h1 class="text-capitalize mb-4 text-lg text-white">Nos Services</h1>
          <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.php" class="text-white">Accueil</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><span class="text-white-50">Nos Services</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section service-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="service-block mb-5">
          <img src="images/services/cloud.jpg" alt="Cloud Computing" class="service-image">
          <div class="content">
            <div class="icon">
              <i class="icofont-cloud-upload"></i>
            </div>
            <h4 class="mt-4 mb-2 title-color">Cloud Computing</h4>
            <p class="mb-4">Solutions cloud personnalisées pour optimiser vos opérations. Migration, gestion et sécurisation de vos données dans le cloud.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="service-block mb-5">
          <img src="images/services/security.jpg" alt="Cybersécurité" class="service-image">
          <div class="content">
            <div class="icon">
              <i class="icofont-shield"></i>
            </div>
            <h4 class="mt-4 mb-2 title-color">Cybersécurité</h4>
            <p class="mb-4">Protection avancée contre les cybermenaces. Audit de sécurité, surveillance 24/7 et solutions de protection des données.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="service-block mb-5">
          <img src="images/services/network.jpg" alt="Infrastructure Réseau" class="service-image">
          <div class="content">
            <div class="icon">
              <i class="icofont-network"></i>
            </div>
            <h4 class="mt-4 mb-2 title-color">Infrastructure Réseau</h4>
            <p class="mb-4">Conception et maintenance d'infrastructures réseau performantes. Solutions sur mesure pour votre entreprise.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="service-block mb-5">
          <img src="images/services/consulting.jpg" alt="Conseil IT" class="service-image">
          <div class="content">
            <div class="icon">
              <i class="icofont-users-alt-3"></i>
            </div>
            <h4 class="mt-4 mb-2 title-color">Conseil IT</h4>
            <p class="mb-4">Expertise stratégique pour votre transformation numérique. Accompagnement personnalisé et solutions adaptées.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="service-block mb-5">
          <img src="images/services/development.jpg" alt="Développement" class="service-image">
          <div class="content">
            <div class="icon">
              <i class="icofont-code"></i>
            </div>
            <h4 class="mt-4 mb-2 title-color">Développement</h4>
            <p class="mb-4">Création d'applications sur mesure et solutions web innovantes. Technologies modernes et méthodologies agiles.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="service-block mb-5">
          <img src="images/services/support.jpg" alt="Support Technique" class="service-image">
          <div class="content">
            <div class="icon">
              <i class="icofont-support"></i>
            </div>
            <h4 class="mt-4 mb-2 title-color">Support Technique</h4>
            <p class="mb-4">Assistance technique 24/7 et maintenance préventive. Une équipe d'experts à votre service.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="cta-content text-center">
          <h2 class="mb-4 text-lg text-white">Prêt à transformer votre infrastructure IT ?</h2>
          <p class="text-white mb-4">Contactez-nous pour une consultation gratuite et découvrez comment nous pouvons optimiser vos solutions technologiques.</p>
          <a href="contact.php" class="btn btn-main-2 btn-round-full">Contactez-nous <i class="icofont-simple-right ml-2"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="footer section gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mr-auto col-sm-6">
        <div class="widget mb-5 mb-lg-0">
          <div class="logo mb-4">
            <img src="images/logo.png" alt="" class="img-fluid">
          </div>
          <p>Tempora dolorem voluptatum nam vero assumenda voluptate, facilis ad eos obcaecati tenetur veritatis eveniet distinctio possimus.</p>

          <ul class="list-inline footer-socials mt-4">
            <li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="icofont-facebook"></i></a></li>
            <li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="icofont-twitter"></i></a></li>
            <li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="icofont-linkedin"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="widget mb-5 mb-lg-0">
          <h4 class="text-capitalize mb-3">Department</h4>
          <div class="divider mb-4"></div>

          <ul class="list-unstyled footer-menu lh-35">
            <li><a href="#">Surgery </a></li>
            <li><a href="#">Wome's Health</a></li>
            <li><a href="#">Radiology</a></li>
            <li><a href="#">Cardioc</a></li>
            <li><a href="#">Medicine</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-2 col-md-6 col-sm-6">
        <div class="widget mb-5 mb-lg-0">
          <h4 class="text-capitalize mb-3">Support</h4>
          <div class="divider mb-4"></div>

          <ul class="list-unstyled footer-menu lh-35">
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Company Support </a></li>
            <li><a href="#">FAQuestions</a></li>
            <li><a href="#">Company Licence</a></li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="widget widget-contact mb-5 mb-lg-0">
          <h4 class="text-capitalize mb-3">Get in Touch</h4>
          <div class="divider mb-4"></div>

          <div class="footer-contact-block mb-4">
            <div class="icon d-flex align-items-center">
              <i class="icofont-email mr-3"></i>
              <span class="h6 mb-0">Support Available for 24/7</span>
            </div>
            <h4 class="mt-2"><a href="tel:+23-345-67890">Support@email.com</a></h4>
          </div>

          <div class="footer-contact-block">
            <div class="icon d-flex align-items-center">
              <i class="icofont-support mr-3"></i>
              <span class="h6 mb-0">Mon to Fri : 08:30 - 18:00</span>
            </div>
            <h4 class="mt-2"><a href="tel:+23-345-67890">+23-456-6588</a></h4>
          </div>
        </div>
      </div>
    </div>
    
    <div class="footer-btm py-4 mt-5">
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-6">
          <div class="copyright">
            &copy; Copyright Reserved to <span class="text-color">Novena</span> by <a href="https://themefisher.com/" target="_blank">Themefisher</a>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="subscribe-form text-lg-right mt-5 mt-lg-0">
            <form action="#" class="subscribe">
              <input type="text" class="form-control" placeholder="Your Email address">
              <a href="#" class="btn btn-main-2 btn-round-full">Subscribe</a>
            </form>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <a class="backtop js-scroll-trigger" href="#top">
            <i class="icofont-long-arrow-up"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- 
Essential Scripts
=====================================-->

<!-- Main jQuery -->
<script src="plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4.3.2 -->
<script src="plugins/bootstrap/js/popper.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/counterup/jquery.easing.js"></script>
<!-- Slick Slider -->
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<!-- Counterup -->
<script src="plugins/counterup/jquery.waypoints.min.js"></script>
    
<script src="plugins/shuffle/shuffle.min.js"></script>
<script src="plugins/counterup/jquery.counterup.min.js"></script>
<!-- Google Map -->
<script src="plugins/google-map/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    
<script src="js/script.js"></script>
<script src="js/contact.js"></script>

</body>
</html>