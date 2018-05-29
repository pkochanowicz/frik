<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
      <div id="social-media-header" class="offset-sm-2 offset-md-2 offset-lg-2 offset-xl-2">
  				ODWIEDŹ NAS NA:
              <a href="https://www.facebook.com/FundacjaRozwojuInicjatywKreatywnych">
                <img class="social-media-icon" border="0" alt="Facebook" src="wp-content/themes/Frik-2018/images/facebook_icon.png">
              </a>
              <a href="mailto: kontakt@fundacjafrik.pl">
                <img class="social-media-icon" border="0" alt="Mail" src="wp-content/themes/Frik-2018/images/mail_icon.png">
              </a>
  		</div>
	<header id="masthead">
    <!-- class="site-header navbar-static-top<?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner" -->
            <div id="main-menu-div" class="container w-100 site-header navbar-static-top<?php echo wp_bootstrap_starter_bg_class(); ?>">
            <nav class="navbar navbar-expand-md p-0">
              <div class="container">
                <div class="navbar-brand offset-sm-1 offset-md-1 offset-lg-1 offset-xl-1 " >
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_attr(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu(array(
                'theme_location'  => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-end',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>
            </nav>
          </div>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<div class="container">
			<div class="row">
                <?php endif; ?>
