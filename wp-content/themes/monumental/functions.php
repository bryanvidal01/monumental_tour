<?php
define('THEME_DIR', get_template_directory() . '/');
define('THEME_URL', get_template_directory_uri() . '/');
define('HOME_URL', get_home_url());

define('AJAX_URL', THEME_URL . 'ajax-min.php');

define('HOMEPAGE', get_field('homepage_page', 'option'));
define('ARCHIVE_WEB', get_field('site_internet_page', 'option'));
define('ARCHIVE_VIDEO', get_field('videos_page', 'option'));
define('CONTACT', get_field('contact_page', 'option'));
define('CLIENTS', get_field('clients_page', 'option'));


require_once( __DIR__ . '/inc/datatypes.php');
require_once( __DIR__ . '/inc/configuration.php');
require_once( __DIR__ . '/inc/configuration_security.php');


require_once(__DIR__ . '/inc/methods.php');
require_once(__DIR__ . '/inc/ajax-methods.php');


// --------------------------
// Scripts et style
// --------------------------
add_action( 'init', 'scripts_site' );
function scripts_site(){
    if( !is_admin() || !is_user_logged_in() ){


        wp_enqueue_style( 'style_principal', get_template_directory_uri() . '/assets/stylesheets/style.css' );

        $dataToBePassed = array(
            'wp_ajax_url' => AJAX_URL,
            'exampleNonce' => wp_create_nonce('exampleNonce'),
        );
        wp_localize_script('script-js', 'ParamsData', $dataToBePassed );

    }
}

add_action('template_redirect', 'checkUserConnect');
function checkUserConnect() {
  $isConnect = is_user_logged_in();

  if(!is_user_logged_in() && $isConnect == false):
    wp_redirect(wp_login_url());
  endif;
}


// Post Type

function add_posttype() {

    $args = array(
        'public' => true,
        'label'  => 'Réalisations',
        'has_archive'        => false,
        'hierarchical'       => true,
    );

    register_post_type( 'realisations', $args );

    $args = array(
        'public' => true,
        'label'  => 'Vidéos',
        'has_archive'        => false,
        'hierarchical'       => true,
    );

    register_post_type( 'videos', $args );
}
add_action( 'init', 'add_posttype' );


// Image Sizes
add_image_size( 'client-logo', 850, 850, false );
add_image_size( 'background', 2800, 1400, true );
add_image_size( 'push-client', 570, 570, true );
add_image_size( 'push-big-client', 1130, 680, true );
add_image_size( 'head-page', 2800, 680, true );
add_image_size( 'video-push', 1600, 1000, true );


// Get Image
function lsd_get_thumb($id, $size){
    if(empty($size)){
        $size = 'medium';
    }
    if($id){
        $img = wp_get_attachment_image_src($id, $size);
        $imgUrl = reset($img);

        return $imgUrl;
    }
}


