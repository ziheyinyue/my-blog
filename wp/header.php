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
	<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" rel="icon" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_deregister_script( 'jquery' ); wp_head(); ?>
</head>

<body id="pagetop">
   <?php get_template_part( 'template-parts/header' ); ?>
    
