<!DOCTYPE html>
<html lang="fr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="iCloud Technology - Leader en solutions numériques innovantes: réseau, développement, cybersécurité et IA. Expertise technique et service client d'excellence en Côte d'Ivoire.">
  <meta name="keywords" content="IT solutions, réseau informatique, développement logiciel, cybersécurité, intelligence artificielle, Côte d'Ivoire, Abidjan">
  <meta name="author" content="iCloud Technology">

  <title>À Propos - iCloud Technology</title>

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

  <!-- Additional CSS for professional design -->
  <style>
    .about-page {
      padding: 100px 0;
    }
    .about-img img {
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }
    .about-img img:hover {
      transform: translateY(-5px);
    }
    .about-content {
      position: relative;
    }
    .about-content::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 4px;
      height: 100%;
      background: var(--primary-color);
      border-radius: 2px;
    }
    .service-block {
      border-radius: 15px;
      overflow: hidden;
      background: #fff;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }
    .service-block:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    }
    .service-block img {
      border-radius: 15px 15px 0 0;
      height: 250px;
      object-fit: cover;
    }
    .service-block .content {
      padding: 25px;
    }
    .counter-box {
      background: #fff;
      padding: 40px 20px;
      border-radius: 15px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
    }
    .counter-box:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    }
    .counter-box img {
      margin-bottom: 20px;
    }
    .counter-box .counter {
      font-size: 48px;
      font-weight: 700;
      color: var(--primary-color);
      margin-bottom: 10px;
      display: block;
    }
    .expertise-block {
      background: #fff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
      height: 100%;
      transition: all 0.3s ease;
    }
    .expertise-block:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
    }
    .section-title h2 {
      position: relative;
      padding-bottom: 15px;
    }
    .section-title h2::after {
      content: "";
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      margin: 0 auto;
      width: 50px;
      height: 2px;
      background: var(--primary-color);
    }
    .testimonial-block {
      background: #fff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.05);
      margin-bottom: 30px;
      position: relative;
    }
    .testimonial-block::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      width: 4px;
      height: 100%;
      background: var(--primary-color);
      border-radius: 0 2px 2px 0;
    }
    .client-info h4 {
      color: var(--primary-color);
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
      background: linear-gradient(45deg, 
        rgba(0, 28, 67, 0.95) 0%,
        rgba(0, 28, 67, 0.8) 100%
      );
    }
    .page-title .block {
      position: relative;
    }
    .page-title h1 {
      font-size: 48px;
      font-weight: 700;
      text-transform: uppercase;
      margin-bottom: 20px;
      letter-spacing: 1px;
    }
    .page-title .text-white {
      text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }
    .page-title .letter-spacing {
      letter-spacing: 2px;
      font-weight: 500;
      margin-bottom: 15px;
      display: inline-block;
    }
    .breadcumb-nav {
      margin-top: 20px;
    }
    .breadcumb-nav .list-inline-item {
      font-size: 16px;
      font-weight: 500;
    }
    .breadcumb-nav .list-inline-item a:hover {
      color: var(--primary-color);
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
						<li class="list-inline-item"><a href="mailto:support@icloud-technology.ci"><i class="icofont-support-faq mr-2"></i>support@icloud-technology.ci</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Cocody Riviera Golf</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+225-07-0829-2991">
							<span>Contactez-nous : </span>
							<span class="h4">+225 07 0829 2991</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	<a class="navbar-brand" href="index.php">
			  	<img src="images/logo.jpg" alt="iCloud Technology" class="img-fluid">
			</a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
	  
		  <div class="collapse navbar-collapse" id="navbarmain">
			<ul class="navbar-nav ml-auto">
			  <li class="nav-item">
				<a class="nav-link" href="index.php">Accueil</a>
			  </li>
			  <li class="nav-item active"><a class="nav-link" href="about.php">À Propos</a></li>
			  <li class="nav-item"><a class="nav-link" href="services.html">Nos Services</a></li>
			  <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Solutions <i class="icofont-thin-down"></i></a>
					<ul class="dropdown-menu" aria-labelledby="dropdown02">
						<li><a class="dropdown-item" href="network.html">Réseau Informatique</a></li>
						<li><a class="dropdown-item" href="development.html">Développement</a></li>
						<li><a class="dropdown-item" href="security.html">Cybersécurité</a></li>
						<li><a class="dropdown-item" href="ai.html">Intelligence Artificielle</a></li>
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
          <span class="text-white text-uppercase letter-spacing">Découvrez Notre Histoire</span>
          <h1 class="text-capitalize mb-4 text-lg text-white">À Propos de Nous</h1>
          <ul class="list-inline breadcumb-nav">
            <li class="list-inline-item"><a href="index.php" class="text-white">Accueil</a></li>
            <li class="list-inline-item"><span class="text-white">/</span></li>
            <li class="list-inline-item"><span class="text-white-50">À Propos</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section about-page">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-sm-6">
				<div class="about-img">
					<img src="images/about/about-1.jpg" alt="À propos de iCloud Technology" class="img-fluid mb-4">
					<img src="images/about/about-2.jpg" alt="Notre expertise" class="img-fluid">
				</div>
			</div>
			<div class="col-lg-8 col-sm-6">
				<div class="about-content pl-4 mt-4 mt-lg-0">
					<h2 class="title-color mb-4">Innovation et Excellence au Service de Votre Transformation Numérique</h2>
					<p class="lead mb-4">Fondée avec la vision d'être un leader dans le domaine des technologies de l'information, iCloud Technology s'est imposée comme un partenaire de confiance pour les entreprises en quête d'excellence numérique.</p>
					<p class="mb-4">Notre expertise approfondie et notre engagement envers l'innovation nous permettent d'offrir des solutions technologiques de pointe qui transforment les défis en opportunités. Notre mission est d'accompagner les entreprises dans leur transformation numérique en leur fournissant des solutions innovantes, sécurisées et adaptées à leurs besoins spécifiques.</p>
					<p class="mb-5">Nous nous distinguons par notre approche consultative personnalisée et notre engagement à établir des partenariats durables avec nos clients, garantissant leur succès à long terme.</p>
					<img src="images/about/sign.png" alt="Signature" class="img-fluid" style="max-width: 200px;">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section service-feature bg-gray">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7 text-center">
				<div class="section-title">
					<h2 class="mb-4">Nos Services Principaux</h2>
					<div class="divider mx-auto my-4"></div>
					<p class="mb-5">Découvrez notre gamme complète de services technologiques conçus pour propulser votre entreprise vers le succès numérique</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-6">
				<div class="service-block mb-5">
					<img src="images/about/img-1.png" alt="Infrastructure Réseau" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Infrastructure Réseau</h4>
						<p class="mb-4">Conception et déploiement d'infrastructures réseau robustes et évolutives pour optimiser vos performances.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="service-block mb-5">
					<img src="images/about/img-2.jpg" alt="Développement" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Développement</h4>
						<p class="mb-4">Solutions logicielles sur mesure, applications web et mobiles adaptées à vos besoins spécifiques.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="service-block mb-5">
					<img src="images/about/img-3.jpg" alt="Cybersécurité" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Cybersécurité</h4>
						<p class="mb-4">Protection avancée contre les menaces, audits de sécurité et solutions de surveillance continue.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="service-block mb-5">
					<img src="images/about/about-4.png" alt="Intelligence Artificielle" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-2 title-color">Intelligence Artificielle</h4>
						<p class="mb-4">Innovation par l'IA, analyse de données et solutions d'automatisation intelligente.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section achievements">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2 class="mb-4">Nos Réalisations</h2>
					<div class="divider mx-auto my-4"></div>
					<p class="mb-5">Des résultats concrets qui témoignent de notre expertise et de notre engagement envers l'excellence</p>
				</div>
			</div>
		</div>

		<div class="row text-center">
			<div class="col-lg-3 col-md-6">
				<div class="counter-box">
					<div class="counter-icon mb-4">
						<img src="images/about/1.png" alt="Clients Icon" class="img-fluid" style="max-height: 80px;">
					</div>
					<span class="counter" data-count="500">0</span>
					<h4 class="mt-3">Clients Satisfaits</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="counter-box">
					<div class="counter-icon mb-4">
						<img src="images/about/2.png" alt="Projects Icon" class="img-fluid" style="max-height: 80px;">
					</div>
					<span class="counter" data-count="250">0</span>
					<h4 class="mt-3">Projets Réalisés</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="counter-box">
					<div class="counter-icon mb-4">
						<img src="images/about/3.png" alt="Certifications Icon" class="img-fluid" style="max-height: 80px;">
					</div>
					<span class="counter" data-count="15">0</span>
					<h4 class="mt-3">Certifications</h4>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="counter-box">
					<div class="counter-icon mb-4">
						<img src="images/about/4.png" alt="Experience Icon" class="img-fluid" style="max-height: 80px;">
					</div>
					<span class="counter" data-count="10">0</span>
					<h4 class="mt-3">Années d'Expérience</h4>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section expertise bg-light">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4">
				<div class="section-title">
					<h2 class="mb-4">Notre Expertise</h2>
					<div class="divider my-4"></div>
					<p class="mb-5">Plus de 10 ans d'expérience dans les solutions technologiques innovantes</p>
					<img src="images/about/about-3.jpg" alt="Expertise iCloud Technology" class="img-fluid rounded shadow">
				</div>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-md-6 mb-4">
						<div class="expertise-block">
							<img src="images/about/5.png" alt="Infrastructure Cloud" class="img-fluid mb-3" style="max-height: 60px;">
							<h4 class="mt-3">Infrastructure Cloud</h4>
							<p>Solutions cloud évolutives et sécurisées pour optimiser vos ressources IT.</p>
						</div>
					</div>
					<div class="col-md-6 mb-4">
						<div class="expertise-block">
							<img src="images/about/6.png" alt="Applications" class="img-fluid mb-3" style="max-height: 60px;">
							<h4 class="mt-3">Applications Web & Mobile</h4>
							<p>Développement d'applications modernes et performantes.</p>
						</div>
					</div>
					<div class="col-md-6 mb-4">
						<div class="expertise-block">
							<img src="images/about/1.png" alt="Analyse de Données" class="img-fluid mb-3" style="max-height: 60px;">
							<h4 class="mt-3">Analyse de Données</h4>
							<p>Transformation de vos données en insights stratégiques.</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="expertise-block">
							<img src="images/about/2.png" alt="Automatisation IA" class="img-fluid mb-3" style="max-height: 60px;">
							<h4 class="mt-3">Automatisation IA</h4>
							<p>Solutions d'automatisation intelligente pour votre entreprise.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section awards">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4">
				<h2 class="title-color">Nos Valeurs</h2>
				<div class="divider mt-4 mb-5 mb-lg-0"></div>
			</div>
			<div class="col-lg-8">
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="award-block mb-4">
							<i class="icofont-medal-alt text-color h1"></i>
							<h4 class="mb-3 mt-4">Excellence</h4>
							<p>Nous visons l'excellence dans chaque projet, garantissant des solutions de haute qualité.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="award-block mb-4">
							<i class="icofont-badge text-color h1"></i>
							<h4 class="mb-3 mt-4">Innovation</h4>
							<p>L'innovation est au cœur de notre approche, nous adoptons les technologies émergentes.</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="award-block mb-4">
							<i class="icofont-shield-alt text-color h1"></i>
							<h4 class="mb-3 mt-4">Sécurité</h4>
							<p>La sécurité est notre priorité dans chaque solution que nous développons.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section team">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2 class="mb-4">Notre Équipe d'Experts</h2>
					<div class="divider mx-auto my-4"></div>
					<p>Une équipe passionnée de professionnels certifiés, dédiée à votre réussite technologique.</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="images/team/1.jpg" alt="Expert Réseau" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-0">Marc Kouassi</h4>
						<p>Directeur Infrastructure Réseau</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="images/team/2.jpg" alt="Expert Développement" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-0">Sophie Koffi</h4>
						<p>Lead Développeuse</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block mb-5 mb-lg-0">
					<img src="images/team/3.jpg" alt="Expert Sécurité" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-0">David Aka</h4>
						<p>Chef de la Sécurité</p>
					</div>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="team-block">
					<img src="images/team/4.jpg" alt="Expert IA" class="img-fluid w-100">
					<div class="content">
						<h4 class="mt-4 mb-0">Anna Diallo</h4>
						<p>Responsable IA</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section testimonial">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-7">
				<div class="section-title text-center">
					<h2 class="mb-4">Ce que nos clients disent</h2>
					<div class="divider mx-auto my-4"></div>
					<p class="mb-5">La satisfaction de nos clients est notre meilleure récompense</p>
				</div>
			</div>
		</div>

		<div class="row align-items-center">
			<div class="col-lg-6 testimonial-wrap offset-lg-6">
				<div class="testimonial-block">
					<div class="client-info mb-4">
						<h4>Transformation Digitale Réussie</h4>
						<span class="text-muted">PDG, Entreprise de Distribution</span>
					</div>
					<p class="mb-4">
						"iCloud Technology a complètement transformé notre infrastructure IT. Leur expertise en réseau et sécurité nous a permis de moderniser nos opérations tout en garantissant la protection de nos données."
					</p>
					<i class="icofont-quote-right text-color h1"></i>
				</div>

				<div class="testimonial-block">
					<div class="client-info mb-4">
						<h4>Solutions Sur Mesure</h4>
						<span class="text-muted">Directeur Technique, Startup Fintech</span>
					</div>
					<p class="mb-4">
						"L'équipe de développement a créé une solution parfaitement adaptée à nos besoins. Leur approche agile et leur expertise technique ont fait toute la différence."
					</p>
					<i class="icofont-quote-right text-color h1"></i>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Footer -->
<footer class="footer section gray-bg">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 mr-auto col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<img src="images/logo.jpg" alt="iCloud Technology" class="img-fluid">
					</div>
					<p>Votre partenaire technologique de confiance pour l'innovation et la transformation numérique.</p>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Services</h4>
					<div class="divider mb-4"></div>
					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="network.html">Réseau</a></li>
						<li><a href="development.html">Développement</a></li>
						<li><a href="security.html">Cybersécurité</a></li>
						<li><a href="ai.html">IA</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Contact</h4>
					<div class="divider mb-4"></div>
					<ul class="list-unstyled footer-menu lh-35">
						<li><i class="icofont-location-pin"></i> Cocody Riviera Golf</li>
						<li><i class="icofont-phone"></i> +225 07 0829 2991</li>
						<li><i class="icofont-email"></i> support@icloud-technology.ci</li>
					</ul>
				</div>
			</div>
			
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-3">Newsletter</h4>
					<div class="divider mb-4"></div>
					<form action="#" class="sub-form">
						<input type="email" class="form-control mb-3" placeholder="Votre email">
						<a href="#" class="btn btn-main btn-small">S'abonner</a>
					</form>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row align-items-center justify-content-between">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; 2024 <span class="text-color">iCloud Technology</span> Tous droits réservés.
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<!-- Essential Scripts -->
<script src="plugins/jquery/jquery.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/counter/counter.js"></script>
<script src="js/script.js"></script>
</body>
</html>