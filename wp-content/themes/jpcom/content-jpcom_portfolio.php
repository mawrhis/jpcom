 <?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage jpcom
 * @since jpcom 1.0
 */
?>
<article class="main-inner" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <header class="portfolio-header">
        <?php

                the_title( '<h1 class="portfolio-title">', '</h1>' );
     
        ?>
    </header><!-- .portfolio-header -->



    <div class="portfolio-content">
        <?php
            /* translators: %s: Name of current post */

            the_content( sprintf(
                __( 'Continue reading %s', 'jpcom' ),
                the_title( '<span class="screen-reader-text">', '</span>', false )
            ) );

            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'jpcom' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'jpcom' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ) );
        ?>
    </div><!-- .entry-content -->

   

</article><!-- #post-## -->