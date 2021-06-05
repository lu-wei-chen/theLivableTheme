<?php
/**
 * Theme Functions.
 * 
 * @package theLivableTheme
 */

echo '<pre>';
print_r(get_template_directory_uri() );
wp_die();

function livable_enqueue_scripts() {
    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . 'style.css');
}

add_action('wp_enqueue_scripts', 'livable_enqueue_scripts');

?>



