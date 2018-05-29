<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container-fluid">
			<div class="navbar-brand offset-sm-2 offset-md-2 offset-lg-2 offset-xl-2" >
							<a href="<?php echo esc_url( home_url( '/' )); ?>">
									<img src="wp-content/themes/Frik-2018/images/logo_white_no_text.png">
							</a>
			</div>
			<p class="our-partners-text">NASI PARTNERZY:
			<p class="footer-text offset-sm-2 offset-md-2 offset-lg-2 offset-xl-2">Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz w przemyśle poligraficznym.
					Został po raz pierwszy użyty w XV w. przez nieznanego drukarza do wypełnienia tekstem próbnej książki. Pięć wieków później
		</div>
		<div class="site-info offset-sm-2 offset-md-2 offset-lg-2 offset-xl-2">
				&copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
				<span class="sep"> | </span>
				<a class="credits " href="" target="_blank" title="Copyright" alt="&copy; Copyright 2017 Fundacja Rozwoju Inicjatyw Kreatywnych">&copy; Copyright 2017 Fundacja Rozwoju Inicjatyw Kreatywnych"</a>
		</div><!-- close .site-info -->
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
