<?php

function frontendtask() {
wp_enqueue_style('frontendtask-bootstrap', get_theme_file_uri('/assets/vendor/bootstrap/css/bootstrap.min.css'));
wp_enqueue_style('frontendtask-icofont', get_theme_file_uri('/assets/vendor/icofont/icofont.min.css'));
wp_enqueue_style('frontendtask-ionicons', get_theme_file_uri('/assets/vendor/ionicons/css/ionicons.min.css'));
wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,600,700');

wp_enqueue_style('frontendtask-main-css', get_stylesheet_uri('/style.css'));
}

add_action('wp_enqueue_scripts', 'frontendtask');

?>
