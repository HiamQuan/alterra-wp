<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alterra
 */

?>

<footer id="colophon" class="site-footer">
    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'alterra' ) ); ?>">
            <?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'alterra' ), 'WordPress' );
				?>
        </a>
        <span class="sep"> | </span>
        <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'alterra' ), 'alterra', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/alterra-html/js/swiper-bundle.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/alterra-html/js/main.js"></script>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>