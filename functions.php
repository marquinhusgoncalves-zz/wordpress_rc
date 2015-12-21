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
      $first_img = "http://rcconsulting.eng.br/wp-content/themes/rc_theme/img/logo.png";
    }
    return $first_img;
  }

//Pagination
function pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>Página " . $paged . " de " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}

// Logo Admin
  function my_login_logo() { ?>
  <style type="text/css">
    .login h1 a {
        background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
        background-size: 260px auto;
        width: 320px;
    }
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Link Logo
function meu_wp_login_url() {
    return get_bloginfo('url');
}
add_filter('login_headerurl', 'meu_wp_login_url');

// Logo Title
function meu_wp_login_title() {
    return get_bloginfo('name');
}
add_filter('login_headertitle', 'meu_wp_login_title');

// Texto admin rodape
function remove_footer_admin () {
    echo "Feito com o <3 por Mundo S.A";
}
add_filter('admin_footer_text', 'remove_footer_admin');
?>