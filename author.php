<?php get_header() ?>

<div class="content">
    <div class="content-container">
        <!-- приветствие -->
        <?php
        // создаем фильтр
        $greating_page = get_pages([
            'meta_key'     => 'author-page',
            'meta_value'   => 'yes',
            'number'       => 1,
            'post_type'    => 'page',
            'post_status'  => 'publish',
        ]);
        // выводим нужную информацию
        foreach ($greating_page as $post) {
            setup_postdata($post); ?>
            <!-- вывод приветствия -->
            <div class="content-container__about-me">
                <div class="about-me__photo-container">
                    <div class="about-me__photo" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                </div>
                <div class="about-me__text">
                    <div class="about-me__headline"><?php the_title(); ?></div>
                    <div class="about-me__subtitle"> <?php the_content(); ?> </div>
                </div>
            </div>
        <?php
        }
        wp_reset_postdata(); ?>
    </div>
</div>

<?php get_footer() ?>
</div>