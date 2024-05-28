<?php
/**
 * The default template for displaying content excerpt erro 404.
 *
 * @file      content-excerpt_404.php
 * @package   dynamic_start
 * @author    Thiago Ribeiro
 * @link 	  http://pluginwp.com.br
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('post-excerpt erro404'); ?>>
	<div class="entry-content">
		<header class="entry-header">
			<h1 class="page-title"><?php _e('Erro 404', 'dynamic_start'); ?></h1>
		</header>
		<div class="erro-404">
			<p><?php _e(' Nenhum resultado foi encontrado para a pagina solicitada.', 'dynamic_start'); ?></p>
			<?php get_search_form(); ?>
		</div>
	</div>
</article>