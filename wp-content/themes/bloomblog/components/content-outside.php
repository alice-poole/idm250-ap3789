
  <div class="content">
    <div class="content-blocks content-outside">
      <?php
        if (have_posts()) {
          // Load posts loop.
          while (have_posts()) {
            the_post();
            the_content();
          }
        } 
        else {
          echo 'no posts found';
        }
      ?>
    </div>
  </div>
</section>
