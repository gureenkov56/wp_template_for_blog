<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog name</title>
    <?php wp_head(); ?>
</head>

<body class="body">
    <div class="main-container">
        <header class="header" <?php if (is_user_logged_in()) echo 'style="height: 90px !important"' ?>>
            <div class="header-container" <?php if (is_user_logged_in()) echo 'style="padding-top: 40px !important"' ?>>
                <div class="header__link">
                    <?php wp_nav_menu([
                        'theme_location'  => 'top-left-menu',
                        'menu'            => 'header-left',
                        'container'       => false,
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'menu',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ]) ?>


                </div>
                <div class="header__logo logo"><a href="/"><?php bloginfo('name'); ?></a></div>
                <?php if (is_active_sidebar('social_icons')) : ?>
                    <div class="header__social-icon">

                        <?php dynamic_sidebar('social_icons'); ?>

                    </div>

                <?php endif; ?>
                <div class="header__burger-menu">
                    <span></span>
                </div>
                <nav class="header__mobile-menu">
                    <?php wp_nav_menu([
                        'theme_location'  => 'Mobile',
                        'menu'            => 'Mobile menu',
                        'container'       => false,
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class'      => 'mobile-menu__ul',
                        'menu_id'         => '',
                        'echo'            => true,
                        'fallback_cb'     => 'wp_page_menu',
                        'before'          => '',
                        'after'           => '',
                        'link_before'     => '',
                        'link_after'      => '',
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                        'walker'          => '',
                    ]) ?>
                </nav>
            </div>

        </header>