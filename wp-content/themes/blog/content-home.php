<?php
/**
 * @package _tk
 */
?>


<?php // Styling Tip!

// Want to wrap for example the post content in blog listings with a thin outline in Bootstrap style?
// Just add the class "panel" to the article tag here that starts below.
// Simply replace post_class() with post_class('panel') and check your site!
// Remember to do this for all content templates you want to have this,
// for example content-single.php for the post single view. ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="row">
			<div class="col-xs-2 pr-0">
				<div class="blog-post-date">
					<h3 class="d-flex flex-column align-items-center m-0">
						<span class="blog-post-date-num"><?php the_time('j'); ?></span>
						<span class="blog-post-date-month text-uppercase"><?php the_time('F'); ?></span>
					</h3>
				</div>
			</div>
			<div class="col-xs-10 pl-0">
				<header>
					<h1 class="blog-post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
					<ul class="info-blog-list pl-0 d-flex justify-content-start">
						<li class="info-blog-item-comments"><?php comments_number(); ?></li>
						<li class="info-blog-item-categories"><?php the_category(); ?></li>
					</ul>
				</header><!-- .entry-header -->

          <?php if ( is_search() || is_archive() ) : // Only display Excerpts for Search and Archive Pages ?>
						<div class="blog-post-content">
                <?php the_excerpt(); ?>
						</div><!-- .entry-summary -->
          <?php else : ?>
						<div class="blog-post-content">
                <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', '_tk' ) ); ?>
                <?php _tk_link_pages(); ?>
						</div><!-- .entry-content -->
          <?php endif; ?>
				<footer class="entry-meta">
					<a href="<?php echo get_permalink(); ?>" class="btn-read-more text-uppercase"><?php echo get_theme_mod('text_btn_blog_settings'); ?>
					</a>
				</footer><!-- .entry-meta -->
			</div>
		</div>
</article><!-- #post-## -->