<?php

if ( ! function_exists( 'proo_setup' ) ) :

	function proo_setup() {

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );
		//set_post_thumbnail_size( 500, 9999 );
		add_image_size( 'verydc-thumb-image', 500, 1200 );
		
		register_nav_menus(
			array(
				'header' => 'Header Menu',
				'footer' => 'Footer Menu',
			)
		);

		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		
		add_theme_support( 'post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		) );		

		add_theme_support( 'responsive-embeds' );
		
	}
endif;
add_action( 'after_setup_theme', 'proo_setup' );

function proo_scripts() {
	
	wp_enqueue_style( 'proo-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );
	
}
add_action( 'wp_enqueue_scripts', 'proo_scripts' );

function proo_upload_name( $file ){
	
    if ( !$ext )
	
    $ext = ltrim(strrchr($file['name'], '.'), '.');
	
	$md5names = $file['name'].time();
	
	$md5name = substr(md5($md5names),8,16);
    //$file['name'] = $md5name.time().'.'.$ext;
	
	$file['name'] = $md5name.'.'.$ext;
    
	return $file;

}
add_filter( 'wp_handle_upload_prefilter', 'proo_upload_name' );

if ( ! function_exists( 'proo_the_posts_navigation' ) ) :

	function proo_the_posts_navigation() {
		the_posts_pagination(
			array(
				'mid_size'  => 2,
				'prev_text' => '&laquo;',
				'next_text' => '&raquo;'
			)
		);
	}
endif;












































