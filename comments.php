<?php if ($comments) : ?>
<h3><?php comments_number('Pas de commentaire', 'Commentaire :', 'Commentaires' );?></h3>
  <ol>
    <?php foreach ($comments as $comment) : ?>
	  <li>
        <strong><?php comment_author_link() ?></strong><br/> 
        Le <?php comment_date('j M Y') ?> à <?php comment_time() ?>
        <?php comment_text() ?>
	  </li>
    <?php endforeach; ?>
	</ol>
<?php endif; ?>

<?php include(TEMPLATEPATH.'/form_comment.php'); ?>