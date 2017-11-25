<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package vanilla
 */

?>
</div>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="site-footer__body">
		<div class="container">
			<?php dynamic_sidebar( 'footer-primary-widget' ); ?>

			<?php if ( is_active_sidebar( 'footer-secondary-widget' ) ) : ?>
				<div class="grid">
					<?php dynamic_sidebar( 'footer-secondary-widget' ); ?>
				</div>
			<?php endif; ?>
<p class="text-small">Teşekkürler <a target="_blank" href="https://wordpress.org" rel="nofollow">WordPress</a> <span class="sep"> | </span> Tema: <a target="_blank" href="https://tah.wordpress.org/themes/vanilla/" rel="nofollow">Vanilla</a></p>


		</div>
	</div>

</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
