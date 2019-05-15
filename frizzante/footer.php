<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			
			<div class="row article-wrapper">

				<div class="footerlinks u-pull-left">
					
					 <?php if ( is_active_sidebar( 'footer-line' ) ) : ?>
							
								<?php dynamic_sidebar( 'footer-line' ); ?> 
							
					<?php endif; ?>

				</div>

				<div class="credit u-pull-right">
					
					Website design by <a href="http://www.double-sided.com">Double Sided</a>

				</div><!-- .site-info -->

			</div>

		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>