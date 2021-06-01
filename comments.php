
<?php 
comment_form();
?>


<?php 
if($comments){?>
    <ul class="commentlist">
        <?php wp_list_comments([
            'style' => 'ul';
        ]); ?>
    </ul>
    <?php
}
?>