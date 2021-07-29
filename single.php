<?php
/**
 * The template for displaying all single posts and attachments
 *
 */

get_header(); ?>
<?php
// Start the loop.
while ( have_posts() ) : the_post();
    ?>
    <section class="py-16 bg-primary">
        <div class="relative max-w-6xl mx-auto px-8 sm:px-0">
            <h2 class="text-3xl font-bold leading-none tracking-tight text-white sm:text-4xl md:mx-auto">
                <?=get_the_title()?>
            </h2>
        </div>
    </section>
    <section class="py-16 relative">
        <div class="relative max-w-6xl mx-auto px-8 sm:px-0">
            <?php if (get_the_post_thumbnail_url()): ?>
                <div class="mb-4 transition-shadow duration-300 lg:mb-6">
                    <img class="object-cover w-full h-56 rounded shadow-lg sm:h-64 md:h-80 lg:h-96" src="<?=get_the_post_thumbnail_url()?>" alt="<?=get_the_title()?>">
                </div>
                <?php endif; ?>
                <div class="prose text-left text-gray-900">
                    <?php the_content() ?>
                </div>

        </div><!-- .site-main -->
    </section><!-- .content-area -->
<?php

    // If comments are open or we have at least one comment, load up the comment template.
//                if ( comments_open() || get_comments_number() ) :
//                    comments_template();
//                endif;
    // End the loop.
endwhile;
?>
<?php get_footer(); ?>