<?php
/**
 * The template for the home page
 *
 * It is designed to work with Beaver Builder
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shout_theme
 */

get_header();
?>

	<main id="primary" class="site-main frontpage">
		<?php
      while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content', 'frontpage' );
      endwhile; // End of the loop.
		?>
	</main><!-- #main -->
<?php
get_footer();
