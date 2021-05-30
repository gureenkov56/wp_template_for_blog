<?php get_header() ?>

<div class="content">
    <div class="content-container">
        <h1 style="text-align: center !important;"><?php single_cat_title(""); ?></h1>
        <div class="content-container__last-article">
            <?php
            // проверяем есть ли посты в глобальном запросе - переменная $wp_query
            if (have_posts()) {
                while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="last-article__a-container">
                        <div class="last-article__item" style="background-image: linear-gradient(rgb(82, 82, 82) 0%, 5%, rgba(0, 0, 0, 0) 80%), url(<?php the_post_thumbnail_url(); ?>);">

                            <div class="last-article__item__headline">
                                <?php the_title() ?>
                            </div>
                        </div>
                    </a>

                <?php endwhile; ?>
        </div>
        <div class="pagination-container">
            <?php echo paginate_links([
                    'prev_next'    => True,
                    'prev_text'    => __('«'),
                    'next_text'    => __('»'),
            ]); ?>
        </div>
    <?php
            } else {
                echo "<h2>Записей нет.</h2>";
            } ?>

    </div>
</div>

<?php get_footer() ?>