<?php get_header(); ?>

<main>
<div class="main-content">
    <h1>Search Results</h1>
    <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        } else {
            echo '<p>No results found.</p>';
        }
    ?>
</div>
</main>

<?php get_footer(); ?>