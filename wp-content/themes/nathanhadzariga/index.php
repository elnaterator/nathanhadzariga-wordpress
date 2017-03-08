<?php get_header(); ?>

<div class="content">
<div class="container">
  <?php
  query_posts(array('showposts' => -1, 'post_type' => 'page', 'orderby' => 'menu_order'));
  if( have_posts() ):
    while( have_posts() ): the_post(); ?>
    <div>
      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
      <p><?php  ?></p>
    </div>
    <?php
    endwhile;
  endif;
  wp_reset_query();
  ?>

</div>
</div>

<?php get_footer(); ?>
