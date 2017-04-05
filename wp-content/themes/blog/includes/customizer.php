<?php
/**
 * _tk Theme Customizer
 *
 * @package _tk
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function _tk_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
}
add_action( 'customize_register', '_tk_customize_register' );


/*Header info*/
function header_title_customize_register ($wp_customize) {
    $wp_customize->add_section( 'header_title' , array(
        'title'      => __( 'Header title', '_tk' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'header_heading' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_heading_control', array(
        'label'      => __( 'Add your site heading', '_tk' ),
        'section'    => 'header_title',
        'settings'   => 'header_heading',
    ) ) );

}

add_action( 'customize_register', 'header_title_customize_register' );

/* Blog */
function blog_customize_register ($wp_customize) {
    $wp_customize->add_section( 'blog_info' , array(
        'title'      => __( 'Blog info', '_tk' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'heading_blog_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'heading_blog_control', array(
        'label'      => __( 'Add your blog heading', '_tk' ),
        'section'    => 'blog_info',
        'settings'   => 'heading_blog_settings',
    ) ) );

    $wp_customize->add_setting( 'text_btn_blog_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'text_btn_blog_control', array(
        'label'      => __( 'Add your blog heading', '_tk' ),
        'section'    => 'blog_info',
        'settings'   => 'text_btn_blog_settings',
    ) ) );

}

add_action( 'customize_register', 'blog_customize_register' );


/* Contact page */
function contact_customize_register ($wp_customize) {
    $wp_customize->add_section( 'contact_info' , array(
        'title'      => __( 'Contact info', '_tk' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'heading_contact_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'heading_contact_control', array(
        'label'      => __( 'Add your contact heading', '_tk' ),
        'section'    => 'contact_info',
        'settings'   => 'heading_contact_settings',
    ) ) );


    $wp_customize->add_setting( 'sub_heading_contact_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'sub_heading_contact_control', array(
        'label'      => __( 'Add your contact sub-heading', '_tk' ),
        'section'    => 'contact_info',
        'settings'   => 'sub_heading_contact_settings',
    ) ) );

    $wp_customize->add_setting( 'info_contact_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'info_heading_contact_control', array(
        'label'      => __( 'Add your contact info', '_tk' ),
        'section'    => 'contact_info',
        'settings'   => 'info_contact_settings',
    ) ) );

    $wp_customize->add_setting( 'contact_img_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new  WP_Customize_Image_Control( $wp_customize, 'contact_img_control', array(
        'label'      => __( 'Add your contact image', '_tk' ),
        'section'    => 'contact_info',
        'settings'   => 'contact_img_settings',
    ) ) );

}
add_action( 'customize_register', 'contact_customize_register' );


/* Category 2 - gallery */
function category2_customize_register ($wp_customize) {
    $wp_customize->add_section( 'category2' , array(
        'title'      => __( 'Category2 info', '_tk' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'heading_category2' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'heading_category_gallery_control', array(
        'label'      => __( 'Add your category - gallery heading', '_tk' ),
        'section'    => 'category2',
        'settings'   => 'heading_category2',
    ) ) );

}
add_action( 'customize_register', 'category2_customize_register' );


/* Footer social */
function footer_social_customize_register ($wp_customize) {
    $wp_customize->add_section( 'footer_social' , array(
        'title'      => __( 'Footer social icons', '_tk' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'footer_facebook_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_facebook_control', array(
        'label'      => __( 'Add your facebook link', '_tk' ),
        'section'    => 'footer_social',
        'settings'   => 'footer_facebook_settings',
    ) ) );

    $wp_customize->add_setting( 'facebook_checkbox_settings' , array(
        'default'   => true,
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook_checkbox_control', array(
        'label'      => __( 'Show facebook link', '_tk' ),
        'section'    => 'footer_social',
        'settings'   => 'facebook_checkbox_settings',
				'type'			 => 'checkbox'
    ) ) );



    $wp_customize->add_setting( 'footer_twitter_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_twitter_control', array(
        'label'      => __( 'Add your twitter link', '_tk' ),
        'section'    => 'footer_social',
        'settings'   => 'footer_twitter_settings',
    ) ) );

    $wp_customize->add_setting( 'twitter_checkbox_settings' , array(
        'default'   => true,
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter_checkbox_control', array(
        'label'      => __( 'Show twitter link', '_tk' ),
        'section'    => 'footer_social',
        'settings'   => 'twitter_checkbox_settings',
        'type'			 => 'checkbox'
    ) ) );



    $wp_customize->add_setting( 'footer_linkedin_settings' , array(
        'default'   => '',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'footer_linkedin_control', array(
        'label'      => __( 'Add your linkedin link', '_tk' ),
        'section'    => 'footer_social',
        'settings'   => 'footer_linkedin_settings',
    ) ) );

    $wp_customize->add_setting( 'linkedin_checkbox_settings' , array(
        'default'   => true,
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'linkedin_checkbox_control', array(
        'label'      => __( 'Show linkedin link', '_tk' ),
        'section'    => 'footer_social',
        'settings'   => 'linkedin_checkbox_settings',
        'type'			 => 'checkbox'
    ) ) );

}

add_action( 'customize_register', 'footer_social_customize_register' );



/* Background color site*/
function background_site_customize_register ($wp_customize) {
    $wp_customize->add_section( 'color_site' , array(
        'title'      => __( 'Color site', '_tk' ),
        'priority'   => 30,
    ) );


    $wp_customize->add_setting( 'color_site_settings' , array(
        'default'   => '#ffd500',
        'transport' => 'refresh',
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_site_control', array(
        'label'      => __( 'Change color site', '_tk' ),
        'section'    => 'color_site',
        'settings'   => 'color_site_settings',
    ) ) );

}

add_action( 'customize_register', 'background_site_customize_register' );


/*Output Customize CSS*/
function blog_customize_css() { ?>
    <style type="text/css">
        .widget_recent_entries .nav>li>a:focus,
        .widget_recent_entries .nav>li>a:hover, .btn-read-more, .navbar-default, .contact-sidebar-phone, .contact-sidebar-email, .btn-contact-send {
            background-color: <?php echo get_theme_mod( 'color_site_settings' ); ?>;
        }
        .navbar-default .navbar-nav>.active>a:before {
            background-color: <?php echo get_theme_mod( 'color_site_settings' ); ?>;
        }
        .navbar-default .navbar-nav>.active>a:hover:before {
            background-color: <?php echo get_theme_mod( 'color_site_settings' ); ?>;
        }
        .navbar-default .navbar-nav>li a:hover:before {
            background-color: <?php echo get_theme_mod( 'color_site_settings' ); ?>;
        }
        .site-title-heading {
            color: <?php echo get_theme_mod( 'color_site_settings' ); ?>;
        }
    </style>
<?php }
add_action( 'wp_head', 'blog_customize_css' );
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function _tk_customize_preview_js() {
	wp_enqueue_script( '_tk_customizer', get_template_directory_uri() . '/includes/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', '_tk_customize_preview_js' );
