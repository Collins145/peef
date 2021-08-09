<?php get_header(); ?>
<section class="bg-cover bg-no-repeat bg-center bg-fixed" style="background-image: url('<?=get_theme_mod('home_bg', get_template_directory_uri(). '/public/images/home-bg.jpg')?>');">
    <div class="w-full sm:max-w-5xl mx-auto flex items-center justify-center px-8 sm:px-0" style="height: 90vh;">
        <div class="bg-white p-6 sm:p-20 space-y-8">
            <h3 class="text-center"><?=get_theme_mod('home_section_title', 'Welcome to PEEF Online')?></h3>
            <h1 class="text-lg sm:text-3xl text-center text-primary"><?=get_theme_mod('home_section_description', 'PEEF Online is a great opportunity for you to explore the world of technology')?></h1>
            <div class="flex justify-center">
                <a href="<?=get_theme_mod('home_section_cta_link', '#services')?>" class="text-sm sm:text-xl rounded-none px-4 sm:px-8 py-4 bg-secondary text-white font-bold uppercase"><?=get_theme_mod('home_section_cta_label', 'See what we can do for you')?></a>
            </div>
        </div>
    </div>
</section>
<section id="services" class="bg-gray-100">
    <?php
    $services = new WP_Query( array(
        'numberposts' => 3,
        'post_type' => 'services',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    ) );
    ?>
    <div class="max-w-6xl mx-auto py-16 space-y-16 px-8 sm:px-0">
        <h2 class="text-3xl text-center text-primary font-bold">Our Services</h2>
        <div class="flex flex-wrap justify-center space-y-3 sm:space-y-0 sm:space-x-3">
            <?php while ($services->have_posts()): $services->the_post();
                $thumb = get_the_post_thumbnail_url();
                ?>
                    <div class="w-full sm:w-1/3 bg-white shadow-xl">
                            <a href="<?=get_the_permalink()?>" class="block">
                                <img src="<?=($thumb ? $thumb : get_template_directory_uri().'/public/images/sample_post_with_blockquote002.jpg')?>" alt="<?=get_the_title()?>">
                                <div class="p-6">
                                    <h1 class="text-xl font-medium text-primary hover:text-secondary"><?=get_the_title()?></h1>
                                </div>
                            </a>
                    </div>
            <?php endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <div class="text-center">
            <a href="<?=site_url('/services')?>" class="inline-block bg-secondary text-gray-100 rounded-full px-8 py-3">See all Services&nbsp;→</a>
        </div>
    </div>
</section>
<section class="bg-primary">
    <div class="max-w-4xl mx-auto py-16 px-8 sm:px-0 space-y-8 text-center">
        <p class="text-center text-left content-center text-white text-3xl px-6">Ready to get started or have any questions?</p>
        <a href="#contact" class="inline-block bg-secondary text-gray-100 rounded-full px-8 py-3">Get in touch&nbsp;→</a>
    </div>
</section>
<section id="blog">
    <?php
    $posts = new WP_Query( array(
        'numberposts' => 3,
        'post_type' => 'post',
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
    ) );
    if ($posts->have_posts()):
    ?>
    <div class="max-w-6xl mx-auto py-16 space-y-16 px-8 sm:px-0">
        <h2 class="text-3xl text-center text-primary font-bold">The latest from our Blog</h2>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
            <?php while ($posts->have_posts()): $posts->the_post();
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
                endif;
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
