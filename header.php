<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" /> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Exo+2&family=Montserrat&display=swap" rel="stylesheet" /> -->
    <title>Blog name</title>
    <?php wp_head(); ?>
</head>

<body class="body">
    <div class="main-container">
        <header class="header">
            <div class="header-container">
                <div class="header__burger-menu">
                    <img src="/image/header/burger-menu.png" alt="" />
                </div>
                <div class="header__link">
                    <ul>
                        <li>News</li>
                        <li>Travel</li>
                        <li>Advance</li>
                    </ul>
                </div>
                <div class="header__logo logo"><a href="/">Blog Name</a></div>
                <div class="header__social-icon">
                    <img src="<?php echo get_template_directory_uri() ?>/image/header/facebook.png" alt="" />
                    <img src="<?php echo get_template_directory_uri() ?>/image/header/v.png" alt="" />
                    <img src="<?php echo get_template_directory_uri() ?>/image/header/soundcloud.png" alt="" />
                    <img src="<?php echo get_template_directory_uri() ?>/image/header/in.png" alt="" />
                </div>
            </div>
        </header>