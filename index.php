<?php
/*
Template Name: Strona główna
*/
?>
<?php get_header(); ?>

<section id="primary" class="content-area col-sm-12 col-md-12 col-lg-12 col-xl-12
offset-sm-1 offset-md-1 offset-lg-1 offset-xl-1">
  <main id="main" class="site-main" role="main">
		<h2>AKTUALNOŚCI:</h2>
			  <?php
			  if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) : ?>
			      <header>
			        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			      </header>

			    <?php
			    endif;

			    /* Start the Loop */
          $post_number = 0;
					?>
					<div class="w3-container">
						<div class="row"><?php
				    while ( have_posts() && $post_number < 6) : the_post()?>
									<article class="main-page-arcitle col-8 col-sm-8 col-md-5 col-lg-3 col-xl-3">
										<?php
							      /*
							       * Include the Post-Format-specific template for the content.
							       * If you want to override this in a child theme, then include a file
							       * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							       */

										 $post_link = get_post_permalink( $post->ID );?>
                     <?php $post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
                       if (has_post_thumbnail( $post->ID ) ): ?>
                         <a href="<?php echo $post_link?>">
                         <img class="post-image-thumbnail" src="<?php echo $post_image[0]; ?>"></a>
                      <?php endif;?>
										<a href="<?php echo $post_link?>">
										<h2><?php echo get_the_title( $post->ID ); ?> </h2></a><?php
							      the_excerpt( 'template-parts/content', get_post_format() );?>
											<a href="<?php echo $post_link?>">
												<img class="read-more-button" border="0" alt="W3Schools" src="wp-content/themes/Frik-2018/images/read_more.png" width="100" height="100">
											</a>
									</article>
								<?php
                $post_number = $post_number + 1;
			    	endwhile;?>
					</div>
				</div>
				<?php

			    the_posts_navigation();

			  else :

			    get_template_part( 'template-parts/content', 'none' );

			  endif; ?>
  </main><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
