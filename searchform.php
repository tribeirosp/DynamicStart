<?php
/**
 * The template for displaying search forms.
 *
 * @file      searchform.php
 * @package   dynamic_start
 * @author    Thiago Ribeiro
 * @link 	  http://pluginwp.com.br
 */
?>
 
<form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	<div>
		<input class="searchfield" type="text" value="<?php _e('Search', 'dynamic_start');?>" name="s" id="s" onfocus="if (this.value == 'Buscar') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Buscar';}" />
	</div>
</form>
