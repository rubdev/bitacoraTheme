<?php
	/**
	 * registramos js
	 */
	if ( ! function_exists('cdw_scripts')) {
		function cdw_scripts () {
			wp_register_script('bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js', ['jquery']);
			wp_enqueue_script('bootstrap-js');

			wp_register_script('cdw-functions', get_template_directory_uri() . '/js/functions.js', ['jquery', 'bootstrap-js']);
			wp_enqueue_script('cdw-functions');
		}
		add_action('wp_enqueue_scripts', 'cdw_scripts');
	}

	/**
	 * registramos css
	 */
	if ( ! function_exists('cdw_styles')) {
		function cdw_styles () {
			wp_register_style('bootstrap-css', '//bootswatch.com/4/flatly/bootstrap.min.css');
			wp_enqueue_style('bootstrap-css');

			wp_register_style('cdw-styles', get_template_directory_uri() . '/css/styles.css');
			wp_enqueue_style('cdw-styles');
		}
		add_action('wp_enqueue_scripts', 'cdw_styles');
	}
?>