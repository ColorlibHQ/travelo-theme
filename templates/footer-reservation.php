<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Travelo
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$travelo_reservation_title     = !empty( travelo_opt( 'travelo_reservation_title' ) ) ? travelo_opt( 'travelo_reservation_title' ) : '';
	$travelo_reservation_sub_title = !empty( travelo_opt( 'travelo_reservation_sub_title' ) ) ? travelo_opt( 'travelo_reservation_sub_title' ) : '';
	$travelo_reservation_btn_text  = !empty( travelo_opt( 'travelo_reservation_btn_text' ) ) ? travelo_opt( 'travelo_reservation_btn_text' ) : '';
	$travelo_reservation_btn_url	  = !empty( travelo_opt( 'travelo_reservation_btn_url' ) ) ? travelo_opt( 'travelo_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $travelo_reservation_title )?></h3>
			<p><?php echo esc_html( $travelo_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $travelo_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $travelo_reservation_btn_text )?></a>
		</div>
	</div>