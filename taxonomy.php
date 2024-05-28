<?php

/**
 * The template for displaying taxonomy Archive pages.
 *
 * @file      taxonomy.php
 * @package   dynamic_start
 * @author    Thiago Ribeiro
 * @link 	  http://pluginwp.com.br
 * 
 **/
?>
<?php get_header(); ?>
<div id="primary" class="container">
	<div class="row">
		<div class="col-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
			<main id="main" class="site-main" role="main">
				<section id="content">
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
						<div id="post-0" class="post">
							<h2><?php _e('Nada encontrado :(', 'dynamic_start'); ?></h2>
							<p><?php _e('Desculpas, mas nenhum resultado foi encontrado para o arquivo solicitado.', 'dynamic_start'); ?></p>
						</div>
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