<style type="text/css">
/*:root {
    --color: ?php the_field('color'); ?>;
}*/
.background-image {
    background-image: url('https://feybloom.com/idm250/wp-content/uploads/2023/03/background.jpg');
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
    width: auto;
    height: auto;
}
</style>