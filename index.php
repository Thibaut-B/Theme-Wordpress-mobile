<?php get_header(); ?>
<section>
<?php $my_query = new WP_Query( array( 'paged' => get_query_var('paged') ) );
 ?>
<?php while ( have_posts() ) : the_post(); ?>
<article>
  <p>
  <?php
  if ( has_post_thumbnail() ) {
   the_post_thumbnail('thumbnail');
  }
  ?>
  <p>
  <h2><?php the_title(); ?></h2>
  <p>Article écrit par <?php the_author(); ?>, le <?php the_date(); ?>, <?php comments_popup_link('Aucun commentaire', '1 commentaire', '% commentaires'); ?></p>
  <p><?php the_excerpt(); ?></p>
  <a href="<?php the_permalink(); ?>" class="more">Lire la suite</a>
</article>
<?php endwhile; // Fin de la boucle ?>
<ul id="pagination" >
  <li><?php previous_posts_link('Page précédente'); ?></li>
  <li><?php next_posts_link('Page suivante'); ?></li>
</ul>
</section>
<?php get_footer(); ?>
 
