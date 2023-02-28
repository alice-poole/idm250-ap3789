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
  <nav>
    <div class="logo">
    <a href="<?php home_url();?>">
        <?php the_custom_logo();?>
        
    </a>
    </div>
    <div class="menubar">
    <?php wp_nav_menu(['theme_location' => 'primary-menu']); ?>
    <!--a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    </a-->
</nav>
</div>