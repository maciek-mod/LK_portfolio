<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<header class="main_page">
	<div class="container">
		<div class="text_container">
			<h1>Mam na imię Łukasz.</h1>
			<h2>Jak mogę Ci pomóc?</h2>
		</div>
		<div class="button_section">
			<a class="button" href="#">Sprawdź</a>
			<a class="button" href="#">wyceń swój projekt</a>
		</div>
		<div class="scroll_section">
			<div class="scroll_down">
				<img src="<?php bloginfo('template_url'); ?>/img/scroll_down.png" alt="scroll" />
			</div>
		</div>
	</div>
</header>

<section class="ofert">
	<div class="container">
		<div class="head_container">
			<h2 class="title">Oferta</h2>
		</div>
		<div class="oferts_flex">
			<div class="flex_inner">
				<div class="box_oferts">
					<div class="head">
						<img src="<?php bloginfo('template_url'); ?>/img/svg/www.svg" alt="WWW">
						<p>strony www<br/><span>i aplikacje webowe</span></p>
					</div>
					<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel ullamcorper dolor. Etiam rutrum sapien et dui dapibus tempus. Ut tempor purus ut tellus venenatis, et euismod eros imperdiet. Nullam nulla.</p>
				</div>
			</div>
			<div class="flex_inner">
				<div class="box_oferts">
					<div class="head">
						<img src="<?php bloginfo('template_url'); ?>/img/svg/phone.svg" alt="Aplikacje mobile">
						<p>aplikacje<br/><span>na telefon</span></p>
					</div>
					<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel ullamcorper dolor. Etiam rutrum sapien et dui dapibus tempus. Ut tempor purus ut tellus venenatis, et euismod eros imperdiet. Nullam nulla.</p>
				</div>
			</div>
			<div class="flex_inner">
				<div class="box_oferts">
					<div class="head">
						<img src="<?php bloginfo('template_url'); ?>/img/svg/ident.svg" alt="Identyfikacja wizualna">
						<p>identyfikacja<br/><span>wizualna</span> </p>
					</div>
					<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel ullamcorper dolor. Etiam rutrum sapien et dui dapibus tempus. Ut tempor purus ut tellus venenatis, et euismod eros imperdiet. Nullam nulla.</p>
				</div>
			</div>
			<div class="flex_inner">
				<div class="box_oferts">
					<div class="head">
						<img src="<?php bloginfo('template_url'); ?>/img/svg/leaflets.svg" alt="Ulotki">
						<p>ulotki<br/><span>i wizytówki</span></p>
					</div>
					<p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel ullamcorper dolor. Etiam rutrum sapien et dui dapibus tempus. Ut tempor purus ut tellus venenatis, et euismod eros imperdiet. Nullam nulla.</p>
				</div>
			</div>

		</div>
	</div>
</section>
<section class="portfolio">
	<div class="container">
		<div class="head_container">
			<h2 class="title second">PORTFOLIO</h2>
		</div>
	</div>
	<div class="portfolio_inner">
		<div class="item_flex">
			<div class="img_container">
				<img src="<?php bloginfo('template_url'); ?>/img/portfolio_1.jpg" alt="foto">
			</div>
			<div class="text_container">
				<p class="category">application</p>
				<p class="name">Simple Wallet</p>
				<a class="show_more" href="#">Zobacz projekt</a>
			</div>
		</div>
		<div class="item_flex">
			<div class="img_container">
				<img src="<?php bloginfo('template_url'); ?>/img/portfolio_1.jpg" alt="foto">
			</div>
			<div class="text_container">
				<p class="category">application</p>
				<p class="name">Simple<br/>Wallet</p>
				<a class="show_more" href="#">Zobacz projekt</a>
			</div>
		</div>
		<div class="item_flex">
			<div class="img_container">
				<img src="<?php bloginfo('template_url'); ?>/img/portfolio_1.jpg" alt="foto">
			</div>
			<div class="text_container">
				<p class="category">application</p>
				<p class="name">Simple<br/>Wallet</p>
				<a class="show_more" href="#">Zobacz projekt</a>
			</div>
		</div>
		<div class="item_flex">
			<div class="img_container">
				<img src="<?php bloginfo('template_url'); ?>/img/portfolio_1.jpg" alt="foto">
			</div>
			<div class="text_container">
				<p class="category">application</p>
				<p class="name">Simple<br/>Wallet</p>
				<a class="show_more" href="#">Zobacz projekt</a>
			</div>
		</div>
	</div>
	<div class="show_all">
		<a href="#">zobacz wszystkie realizacje</a>
	</div>
</section>

<section class="contact">
	<div class="container">
		<div class="head_container">
			<h2 class="title third">Kontakt</h2>
		</div>
		<div class="content">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vel ullamcorper dolor. Etiam rutrum sapien et dui dapibus tempus. Ut tempor purus ut tellus venenatis,</p>
		</div>
		<div class="contact_flex">
			<div class="form">
				<h3>Wyślij nam wiadomość</h3>
				<form class="" action="index.html" method="post">
					<div class="name">
						<label for="">Imię</label> <br/>
						<input type="text" name="" id="name" value="" placeholder="...">
					</div>
					<div class="email">
						<label for="">E-mail adress</label> <br/>
						<input type="email" name="" id="name" value="" placeholder="...">
					</div>
					<div class="textarea">
						<label for="">Wiadomość</label> <br/>
						<textarea  rows="8" cols="80" placeholder="Wpisz Wiadomość"></textarea>
					</div>
					<input type="submit" class="submit" name="" value="">

				</form>
			</div>
			<div class="contact_details">
				<div class="contact_box">
					<h3>Informacje kontaktowe</h3>
					<a href="tel:783247081"> <img src="<?php bloginfo('template_url'); ?>/img/svg/phone_contact.svg" alt="Telefon"> 783 247 081</a>
					<a href="mailto:lukasz.wrobel@itpersonal.pl"> <img src="<?php bloginfo('template_url'); ?>/img/svg/email.svg" alt="email"> lukasz.wrobel@itpersonal.pl</a>
				</div>
				<div class="contact_box">
					<h3>Sprawdź nas tutaj</h3>
					<a href=""> <img src="<?php bloginfo('template_url'); ?>/img/svg/fb.svg" alt="Telefon">Facebook</a>
					<a href=""> <img src="<?php bloginfo('template_url'); ?>/img/svg/behance.svg" alt="Telefon">Behance</a>
				</div>
			</div>
		</div>
	</div>
</section>


<?php get_footer();
