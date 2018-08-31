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
<?php if (pll_current_language() == 'en') {
	$Client = "Customer:";
	$h4Contact ="Contact us";
	$headContact = "Send us a message";
	$headContact_1 = "Contact info";
	$headContact_2 = "Check us out here";
	$year = "Year of implementation:";
	$scope = "Scope of implementation:";
	$des = "Project description";



} else if (pll_current_language() == 'pl') {
	$Client = "Klient:";
	$h4Contact ="Skontaktuj się z nami";
	$headContact = "Wyślij nam wiadomość";
	$headContact_1 = "Informacje kontaktowe";
	$headContact_2 = "Sprawdź nas tutaj";
	$year = "Rok realizacji:";
	$scope = "Zakres realizacji:";
	$des = "Opis projektu";

} ?>

<header class="post" style="background:url(<?php the_field('background_img'); ?>);">
	<div class="container">
		<div class="project_flex">
			<div class="left_inner">
				<p class="title"><?php echo $Client ?></p>
				<div class="text">
					<?php the_field('client'); ?>
				</div>
				<p class="title"><?php echo $year ?></p>
				<div class="text">
					<?php the_field('client_year'); ?>
				</div>
				<p class="title"> <?php echo $scope ?></p>
				<div class="text">
					<?php the_field('client_scope'); ?>
				</div>
			</div>
			<div class="right_inner">
				<p class="title"><?php echo $des ?></p>
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
			<h4 class="title active third"> <?php echo $h4Contact ?></h4>
		</div>
		<div class="contact_flex post_view">
			<div class="form">
				<h3><?php echo $headContact ?></h3>
				<?php if (pll_current_language() == 'en') {
					echo do_shortcode( '[contact-form-7 id="278" title="Formularz 1_eng"]' );
				} else if (pll_current_language() == 'pl') {
					echo do_shortcode( '[contact-form-7 id="96" title="Formularz 1"]' );
				} ?>
			</div>
			<div class="contact_details">
				<div class="contact_box">
					<h3> <?php echo $headContact_1 ?></h3>
					<a href="tel:783247081"> <img src="<?php bloginfo('template_url'); ?>/img/svg/phone_contact.svg" alt="Telefon"> 783 247 081</a>
					<a href="mailto:lukasz.wrobel@itpersonal.pl"> <img src="<?php bloginfo('template_url'); ?>/img/svg/email.svg" alt="email"> lukasz.wrobel@itpersonal.pl</a>
				</div>
				<div class="contact_box">
					<h3> <?php echo $headContact_1 ?> </h3>
					<a href="https://www.facebook.com/lukaszwrobel.me" target="_blank"> <img src="<?php bloginfo('template_url'); ?>/img/svg/fb.svg" alt="Facebook">Facebook</a>
					<a href="https://www.behance.net/lwrobel" target="_blank"> <img src="<?php bloginfo('template_url'); ?>/img/svg/behance.svg" alt="Behance">Behance</a>
				</div>
			</div>
		</div>
	</div>
</section>
