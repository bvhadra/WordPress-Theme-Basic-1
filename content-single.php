<article>
    <?php if (has_post_thumbnail()) { ?>
        <div class="post-thumbnail">
            <?php the_post_thumbnail('full'); ?>
        </div>
    <?php } ?>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
</article>

