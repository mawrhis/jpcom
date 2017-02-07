<?php
/**
 * @package WordPress
 * @subpackage jpcom
 * @since jpcom 1.0
 */

get_header(); ?>

    
        <?php 
                while (have_posts() ) : the_post(); 

                       /*
                 * Include the Post-Format-specific template for the content.
                 * If you want to override this in a child theme, then include a file
                 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                 */

                get_template_part( 'content-jpcom_portfolio');

            // End the loop.
                endwhile;

            // Previous/next page navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">'.
                    '<span class="screen-reader-text">' . __( 'Next post:', 'jpcom' ) . '</span> ' .
                    '<span class="post-title">%title >></span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">'  .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'jpcom' ) . '</span> ' .
                    '<span class="post-title"><< %title</span>',
            ) );

    
    ?>

</main>

<?php get_footer(); ?>
