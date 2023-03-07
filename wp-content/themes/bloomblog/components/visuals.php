<style type="text/css">
:root {
    --color: <?php the_field('color'); ?>;
}
.background-image {
    background-image: url("<?php echo site_url();?>/dist/images/background.jpg");
    z-index: -1000;
    background-size: cover;
    background-color: var(--background);
    width: 100%;
    height: 100vh;
    position: fixed;
    left: 0;
    top: 0;
}

.featured-image {
    background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');
    background-color: var(--background);
    background-size: cover;
    width: 100%;
    height: 100%;
}
</style>