<?php
/*
Template Name: Contact Page
*/
?>
<?php get_header(); ?>

<main>

    <?php get_template_part('content', 'contact'); ?>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <div class="page-content">
                    <?php
                    while (have_posts()) {
                        the_post();
                        the_content();
                    }
                    ?>
                </div>
            </div>

            <div class="col-md-6">
                <div class="contact-form">
                    <h2 class="mb-4">Contact Form</h2>
                    <?php echo do_shortcode('[contact-form-7 id="123" title="Contact Form"]'); ?>
                </div>
            </div>
        </div>
    </div>

</main>

 <?php get_footer(); ?>