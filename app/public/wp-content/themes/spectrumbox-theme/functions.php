<?php
function spectrumbox_files() {
	wp_enqueue_style('spectrumbox_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'spectrumbox_files');