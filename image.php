<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div id="navlinks">
            <div class="prev"><?php previous_post_link('&laquo; %link') ?></div>
            <div class="next"><?php next_post_link('%link &raquo;') ?></div>
        </div>

        <div class="post" id="post-<?php the_ID(); ?>">
            <h2 class="post-title"><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
            <div class="post-content">
                <p id="attachments"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
                <div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>
                <?php the_content('<p class="read-it">Lire la suite de cet article &raquo;</p>'); ?>
            </div>
            <p class="post-meta metadata">
                Publi&eacute; le <?php the_time('d F Y') ?> &agrave; <?php the_time('h:i') ?> <!-- par <?php the_author() ?> --> dans <?php the_category(', ') ?>
                <?php the_tags(' - Tags : ', ', ', ''); ?>
                - <?php comments_popup_link('Aucun commentaire', 'Un commentaire', '% commentaires' , 'comment-count'); ?>
                <?php edit_post_link('Editer', ' - ', ''); ?>
            </p>
        </div>

    <?php comments_template(); ?>

    <?php endif; ?>

<?php get_footer(); ?>
