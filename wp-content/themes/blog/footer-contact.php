<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package _tk
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
			<div id="contact-sidebar" class="col-sm-12 col-md-4">
				<div class="contact-sidebar">
					<h3 class="contact-sidebar-heading text-uppercase">
              <?php echo (get_post_meta($post->ID, 'sidebar_title', true)); ?>
					</h3>
					<p class="contact-sidebar-phone">
              <?php echo (get_post_meta($post->ID, 'sidebar_phone', true)); ?>
					</p>
					<p class="contact-sidebar-info">
              <?php echo (get_post_meta($post->ID, 'sidebar_info', true)); ?>
					</p>
					<p class="contact-sidebar-email text-uppercase">
              <?php echo (get_post_meta($post->ID, 'sidebar_email', true)); ?>
					</p>
				</div>
			</div>
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .main-content -->

<footer  class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 d-flex justify-content-between">
				<span class="footer-copyright text-uppercasee d-flex align-items-center text-uppercase">&copy Copyright
					<?php echo date('Y'); ?>
				</span>
				<div class="footer-social-wrap">
					<ul class="footer-social-list">
              <?php if(true === get_theme_mod('facebook_checkbox_settings')): { ?>
								<li>
									<a href="<?php echo get_theme_mod('footer_facebook_settings'); ?>" class="footer-social d-flex align-items-center justify-content-center"><i class="fa fa-facebook" aria-hidden="true"></i></a>
								</li>
              <?php } endif; ?>
              <?php if(true === get_theme_mod('twitter_checkbox_settings')): { ?>
								<li>
									<a href="<?php echo get_theme_mod('footer_twitter_settings'); ?>" class="footer-social d-flex align-items-center justify-content-center"><i class="fa fa-tumblr" aria-hidden="true"></i></a>
								</li>
              <?php } endif; ?>
              <?php if(true === get_theme_mod('linkedin_checkbox_settings')): { ?>
								<li>
									<a href="<?php echo get_theme_mod('footer_linkedin_settings'); ?>" class="footer-social d-flex align-items-center justify-content-center"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
								</li>
              <?php } endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer><!-- close footer -->

<?php wp_footer(); ?>

</body>
</html>
