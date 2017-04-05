<?php
/* Template name: Contact */

get_header(); ?>


		<div class="row">
			<div class="col-md-4 pr-0">
				<h2 class="contact-heading text-uppercase"><?php echo get_theme_mod('heading_contact_settings'); ?></h2>
				<p class="contact-sub-heading"><?php echo get_theme_mod('sub_heading_contact_settings'); ?></p>
				<p class="contact-info"><?php echo get_theme_mod('info_contact_settings'); ?></p>
			</div>
			<div class="col-md-8">
				<img src="<?php echo get_theme_mod('contact_img_settings'); ?>" alt="contact-banner" w>
			</div>
		</div>

<?php while ( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', 'contact' ); ?>

<?php endwhile; // end of the loop. ?>


<?php get_footer('contact'); ?>
