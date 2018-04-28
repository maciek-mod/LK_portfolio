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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
		<?php if (pll_current_language() == 'en') {
			$menuMainPage = "MAIN PAGE<br/><span>Meet us</span>";
			$menuOfert = "OFFER<br/><span>What we do?</span>";
			$menuPortfolio = "PORTFOLIO<br/><span>What we offer?</span>";
			$menuContact = "Contact<br/><span>Write to us</span>";

		} else if (pll_current_language() == 'pl') {
		 	$menuMainPage = "STRONA GŁÓWNA<br/><span>Poznaj nas</span>";
			$menuOfert = "OFERTA<br/><span>Co robimy?</span>";
			$menuPortfolio = "PORTFOLIO<br/><span>Co oferujemy?</span>";
			$menuContact = "KONTAKT<br/><span>Napisz do nas</span>";
		} ?>
	<nav>
        <div class="container">
            <div class="deskop">
                <div class="logo">
                    <a href="#"> <img src="<?php bloginfo('template_url'); ?>/img/svg/logo.svg" alt="Łukasz Wróbel"> </a>
                </div>
                <ul id="deskop">
                    <li> <a href="/" data-scroll="main_page"><?php echo $menuMainPage ?></a></li>
                    <li> <a href="/ofert" data-scroll="ofert"><?php echo $menuOfert ?></a></li>
                    <li> <a href="/portfolio" data-scroll="portfolio"><?php echo $menuPortfolio ?></a></li>
                    <li> <a href="/contact" data-scroll="contact"><?php echo $menuContact ?></a> </li>
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
						<li> <a href="/" data-scroll="main_page"><?php echo $menuMainPage ?></a></li>
						<li> <a href="/ofert" data-scroll="ofert"><?php echo $menuOfert ?></a></li>
						<li> <a href="/portfolio" data-scroll="portfolio"><?php echo $menuPortfolio ?></a></li>
						<li> <a href="/contact" data-scroll="contact"><?php echo $menuContact ?></a> </li>
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
