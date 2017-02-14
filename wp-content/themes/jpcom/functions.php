<?php
/**
 * jpcom functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package WordPress
 * @subpackage jpcom
 * @since jpcom 1.0
 */

add_action( 'init', 'create_post_type' );
function create_post_type() {
  register_post_type( 'jpcom_portfolio',
    array(
      'supports' => array('title', 'editor','thumbnail', 'custom-fields', 'excerpt'),
      'labels' => array(
        'name' => __( 'Portfolio' ),
        'singular_name' => __( 'Portfolio item' )
      ),
      'public' => true,
      'has_archive' => true,
      'taxonomies'  => array( 'category', 'post_tag' ),

    )
  );
}






if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 800, 600, true ); // default Post Thumbnail dimensions (cropped)

    // additional image sizes
    // delete the next line if you do not need additional image sizes
}


// make thumbnail clickable and link them to their respective pages

add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );
function my_post_image_html( $html, $post_id, $post_image_id ) {
    $html = '<a href="' . get_post_permalink( $post_id ) . '"title="' . 
        esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';
    return $html;
}


// get the category and pass categori id into the li element

function jpcom_get_the_category_list( $separator = '', $parents='', $post_id = false ) {
    global $wp_rewrite;
    if ( ! is_object_in_taxonomy( get_post_type( $post_id ), 'category' ) ) {
        /** This filter is documented in wp-includes/category-template.php */
        return apply_filters( 'the_category', '', $separator, $parents );
    }
 
    /**
     * Filters the categories before building the category list.
     *
     * @since 4.4.0
     *
     * @param array    $categories An array of the post's categories.
     * @param int|bool $post_id    ID of the post we're retrieving categories for. When `false`, we assume the
     *                             current post in the loop.
     */
    $categories = apply_filters( 'the_category_list', get_the_category( $post_id ), $post_id );
 
    //if ( empty( $categories ) ) {
        /** This filter is documented in wp-includes/category-template.php */
      //  return apply_filters( 'the_category', __( 'Uncategorized' ), $separator, $parents );
    //}
 
    $rel = ( is_object( $wp_rewrite ) && $wp_rewrite->using_permalinks() ) ? 'rel="category tag"' : 'rel="category"';
    $thelist = '';
    if ( '' == $separator ) {
        $thelist .= '<ul class="portfolio-categories">';
        foreach ( $categories as $category ) {            
            $cat_ID = get_cat_ID($category->name);
            $thelist .= "\n\t<li title='$category->name' class='portfolio-category-badge' id ='category_$cat_ID'>";
            switch ( strtolower( $parents ) ) {
                case 'multiple':
                    if ( $category->parent )
                        $thelist .= get_category_parents( $category->parent, true, $separator );
                    $thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" ' . $rel . '>' . 'C'.'</a></li>';
                    break;
                case 'single':
                    $thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '"  ' . $rel . '>';
                    if ( $category->parent )
                        $thelist .= get_category_parents( $category->parent, false, $separator );
                    $thelist .= $category->name.'</a></li>';
                    break;
                case '':
                default:
                    $thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" ' . $rel . '>' . 'C' .'</a></li>';
            }
        }
        $thelist .= '</ul>';
    } else {
        $i = 0;
        foreach ( $categories as $category ) {
            if ( 0 < $i )
                $thelist .= $separator;
            switch ( strtolower( $parents ) ) {
                case 'multiple':
                    if ( $category->parent )
                        $thelist .= get_category_parents( $category->parent, true, $separator );
                    $thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" ' . $rel . '>' . $category->name.'</a>';
                    break;
                case 'single':
                    $thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" ' . $rel . '>';
                    if ( $category->parent )
                        $thelist .= get_category_parents( $category->parent, false, $separator );
                    $thelist .= "$category->name</a>";
                    break;
                case '':
                default:
                    $thelist .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" ' . $rel . '>' . $category->name.'</a>';
            }
            ++$i;
        }
    }
 
    /**
     * Filters the category or list of categories.
     *
     * @since 1.2.0
     *
     * @param array  $thelist   List of categories for the current post.
     * @param string $separator Separator used between the categories.
     * @param string $parents   How to display the category parents. Accepts 'multiple',
     *                          'single', or empty.
     */
    return apply_filters( 'the_category', $thelist, $separator, $parents );
}

function jpcom_scripts() {

//hamburger menu, smoothscroll
wp_enqueue_script( 'wpb_easing', get_template_directory_uri() . '/js/jqueryeasing.js', array('jquery'), false, true );
wp_enqueue_script( 'wpb_slidepanel', get_template_directory_uri() . '/js/slidepanel.js', array('jquery'), false, true ); 
wp_enqueue_script( 'wpb_toggle', get_template_directory_uri() . '/js/smoothscroll.js', array('jquery'), false, true );
}

add_action( 'wp_enqueue_scripts', 'jpcom_scripts' );


//[quotation shortcode]
function quote1_func( $atts ){
    $meta =  get_post_meta( get_the_ID(), "quote1" ,true );
    return '<h3><q>' . $meta . '</q></h3>' ;
}
function quote2_func( $atts ){
    $meta =  get_post_meta( get_the_ID(), "quote2" ,true );
    return '<h3><q id="left">' . $meta . '</q></h3>' ;
}
function quote3_func( $atts ){
    $meta =  get_post_meta( get_the_ID(), "quote3" ,true );
    return '<h3><q>' . $meta . '</q></h3>' ;
}
add_shortcode( 'quote1', 'quote1_func' );
add_shortcode( 'quote2', 'quote2_func' );
add_shortcode( 'quote3', 'quote3_func' );


?>