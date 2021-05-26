<?php

// load stylesheets

function load_stylesheets() {

//    wp_register_style('apple', get_template_directory_uri() . '/assets/img/favicons/apple-touch-icon.png', array(), 1, 'all');
//    wp_enqueue_style('apple');


//    wp_register_style('fav', get_template_directory_uri() . '/assets/img/favicons/favicon-32x32.png', array(), 1, 'all');
//    wp_enqueue_style('fav');

    
//    wp_register_style('favicon', get_template_directory_uri() . '/assets/img/favicons/favicon-16x16.png', array(), 1, 'all');
//   wp_enqueue_style('favicon');

//    wp_register_style('json', get_template_directory_uri() . '/assets/img/favicons/manifest.json', array(), 1, 'all');
//    wp_enqueue_style('json');

//    wp_register_style('svg', get_template_directory_uri() . '/assets/img/favicons/safari-pinned-tab.svg', array(), 1, 'all');
//    wp_enqueue_style('svg');

    wp_register_style('bootstrap', get_template_directory_uri() . '/dependencies/bootstrap/css/bootstrap.min.css', array(), 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('bootsnav', get_template_directory_uri() . '/dependencies/bootsnav/css/bootsnav.css', array(), 1, 'all');
    wp_enqueue_style('bootsnav');

    wp_register_style('awesome', get_template_directory_uri() . '/dependencies/font-awesome/css/font-awesome.min.css', array(), 1, 'all');
    wp_enqueue_style('awesome');

    wp_register_style('jPushMenu', get_template_directory_uri() . '/dependencies/jPushMenu/css/jPushMenu.css', array(), 1, 'all');
    wp_enqueue_style('jPushMenu');

    wp_register_style('lightgallery', get_template_directory_uri() . '/dependencies/lightgallery/css/lightgallery.min.css', array(), 1, 'all');
    wp_enqueue_style('lightgallery');

    wp_register_style('owl', get_template_directory_uri() . '/dependencies/owl.carousel/css/owl.carousel.min.css', array(), 1, 'all');
    wp_enqueue_style('owl');

    wp_register_style('owl.carousel', get_template_directory_uri() . '/dependencies/owl.carousel/css/owl.theme.default.min.css', array(), 1, 'all');
    wp_enqueue_style('owl.carousel');

    wp_register_style('app', get_template_directory_uri() . '/assets/css/app.css', array(), 1, 'all');
    wp_enqueue_style('app');



}

    add_action('wp_enqueue_scripts', 'load_stylesheets');


     




// load scripts

function addjs() {

    wp_deregister_script('jquery');

    wp_register_script('jquery', get_template_directory_uri() . '/dependencies/jquery/jquery.min.js', array() , 1, 1, 1);
    wp_enqueue_script('jquery');

    wp_register_script('moderniz', get_template_directory_uri() . '/assets/js/moderniz.min.js', array() , 1, 1, 1);
    wp_enqueue_script('moderniz');

    wp_register_script('boot', get_template_directory_uri() . '/dependencies/bootstrap/js/bootstrap.min.js', array() , 1, 1, 1);
    wp_enqueue_script('boot');

    wp_register_script('bootsnav', get_template_directory_uri() . '/dependencies/bootsnav/bootsnav.js', array() , 1, 1, 1);
    wp_enqueue_script('bootsnav');

    wp_register_script('appear.bas2k', get_template_directory_uri() . '/dependencies/jquery.appear.bas2k/jquery.appear.js', array() , 1, 1, 1);
    wp_enqueue_script('appear.bas2k');

    wp_register_script('scrollreveal', get_template_directory_uri() . '/dependencies/scrollreveal/scrollreveal.min.js', array() , 1, 1, 1);
    wp_enqueue_script('scrollreveal');

    wp_register_script('isotope', get_template_directory_uri() . '/dependencies/isotope/isotope.pkgd.min.js', array() , 1, 1, 1);
    wp_enqueue_script('isotope');

    wp_register_script('lightgallery2', get_template_directory_uri() . '/dependencies/lightgallery/js/lightgallery-all.min.js', array() , 1, 1, 1);
    wp_enqueue_script('lightgallery2');

    wp_register_script('countUp', get_template_directory_uri() . '/dependencies/countUp.js/countUp.min.js', array() , 1, 1, 1);
    wp_enqueue_script('countUp');

    wp_register_script('owl.carousel2', get_template_directory_uri() . '/dependencies/owl.carousel/owl.carousel.min.js', array() , 1, 1, 1);
    wp_enqueue_script('owl.carousel2');

    wp_register_script('twitter', get_template_directory_uri() . '/dependencies/twitter-fetcher/twitterFetcher_min.js', array() , 1, 1, 1);
    wp_enqueue_script('twitter');

    wp_register_script('gmap3', get_template_directory_uri() . '/dependencies/gmap3/gmap3.min.js', array() , 1, 1, 1);
    wp_enqueue_script('gmap3');

//    wp_register_script('googleapis', get_template_directory_uri() . '/https://maps.googleapis.com/maps/api/js?key=AIzaSyAssaWBjq7xp_L88KSNA6X7wVA-HxF9rtM', array() , 1, 1, 1);
//    wp_enqueue_script('googleapis');

    wp_register_script('smooth-scroll', get_template_directory_uri() . '/assets/js/smooth-scroll.js', array() , 1, 1, 1);
    wp_enqueue_script('smooth-scroll');

    wp_register_script('app.js', get_template_directory_uri() . '/assets/js/app.js', array() , 1, 1, 1);
    wp_enqueue_script('app.js');

    wp_register_script('jpush', get_template_directory_uri() . '/dependencies/jPushMenu/jPushMenu.js', array() , 1, 1, 1);
    wp_enqueue_script('jpush');



}

    add_action('wp_enqueue_scripts', 'addjs');



// support menus & featured images
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('html5',array('search-form'));
add_theme_support('post-formats',array('aside','image','video'));
/* Activate HTML5 features */
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );


