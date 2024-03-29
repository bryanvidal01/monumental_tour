<?php
define('THEME_DIR', get_template_directory() . '/');
define('THEME_URL', get_template_directory_uri() . '/');
define('HOME_URL', get_home_url());

define('AJAX_URL', THEME_URL . 'ajax-min.php');

define('GALERIE', get_field('page_galerie', 'option'));
define('PRESENTATION', get_field('page_presentation', 'option'));
define('PARTNERS', get_field('page_partners', 'option'));
define('CONTACT', get_field('page_contact', 'option'));


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




// Image Sizes
add_image_size( 'galerieSize', 400, 400, true );
add_image_size( 'presentationPortraitSize', 1000, 1200, true );
add_image_size( 'presentationPaysageSize', 1920, 1080, true );


// Get Image
function lsd_get_thumb($id, $size){
    if(empty($size)){
        $size = 'medium';
    }

    if($id){
        $img = wp_get_attachment_image_src($id, $size);
        $extension = substr($img[0],strrpos($img[0],'.')+1);

        if($extension == 'gif' || $extension == 'GIF'):
            $img = wp_get_attachment_image_src($id, 'full');
        endif;

        $imgUrl = reset($img);

        return $imgUrl;
    }
}


