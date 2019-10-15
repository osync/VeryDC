<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="post-header">
	
	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<a class="post-thumbnail-link" href="<?php the_permalink(); ?>">
			<?php $thumbnail_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'verydc-thumb-image' ); ?>
			<img class="post-thumbnail" src="<?php echo esc_url( $thumbnail_image_url[0] ); ?>">
		</a>
	<?php endif; ?>
	
	<?php //the_post_thumbnail( 'post-thumbnail' ); ?>
	
	<?php if ( is_single() ) { ?>
	<?php the_title( '<h1 class="post-title">', '</h1>' ); ?>
	<?php }else { ?>
	<?php the_title( sprintf( '<h1 class="post-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
	<?php } ?>
	
	</header>
	
	<?php if ( has_excerpt() ) { ?>
	
	<div class="post-content post-excerpt">
		<?php the_excerpt(); ?>
	</div>		

	<?php } ?>

	<?php if ( is_single() ) { ?>

	<div class="post-content">
		<?php the_content(); ?>
	</div>

	<?php } ?>

	<footer class="post-footer">
		<p><?php the_time('Y-m-d H:i:s'); ?></p>
		<?php the_tags('<p class="post-tags">', '', '</p>'); ?>
	</footer>
	
</article>