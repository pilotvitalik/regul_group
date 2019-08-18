<?php

	function load_stylesheets(){
		wp_register_style('main',get_template_directory_uri().'/css/main.css',array(),1,'all');
		wp_enqueue_style('main');
		wp_register_style('w960',get_template_directory_uri().'/css/w960.css',array(),1,'(min-width: 960px) and (max-width: 1199px)');
		wp_enqueue_style('w960');
		wp_register_style('w760',get_template_directory_uri().'/css/w760.css',array(),1,'(min-width: 760px) and (max-width: 959px)');
		wp_enqueue_style('w760');
		wp_register_style('w480',get_template_directory_uri().'/css/w480.css',array(),1,'(min-width: 480px) and (max-width: 759px)');
		wp_enqueue_style('w480');
		wp_register_style('w320',get_template_directory_uri().'/css/w320.css',array(),1,'(min-width: 200px) and (max-width: 479px)');
		wp_enqueue_style('w320');
	};

	add_action('wp_enqueue_scripts','load_stylesheets');

?>