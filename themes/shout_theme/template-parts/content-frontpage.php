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
    <div class="entry-header_hero">
      <?php
        echo get_the_post_thumbnail( $post_id, 'full', array( 'class' => 'featured-image' ) );
      ?>
    </div>
    <div class="entry-header_intro-container">
      <div class="desktop-container">
        <div class="entry-header_intro">
            <h1 class="entry-header_title">Shout Hub</h1>
            <ul class="entry-header_links">
              <li><a href="<?php echo get_site_url(); ?>/learn">Learn</a></li>
              <li><a href="<?php echo get_site_url(); ?>/act">Act</a></li>
              <li><a href="<?php echo get_site_url(); ?>/connect">Connect</a></li>
            </ul>
            <div class="entry-header_excerpt">The HUB connecting Social Sciences and Humanities with Sustainable Innovations in Industry and 3rd Sector Settings</div>
            <div class="entry-header_login">
              <?php echo do_shortcode('[learndash_login login_label="Login/Register" logout_label="Logout"]'); ?>
            </div>
          </div>
        </div>
      </div><!--.entry-header_intro-container-->
    </div>
  </div>
	<div class="entry-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</div><!-- #post-<?php the_ID(); ?> -->
