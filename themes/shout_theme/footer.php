<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package shout_theme
 */

?>

	<footer id="colophon" class="site-footer">
    <div class="site-footer_mobile">
      <div class="site-footer_mobile-branding">
        <?php the_custom_logo(); ?>
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'social',
              'menu_id'        => 'social-menu',
              'walker' => new WO_Nav_Social_Walker()
            )
          );
        ?>
        <div class="site-footer_eu">
          <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/eu-flag.png"/>
          <p>			
            <?php
				      printf( esc_html__( 'Co-funded by the Erasmus+ Programme of the European Union', 'shout_theme' ));
				    ?>
          </p>
        </div>
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'footer',
              'menu_id'        => 'footer-menu'
            )
          );
        ?>
        <?php if ( is_active_sidebar( 'footer_contact_widget' ) ) : ?>
          <?php dynamic_sidebar( 'footer_contact_widget' ); ?>
        <?php endif; ?>
        <div class="footer_partners-widget_container">
          <?php if ( is_active_sidebar( 'footer_partners_widget' ) ) : ?>
            <?php dynamic_sidebar( 'footer_partners_widget' ); ?>
          <?php endif; ?>
        </div>
          <p class="footer_fineprint">			
            <?php
				      printf( esc_html__( 'The European Commission’s support for the production of this publication does not constitute an endorsement of the contents, which reflect the views only of the authors, and the Commission cannot be held responsible for any use which may be made of the information contained therein.', 'shout_theme' ));
				    ?>
          </p>
      </div>
    </div>
    <div class="site-footer_desktop desktop-container">
      <div class="site-footer_desktop-left">
        <div class="site-footer_desktop-content">
          <div class="site-footer_branding">
            <?php the_custom_logo(); ?>
            <?php
              wp_nav_menu(
                array(
                  'theme_location' => 'social',
                  'menu_id'        => 'social-menu',
                  'walker' => new WO_Nav_Social_Walker()
                )
              );
            ?>
          </div>
        </div>
      </div>
      <div class="site-footer_desktop-right">
        <?php if ( is_active_sidebar( 'footer_right_widget' ) ) : ?>
          <?php dynamic_sidebar( 'footer_right_widget' ); ?>
        <?php endif; ?>
      </div>
    </div>
		<div class="site-footer_terms desktop-container">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'shout_theme' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( '© %d %s', 'shout_theme' ), date("Y"), 'SHOUT - SSH for Sustainable Innovation' );
				?>
			</a>
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'terms',
            'menu_id'        => 'terms-menu',
          )
        );
      ?>
		</div><!-- .site-footer_terms -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
