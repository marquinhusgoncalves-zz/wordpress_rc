<?php 
//Barra superior ADM
    add_filter('show_admin_bar', '__return_false');

//Adiciona menu no adm
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

//Navigation Menus
register_nav_menus(array(
    'primary' => __( 'Primary Menu' ),
    'mobile' => __( 'Mobile Menu' ),
    'footer' => __( 'Footer Menu' ),
));

//Change excerpt text
function custom_excerpt_length( $length ) {
    return 30;
    }
    add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
    return '...</p><a class="btn btn-default btn-leia" href="'. get_permalink( get_the_ID() ) . '">' . __('LEIA', ' ') . '</a>';
    }
    add_filter( 'excerpt_more', 'new_excerpt_more' );

//Adiciona menu no adm
add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;

//Catch the second image
  function catch_that_image() {
    global $post, $posts;
    $first_img = '';
    ob_start();
    ob_end_clean();
    $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
    $first_img = $matches[1][0];
  
    if(empty($first_img)) {
      $first_img = "/img/default.jpg";
    }
    return $first_img;
  }
?>