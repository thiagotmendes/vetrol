<?php
if(!is_admin()){
	/* CSS */
	wp_enqueue_style( 'estilo', get_template_directory_uri().'/css/estilo.css', array(),'3.3.6', 'screen' );
	wp_enqueue_style( 'Bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(),'3.3.6', 'screen' );
	wp_enqueue_style( 'Font Awesome', get_template_directory_uri().'/css/font-awesome.css', array(),'4.5.0', 'screen' );
	//wp_enqueue_style( 'Homer', get_template_directory_uri().'/css/hover.css', array(),'2.0.2', 'screen' );
	wp_enqueue_style( 'slick', get_template_directory_uri().'/css/slick.css', array(),'1.0.0', 'screen' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri().'/css/slick-theme.css', array(),'1.0.0', 'screen' );
	wp_enqueue_style( 'style', get_template_directory_uri().'/style.css', array(),'1.0.0', 'screen' );

	/* JS */
	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.1.1.js', array(), '1.12.1', false );
	wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '3.3.5', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.js', array(), '1.5.9', true );
	wp_enqueue_script( 'Funções', get_template_directory_uri() . '/js/funcoes.js', array(), '1.0.0', true );
}
