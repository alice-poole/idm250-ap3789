<?php get_header('outside'); ?>
<h1><?php echo get_the_title(); ?></h1>

<?php
// check if the post or page has a Featured Image assigned to it.
if (has_post_thumbnail()) {
    the_post_thumbnail();
}
?>
<?php get_template_part('components/content'); ?>

<?php get_template_part('components/hero/home'); ?>
<?php get_template_part('components/list/pages'); ?>
<?php get_template_part('components/about'); ?>

<?php get_footer('outside'); ?>