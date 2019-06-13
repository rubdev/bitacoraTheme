<?php
	// Incluir Bootstrap CSS
    function rdv_bootstrap_css() {
	    wp_enqueue_style( 'bootstrap_css', 
  					    'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', 
  					    array(), 
  					    '4.1.3'); 
    }
    add_action( 'wp_enqueue_scripts', 'rdv_bootstrap_css' );

    // Incluir Bootstrap JS y dependencia popper
    function rdv_bootstrap_js() {
        wp_enqueue_script( 'popper_js', 
                        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', 
  					    array(), 
  					    '1.14.3', 
  					    true); 
        wp_enqueue_script( 'bootstrap_js', 
                        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', 
                        array('jquery','popper_js'), 
                        '4.1.3', 
                        true); 
    }
    add_action( 'wp_enqueue_scripts', 'rdv_bootstrap_js' );

    // CSS Propio
    function rdv_styles() {
        wp_register_style( 'rdv_custom_style', get_template_directory_uri().'/style.css');
        wp_enqueue_style( 'rdv_custom_style' );
    }
    add_action( 'wp_enqueue_scripts', 'rdv_styles' );
?>