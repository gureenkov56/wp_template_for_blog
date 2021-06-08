<?php get_header() ?>

<div class="content" <?php if (is_user_logged_in()) echo 'style="margin-top: 2vh !important"' ?>>
    <div class="content-container">
        <h1>Oops, it seems there is no such page...</h1>
        <p>But you can find a lot of interesting things by going to the <a href="/index.php">home page</a> of the site.</p>
        <p><a href="/index.php">Go to home page</a></p>
    </div>
</div>

<?php get_footer() ?>