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
  <div class="frontpage-header">
    <div class="entry-header_hero frontpage-header_hero">
      <?php
        echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'featured-image' ) );
      ?>
    </div>
    <div class="frontpage-header_intro-container">
      <div class="desktop-container">
        <div class="frontpage-header_intro">
            <h1 class="frontpage-header_title">Shout Hub</h1>
            <ul class="frontpage-header_links">
              <li><a href="<?php echo get_site_url(); ?>/learn">Learn</a></li>
              <li><a href="<?php echo get_site_url(); ?>/act">Act</a></li>
              <li><a href="<?php echo get_site_url(); ?>/connect">Connect</a></li>
            </ul>
            <div class="frontpage-header_excerpt">The HUB connecting Social Sciences and Humanities with Sustainable Innovations in Industry and 3rd Sector Settings</div>
            <div class="frontpage-header_login">
              <?php echo do_shortcode('[learndash_login login_label="Login/Register" logout_label="Logout"]'); ?>
            </div>
          </div>
        </div>
      </div><!--.frontpage-header_intro-container-->
    </div>
  </div>
	<div class="frontpage-content">
		<?php the_content(); ?>
	</div><!-- .frontpage-content -->
</div><!-- #post-<?php the_ID(); ?> -->
