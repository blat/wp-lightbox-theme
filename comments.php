<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */

// Do not delete these lines
	if (isset($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');
	
	if ( post_password_required() ) { ?>
		<p class="nocomments">Ce billet est prot&eacute;g&eacute;. Entrez le mot de passe pour voir les commentaires.</p> 
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<div id="comments" class="section">
<?php if ( have_comments() ) : ?>
	<h3>Commentaires</h3>

	<ol>
	<?php wp_list_comments('avatar_size=16');?>
	</ol>

	<div class="navigation">
		<div class="alignleft"><?php previous_comments_link() ?></div>
		<div class="alignright"><?php next_comments_link() ?></div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Les commentaires sont d&eacute;sactiv&eacute;s sur ce billet.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<div id="respond" class="section">

<h3><?php comment_form_title('Ajouter un commentaire', 'R&eacute;pondre &agrave; %s'); ?></h3>

<div id="cancel-comment-reply"> 
	<small><?php cancel_comment_reply_link() ?></small>
</div> 

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php printf('Vous devez vous <a href="%s">connecter</a> pour poster un commentaire.', wp_login_url( get_permalink() )); ?></p>
<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment-form">

<?php if ( is_user_logged_in() ) : ?>

<p class="logged"><?php printf('Connect&eacute; en tant que <a href="%1$s">%2$s</a> - ', get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="D&eacute;connexion">D&eacute;connexion</a></p>

<?php else : ?>

<label for="author">Nom <?php if ($req) echo "(requis)"; ?> :</label></p>
<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />

<label for="email">Email (ne sera pas publi&eacute;) <?php if ($req) echo "(requis)"; ?> :</label></p>
<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />

<label for="url">Site web :</label></p>
<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />

<?php endif; ?>

<label for="comment">Commentaire :</label></p>
<p><textarea name="comment" id="comment" style="width: 90%" rows="10" tabindex="4"></textarea>

<p class="form-help"><small>Vous pouvez utiliser ces tags <strong>XHTML:</strong> <?php echo allowed_tags(); ?></small></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Envoyer le commentaire &raquo;" />
<?php comment_id_fields(); ?> 
</p>

<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>
</div>

<?php endif; // if you delete this the sky will fall on your head ?>
</div>
