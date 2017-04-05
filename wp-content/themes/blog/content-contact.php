<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h3 class="contact-form-title text-uppercase"><?php echo (get_post_meta($post->ID, 'contact_title', true)); ?></h3>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<?php the_content(); ?>
		<?php _tk_link_pages(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
