<!--
    What is this?
    To practice with unique post types and styles, this will be a silly additional section available as a stretch goal after Week 9 fixing/polishing/final steps.
    These will be short, tweet-like sentences each formatted in full-screen pages meant to resemble ornate books or classical manuscripts.
    Twits will hopefully be available as a format for quick private microblogging, in contrast to the book-like longform Posts.
-->

<?php get_header(); ?>

<h1><?php echo get_the_title(); ?></h1>
<h1><?php echo get_the_excerpt(); ?></h1>

<?php get_template_part('components/content'); ?>

<?php get_footer(); ?>



<!--show categories
<DELETETHIS?php
$currentPostId = get_the_id();
$terms = get_the_terms($currentPostId, 'category');

if ($terms) {
    foreach ($terms as $term) {
        echo "<p>{$term->name}</p>";
    }
}