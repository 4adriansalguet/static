<?php $this->suspensionRedirect($view); ?> <!-- bawal -->
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>> <!-- bawal -->
<head>
	<meta charset="utf-8"> <!-- bawal -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- bawal -->
	<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- bawal --> 
	<meta name="apple-mobile-web-app-status-bar-style" content="black" /> <!-- bawal --> 
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
	<?php $this->helpers->seo($view); ?> <!-- bawal -->
	<link rel="icon" href="public/images/favicon.png" type="image/x-icon"> <!-- bawal -->
	<link href="<?php echo URL; ?>public/styles/style.css" rel="stylesheet"> <!-- bawal -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" /> <!-- bawal -->
	<link rel="stylesheet" href="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.css" media="screen" /> <!-- bawal -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" /> <!-- bawal -->
	<?php $this->helpers->analytics(); ?><!-- bawal -->
</head>

<body <?php $this->helpers->bodyClasses($view); ?>> <!-- bawal -->
<?php $this->checkSuspensionHeader(); ?> <!-- bawal -->

<!-- <img class="close" src="<?php echo URL; ?>public/images/icons/close.png" alt="menu"> -->
<!-- <li <?php $this->helpers->isActiveMenu("home"); ?>><a href="<?php echo URL ?>">Home</a></li> -->

	<header>
		<div id="header">
			<div class="header-main">
				<div class="header-content">
					<a href="#">FOLLOW US</a>
					<img src="./public/images/icons/socmed.fw.png" alt="">
					<a href="#">CALL US TODAY</a>
					<img src="./public/images/icons/phone.fw.png" alt="">
					<img src="" alt="">
					<p class="tel">(408) 413-9093</p>
				</div>
			</div>
		</div>

		<div id="home">
			<div class="home-main">
				<div class="home-content">
					<img src="./public/images/icons/logo.fw.png" alt="">
					<nav>
						<a href="#" id="pull">MENU</a>
						<ul>
			                <li <?php $this->helpers->isActiveMenu("home"); ?> class="btn"><a  href="home#content">HOME</a></li>
			                <li <?php $this->helpers->isActiveMenu("about"); ?>><a href="about#content">ABOUT US</a></li>
			                <li <?php $this->helpers->isActiveMenu("services"); ?>><a href="services#content">SERVICES</a></li>
			                <li <?php $this->helpers->isActiveMenu("gallery"); ?>><a href="gallery#content">GALLERY</a></li>
			                <li <?php $this->helpers->isActiveMenu("reviews"); ?>><a href="reviews#content">REVIEWS</a></li>
			                <li <?php $this->helpers->isActiveMenu("contact"); ?>><a href="contact#content">CONTACT US</a></li>
						</ul>
					</nav>
					<!-- <a class="button" href="#">HOME</a>
					<a href="#">ABOUT US</a>
					<a href="#">SERVICES</a>
					<a href="#">GALLERY</a>
					<a href="#">CONTACT US</a>
					<nav>
						<ul>
							<li></li>
						</ul>
					</nav> -->
				</div>
			</div>
		</div>
	</header>
	<!-- Hero -->
	<?php if($view == "home"):?>
		
	<?php endif; ?>