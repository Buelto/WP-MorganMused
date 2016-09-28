<?php 

/*---------------Custom Header Image----------------*/
function MorganMused_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'MorganMused_resources');


$defaults = array(
	'width'                  =>1920,
	'height'                 => 500,
    'default-image' => get_template_directory_uri() . '/Img/Party.jpg',
	'flex-height'            => true,
	'flex-width'             => true,
	'uploads'                => true,
	'random-default'         => false,
	'header-text'            => true,
	'default-text-color'     => '',
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );

/* -------------------Navigation Menus Header---------------------------------- */


    if ( ! function_exists( 'wpt_setup' ) ):
    function wpt_setup() {  
    register_nav_menu( 'primary', __( 'Primary Menu', 'wptuts' ) );
    } endif;

add_action( 'after_setup_theme', 'wpt_setup' );
/* -------------------Navigation Menus Footer---------------------------------- */

    register_nav_menus(array(

    'footer' => __('Footer Menu'),

    ));   

/*---------------------- Register custom navigation walker------------*/
    require_once('wp_bootstrap_navwalker.php');


/*------------------Optional Customize excerpt word count length


function excerptLength(){
    return 40;
}
add_filter('excerpt_length','excerptLength');



/*-------------------Add featured img support--------------------


 if ( has_post_thumbnail() ) {
                            the_post_thumbnail();

                            } else { ?>

                        <img src="<?php bloginfo('template_directory'); ?>/images/default-image.jpg" alt="<?php the_title(); ?>" /><?php }*/
function featuredImg_setup()

{add_theme_support('post-thumbnails');
add_image_size('small-thumbnail', 400,300,true);
 add_image_size('banner-image', 1280,960,true);
}
add_action('after_setup_theme','featuredImg_setup');


?>



