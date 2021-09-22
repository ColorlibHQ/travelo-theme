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

	$footer_logo_img_id = get_theme_mod( 'footer_logo_img' );
	$footer_logo_img 	= !empty($footer_logo_img_id) ? wp_get_attachment_image_src( $footer_logo_img_id, 'travelo_site_logo_138x41' )[0] : '';
	$footer_text 	    = travelo_opt( 'travelo_footer_text' ) == '' ? '5th flora, 700/D kings road, green <br> lane New York-1782 <br><a href="#">+10 367 826 2567</a> <br><a href="#">contact@carpenter.com</a>' : travelo_opt( 'travelo_footer_text' );
	$site_url 	    	= home_url('/');
	?>
	<div class="col-xl-4 col-md-6 col-lg-4">
		<div class="footer_widget">
			<?php
				echo '<div class="footer_logo">';
					if ( $footer_logo_img ) {
						?>
							<a href="<?=esc_url($site_url)?>"><img src="<?=esc_url($footer_logo_img)?>" alt="footer logo"></a>
						<?php
					} else {
						?>
						<a href="<?=esc_url($site_url)?>"><img src="<?=esc_url( TRAVELO_DIR_IMGS_URI . 'footer_logo.png' )?>" alt="footer logo"></a>
						<?php
					}
				echo '</div>';

				if ( $footer_text ) {
					echo '<p>'.wp_kses_post(nl2br( $footer_text )).'</p>';
				}

				// Social profiles
				$social_opt = travelo_opt('travelo_social_profile_toggle');
				if ( $social_opt == true ) {
					$social_items = travelo_opt('travelo_social_profiles');
					if( is_array( $social_items ) && count( $social_items ) > 0 ){
						echo '<div class="socail_links"><ul>';
							foreach ($social_items as $value) {
								echo '<li><a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a></li>';
							}
						echo '</ul></div>';
					}          
				}  
			?>
		</div>
	</div>
	<?php
			
	// Footer widget 2
	if( is_active_sidebar( 'footer-2' ) ){
		dynamic_sidebar( 'footer-2' );
	}

	// Footer widget 3
	if( is_active_sidebar( 'footer-3' ) ){
		dynamic_sidebar( 'footer-3' );
	}

	// Footer widget 4
	if( is_active_sidebar( 'footer-4' ) ){
		dynamic_sidebar( 'footer-4' );
	}