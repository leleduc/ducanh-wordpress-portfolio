<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ducanh_Portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!--Favicon-->
	<link rel="icon" href="<?= get_template_directory_uri(); ?>/assets/img/favicon.png" type="image/jpg">
	<meta name="robots" content="max-image-preview:large">

	<?php wp_head(); ?>
</head>

<body <?php body_class("home page-template page-template-template page-template-template_home page-template-templatetemplate_home-php page page-id-278"); ?>>
	<?php wp_body_open(); ?>

	<!-- preloader start-->
	<!-- preloader -->
	<div class="preloader-two" style="display: none;">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div>
	<!-- preloader end -->

	<!-- header start -->
	<!-- Header Area -->
	<div id="header-2" class="header-area absolute-header">
		<div id="sticky-wrapper" class="sticky-wrapper" style="height: 90px;">
			<div class="sticky-area" style="">
				<div class="navigation">
					<div class="container">
						<div class="header-inner-box">
							<div class="logo">
								<?php the_custom_logo(); ?>
							</div>

							<div class="main-menu">
								<nav class="navbar navbar-expand-lg">
									<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
										<span class="navbar-toggler-icon"></span>
										<span class="navbar-toggler-icon"></span>
									</button>

									<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">

										<ul id="menu-proview-nav-4" class="navbar-nav m-auto nav-item nav-link active">
											<li id="menu-item-373" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-373 nav-item"><a href="https://iideainformatics.it/wp/proview/proview4/#" aria-current="page" class="nav-link">Home</a></li>
											<li id="menu-item-374" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-374 nav-item"><a href="https://iideainformatics.it/wp/proview/proview4/#about" aria-current="page" class="nav-link active">About</a></li>
											<li id="menu-item-375" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-375 nav-item"><a href="https://iideainformatics.it/wp/proview/proview4/#services" aria-current="page" class="nav-link">Services</a></li>
											<li id="menu-item-376" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-376 nav-item"><a href="https://iideainformatics.it/wp/proview/proview4/#project" aria-current="page" class="nav-link">Projects</a></li>
											<li id="menu-item-381" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-381 nav-item"><a href="https://iideainformatics.it/wp/proview/proview4/#blog" aria-current="page" class="nav-link">Blog</a></li>
											<li id="menu-item-382" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-382 nav-item"><a href="https://iideainformatics.it/wp/proview/proview4/#contact" aria-current="page" class="nav-link">Contact</a></li>
										</ul>
									</div>
								</nav>
							</div>

							<div class="header-btn">
								<a href="https://iideainformatics.it/wp/proview/proview4/#contact" class="main-btn primary">Hire Me</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- header end --   -->