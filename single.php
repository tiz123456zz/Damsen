<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package hi
 */

get_header();
?>
<?php get_template_part('onload') ?>
	<main id="primary" class="site-main">
	<div class="bg-event bg-event-display">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			echo '<div class="button-nav-post">';
			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'hi' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'hi' ) . '</span> <span class="nav-title">%title</span>',
				)
			);
			echo'</div>';

			// If comments are open or we have at least one comment, load up the comment template.
			//if ( comments_open() || get_comments_number() ) :
			//	comments_template();
			//endif;

		endwhile; // End of the loop.
		?>
	</div>

	</main><!-- #main -->

<?php
//get_sidebar();
//get_footer();
