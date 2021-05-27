<?php get_header() ?>

<div class="content">
  <div class="content-container">
    <!-- закрепленный пост -->
    <div class="attached-post">
      <div class="attached-post__description">
        <h1 class="attached-post__name">Lorem ipsum for attach post...</h1>
        <span class="attached-post__subtitle">
          Description for lorem ipsum post which has attach property so it post
          placed on web site top
        </span>
      </div>
    </div>

    <!-- приветствие -->
    <?php
    // создаем фильтр
    $greating_page = get_pages([
      'meta_key'     => 'greating',
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