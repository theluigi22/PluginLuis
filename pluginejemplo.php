<?php 
/**
 * Plugin Name: Plugin para comercio
 * Description: Este plugin muestra un mensaje de alerta
 * Version: 1.0.0
 * Author: Luis Antonio Lopez
 */


add_action('wp_footer', function(){?>

<script>
	alert('Hola este es mi plugin')
</script>
<?php }  ,9999); ?>