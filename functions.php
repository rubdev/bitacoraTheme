<?php

    // Navegación
    require_once('includes/bs4navwalker.php');

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

    function rdv_menu() {
        register_nav_menu( 'top', 'Menú principal' );
    }
    add_action( 'init', 'rdv_menu' );

    // registro paginación con bootstrap
    if ( ! function_exists('rdv_bootstrap_pagination')) {
        function rdv_bootstrap_pagination() {
            global $wp_query;
            $pages = paginate_links( [
                    'format'       => '?paged=%#%',
                    'current'      => max( 1, get_query_var( 'paged' ) ),
                    'total'        => $wp_query->max_num_pages,
                    'type'         => 'array',
                    'show_all'     => false,
                    'end_size'     => 3,
                    'mid_size'     => 1,
                    'prev_next'    => true,
                    'prev_text'    => __( '« Anterior', 'cdw' ),
                    'next_text'    => __( 'Siguiente »', 'cdw'),
                    'add_args'     => false
                ]
            );
    
            if ( is_array( $pages ) ) {
                $pagination = '<ul class="pagination">';
                foreach ( $pages as $page ) {
                    $pagination .= '<li class="page-item" '.(strpos($page, 'current') !== false ? 'active' : '').'"> ' . str_replace( 'page-numbers', 'page-link rdv-page-link', $page ) . '</li>';
                }
                $pagination .= '</ul>';
                return $pagination;
            }
            return null;
        }
    }
?>