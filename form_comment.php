<?php //Si les commentaire son activé on affiche le formulaire
if ('open' == $post->comment_status) :  ?>
<h3 id="respond">Laissez un commentaire</h3>
  <?php //S'il est obligé d'avoir un compte et que vous n'êtes pas connecté, on affiche un lien vers le formulaire de connexion
  if ( get_option('comment_registration') && !$user_ID ) : ?>
  <p>Vous devez être <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">connecté</a> pour laisser un commentaire.</p>
  <?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
  <?php //Si vous êtes connecté 
  if ( $user_ID ) : ?>
  <p>Connecter en tant que <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout">Déconnection</a></p>
  <?php //Sinon on affiche les champs d'itentifications
  else : ?>
  <p>
    <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="40" tabindex="1" placeholder="Votre nom" />
    <label for="author"><small>Nom <?php if ($req) echo "(requis)"; ?></small></label>
  </p>
  <p>
    <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="40" tabindex="2" placeholder="exemple@mail.com" />
    <label for="email"><small>E-mail <?php if ($req) echo "(requis)"; ?></small></label>
  </p>
  <p>
    <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="40" tabindex="3" placeholder="http://" />
    <label for="url"><small>Site Web</small></label>
  </p>
  <?php endif; ?>
  <p>
    <textarea name="comment" id="comment" cols="60" rows="10" tabindex="4" placeholder="Votre commentaire">
    </textarea>
  </p>
  <p>
    <input name="submit" type="submit" id="submit" tabindex="5" value="Envoyer" />
    <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
  </p>

</form>

<?php endif; ?>

<?php endif;?>