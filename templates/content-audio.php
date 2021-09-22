<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge     : Travelo
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

// Post Item Start

?>

<div id="<?php the_ID(); ?>" <?php post_class('col-12'); ?>>
	<div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
		<?php 
		/**
		 * Blog Post thumbnail
		 * @Hook  travelo_blog_posts_thumb
		 *
		 * @Hooked travelo_blog_posts_thumb_cb
		 * 
		 *
		 */
		do_action( 'travelo_blog_posts_thumb' );
		
		/**
		 * Blog Post Meta
		 * @Hook  travelo_blog_posts_meta
		 *
		 * @Hooked travelo_blog_posts_meta_cb
		 * 
		 *
		 */
		do_action( 'travelo_blog_posts_meta' );

		/**
		 * Blog Post title
		 * @Hook  travelo_blog_posts_title
		 *
		 * @Hooked travelo_blog_posts_title_cb
		 * 
		 *
		 */
		do_action( 'travelo_blog_posts_title' );		
		
		/**
		 * Blog Excerpt With read more button
		 * @Hook  travelo_blog_posts_excerpt
		 *
		 * @Hooked travelo_blog_posts_excerpt_cb
		 * 
		 *
		 */
		do_action( 'travelo_blog_posts_excerpt' );
		
		?>
	</div>
</div>