<?php get_header(); ?>

<div class="container site-main">

		<?php
		if ( have_posts() ) {

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content/content', get_post_format() );
				
				the_post_navigation( array(
					'prev_text' => '<span>%title</span>',
					'next_text' => '<span>%title</span>',
				) );
				
				// If comments are open or we have at least one comment, load up the comment template.
				/*if ( comments_open() || get_comments_number() ) {
					comments_template();
				}*/							

			endwhile;

		} else {

			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

</div>

<?php get_footer(); ?>
