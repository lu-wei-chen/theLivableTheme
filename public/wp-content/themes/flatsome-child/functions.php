<?php
// Add custom Theme Functions here
// 
//           

function theme_gsap_script() {
    wp_enqueue_script( 'gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js', array(), false, true );
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/js/custom-gsap-scripts.js', array(), false, true );
}
add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );

?>

