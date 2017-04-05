<?php
get_header(); ?>

	<h3 class="blog-title heading-block"><?php echo get_theme_mod('heading_blog_settings'); ?></h3>

	<?php query_posts('cat=5'); ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content-home', 'home' ); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>

	<?php endwhile; // end of the loop. ?>
<?php

$args = array(
    'show_all'     => false,
    'end_size'     => 1,
    'mid_size'     => 1,
    'prev_next'    => false,
    'add_args'     => false,
    'add_fragment' => '',
    'screen_reader_text' => false,
); ?>
<nav class="pagination-links text-right">
	<?php echo paginate_links($args); ?>
</nav>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
