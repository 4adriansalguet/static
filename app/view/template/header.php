<?php $this->suspensionRedirect($view); ?> <!-- bawal -->
<!DOCTYPE html>
<html lang="en" <?php $this->helpers->htmlClasses(); ?>> <!-- bawal -->
<head>
	<meta charset="utf-8"> <!-- bawal -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/> <!-- bawal -->
	<meta name="apple-mobile-web-app-capable" content="yes" /> <!-- bawal --> 
	<meta name="apple-mobile-web-app-status-bar-style" content="black" /> <!-- bawal --> 

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
					<a href="#"></a>
					<p class="tel">(408) 413-9093</p>
				</div>
			</div>
		</div>

		<div id="home">
			<div class="home-main">
				<div class="home-content">
					<img src="./public/images/icons/logo.fw.png" alt="">
					<a class="button" href="#">HOME</a>
					<a href="#">ABOUT US</a>
					<a href="#">SERVICES</a>
					<a href="#">GALLERY</a>
					<a href="#">CONTACT US</a>
				</div>
			</div>
		</div>
	</header>
	<!-- Hero -->
	<?php if($view == "home"):?>
		<section id="section_2">
			<div class="section_2_content">
				<h1>Make Garcia Painting your one and only choice.</h1>
				<p>NO JOB TOO SMALL! WE DO WHAT THE OTHER GUYS WON’T!</p>
				<div class="section_2_btn_container">
					<a href="#">
						<img src="./public/images/icons/phone-black.fw.png" alt="">
						<div class="section_2_btn">
							<small>CALL US TODAY</small>
							<p>(408) 413-9093</p>
						</div>
					</a>
				</div>
			</div>
		</section>
	<?php endif; ?>