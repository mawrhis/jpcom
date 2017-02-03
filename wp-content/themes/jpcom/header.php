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
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
<div id="wrapper_header"><!--wrapper-->
    <div id="header">
        <div id="logo">
          <a href="<?php $url = home_url();echo esc_url( $url );?>">
              <div id="name">Jirka Příhoda</div>
              <div id="job">internety</div>
          </a>
        </div>
    </div>


<div id="menu"><div id="pages"><?php wp_nav_menu(); ?></div></div>
</div ><!--wrapper_header-->
<div id="main"><!--main-->