// control exerpt length

function mytheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );


// Moving the comment form textarea to the bottom

function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
    }
     
    add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );


// remove the checkbox from the comment form. You can remove it by only single css line

/* function tu_comment_form_hide_cookies_consent( $fields ) {
	unset( $fields['cookies'] );
	return $fields;
}
add_filter( 'comment_form_default_fields', 'tu_comment_form_hide_cookies_consent' ); */

// ONLY MODIFY THE TEXT WITHOUT REMOVING IT

/*function comment_form_change_cookies_consent( $fields ) {
	$commenter = wp_get_current_commenter();
	$consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
	$fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
					 '<label for="wp-comment-cookies-consent">Your modified text here</label></p>';
	return $fields;
}
add_filter( 'comment_form_default_fields', 'comment_form_change_cookies_consent' ); */

// You can remove it by only single css line here is:
/* p.comment-form-cookies-consent { display: none; } */


//change text to leave a reply on comment form
function isa_comment_reform ($arg) {
    $arg['title_reply'] = __('Leave Comment');
    return $arg;
    }
    add_filter('comment_form_defaults','isa_comment_reform');

// HIGHLIGHT THE SEARCH PAGE KEYWORDS

function highlight_results($text){
    if(is_search()){
		$keys = implode('|', explode(' ', get_search_query()));
		$text = preg_replace('/(' . $keys .')/iu', '<span class="search-highlight">\0</span>', $text);
    }
    return $text;
}
add_filter('the_content', 'highlight_results');
add_filter('the_excerpt', 'highlight_results');
add_filter('the_title', 'highlight_results');
 
function highlight_results_css() {
	?>
	<style>
	.search-highlight { background-color:#FF0; font-weight:bold; }
	</style>
	<?php
}
add_action('wp_head','highlight_results_css');






?>