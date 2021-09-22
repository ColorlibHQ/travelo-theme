<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Before Wrapper
	 *
	 * @Preloader
	 *
	 */
	add_action( 'travelo_preloader', 'travelo_site_preloader', 10 );

	/**
	 * Header
	 *
	 * @Header Menu
	 * @Header Bottom
	 * 
	 */

	add_action( 'travelo_header', 'travelo_header_cb', 10 );

	/**
	 * Hook for footer
	 *
	 */
	add_action( 'travelo_footer', 'travelo_footer_area', 10 );

	/**
	 * Hook for Blog, single, page, search, archive pages wrapper.
	 */
	add_action( 'travelo_wrp_start', 'travelo_wrp_start_cb', 10 );
	add_action( 'travelo_wrp_end', 'travelo_wrp_end_cb', 10 );
	
	/**
	 * Hook for Blog, single, search, archive pages column.
	 */
	add_action( 'travelo_blog_col_start', 'travelo_blog_col_start_cb', 10 );
	add_action( 'travelo_blog_col_end', 'travelo_blog_col_end_cb', 10 );
	
	/**
	 * Hook for blog posts thumbnail.
	 */
	add_action( 'travelo_blog_posts_thumb', 'travelo_blog_posts_thumb_cb', 10 );

	/**
	 * Hook for blog details wrapper.
	 */
	add_action( 'travelo_blog_details_wrap_start', 'travelo_blog_details_wrap_start_cb', 10 );
	add_action( 'travelo_blog_details_wrap_end', 'travelo_blog_details_wrap_end_cb', 10 );

	/**
	 * Hook for blog posts title.
	 */
	add_action( 'travelo_blog_posts_title', 'travelo_blog_posts_title_cb', 10 );

	/**
	 * Hook for blog posts meta.
	 */
	add_action( 'travelo_blog_posts_meta', 'travelo_blog_posts_meta_cb', 10 );

	/**
	 * Hook for blog posts excerpt.
	 */
	add_action( 'travelo_blog_posts_excerpt', 'travelo_blog_posts_excerpt_cb', 10 );
	// add_action( 'travelo_blog_posts_excerpt', 'travelo_blog_read_more_cb', 10 );

	/**
	 * Hook for blog posts info links.
	 */
	add_action( 'travelo_blog_posts_info_link', 'travelo_blog_posts_info_link_cb', 10 );

	/**
	 * Hook for blog posts content.
	 */
	add_action( 'travelo_blog_posts_content', 'travelo_blog_posts_content_cb', 10 );
	
	/**
	 * Hook for blog single post social share option.
	 */
	add_action( 'travelo_blog_posts_share', 'travelo_blog_posts_share_cb', 10 );

	/**
	 * Hook for blog sidebar.
	 */
	add_action( 'travelo_blog_sidebar', 'travelo_blog_sidebar_cb', 10 );
	
	/**
	 * Hook for blog single post meta category, tag, next - previous link and comments form.
	 */
	add_action( 'travelo_blog_single_meta', 'travelo_blog_single_meta_cb', 10 );
	
	/**
	 * Hook for page content.
	 */
	add_action( 'travelo_page_content', 'travelo_page_content_cb', 10 );
	
	
	/**
	 * Hook for 404 page.
	 */
	add_action( 'travelo_fof', 'travelo_fof_cb', 10 );

	

?>