<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>GRANX - NANO POLYMERS</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Place favicon.ico in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">
	<!-- ========== Start Stylesheet ========== -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/all.min.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/themify-icons.css" rel="stylesheet" />
	<link href="assets/css/icofont.min.css" rel="stylesheet" />
	<link href="assets/css/flaticon.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-icons.css" rel="stylesheet" />
	<link href="assets/css/bsnav.min.css" rel="stylesheet" />
	<link href="assets/css/preloader.css" rel="stylesheet" />
	<link href="assets/css/magnific-popup.css" rel="stylesheet" />
	<link href="assets/css/swiper-bundle.min.css" rel="stylesheet" />
	<link href="assets/css/jquery-ui.css" rel="stylesheet" />
	<link href="assets/style.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link href="assets/css/responsive.css" rel="stylesheet" />
	<!-- ========== End Stylesheet ========== -->

	<!-- Slick CSS -->
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />


	<style>
		/* Main Slider Section */
		.hero-section {
			position: relative;
			width: 100%;
			height: 100vh;
			overflow: hidden;
		}

		/* Background Video */
		.hero-video video {
			width: 100%;
			height: 100vh;
			object-fit: cover;
			position: absolute;
			top: 0;
			left: 0;
		}

		/* VIDEO OVERLAY COLOR — You can edit this */
		.video-overlay {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			background: linear-gradient(to right,
					rgba(0, 0, 0, 0.75),
					rgba(0, 0, 0, 0.2));
			z-index: 3;
		}

		/* Overlay Slick Slider (Above overlay) */
		.overlay-slider {
			position: relative;
			z-index: 5;
			height: 100vh;
			display: flex;
			align-items: center;
		}

		/* Slide Content */
		.slide-item {
			color: #fff;
			padding-left: 50px;
		}

		.slide-title {
			font-size: 55px;
			font-weight: 700;
			line-height: 1.2;
			margin-bottom: 15px;
			animation: fadeInUp 1s ease forwards;
		}

		.slide-text {
			font-size: 22px;
			opacity: 0.9;
			margin-bottom: 25px;
			animation: fadeInUp 1.5s ease forwards;
		}

		.read-more-btn {
			display: inline-block;
			padding: 12px 30px;
			/* background: #00bc24; */
			background: linear-gradient(116deg, rgb(14, 80, 149), rgb(1, 188, 37));
			color: #fff;
			/* border-radius: 6px; */
			font-size: 18px;
			text-decoration: none;
			font-weight: 600;
			animation: fadeInUp 2s ease forwards;
			transition: 0.3s;
		}

		.read-more-btn:hover {
			background: #004d0e;
			color: white;
		}

		/* Fade-in animation */
		@keyframes fadeInUp {
			from {
				opacity: 0;
				transform: translateY(25px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
		}

		/* Responsive */
		@media (max-width: 768px) {
			.slide-title {
				font-size: 35px;
			}

			.slide-text {
				font-size: 18px;
			}

			.read-more-btn {
				font-size: 16px;
				padding: 10px 22px;
			}
		}

		@media (max-width: 480px) {
			.slide-title {
				font-size: 28px;
			}

			.slide-text {
				font-size: 16px;
			}

			.slide-item {
				padding-left: 20px;
			}
		}



		/*Start vision & mission*/
		.gmc-body {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 30px;
			padding: 40px 20px;
			background: #fff;
		}

		.gmc-box {
			position: relative;
			width: 100%;
			max-width: 500px;
			border: 2px solid #000;
			padding: 60px 30px 30px;
			background: #fff;
			transition: 0.4s ease;
			opacity: 0;
			transform: translateY(30px);
		}

		.gmc-visible {
			opacity: 1;
			transform: translateY(0);
			transition: all 0.6s ease-in-out;
		}

		.gmc-box:hover {
			border: 2px solid #027950;
			box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
		}

		.gmc-icon {
			position: absolute;
			top: -43px;
			left: 24px;
			width: 90px;
			height: 90px;
			background: #fff;
			border-radius: 50%;
			overflow: hidden;
			transition: transform 0.3s ease;
		}

		.gmc-box:hover .gmc-icon {
			transform: scale(1.1) rotate(10deg);
		}

		.gmc-icon img {
			width: 100%;
			height: 100%;
			object-fit: contain;
		}

		.gmc-title {
			font-size: 22px;
			color: #b24535;
			font-weight: bold;
			margin-bottom: 15px;
		}

		.gmc-text {
			font-size: 16px;
			color: #555;
			line-height: 1.6;
			text-align: justify;
		}

		@media(max-width: 3000px)  and (min-width: 769px) {
			.grid-new{
				grid-template-columns: repeat(2, 1fr);
				width: fit-content;
			}
		}

		@media (max-width: 768px) {
			.gmc-body {
				flex-direction: column;
				align-items: center;
			}

			.gmc-box {
				width: 90%;
			}

			.gmc-icon {
				left: 20px;
				top: -30px;
			}
		}

		/*End vision & mission*/

		@media (max-width:3000px) and (min-width:1067px){
			.mb-granx{
				margin-bottom:100px;
			}
		}
	</style>

</head>

<body id="bdy">

	<!-- Start PreLoader 
    ============================================= -->
	<div class="preloader">
		<div class="preloader-container">
			<span class="preloader-text">NANO POLYMERS</span>
			<div class="preloader-animation">
			</div>
		</div>
	</div>
	<!-- End PreLoader-->

	<div style="width:100%;height: 5px;background: linear-gradient(116deg, rgb(14, 80, 149), rgb(1, 188, 37));"></div>

	<!-- Start header -->
	<header class="header header-before-off">
		<div class="main-wrapper">
			<div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent">
				<div class="container" style="border-radius: 0px 0px 10px 10px;background: #ffffff80;">
					<a class="navbar-brand" href="index.php" style="padding-left: 20px;">
						<img src="assets/images/nano-logo.png" class="logo-display" alt="Nano Polymers Logo"
							style="border: 1px solid #141e35;">
						<img src="assets/images/nano-logo.png" class="logo-scrolled" alt="Nano Polymers Logo">
					</a>
					<button class="navbar-toggler toggler-spring">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-md-between" style="padding: 7px;border-radius: 0px 0px 10px 0px;">
						<ul class="navbar-nav navbar-mobile justify-content-md-center w-100">
							<li class="nav-item dropdown fadeup">
								<a class="nav-link" href="index.php">HOME</a>
							</li>
							<li class="nav-item dropdown fadeup">
								<a class="nav-link" href="about.php">ABOUT US</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="services.php">SERVICES</a></li>
							<li class="nav-item"><a class="nav-link" href="testing.php">TESTING</a></li>
							<li class="nav-item"><a class="nav-link" href="contact.php">CONTACT US</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="bsnav-mobile">
				<div class="bsnav-mobile-overlay"></div>
				<div class="navbar"></div>
			</div>
		</div>
	</header>
	<!-- End header -->