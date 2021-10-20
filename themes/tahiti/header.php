<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tahiti
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="header">
    <div class="container header__row">
      <div class="header__logo-box">
        <a href="<?= home_url(); ?>" class='header__logo-link'>
          <?= file_get_contents( get_attached_file( get_field( 'logo', 'option' ) ) ); ?>
        </a>
      </div>

      <nav class='header__nav header-menu'>
        <?php 
					wp_nav_menu([
						'menu' => 'Header menu',
						'container' => '',
						'items_wrap' => '<ul class="header-menu__list">%3$s</ul>'
					])
				?>
      </nav>

      <div class="header__burger">
        <div class="header__burger-line header__burger-line_first"></div>
        <div class="header__burger-line header__burger-line_middle"></div>
        <div class="header__burger-line header__burger-line_last"></div>
      </div>
    </div>
  </header>