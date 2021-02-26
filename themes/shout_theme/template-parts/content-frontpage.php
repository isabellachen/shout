<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shout_theme
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-header">
    <?php
      echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'featured-image' ) );
    ?>
  </div>
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</div><!-- #post-<?php the_ID(); ?> -->
