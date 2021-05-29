<?php get_header() ?>

<div class="content">
  <div class="content-container">
    <!-- закрепленный пост -->
    <?php
    $params = array(
      'posts_per_page' => -1, // нужно для отображения всех постов, без разделения по страницам
      'post__in'  => get_option('sticky_posts'), // например Array ( [0] => 54 [1] => 1 )
    );

    $q = new WP_Query($params);

    while ($q->have_posts()) : $q->the_post();
      // HTML-шаблон вывода поста
    ?>
      <a href="<?php echo get_permalink(); ?>">
        <div class="attached-post" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
          <div class="attached-post__description">
            <h1 class="attached-post__name"><?php echo the_title(); ?></h1>
            <span class="attached-post__subtitle"><?php echo the_excerpt(); ?></span>
          </div>
        </div>
      </a>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>

    <!-- приветствие -->
    <?php
    // создаем фильтр
    $greating_page = get_pages([
      'meta_key'     => 'greating-on-index',
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
          <div class="about-me__subtitle"> <?php the_content(); ?> <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>">Read more...</a></div>

        </div>
      </div>
    <?php
    }
    wp_reset_postdata(); ?>


    <!-- последние посты -->
    <div class="content-container__last-article">
      <?php
      $posts = get_posts([
        'numberposts' => 4,
      ]);
      foreach ($posts as $post) { ?>
        <a href="<?php echo $post->guid ?>" class="last-article__a-container">
          <div class="last-article__item" style="background-image: linear-gradient(rgb(82, 82, 82) 0%, 5%, rgba(0, 0, 0, 0) 80%), url(<?php the_post_thumbnail_url(); ?>);">


            <!-- Цикл WordPress -->
            <div class="last-article__item__headline">
              <?php echo $post->post_title; ?>
            </div>
          </div>
        </a>
      <?php } ?>
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</div>

<?php get_footer() ?>
</div>