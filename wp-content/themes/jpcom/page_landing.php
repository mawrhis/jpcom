<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *<?php

Template Name: Landing

 * @package WordPress
 * @subpackage jpcom
 * @since jpcom 1.0
 */

get_header('landing'); ?>

<div class="main-inner">
                        <div class="section" id="intro">
                            Vytvořím webové stránky,<br>
                            nakreslím grafiku,<br>
                            nakóduji šablonu.<br>
                            S chutí a nadšením.<br>
                            <div class="money">Za peníze.</div>

                                                   
                        </div>

<div class="parallax-container-sky" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/images/sky.svg" data-speed="1.2" data-z-index="-100" data-natural-width="100" data-natural-height="100" data-bleed="500" data-position-y="-300px" ></div>


                        <div id="sky-top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sky.svg"></div>
                        <div class="section" id="sky">

                        
                        

                            <div class="inner-section" id="about-me">
                                <h1>Kdo jsem a co umím...</h1>
                                <p>Jmenuji se Jirka Příhoda. Narodil jsem se v Praze, chvíli jsem studoval architekturu, založil neúspěšný start-up a dva roky žil a pracoval v Holandsku. Baví mě kreslit obrázky, kreslit komiksy, vytvářet věci co se hýbou a učit se věci nové. </p>
                                <br>
                                <p>Vytvořím vám <red><b>webovou stránku</b></red> postavenou na redakčním systému <red><b>wordpress</b></red>. Nakóduji šablonu v <red><b>HTML a CSS</b></red> podle vašeho návrhu nebo nakreslím <red><b>grafiku nebo ilustraci</b></red> , podle vašich přání.</p> Pro představu o mojí práci, si prohlédněte moje portfolio.


                            </div>  

                             <div class="contact-buttons">
                            <div class="button" id="portfolio-button"><a href="jiriprihoda.com/portfolio">Portfolio</a></div>
                            <!-- <a href="jiriprihoda.com/blog"><div class="button" type="button" id="blog-button">Blog</div></a>-->
                        </div>
                            <div class="wood-clouds">
                                <div id="clouds"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/clouds2.svg">
                                </div>                          
                                <div id="trees"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/wood2.svg">
                                </div>
                                </div>
                            <div class="parallax-container" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/images/wood.svg" data-natural-width="100" data-natural-height="100" data-bleed="400" data-speed="1.2" data-z-index="100" data-position-y="-300px" ></div>
                            <div class="parallax-container-clouds" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/images/clouds.svg" data-speed="2" data-natural-width="80" data-natural-height="100" data-z-index="50" data-bleed="400" data-position-y="-300px" ></div>

                        </div>

                        <div class="section" id="contact">
                        <h1>Kontakt</h1>
                        <p>Prohlédněte si moje portfolio, nebo mě kontaktujte. Našli jste chybu, nebo si jen myslíte že by se dalo něco udělat lépe či jinak? Dejte mi vědět, rád od vás uslyším. </p>
                        <div class="contact-form">
                                <?php echo do_shortcode( '[pirate_forms]' ) ?> 
                        </div
                        </div>

                    </div>
            </main>
        


<?php get_footer(); ?>
