<?php
// 1. wp_nav_menu(['theme_location' => 'primary-menu']); @link https://developer.wordpress.org/reference/functions/wp_nav_menu/
// 2. get_theme_menu() which is a custom function I made to get the menu items. It exist in our functions.php file. You can then loop through it and write your own markup
$menu = get_theme_menu('primary-menu');
?>
<h3>Table of Contents</h3>
<?php foreach ($menu as $item) {
          echo "<a href='{$item->url}'>{$item->title}</a><br>";
      }  ?>
