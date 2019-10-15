<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<?php //setPostViews(get_the_ID()); ?>
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

	<footer class="post-footer single-post-footer">
		<p><?php the_time('Y-m-d H:i:s'); ?></p>
		<?php the_tags('<p class="post-tags">', '', '</p>'); ?>
	</footer>
	
</article>
