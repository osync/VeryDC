<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="post-header">
	
	<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
	
	</header>
	
	<div class="post-content">
		<?php the_content(); ?>
	</div>		

	<footer class="post-footer single-post-footer">
		<p><?php the_time('Y-m-d H:i:s'); ?></p>
		<?php the_tags('<p class="post-tags">', '', '</p>'); ?>
	</footer>
	
</article>
