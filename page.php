<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="post" id="post-<?php the_ID(); ?>">
        <h2><?php the_title(); ?></h2>
        <div class="post-content">
            <?php the_content('<p class="read-it">Lire la suite de cette page &raquo;</p>'); ?>

            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
        </div>
        <p class="post-meta metadata">
            Publi&eacute; le <?php the_time('d F Y') ?> &agrave; <?php the_time('h:i') ?> <!-- par <?php the_author() ?> -->
            <?php edit_post_link('Editer', ' - ', ''); ?>
        </p>
    </div>
    <?php endwhile; endif; ?>

<?php get_footer(); ?>
