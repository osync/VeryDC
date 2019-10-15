<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="post-header">
	
	<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
	
	</header>
	
	<?php if ( has_excerpt() ) { ?>
	
	<div class="post-content post-excerpt">
		<?php the_excerpt(); ?>
	</div>		

	<?php } ?>
	
	<div class="post-content">
		<?php the_content(); ?>
	</div>
	
</article>
