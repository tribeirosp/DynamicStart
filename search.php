<?php

/**
 * The template for displaying Search Results pages.
 *
 * @file      search.php
 * @package   dynamic_start
 * @author    Thiago Ribeiro
 * @link 	  http://pluginwp.com.br
 */
?>
<?php get_header(); ?>
<div id="primary" class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
			<main id="main" class="site-main" role="main">
				<section id="content">

					<h2><?php _e('Search Results For ', 'dynamic_start'); ?>&ldquo;<?php echo $s; ?>&rdquo;</h2>

					<?php if (have_posts()) {
						while (have_posts()) : the_post(); ?>

							<?php get_template_part('includes/content_excerpt'); ?>

						<?php endwhile; ?>
						<?php if ($wp_query->max_num_pages > 1) { ?>

							<div class="navigation">
								<div class="previous"><?php next_posts_link(__('Avançar >', 'dynamic_start')); ?></div>
								<div class="next"><?php previous_posts_link(__('< Voltar ', 'dynamic_start')); ?></div>
							</div>

						<?php } ?>
					<?php } else { ?>

						<?php get_template_part('includes/content_excerpt_404'); ?>

					<?php } ?> <!-- /have_posts -->

					<div id="pagination">
						<?php echo dynamic_start_pagination(); ?>
					</div>
				</section>
			</main>
		</div>
		<aside class="col-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
			<?php get_sidebar(); ?>
		</aside>
	</div>
</div>
<?php get_footer(); ?>