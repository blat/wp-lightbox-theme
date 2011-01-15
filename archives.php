<?php
/*
Template Name: Page d'archives
*/
?>


<?php get_header(); ?>

    <div class="post">
    <h3>Archives par mois:</h3>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>
    </div>

    <div class="post">
    <h3>Archives par cat&eacute;gorie:</h3>
        <ul>
             <?php wp_list_categories(); ?>
        </ul>
    </div>

<?php get_footer(); ?>
