<?php 

function amazing_college_scripts(){
    wp_enqueue_script(
        'main_university_javascript', 
        get_theme_file_uri('/js/scripts-bundled.js'), 
        NULL, // Aca incluiriamos alguna dependencia de este script si la tuviese
        '1.0', // Version del script
        true // Carga el script despues del body tag, false lo carga en el head
    );
    wp_enqueue_style('ac_main_styles', get_stylesheet_uri());
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
}
add_action('wp_enqueue_scripts','amazing_college_scripts');