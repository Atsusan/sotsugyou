<?php

// CSS, Javasucript, googlefontsなどの読み込み

function my_script_init() {
    // Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,700&family=Noto+Sans+JP:wght@400;500;700&display=swap');
    // Swiper
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
    wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
    // main css
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/style.css', array(), filemtime(get_theme_file_path('css/style.css')), 'all');
    // main javascript
    wp_enqueue_script('main-javascript', get_template_directory_uri() . '/js/script.js', array('jquery'), filemtime(get_theme_file_path('js/script.js')), true);
}
add_action('wp_enqueue_scripts', 'my_script_init');