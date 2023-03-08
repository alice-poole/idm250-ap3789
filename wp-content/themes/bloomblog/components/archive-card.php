<a href="<?php echo get_the_permalink(); ?>" class="group"
    data-component="archive-card">
    <section>
    <div class="content">
        <div class="featured-image rectangle wide outline">
        </div>
        <div>
            <h1><?php echo get_the_title(); ?></h1>
            <!--<h4>Categories or custom subtitle? - TODO: Replace with Custom Field</h4>-->
        </div>
        <p><?php echo get_the_excerpt(); ?></p>
    </div>
    </section>
    <div class>
        <img src="<?php echo get_the_post_thumbnail_url()?>"
            alt="Hand holding black machined steel mechanical pencil with brass tip and top."
            class="h-full w-full object-cover object-center group-hover:opacity-75">
    </div>
    <h3 class="mt-4 text-m text-gray-700">
        <?php echo get_the_title(); ?>
    </h3>

</a>