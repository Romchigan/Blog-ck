<?php

get_header(); ?>
<?php query_posts($query_string . '&posts_per_page=2'); ?>
<div class="category-content">
	<h3 class="category-title text-uppercase heading-block">
		<a href="<?php get_category_link(4); ?>"><?php echo get_cat_name(4); ?> <?php echo get_theme_mod('heading_category_gallery'); ?></a></h3>
	<div class="gallery-list d-flex flex-wrap justify-content-between">
<?php if ( have_posts() ) : ?>

    <?php while ( have_posts() ) : the_post(); ?>

			<a href="<?php the_permalink(); ?>" class="gallery-item">
				<h4 class="gallery-heading text-uppercase m-0">Lorem IpsumDolor Sit Amet</h4>
					<?php the_post_thumbnail(); ?>
				<span class="gallery-content"><?php the_content(); ?></span>
			</a>

			<a href="<?php the_permalink(); ?>" class="gallery-item">
				<h4 class="gallery-heading text-uppercase m-0">Lorem IpsumDolor Sit Amet</h4>
					<?php the_post_thumbnail(); ?>
				<span class="gallery-content"><?php the_content(); ?></span>
			</a>

			<a href="<?php the_permalink(); ?>" class="gallery-item">
				<h4 class="gallery-heading text-uppercase m-0">Lorem IpsumDolor Sit Amet</h4>
					<?php the_post_thumbnail(); ?>
				<span class="gallery-content"><?php the_content(); ?></span>
			</a>



    <?php endwhile; ?>

	<?php else : ?>
    <?php get_template_part( 'no-results', 'index' ); ?>
<?php endif; ?>
	</div>
</div>

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


