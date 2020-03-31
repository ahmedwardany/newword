
<?php 
	function load_stylesheets(){
		// wp_register_style("style" , get_template_directory_uri() . "/style.css" . array(), 1,"all");
		// wp_enqueue_style("style");

		 wp_enqueue_style( 'style-name', get_stylesheet_uri() );

	
	
	
	}

	add_action( 'wp_enqueue_scripts', 'load_stylesheets' );




	function addjs(){
			wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0', true );

		wp_enqueue_script( 'dropotron', get_template_directory_uri() . '/js/jquery.dropotron.min.js', array(), '1.0.0', true );

		wp_enqueue_script( 'browser', get_template_directory_uri() . '/js/browser.min.js', array(), '1.0.0', true );

		wp_enqueue_script( 'breakpoints', get_template_directory_uri() . '/js/breakpoints.min.js', array(), '1.0.0', true );

		wp_enqueue_script( 'util', get_template_directory_uri() . '/js/util.js', array(), '1.0.0', true );

		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true );	


	}

	add_action( 'wp_enqueue_scripts', 'addjs' );	
?>