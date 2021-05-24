<?php get_header() ?>

<div class="content">
  <div class="content-container">
    <div class="attached-post">
      <div class="attached-post__description">
        <h1 class="attached-post__name">
          Lorem ipsum for attach post...
        </h1>
        <span class="attached-post__subtitle">
          Description for lorem ipsum post which has attach property so it
          post placed on web site top
        </span>
      </div>
    </div>

    <div class="content-container__about-me">
      <div class="about-me__photo-container">
        <div class="about-me__photo"></div>
      </div>
      <div class="about-me__text">
        <div class="about-me__headline">Hi, my name is Nik</div>
        <div class="about-me__subtitle">
          It's my blog about my lorem ipsum life. Check my news and
          subscribe....
        </div>
      </div>
    </div>

    <div class="content-container__last-article">

      <?php if (have_posts()){
         while (have_posts()){
          the_post(); ?>
          <!-- Цикл WordPress -->
          <h2><?php the_title() ?></h2>
        <?php }} else { ?>
        <p>Записей нет.</p>
      <?php } ?>

      <div class="last-article__item1">
        <div class="last-article__item__headline">
          Napo mest for story life super vision
        </div>
      </div>
      <div class="last-article__item2">
        <div class="last-article__item__headline">
          Napo mest for story life super vision
        </div>
      </div>
      <div class="last-article__item3">
        <div class="last-article__item__headline">
          Napo mest for story life super vision
        </div>
      </div>
      <div class="last-article__item4">
        <div class="last-article__item__headline">
          Napo mest for story life super vision
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>