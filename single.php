<?php get_header() ?>

<div class="content">
    <div class="content-container">
        <?php if (has_post_thumbnail($post_id)) : //проверяем есть ли у поста миниатюра 
        ?>
            <div class="main-image" style="background-image: url(' <?php echo get_the_post_thumbnail_url(); ?> ');"></div>
        <?php endif ?>

        <div class="post-container">
            <h1><?php the_title() ?></h1>

            <?php the_content() ?>
        </div>
        <div class="content-container__related-post">Relate posts</div>
    </div>
</div>

<?php get_footer() ?>