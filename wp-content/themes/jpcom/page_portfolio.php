<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css)
. * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *<?php

Template Name: Portfolio

 * @package WordPress
 * @subpackage jpcom
 * @since jpcom 1.0
 */

get_header(); ?>
<div class="inner_page">
    <?php 
    $args = array( 'post_type' => 'jpcom_portfolio', 'posts_per_page' => 20 );
    $the_query = new WP_Query( $args ); 
    
         if ( $the_query->have_posts() ) : ?>
        <?php 
                while ( $the_query->have_posts() ) : $the_query->the_post(); 

                       /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */
                
                                 ?>
                <div class="post_home">
                <?php
                the_post_thumbnail(   );
                the_title( sprintf( '<div class="portfolio-title-home"><h4><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2></div>' ); 
                ?>
                </div>
                <?php

            // End the loop.
                endwhile;

            // Previous/next page navigation.
            the_posts_pagination( array(
                'prev_text'          => __( 'Previous page', 'jpcom' ),
                'next_text'          => __( 'Next page', 'jpcom' ),
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'jpcom' ) . ' </span>',
            ) );

        // If no content, include the "No posts found" template.
        else :
            get_template_part( 'content-jpcom_portfolio', get_post_format() ); ?>

        <?php endif; ?>
</div>
</main>

<?php get_footer(); ?>
