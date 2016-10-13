<?php 

/*---------------Custom Header Image----------------*/
function MorganMused_resources(){
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'MorganMused_resources');


$defaults = array(
	'width'                  =>1920,
	'height'                 => 500,
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


/*------------------Optional Customize excerpt word count length--------*/


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
/*------------------Customize Appearance Options--------*/
function Appearance_customize_register( $wp_customize ) {
    
    $wp_customize->add_setting('MM_link_color', array(
        'default' => '#333333',
        'transport' => 'refresh',
    ));
    
    $wp_customize->add_section('MM_standard_colors', array(
    'title' => __('Standard Colors', 'MorganMused'),
    'priority' => 30,
    ));
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'MM_link_color_control', array(
        'label' =>__('Link Color', 'MorganMused'),
        'section' => 'MM_standard_colors',
        'settings' => 'MM_link_color',
)));
    
    
}

add_action('customize_register', 'Appearance_customize_register');


// Output Customize Css
function  Appearance_customize_css(){?>

<style type="text/css">
    a:link,
    a:visited{
        color:<?php echo get_theme_mod('MM_link_color'); ?>;
    }
</style>
<?php }
add_action('wp_head','Appearance_customize_css' );

/*-------------------Comment Section--------------------*/

if( get_option ('thread_comments')){
    wp_enqueue_script('comment-reply');

    
}
function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-author vcard">
        <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
        <?php printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
    </div>
    <?php if ( $comment->comment_approved == '0' ) : ?>
         <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
          <br />
    <?php endif; ?>

    <div class="comment-meta commentmetadata">
        <?php
        /* translators: 1: date, 2: time */
        printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
        ?>
    </div>

    <?php comment_text(); ?>

    <div class="reply">
        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
    <?php
    }








































































