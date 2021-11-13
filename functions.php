<?php

function add_css_js() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('bootstrap', get_template_directory_uri(). '/css/bootstrap.min.css');
  wp_enqueue_script('bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', array ('jquery'), '5.1.3', true);
}
add_action('wp_enqueue_scripts', 'add_css_js');