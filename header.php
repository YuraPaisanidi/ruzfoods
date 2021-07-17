<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ruzfoods
 */

?>
<!DOCTYPE html>
<html lang="ru">

	<head>

		<meta charset="utf-8">
		<title>Ruzfood</title>
		<meta name="viewport" content="width=device-width">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
		<meta property="og:image" content="img/preview.jpg">

	</head>

	<?php wp_head(); ?>

	<body>

	<?php get_template_part( 'parts/header' ); ?>