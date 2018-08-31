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

<?php if (pll_current_language() == 'en') {
	$h1Text = "<h1>My name is Luke.</h1><h2>How can I help you?</h2>";
	$buttonCheck = "Check";
	$buttonEval = "evaluate your project";
	$h2Ofert = "Offer";
	$h2Portfolio ="PORTFOLIO";
	$h2Contact ="CONTACT";
	$buttonProject = "See the project";
	$buttonCheckAll = "see all realizations";
	$myOferts1 = "Pages WWW";
	$myOferts2 = "Mobile applications";
	$myOferts3 = "Graphic design";
	$myOferts4 = "Visual identification";
	$headContact = "Send us a message";
	$headContact_1 = "Contact info";
	$headContact_2 = "Check us out here";
	$show_all ="see all realizations";


} else if (pll_current_language() == 'pl') {
	$h1Text = "<h1>Mam na imię Łukasz.</h1><h2>Jak mogę Ci pomóc?</h2>";
	$buttonCheck = "Sprawdź";
	$buttonEval = "skontaktuj się";
	$h2Ofert = "OFERTA";
	$h2Portfolio ="PORTFOLIO";
	$h2Contact ="KONTAKT";
	$buttonProject = "Zobacz projekt";
	$buttonCheckAll = "zobacz wszystkie realizacje";
	$myOferts1 = "Strony WWW";
	$myOferts2 = "Aplikacje mobilne";
	$myOferts3 = "Projektowanie graficzne";
	$myOferts4 = "Identyfikacja wizualna";
	$headContact = "Wyślij nam wiadomość";
	$headContact_1 = "Informacje kontaktowe";
	$headContact_2 = "Sprawdź nas tutaj";
	$show_all ="zobacz wszystkie realizacje";

} ?>

<header class="main_page" id="main_page">
	<img id="paralax" src="<?php bloginfo('template_url'); ?>/img/header_paralax.jpg" alt="paralax" />
	<div class="container">
		<div class="container_flex">
			<div class="text_container">
				<?php echo $h1Text ?>
			</div>
			<div class="my_offert">
				<ul>
					<li>
						<?php echo $myOferts1 ?>
					</li>
					<li>
						<?php echo $myOferts2 ?>
					</li>
					<li>
						<?php echo $myOferts3 ?>
					</li>
					<li>
						<?php echo $myOferts4 ?>
					</li>
				</ul>
			</div>
			<div class="button_section">
				<a class="button" href="/" data-scroll="ofert"> <?php echo $buttonCheck ?> </a>
				<a class="button" href="/" data-scroll="contact"> <?php echo $buttonEval ?> </a>
			</div>
			<div class="scroll_section">
				<div class="scroll_down">
					<img src="<?php bloginfo('template_url'); ?>/img/scroll_down.png" alt="scroll" />
				</div>
			</div>
		</div>
	</div>
</header>

<section class="ofert " id="ofert">
	<div class="container">
		<div class="head_container">
			<h2 class="title first_head"><?php echo $h2Ofert ?></h2>
		</div>
		<div class="oferts_flex">
			<div class="flex_inner">
				<div class="box_oferts">
					<div class="head">
						<img src="<?php bloginfo('template_url'); ?>/img/svg/www.svg" alt="WWW">
						<p><?php the_field('Offer_www_head'); ?></p>
					</div>
					<div class="text"><?php the_field('Offer_www_text'); ?></div>
				</div>
			</div>
			<div class="flex_inner">
				<div class="box_oferts">
					<div class="head">
						<img src="<?php bloginfo('template_url'); ?>/img/svg/phone.svg" alt="Aplikacje mobile">
						<p><?php the_field('Offer_app_head'); ?></p>
					</div>
					<div class="text"><?php the_field('Offer_app_text'); ?></div>
				</div>
			</div>
			<div class="flex_inner">
				<div class="box_oferts">
					<div class="head">
						<img src="<?php bloginfo('template_url'); ?>/img/svg/ident.svg" alt="Identyfikacja wizualna">
						<p><?php the_field('Offer_ident_head'); ?></p>
					</div>
					<div class="text"><?php the_field('Offer_ident_text'); ?></div>
				</div>
			</div>
			<div class="flex_inner">
				<div class="box_oferts">
					<div class="head">
						<img src="<?php bloginfo('template_url'); ?>/img/svg/leaflets.svg" alt="Ulotki">
						<p><?php the_field('Offer_business_card_head'); ?></p>
					</div>
					<div class="text"><?php the_field('Offer_business_card_text'); ?></div>
				</div>
			</div>

		</div>
	</div>
</section>
<section class="portfolio " id="portfolio">
	<div class="container">
		<div class="head_container">
			<h2 class="title second"><?php echo $h2Portfolio ?></h2>
		</div>
	</div>
	<div class="portfolio_inner">
		<?php $custom_query = new WP_Query('cat=-9'); // exclude category 9
		while($custom_query->have_posts()) : $custom_query->the_post(); ?>
			<div class="item_flex">
					<div class="img_container">
						<?php if ( has_post_thumbnail() ) {
							$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false );
							?>
							<img src="<?php echo $src[0]; ?>"/>
							<?php
						} ?>
					</div>
					<div class="text_container">
						<p class="category"> <?php the_category( ', ' ); ?></p>
						<p class="name"><?php the_title(); ?></p>
						<div class="des"> <div class="container">
							<?php $summary = get_field('project_description'); echo mb_strimwidth($summary, 0, 200, "...") ?>
						</div> </div>
						<a href="<?php the_permalink(); ?>" class="show_more" > <?php echo $buttonProject ?></a>
					</div>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</div>

	<div class="show_all">
		<a href="#"><?php echo $show_all ?> </a>
	</div>
</section>

<section class="contact ">
	<div class="container">
		<div class="head_container">
			<h2 class="title third"><?php echo $h2Contact ?></h2>
		</div>
		<div class="content">
			<?php the_field('contact_text'); ?>
		</div>
		<div class="contact_flex">
			<div class="form">
				<h3><?php echo $headContact ?> </h3>
				<?php if (pll_current_language() == 'en') {
					echo do_shortcode( '[contact-form-7 id="278" title="Formularz 1_eng"]' );
				} else if (pll_current_language() == 'pl') {
					echo do_shortcode( '[contact-form-7 id="96" title="Formularz 1"]' );
				} ?>
			</div>
			<div class="contact_details">
				<div class="contact_box">
					<h3> <?php echo $headContact_1 ?> </h3>
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





<?php get_footer();
