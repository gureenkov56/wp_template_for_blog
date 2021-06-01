<?php get_header() ?>

<div class="content">
    <div class="content-container">
        <?php if (has_post_thumbnail($post_id)) : //проверяем есть ли у поста миниатюра 
        ?>
            <div class="main-image" style="background-image: url(' <?php echo get_the_post_thumbnail_url(); ?> ');"></div>
        <?php endif ?>

        <div class="post-container">
            <h1><?php the_title() ?></h1>

            <?php the_content();

            wp_reset_postdata();
            comments_template();
            ?>

        </div>

        <?php
        //получаю ID привязаных постов из мета-значения
        $relatedPostsID = get_post_meta($post->ID, 'related-posts', true);
        if ($relatedPostsID) { ?>
            <div class="related-posts-title">
                Recomended posts
            </div>
            <div class="content-container__related-post">
                <?
                // параметры по умолчанию
                $posts = get_posts(array(
                    'numberposts' => -1,
                    'orderby'     => 'post__in',
                    'order'       => 'DESC',
                    'include'     => $relatedPostsID,
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ));

                foreach ($posts as $post) {
                    setup_postdata($post); ?>
                    <a href="<?php the_permalink() ?>" class="related-post__a-container">
                        <div class="related-post__item" style="background-image: linear-gradient(rgb(82, 82, 82) 0%, 5%, rgba(0, 0, 0, 0) 80%), url(<?php the_post_thumbnail_url(); ?>);">
                            <div class="related-post__item__headline"><?php the_title() ?></div>
                        </div>
                    </a>
                <?php
                }

                wp_reset_postdata(); // сброс
                ?>
            </div>
        <?php
        }
        ?>

    </div>
</div>

<?php get_footer() ?>