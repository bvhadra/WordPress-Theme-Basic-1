<?php get_header(); ?>

    <main>

            <?php
            while (have_posts()) {
                the_post();
                get_template_part('content', 'page');
            }
            ?>
  
    </main>
      
<?php get_footer(); ?>
