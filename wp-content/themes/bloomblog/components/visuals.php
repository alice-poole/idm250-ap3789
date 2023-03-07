<style type="text/css">
/*:root {
    --color: ?php the_field('color'); ?>;
}*/
.background-image {
    background-image: url("<?php bloginfo('template_directory'); ?> /dist/images/background.jpg");
    z-index: -1000;
    background-size: cover;
    background-color: var(--background);
    width: 100%;
    height: auto;
}

.featured-image {
    background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');
    background-color: var(--background);
    background-size: cover;
    width: 100%;
    height: 100%;
}
</style>