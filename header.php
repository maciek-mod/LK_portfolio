<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('template_url'); ?>/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/favicon/favicon-16x16.png">
<link rel="manifest" href="<?php bloginfo('template_url'); ?>/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">

<meta property="og:title" content="Łukasz Wróbel Portfolio – Projektowania i wdrażanie stron www, aplikacji, projektowanie graficzne">
<meta property="og:site_name" content="Łukasz Wróbel Portfolio">
<meta property="og:url" content="http://www.lukaszwrobel.me/">
<meta property="og:description" content="Chętnie z zespołem zajmiemy się stworzeniem Twojej strony www od strony wizualnej i wdrożeniowej. Lubimy nowe wyzwania z każdej dziedziny. Traktuję klientów na równi i z szacunkiem – razem pracujemy..">
<meta property="og:type" content="website">
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/facebook_share.jpg" />



<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
		<?php if (pll_current_language() == 'en') {
			$menuMainPage = "MAIN PAGE<br/><span>Meet us</span>";
			$menuOfert = "OFFER<br/><span>What we do?</span>";
			$menuPortfolio = "PORTFOLIO<br/><span>What we offer?</span>";
			$menuContact = "Contact<br/><span>Write to us</span>";
			$h1Text = "<h1>Mam na imię Łukasz.</h1><h2>Jak mogę Ci pomóc?</h2>";

		} else if (pll_current_language() == 'pl') {
		 	$menuMainPage = "STRONA GŁÓWNA<br/><span>Poznaj nas</span>";
			$menuOfert = "OFERTA<br/><span>Co robimy?</span>";
			$menuPortfolio = "PORTFOLIO<br/><span>Co oferujemy?</span>";
			$menuContact = "KONTAKT<br/><span>Napisz do nas</span>";
			$h1Text = "<h1>Mam na imię Łukasz.</h1><h2>Jak mogę Ci pomóc?</h2>";
		} ?>
	<nav>
        <div class="container">
            <div class="deskop">
                <div class="logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <img src="<?php bloginfo('template_url'); ?>/img/svg/logo.svg" alt="Łukasz Wróbel"> </a>
                </div>
                <ul id="deskop">
                    <li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#main_page" data-scroll="main_page"><?php echo $menuMainPage ?></a></li>
                    <li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#ofert" data-scroll="ofert"><?php echo $menuOfert ?></a></li>
                    <li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#portfolio" data-scroll="portfolio"><?php echo $menuPortfolio ?></a></li>
                    <li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact" data-scroll="contact"><?php echo $menuContact ?></a> </li>
                </ul>
                <div class="lang">
				<ul>
					<?php pll_the_languages(); ?>
				</ul>
                </div>
            </div>
            <div class="mobile">
                <div class="hamburger">
                    <h2><a href="#"> <img src="<?php bloginfo('template_url'); ?>/img/svg/logo.svg" alt="Łukasz Wróbel"> </a></h2>
                    <div class="hamburger_inner">
                        <div id="nav-icon4">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="mobile_container">
                    <ul id="mobile_menu">
						<li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#main_page" data-scroll="main_page"><?php echo $menuMainPage ?></a></li>
	                    <li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#ofert" data-scroll="ofert"><?php echo $menuOfert ?></a></li>
	                    <li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#portfolio" data-scroll="portfolio"><?php echo $menuPortfolio ?></a></li>
	                    <li> <a href="<?php echo esc_url( home_url( '/' ) ); ?>#contact" data-scroll="contact"><?php echo $menuContact ?></a> </li>
                    </ul>
                    <br/>
                    <div class="lang">
						<ul>
							<?php pll_the_languages(); ?>
						</ul>
                    </div>
                </div>

            </div>
        </div>
    </nav>
