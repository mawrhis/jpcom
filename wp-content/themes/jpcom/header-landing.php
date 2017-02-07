<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage jpcom
 * @since jpcom 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Roboto:300,400|Suez+One&amp;subset=latin-ext" rel="stylesheet">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/parallax.js"></script>

    <?php wp_head(); ?>


</head>
<body <?php body_class(); ?>>
  <header>
      <div class="logo">
          <div class="logo-image">
            <a href="<?php echo get_home_url(); ?>"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.svg"></a>
          </div>
          <div class="logo-text">
            <h2>Příhoda</h2>
            <h3>vítejte!</h3>
          </div>
      </div>
    <nav>
        <ul>
        <li><a href="/jpcom#about-me">o mně</a></li>
        <li><a href="/jpcom#about-me">pro vás</a></li>
        <li><a href="/jpcom/portfolio">portfolio</a></li>
        <li><a href="/jpcom/bloginfo">blog</a></li>
        <li><a href="/jpcom#contact">kontakt</a></li>
      </ul>
    </nav>
  </header>


  <content>
      <main>
