<?php
/**
 * Template part for displaying gallery posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>
<header class="post" style="background:url(<?php the_field('background_img'); ?>);">
	<div class="container">
		<div class="project_flex">
			<div class="left_inner">
				<p class="title">Klient:</p>
				<div class="text">
					<?php the_field('client'); ?>
				</div>
				<p class="title">Rok realizacji:</p>
				<div class="text">
					<?php the_field('client_year'); ?>
				</div>
				<p class="title">Zakres realizacji</p>
				<div class="text">
					<?php the_field('client_scope'); ?>
				</div>
			</div>
			<div class="right_inner">
				<p class="title">Opis projektu</p>
				<?php the_field('project_description'); ?>
			</div>
		</div>
	</div>
</header>




<?php
	for ($i = 1; $i <= 15; $i++) {

		?>
		<?php
		$image = get_field('grafika_'.$i);

		if( !empty($image) ): ?>
		<section class="photo">
			<div class="container_photo">
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
		</section>
		<?php endif; ?>
		<?php
	}
?>


<section class="contact">
	<div class="container">
		<div class="head_container">
			<h4 class="title active third">Skontaktuj się z nami</h4>
		</div>
		<div class="contact_flex post_view">
			<div class="form">
				<h3>Wyślij nam wiadomość</h3>
				<?php echo do_shortcode( '[contact-form-7 id="96" title="Formularz 1"]' ); ?>
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
