<?php
/*
Plugin Name:  Redirect Login Page
Description:  Implements a shortcode 'redirect_landing_page' to redirect a page to 'url_not_logged' or 'url_logged'
Plugin URI:   https://github.com/tschweizer79/redirect-landing-page
Author:       Tomas Schweizer (tschweizer@gmail.com)
Version:      1.0
Text Domain:  redirect-landing-page
Domain Path:  /languages
License:      GPL v3 or later
License URI:  https://www.gnu.org/licenses/gpl-3.0.txt
*/

function redirect_landing_page($atts) {
    $default = array(
        'url_not_logged' => '#',
        'url_logged' => '#'
    );
    $parameters = shortcode_atts($default, $atts);
    $url1 = $parameters['url_not_logged'];
    $url2 = $parameters['url_logged'];
    if(!is_user_logged_in()){
        wp_redirect($url1);
    }
    else {
        wp_redirect($url2);
    }
}

add_shortcode('redirect_landing_page', 'redirect_landing_page');