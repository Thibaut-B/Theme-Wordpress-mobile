<?php get_header(); ?>
<section>
<?php while ( have_posts() ) : the_post(); ?>
<article>
  <h2><?php the_title(); ?></h2>
  <p>Article écrit par <?php the_author(); ?>, le <?php the_date(); ?></p>
  <?php
  if ( has_post_thumbnail() ) {
   the_post_thumbnail('thumbnail');
  }
  ?>
  <?php the_content(); ?>
</article>
<?php endwhile; ?>
<section>
  <?php comments_template(); ?>
</section>
</section>
<?php get_footer(); ?>
 
