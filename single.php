<?php get_header(); ?>

    <main>
        
            <article>
                <div class="page-title">
                    <h1><?php echo get_the_title(get_option('page_for_posts')); ?></h1>
                </div>
            </article>
            
            <?php
            while (have_posts()) {
                the_post();
                get_template_part('content', 'single');
            }
            ?>
           
    </main>

<?php get_footer(); ?>



