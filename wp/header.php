<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package company
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no,address=no,email=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_deregister_script( 'jquery' ); wp_head(); ?>
</head>

<body id="pagetop">
	<header class="p-header">
       <div class="l-inner p-header__inner">
        <nav class="l-inner p-header__nav">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="p-header__nav__item">HOME</a>
            <a href="<?php echo home_url();?>/about/" class="p-header__nav__item">ABOUT</a>
            <a href="<?php echo home_url();?>/portfolio/" class="p-header__nav__item">PORTFOLIO</a>
            <a href="<?php echo home_url();?>/contact/" class="p-header__nav__item">CONTACT</a>
        </nav>
        </div>
    </header>