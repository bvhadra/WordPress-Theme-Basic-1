<?php get_header(); ?>

<main>


    <?php get_template_part('content', 'index'); ?>

    <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>

                <article class="blog-post">
                    <div class="post-thumbnail">
                        <?php if (has_post_thumbnail()) { ?>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </a>
                        <?php } ?>
                    </div>
                    <div class="post-content">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>">Read more</a>
                    </div>
                </article>

                <?php
            }
?>

<?php
            the_posts_pagination(array(
                'mid_size' => 1,
                'prev_text' => __('Previous', 'basic-theme'),
                'next_text' => __('Next', 'basic-theme'),
            ));
?>

<?php

        } else {
            echo '<p>No content found.</p>';
        }
    ?>

</main>

<?php get_footer(); ?>