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

			endwhile;

		} else {

			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>

</div>

<?php get_footer(); ?>
