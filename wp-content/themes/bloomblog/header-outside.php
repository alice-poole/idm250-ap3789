<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo get_the_title(); ?></title>
  <?php // https://developer.wordpress.org/reference/functions/wp_head/;?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php
  // @link https://developer.wordpress.org/reference/functions/wp_body_open/
  // Fires the wp_body_open action.
  wp_body_open();
  ?>
  <?php get_template_part('components/visuals'); ?>
  <section class="background-image full">
    <header>
        <nav class="nav-outside">
            <a href='<?php echo home_url();?>'>
              <?php echo get_custom_logo(); ?>
            </a> 
        </nav>
    </header>