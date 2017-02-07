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
                            nakóduji šablonu,<br>
                            s chutí a nadšením.<br>
                            <div class="money">Za peníze.</div>
                        </div>

<div class="parallax-container-sky" data-parallax="scroll" data-image-src="<?php echo get_stylesheet_directory_uri(); ?>/images/sky.svg" data-speed="1.2" data-z-index="-100" data-natural-width="100" data-natural-height="100" data-bleed="500" data-position-y="-300px" ></div>


                        <div id="sky-top"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sky.svg"></div>
                        <div class="section" id="sky">

                        
                        

                            <div class="inner-section" id="about-me">
                                <h1>Kdo jsem...</h1>
                                <p>Jmenuji se Jirka Příhoda. Narodil jsem se v Praze, chvíli jsem studoval architekturu, založil neúspěšný start-up, dva roky žil v Holandsku a baví mě kreslit obrázky, kreslit komiksy, vytvářet věci co se hýbou a učit se věci nové. </p>
                            </div>  

                            <div class="inner-section" id="services">
                                <h1>S čím vám můžu pomoci...</h1>
                                <p>Vytvořím vám webovou stránku postavenou na redakčním systému wordpress. O vašem webu s vámi budu mluvit a pomůžu vám ujasnit si, jaké bude nejlepší řešení. <br> <br>

                                    Nakóduji šablonu v <red>HTML</red> a CSS podle vašeho návrhu.<br><br>

                                    Nakreslím grafiku nebo ilustraci, podle vašich přání.</p>
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
                        <p>Prohlédněte si moje portfolio, přečtěte si co jsem napsal, nebo mě kontaktujte. Našli jste chybu, nebo si jen myslíte že by se dalo něco udělat lépe či jinak? Dejte mi vědět, konstruktivní kritiku vždzcky rád uslyším. </p>
                        <div class="contact-buttons">
                            <button type="button" id="portfolio-button">Portfolio</button>
                            <button type="button" id="blog-button">Blog</button>
                        </div>
                        <div class="contact-form">
                                <?php echo do_shortcode( '[pirate_forms]' ) ?> 
                        </div
                        </div>

                    </div>
            </main>
        


<?php get_footer(); ?>
