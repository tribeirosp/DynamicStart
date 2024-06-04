<?php
/**
 * Template Name: Elementor - full width
 *
 * The template for displaying the full width page.
 * 
 * @file      page-elementor-full-width.php
 * @package   dynamic_start
 * @author    Thiago Ribeiro
 * @link 	  http://pluginwp.com.br
 */
?>
<?php get_header(); ?>
<div id="primary" class="container-fluid  " >
	<div class="row">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 p-0">
			<main id="main" class="site-main" role="main">
				<section id="content">
					<?php if (have_posts()) { ?>		
						<?php while (have_posts()) : the_post(); ?>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<div class="entry-content">
									<?php the_content(); ?>	
							</div>
						 
						</article>

						<?php endwhile; ?> 
							<?php if (  $wp_query->max_num_pages > 1 ) { ?>
								<div class="navigation">
									<div class="previous"><?php next_posts_link( __( '&#8249; Avançar', 'dynamic_start' ) ); ?></div>
									<div class="next"><?php previous_posts_link( __( 'Voltar &#8250;', 'dynamic_start' ) ); ?></div>
								</div>
							<?php } ?>

						<?php } else { ?>

								<?php get_template_part('includes/content_excerpt_404'); ?>

					<?php } ?> <!-- /have_posts -->	
				</section>		
			</main><!-- /site-main -->
		</div>	<!-- /Cols -->
	</div> <!-- /row -->
</div><!-- /content-area -->
<?php get_footer(); ?>
