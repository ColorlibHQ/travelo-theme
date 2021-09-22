<?php 
/**
 * @Packge     : Travelo
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer panels and sections
 *
 */

/***********************************
 * Register customizer panels
 ***********************************/

$panels = array(
    /**
     * Theme Options Panel
     */
    array(
        'id'   => 'travelo_theme_options_panel',
        'args' => array(
            'priority'       => 0,
            'capability'     => 'edit_theme_options',
            'theme_supports' => '',
            'title'          => esc_html__( 'Theme Options', 'travelo' ),
        ),
    )
);


/***********************************
 * Register customizer sections
 ***********************************/


$sections = array(

    /**
     * General Section
     */
    array(
        'id'   => 'travelo_general_section',
        'args' => array(
            'title'    => esc_html__( 'General', 'travelo' ),
            'panel'    => 'travelo_theme_options_panel',
            'priority' => 1,
        ),
    ),

    /**
     * Social Profiles Section
     */
    array(
        'id'   => 'travelo_social_section',
        'args' => array(
            'title'    => esc_html__( 'Social Profiles', 'travelo' ),
            'panel'    => 'travelo_theme_options_panel',
            'priority' => 2,
        ),
    ),
    
    /**
     * Header Section
     */
    array(
        'id'   => 'travelo_header_section',
        'args' => array(
            'title'    => esc_html__( 'Header', 'travelo' ),
            'panel'    => 'travelo_theme_options_panel',
            'priority' => 3,
        ),
    ),

    /**
     * Blog Section
     */
    array(
        'id'   => 'travelo_blog_section',
        'args' => array(
            'title'    => esc_html__( 'Blog', 'travelo' ),
            'panel'    => 'travelo_theme_options_panel',
            'priority' => 4,
        ),
    ),

    /**
     * Reservation Section
     */
    array(
        'id'   => 'travelo_reservation_section',
        'args' => array(
            'title'    => esc_html__( 'Reservation or Query Settings', 'travelo' ),
            'panel'    => 'travelo_theme_options_panel',
            'priority' => 5,
        ),
    ),

    /**
     * Instagram Section
     */
    array(
        'id'   => 'travelo_instagram_section',
        'args' => array(
            'title'    => esc_html__( 'Instagram Settings', 'travelo' ),
            'panel'    => 'travelo_theme_options_panel',
            'priority' => 6,
        ),
    ),


    /**
     * 404 Page Section
     */
    array(
        'id'   => 'travelo_fof_section',
        'args' => array(
            'title'    => esc_html__( '404 Page', 'travelo' ),
            'panel'    => 'travelo_theme_options_panel',
            'priority' => 7,
        ),
    ),

    /**
     * Footer Section
     */
    array(
        'id'   => 'travelo_footer_section',
        'args' => array(
            'title'    => esc_html__( 'Footer Page', 'travelo' ),
            'panel'    => 'travelo_theme_options_panel',
            'priority' => 8,
        ),
    ),



);


/***********************************
 * Add customizer elements
 ***********************************/
$collection = array(
    'panel'   => $panels,
    'section' => $sections,
);

Epsilon_Customizer::add_multiple( $collection );

?>