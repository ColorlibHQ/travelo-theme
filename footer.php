<?php 
/**
 * @Packge     : Travelo
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
    // Block direct access
    if( !defined( 'ABSPATH' ) ){
        exit( 'Direct script access denied.' );
    }

        /**
         * Footer Area
         *
         * @Footer
         * @Back To Top Button
         *
         * @Hook travelo_footer
         *
         * @Hooked  travelo_footer_area 
         *
         */

		do_action( 'travelo_footer' );

	wp_footer(); 
 ?>

    <script>
    (function ($) {
    "use strict";
    // Date time picker
    $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
          rightIcon: '<span class="fa fa-caret-down"></span>'
        }
      });
	})(jQuery);	
	</script>
</body>
</html>