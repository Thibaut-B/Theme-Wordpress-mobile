<footer>
  <ul id="widget">
    <?php dynamic_sidebar(); ?>
  </ul>
  <?php 
  wp_nav_menu( array( 
    'theme_location' => 'footer_menu', 
    'container' => 'nav' ) ); 
  ?>
  <p>Copyright 2012</p>
</footer>
</body>
</html>