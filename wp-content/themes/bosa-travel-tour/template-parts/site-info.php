<?php
/**
 * Template part for displaying site info
 *
 * @package Bosa Travel Tour 1.0.0
 */

?>

<div class="site-info">
	<?php echo wp_kses_post( html_entity_decode( esc_html__( 'Copyright &copy; ' , 'bosa-travel-tour' ) ) );
		echo esc_html( date( 'Y' ) . ' ' . get_bloginfo( 'name' ) );
		echo esc_html__( '. Powered by', 'bosa-travel-tour' );
	?>
	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bosa-travel-tour' ) ); ?>" target="_blank">
		<?php
			printf( esc_html__( 'WordPress', 'bosa-travel-tour' ) );
		?>
	</a>
</div><!-- .site-info -->