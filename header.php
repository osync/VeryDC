<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<header class="site-header">
	<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></p>
	
	<?php 
		$description = get_bloginfo( 'description', 'display' ); 
		if ( $description ) :
	?>
	
	<p class="site-description"><?php bloginfo( 'description' ); ?></p>
	
	<?php 
		endif;
	?>
	
	<?php if ( has_nav_menu( 'header' ) ) : ?>
	
	<?php
		wp_nav_menu(
			array(
				'theme_location' => 'header',
				'menu_class'     => 'site-nav',
				'items_wrap'     => '<ul id="%1$s" class="%2$s" tabindex="0">%3$s</ul>',
			)
		);
			
	endif; ?>

</header>