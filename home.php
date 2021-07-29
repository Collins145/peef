<?php
    get_header();
    ?>
    <section class="py-16 bg-primary">
        <div class="relative max-w-6xl mx-auto px-8 sm:px-0">
            <h2 class="text-3xl font-bold leading-none tracking-tight text-white sm:text-4xl md:mx-auto">
                Blog
            </h2>
        </div>
    </section>
    <section class="w-full py-32">
        <div class="max-w-6xl mx-auto px-6 sm:px-0">
        <?php if (have_posts()): ?>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <?php while (have_posts()): the_post();
                    $thumb = get_the_post_thumbnail_url();
                    ?>
                    <a href="<?=get_the_permalink()?>" class="block space-y-6">
                        <img class="w-full h-auto" src="<?=($thumb ? $thumb : get_template_directory_uri().'/public/images/working_station.jpg')?>" alt="<?=get_the_title()?>">
                        <h1 class="uppercase text-primary text-center font-bold"><?=get_the_title()?></h1>
                        <p class="text-lg"><?=get_the_excerpt()?></p>
                        <div class="flex justify-center mt-5 mb-5">
                            <button class="rounded-none bg-secondary hover:bg-primary text-white px-8 py-4">LEARN MORE</button>
                        </div>
                    </a>
                <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <?php get_template_part('/template-parts/pagination') ?>
            <?php endif; ?>
        </div>
    </section>
<?php
get_footer();